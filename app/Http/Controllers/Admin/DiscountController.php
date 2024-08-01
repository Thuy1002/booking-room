<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\rooms;
use App\Models\User;
use App\Notifications\DiscountCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class DiscountController extends Controller
{
  //

  public function index()
  {
    $user = Auth::user();
    $discount = Discount::orderBy('created_at', 'desc')->paginate(4);
    return view('Admin.discount.list', compact('user', 'discount'));
  }

  public function add()
  {
    $user = Auth::user();
    $room = rooms::all();
    return view('Admin.discount.add', compact('user','room'));
  }
  public function Changestt($id)
  {
    $cate = Discount::find($id);
    // dd($cate);
    if ($cate->status == 1) {
      $cate->update(['status' => 2]);
    } elseif ($cate->status == 2) {
      $cate->update(['status' => 1]);
    }
    return response()->json(['success' => 'Cập nhật trạng thái thành công']);
  }


  public function store(Request $request)
  {
    $req = $request->only([
      'title','code', 'start_date', 'amount', 'end_date', 'description'
    ]);

    $currentDate = Carbon::now(); // Lấy thời gian hiện tại

    // Chuyển đổi ngày sang đối tượng Carbon (nếu cần kiểm tra hoặc định dạng)
    $startDate = Carbon::parse($req['start_date']);
    $endDate = Carbon::parse($req['end_date']);

    if ($startDate->greaterThanOrEqualTo($currentDate)) {
      if ($endDate->greaterThanOrEqualTo($startDate)) {
        $discount = Discount::create($req);
          $room = rooms::whereIn('id',$request->room_id)->get(); //chọn các phòng để áp dụng khuyến mại
          foreach($room as $item){
            $priceOld  = $item->price * $discount->amount/100;
           $pricePromotional =  $item->price-$priceOld;
           $item ->promotional_price  =  $pricePromotional;
           $item ->save();
          }
        //  dd($room);
        // Gửi thông báo
        $user = User::where('role', 'user')->get(); // Lấy người dùng hiện tại
        Notification::send($user, new DiscountCreated($discount));

        return redirect()->route('admin.discount.list')->with('success', 'Thêm mới thành công');
      } else {
        return redirect()->back()->with('failed', 'Ngày kết thúc phải lớn hơn hoặc bằng ngày bắt đầu');
      }
    } else {
      return redirect()->back()->with('failed', 'Ngày bắt đầu phải lớn hơn hoặc bằng ngày hiện tại');
    }
  }

  public function update(Request $request, $id)
  {
    $user = Auth::user();
    $discount = Discount::find($id);
    if ($request->isMethod('POST')) {
      $req = $request->only([
       'title', 'code', 'start_date', 'end_date', 'amount', 'description'
      ]);
      $currentDate = Carbon::now();
      $start_date = Carbon::parse($req['start_date']);
      $end_date = Carbon::parse($req['end_date']);
      //  dd($start_date,$end_date,$currentDate);
      if ($start_date >= $currentDate) {
        if ($end_date >= $start_date) {
          $discount->update($req);
          return redirect()->route('admin.discount.list')->with('success', 'sửa dịch vụ thành công');
        } else {
          return redirect()->back()->with('failed', 'Ngày kết thúc phải lơn hơn hoặc bằng ngày bắt đầu');
        }
      } else {
        return redirect()->back()->with('failed', 'Ngày bắt đầu phải lớn hơn hoặc bằng ngày hiện tại');
      }
    }
    return view('Admin.discount.update', compact('user', 'discount'));
  }
}
