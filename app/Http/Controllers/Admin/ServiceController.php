<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    //
   public function index(){
    $user = Auth::user();
    $ser = service::orderBy('created_at', 'desc')->paginate(4);
  //  dd($ser);
    return view('Admin.service.list',compact('user','ser'));
   }

   public function updateStatus(Request $request, $id)
   {
       $item = service::find($id);
       if ($item->status == 1) {
           $item->update(['status' => 2]);
       } elseif ($item->status == 2) {
           $item->update(['status' => 1]);
       }
       return response()->json(['success' => 'Cập nhật trạng thái thành công']);
   }


   public function delet($id)
   {
       $item = service::find($id);
       $item->delete();
       return back()->with('success', 'Xóa thành công');
   }
}
