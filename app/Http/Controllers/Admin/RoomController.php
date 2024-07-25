<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use App\Models\service;
use App\Models\TableImages;
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
        $rooms = rooms::with(['type', 'services', 'images'])->orderBy('created_at', 'desc')->paginate(8);
        // dd($rooms);
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
        // $img_des = $request->file('description_img')->store('images', 'public');
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
        $room =  rooms::create($roo);
        $rooms_id = $room->id;
        foreach ($request->file('description_img') as $immm) {
            $img = new TableImages();
            $img->rooms_id =  $rooms_id;
            $img->image_name =  $immm->getClientOriginalName(); //láy tên ảnh
            $img->image_path = $immm->store('images', 'public');
            $img->save();
        };
        // dd($img);

        $room->services()->attach($selectedServices); // dùng trong quan hệ n-n Khi dùng attach sẽ có 1 bảng trung gian và dùng nó để lưu 2 dầu dữ liệu từ 2 bảng vào bảng trung gian

        return redirect()->route('admin.rooms.list')->with('success', 'thêm mới thành công');
    }
    public function update(Request $request, $id)
    {
        $type = Type::all();
        $user = Auth::user();
        $servi = Service::all();

        if ($request->isMethod('post')) {
            $roo = rooms::find($id);

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

            // Kiểm tra và cập nhật ảnh chính nếu có
            if ($request->hasFile('image')) {
                $img = $request->file('image')->store('images', 'public');
                $update['image'] = $img;
            } else {
                $update['image'] = $roo->image; // Giữ nguyên ảnh cũ nếu không có ảnh mới
            }

            // Kiểm tra và cập nhật ảnh mô tả nếu có
            if ($request->hasFile('description_img')) {
                foreach ($request->file('description_img') as $immm) {
                    $img = new TableImages();
                    $img->rooms_id = $roo->id;
                    $img->image_name = $immm->getClientOriginalName(); // Lấy tên ảnh
                    $img->image_path = $immm->store('images', 'public');
                    $img->save();
                }
            }

            // Cập nhật các trường thông tin
            $roo->update($update);

            // Cập nhật dịch vụ (quan hệ nhiều-nhiều)
            if ($request->has('service_id')) {
                $selectedServices = $request->input('service_id');
                $roo->services()->sync($selectedServices);
            }

            return redirect()->route('admin.rooms.list')->with('success', 'Sửa thành công');
        } else {
            $roo = rooms::with(['type', 'services', 'images'])->find($id);
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