<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Mail\ThankYou;
use App\Models\booking;
use App\Models\Booking_server;
use App\Models\Payment;
use App\Models\rooms;
use App\Models\service;
use App\Models\type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use function PHPSTORM_META\type;

class BookingController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $cartRoom = booking::with('room')
            ->where('user_id', $user->id)
            ->whereIn('payment_status', ['unpaid', 'calculating'])
            ->get();
        $paid  = booking::with('room')->where('user_id', $user->id)->where('payment_status', 'paid')->get();
        //    dd($cartRoom);
        $total2 = 0;
        foreach ($cartRoom as $ac) {
            $total2 += $ac->total_price;
        }
        $total = 0;
        foreach ($cartRoom as $ac) {
            if ($ac->payment_status == 'calculating') {
                $total += $ac->total_price;
            }
        }

        return view('client.booking.index', compact('user', 'paid', 'cartRoom', 'total', 'total2'));
    }
    public function updateSttPayment($id)
    {
        // Kiểm tra xem đơn đặt phòng có tồn tại không
        $cartRoom = booking::find($id);
        if (!$cartRoom) {
            return response()->json(['error' => 'Đơn đặt phòng không tồn tại'], 404);
        }
        // Cập nhật trạng thái thanh toán
        $newPaymentStatus = $cartRoom->payment_status == 'calculating' ? 'unpaid' : 'calculating';
        $cartRoom->update(['payment_status' => $newPaymentStatus]);
        $message = $newPaymentStatus == 'calculating' ? 'Chuyển qua thanh toán' : 'Loại bỏ';
        return response()->json(['success' => $message]);
    }

    //

    public function addcart(Request $request, $id)
    {
        $today = Carbon::now();
        $checkInDate = Carbon::parse($request->check_in_date);
        $checkoutDate = Carbon::parse($request->check_out_date);
        $user = Auth::user(); // Lấy ID người dùng hiện tại

        // Tìm phòng theo ID
        $room = rooms::find($id);

        if (!$room) {
            return redirect()->back()->with('failed', 'Phòng không tồn tại');
        }

        // Kiểm tra xem phòng đã có trong giỏ hàng của người dùng chưa
        $existingBooking = DB::table('booking')
            ->where('user_id', $user)
            ->where('rooms_id', $room->id)
            ->where('check_out_date', '>', now())
            ->first();

        if ($existingBooking) {
            return redirect()->back()->with('failed', 'Phòng đã tồn tại trong giỏ hàng');
        }

        // Kiểm tra tính hợp lệ của ngày check-in và check-out
        if ($checkInDate->isToday() || $checkInDate->isFuture()) {
            if ($checkoutDate > $checkInDate) {
                if (($request->adults + $request->children) <= $room->capacity) {
                    // Tính số ngày và tổng tiền
                    $days = $checkInDate->diffInDays($checkoutDate); //diffInDays: tính số ngày chênh lệch 
                    $totalPrice = $days * $room->price;

                    // Tính tổng giá dịch vụ
                    $serviceTotalPrice = 0;
                    if ($request->has('services')) {
                        $services = service::whereIn('id', $request->services)->get();
                        foreach ($services as $service) {
                            $serviceTotalPrice += $service->price;
                        }
                    }
                    // Tổng tiền bao gồm cả giá phòng và giá dịch vụ
                    $totalPrice += $serviceTotalPrice;

                    // Tính ngày nhắc nhở (một ngày trước ngày trả phòng)
                    $reminderDate = $checkoutDate->subDay()->toDateString();

                    // Thêm booking vào cơ sở dữ liệu
                    $bookingId = DB::table('booking')->insertGetId([
                        'user_id' => $user->id,
                        'rooms_id' => $room->id,
                        'check_in_date' => $request->check_in_date,
                        'check_out_date' => $request->check_out_date,
                        'check_out_date_reminder' => $reminderDate,
                        'adults' => $request->adults,
                        'children' => $request->children,
                        'description' => $request->description,
                        'total_price' => $totalPrice,
                        'booking_date' => now(),
                        'payment_status' => 'unpaid',
                    ]);

                    // Thêm các dịch vụ vào bảng pivot
                    if ($request->has('services')) {
                        $booking = Booking::find($bookingId);
                        $booking->services()->attach($request->services);
                    }
                    // Cập nhật trạng thái phòng
                    $room->status = 'occupied';
                    $room->save();
                    Mail::to($user->email)->send(new ThankYou($today, $days, $user, $room, $totalPrice, $checkInDate, $checkoutDate));
                    return redirect()->back()->with('success', 'Đặt phòng thành công');
                } else {
                    return redirect()->back()->with('failed', 'Quá số lượng người ở');
                }
            } else {
                return redirect()->back()->with('failed', 'Ngày check-out phải lớn hơn ngày check-in');
            }
        } else {
            return redirect()->back()->with('failed', 'Ngày check-in phải là hôm nay hoặc sau hôm nay');
        }
    }
}
