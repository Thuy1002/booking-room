<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rooms = rooms::with('type')->orderBy('created_at', 'desc')->paginate(4);
        return view('Admin.rooms.list', compact('rooms', 'user'));
    }
    public function add()
    {
        $user = Auth::user();
        $room = rooms::with('type')->get();
        //      dd($room);
        return view('Admin.rooms.add', compact('user', 'room'));
    }
    public function store(Request $request)
    {
        $img = $request->file('image')->store('images', 'public'); // Lưu vào thư mục "storage/app/public/images";
        $img_des = $request->file('description_img')->store('images', 'public');
        $roo = $request->only([
            'title',
            'floor',
            'view',
            'imagfacilitiese',
            'capacity',
            'type_id',
            'price',
            'description',

        ]);
        $roo['image'] = $img;
        $roo['description_img'] = $img_des;
        rooms::create($roo);
        dd($roo);
        return redirect()->route('admin.rooms.list')->with('success', 'thêm mới thành công');
    }
}
