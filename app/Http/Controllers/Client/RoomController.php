<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use App\Models\service;
use App\Models\type;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $room  = rooms::paginate(6);
        $type = type::all();
        return view('client.room.list', compact('user', 'room', 'type'));
    }
    public function filterRoom(Request $request)
    {
        $type = $request->input('type');

        // Kiểm tra xem type có tồn tại
        $room = rooms::where('type_id', $type)->first(); // Lấy phòng đầu tiên
        if (!$room) {
            return response()->json(['status' => false, 'message' => 'Không tìm thấy phòng cho loại phòng đã chọn.']);
        }
        $items = rooms::where('type_id', $type)->get();
        //dd($items);

        $html = view('client.room.room-type', compact('items'))->render();

        return response()->json(['status' => true, 'html' => $html]);
    }

    public function detail($id)
    {
        $user = Auth::user();
        $room = rooms::with(['services', 'rating'])->find($id);
        // $ty_roo = rooms::where('type_id', $room->type_id)->get();
        $service = service::all();

        return view('client.room.detail', compact('user', 'room', 'service'));
    }
}
