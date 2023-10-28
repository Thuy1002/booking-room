<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $rooms = rooms::with('type')->orderBy('created_at', 'desc')->paginate(4);
        $ru = DB::table('rooms')
        ->join('types', 'rooms.type_id','=','types.id')
        ->select('rooms.*','types.*')
        ->get();
        dd($ru);
        return view('Admin.rooms.list', compact('rooms', 'user'));
    }
}
