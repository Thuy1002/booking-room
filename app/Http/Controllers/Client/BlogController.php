<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = blog::where('status','public')->paginate(8);
        return view('client.blog.index',compact('blogs'));
    }

    public function detail($id){
        $detail = blog::where('id',$id)->first();
        return view('client.blog.detail',compact('detail'));
    }
}
