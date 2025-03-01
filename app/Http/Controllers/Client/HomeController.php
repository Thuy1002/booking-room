<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\comment;
use App\Models\rooms;
use App\Models\type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class HomeController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $room = rooms::where('type_id',2)->get();
        $comment = comment::with('user')->get();
        $typ = type::where('status',1)->get();
        $blog = blog::with('user')->where('status',1)->orderBy('created_at', 'desc')->limit(4)->get();
        return  view('client.home',compact('user','room','comment','blog','typ'));
    }

    
}
