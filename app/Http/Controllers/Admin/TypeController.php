<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    // ['title','content','status'];
    public function index()
    {
        $user = Auth::user();
        $typ = type::orderBy('created_at', 'desc')->paginate(4);
        return view('Admin.type.list', compact('typ', 'user'));
    }
    // public function updateStatus($id){
    //     $change = type::find($id);
    //     if ($change ->status == 1) {
    //        $change->update(['status' => 2]); 
    //     //   dd($change);
    //        return back()-> with('success','Thay đổi trạng thái thành công');
    //     }
    //     if ($change ->status == 2) {
    //         $change->update(['status' => 1]); 
    //       //  dd($change);
    //         return back()-> with('success','Thay đổi trạng thái thành công');
    //      }
    // }
    public function updateStatus(Request $request, $id)
    {
        $item = type::find($id);
        // dd($item->room());
        if (!$item) {
            return response()->json(['failed' => 'Sản phẩm không tồn tại'], 404);
        }
        if ($item->status == 1) {
            $item->update(['status' => 2]);
        } elseif ($item->status == 2) {
            $item->update(['status' => 1]);
        }
        return response()->json(['success' => 'Trạng thái thay đổi thành công']);
    }
    public function delet($id){
        $item = type::find($id);
        $item->room()->delete();
        $item->delete();
        return back()->with('success','Xóa thành công');
    }


}
