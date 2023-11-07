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
        if ($item->status == 1) {
            $item->update(['status' => 2]);
        } elseif ($item->status == 2) {
            $item->update(['status' => 1]);
        }
        return response()->json(['success' => 'Cập nhật trạng thái thành công']);
    }


    public function delet($id)
    {
        $item = type::find($id);
        $item->room()->delete();
        $item->delete();
        return back()->with('success', 'Xóa thành công');
    }
    public function add(Request $request)
    {
        $user = Auth::user();
        return view('Admin.type.add', compact('user'));
    }
    public function store(Request $request)
    {
        $typ = new type();
        $typ->title = $request->title;
        $typ->content = $request->content;
        $typ->save();
        //  dd($typ);
        return redirect()->route('admin.types.list')->with('success', 'thêm mới thành công');
    }
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {
            $typ = type::find($id);
            $update = $request->only('title', 'content');
            $typ->update($update);
            return redirect()->route('admin.types.list', compact('user', 'typ'))->with('success', 'Sửa thành công');
        } else {
            $typ = type::find($id);
            return view('Admin.type.update', compact('user', 'typ'));
        }
    }
    public function fillersStt(Request $request)
    {
        $status = $request->input('status');
        $query = type::query();
        // dd($query);
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


    public function dellAll(Request $request)
    {
        foreach ($request->input('ids') as $ab) {
            $typ = type::find($ab);
            // dd($typ);
            if ($typ) {
                // Thử xóa phòng trước
                $typ->room()->delete();
                // Sau đó xóa bản ghi type
                $typ->delete();
            }
        };
        return response()->json(['success' => 'xóa thành công']);
    }
}
