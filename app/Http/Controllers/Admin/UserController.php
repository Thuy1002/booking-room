<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use App\Models\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $typ = type::orderBy('created_at', 'desc')->paginate(4);
        return view('Admin.type.list', compact('typ', 'user')); //replace with the view (blade file) you want 
    }
    
    // public function fillersStt(Request $request)
    // {
    //     $req = $request->input('status'); //nhận requets từ thẻ input
    //     $serviceFilter = service::where('status', $req)->get();
    //     return response()->json($serviceFilter);
    // }
}
