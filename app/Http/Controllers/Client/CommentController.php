<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CommentController extends Controller
{
    //

    public function store(Request $request, $rooms_id)
    {
        $user = auth()->user()->id;
        $data = $request->only([
            'content',
            'rate'
        ]);
        $data['rooms_id'] = $rooms_id;
        $data['user_id'] = $user;
        dd($data);
    }

    public function post($rooms_id)
    {
        $data = request()->all('comment');
        $data['rooms_id'] = $rooms_id;
    }
}
