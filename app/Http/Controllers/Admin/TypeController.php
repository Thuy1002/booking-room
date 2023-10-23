<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    // ['title','content','status'];
    public function index(){
        $typ = type::orderBy('created_at', 'desc')->paginate(4);
        return view('Admin.type.list', compact('typ'));
    }
}
