<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    //
    public function rate(Request $request, $id)
    {
        $rating = new Rate();
        $rating->user_id = auth()->id(); // assuming user is logged in
        $rating->rooms_id = $id;
        $rating->comment =  $request->input('comment');
       // $rating->rating = $request->input('rating');
        $rating->save();

        return redirect()->back()->with('success', 'Gửi đánh giá thành công!!');
    }
}
