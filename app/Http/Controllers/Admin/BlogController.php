<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $user = Auth::user();
        $blog = blog::with(['user','images'])->orderBy('created_at','desc')->paginate(4);
        return view('Admin.blog.list',compact('user','blog'));
    }
    public function add(){
        $user = Auth::user();
        return view('Admin.blog.add',compact('user'));
    }
    public function updateStatus(Request $request, $id)
    {
        $item = blog::find($id);
        $item->status = $request->input('status');
        $item->save();
        return response()->json(['success' => 'Cập nhật trạng thái thành công']);
    }
    public function delet($id)
    {
        $item = blog::find($id);
        $item->delete();
        return back()->with('success', 'Xóa thành công');
    }
}
