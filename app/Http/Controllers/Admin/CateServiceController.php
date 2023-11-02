<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categori_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CateServiceController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $cate = categori_service::orderBy('created_at', 'desc')->paginate(4);
        return view('Admin.categori.list', compact('user', 'cate'));
    }

    public function Changestt($id)
    {
        $cate = categori_service::find($id);
        dd($cate);
        if ($cate->status == 1) {
            $cate->update(['status' => 2]);
        } elseif ($cate->status == 2) {
            $cate->update(['status' => 1]);
        }
        return response()->json(['success' => 'Cập nhật trạng thái thành công']);
    }

    public function delet($id)
    {
        $item = categori_service::find($id);
        $item->services()->delete();
        $item->delete();
        return back()->with('success', 'Xóa thành công');
    }
    public function add(Request $request)
    {
        $user = Auth::user();
        return view('Admin.categori.add', compact('user'));
    }

    public function store(Request $request)
    {
        $cate = new categori_service();
        $img = $request->file('image')->store('images', 'public'); // Lưu vào thư mục "storage/app/public/images";
        $cate->title = $request->title;
        $cate->image = $img;
        $cate->content = $request->content;
        $cate->save();
        //  dd($typ);
        return redirect()->route('admin.categori.list')->with('success', 'thêm mới thành công');
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {
            $img = $request->file('image')->store('images', 'public');
            $cate = categori_service::find($id);
            $update = $request->only(['title', 'content']);
            $update['image'] = $img;
            $cate->update($update);
            return redirect()->route('admin.categori.list', compact('user', 'cate'))->with('success', 'Sửa thành công');
        } else {
            $cate = categori_service::find($id);
            return view('Admin.categori.update', compact('user', 'cate'));
        }
    }

    public function fillersStt(Request $request)
    {
        $status = $request->input('status');
        $query = categori_service::query();
        dd($query);
        if (!empty($status)) {
            $query->where('status', $status);
        } else {
            if ($status == 0) {
                $query->get();
            }
        }
        $typ = $query->get();
        return  response()->json($typ);
    }
}
