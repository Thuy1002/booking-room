<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use App\Models\service;
use App\Models\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\type;

class RoomController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rooms = rooms::with(['type', 'services',])->orderBy('created_at', 'desc')->paginate(8);
        return view('Admin.rooms.list', compact('rooms', 'user'));
    }
    public function add()
    {
        $servi = service::all();
        $user = Auth::user();
        $typ = type::all();
        //      dd($room);
        return view('Admin.rooms.add', compact('user', 'typ', 'servi'));
    }
    public function store(Request $request)
    {
        $img = $request->file('image')->store('images', 'public'); // Lưu vào thư mục "storage/app/public/images";
        $img_des = $request->file('description_img')->store('images', 'public');
        $selectedServices = $request->input('service_id');
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
        $room =  rooms::create($roo);
        $room->services()->attach($selectedServices);

        return redirect()->route('admin.rooms.list')->with('success', 'thêm mới thành công');
    }
    public function update(Request $request, $id)
    {
        $type = type::all();
        $user = Auth::user();
        $servi = service::all();
        if ($request->isMethod('post')) {
            $roo = rooms::find($id);
            $img = $request->file('image')->store('images', 'public'); // Lưu vào thư mục "storage/app/public/images";
            $img_des = $request->file('description_img')->store('images', 'public');
            $selectedServices = $request->input('service_id');
            $update = $request->only([
                'title',
                'floor',
                'view',
                'imagfacilitiese',
                'capacity',
                'type_id',
                'price',
                'description',
            ]);
            $update['image'] = $img;
            $update['description_img'] = $img_des;
            $roo->update($update);
            $roo->services()->sync($selectedServices);
            return redirect()->route('admin.rooms.list')->with('success', 'Sửa thành công');
        } else {
            $roo = rooms::with(['type', 'services'])->find($id);
            //   dd($roo->refresh());
            return view('Admin.rooms.update', compact('user', 'roo', 'type', 'servi'));
        }
    }
    public function updateStatus(Request $request, $id)
    {
        $item = rooms::find($id);
        $item->status = $request->input('status');
        $item->save();
        return response()->json(['success' => 'Cập nhật trạng thái thành công']);
    }
    
   public function delet($id)
   {
       $item = rooms::find($id);
       $item->delete();
       return back()->with('success', 'Xóa thành công');
   }
}
 // if ($item->status == 1) {
        //     $item->update(['status' => 2]);
        // } elseif ($item->status == 2) {
        //     $item->update(['status' => 1]);
        // }
        // else{
        //     $item->update(['status' => 3]);
        // }