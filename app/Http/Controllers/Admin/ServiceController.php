<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categori_service;
use App\Models\service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $ser = service::orderBy('created_at', 'desc')->paginate(4);
        //  dd($ser);
        return view('Admin.service.list', compact('user', 'ser'));
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


    public function add()
    {
        $user = Auth::user();
        $cate = categori_service::all();
        return view('Admin.service.add', compact('user', 'cate'));
    }

    public function store(Request $request)
    {
        $img  = $request->file('image')->store('images', 'public');
        $req = $request->only([
            'title', 'price', 'duration', 'content', 'categori_service_id'
        ]);
        $req['image'] = $img;
        $abc = service::create($req);
        // dd($abc);
        return redirect()->route('admin.service.list')->with('success', 'Thêm dịch vụ thành công');
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $cate = categori_service::all();
        $service = service::find($id);
       // dd($service);
        if ($request->isMethod('POST')) {
            $img  = $request->file('image')->store('images', 'public');
            $req = $request->only([
                'title', 'price', 'duration', 'content', 'categori_service_id'
            ]);
            $req['image'] = $img;
            $service->update($req);
            return redirect()->route('admin.service.list')->with('success', 'Sửa dịch vụ thành công');
        }
        return view('Admin.service.update', compact('user', 'service','cate'));
    }

    public function delet($id)
    {
        $item = service::find($id);
        $item->delete();
        return back()->with('success', 'Xóa thành công');
    }
}
