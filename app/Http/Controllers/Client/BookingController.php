<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Models\Payment;
use App\Models\rooms;
use App\Models\type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $checkInDate = Carbon::parse($request->check_in_date);
        $checkoutDate = Carbon::parse($request->check_out_date);
        $user = Auth::id(); // Lấy ID người dùng hiện tại

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
                    $days = $checkInDate->diffInDays($checkoutDate);
                    $totalPrice = $days * $room->price;

                    // Thêm booking vào cơ sở dữ liệu
                    DB::table('booking')->insert([
                        'user_id' => $user,
                        'rooms_id' => $room->id,
                        'check_in_date' => $request->check_in_date,
                        'check_out_date' => $request->check_out_date,
                        'adults' => $request->adults,
                        'children' => $request->children,
                        'description' => $request->description,
                        'total_price' => $totalPrice,
                        'booking_date' => now(),
                        'payment_status' => 'unpaid',
                    ]);

                    // Cập nhật trạng thái phòng
                    $room->status = 'occupied';
                    $room->save();

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
