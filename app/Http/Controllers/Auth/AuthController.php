<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function index()
    {
        return view('Auth.login');
    }
    public function handleLogin(Request $request)
    {
        if (
            Auth::guard('web')->attempt([
                'email' => $request->email,
                'password' => $request->password,
                'status' => 2
            ])
        ) {
            if (Session::get('backUrl')) {
                $url = Session::get('backUrl');
                Session::forget('backUrl');
                return redirect($url)->with('success', 'bạn đăng nhập thành công');
            }
            return redirect()->route('client')->with('success', 'bạn đăng nhập thành công');
        } elseif (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ])) {
            return redirect()->route('admin.home')->with('success', 'Đăng nhập thành công');
        } else {
            return redirect()->route('auth.login')->with('failed', 'đăng nhập thất bại');
            // return redirect('login')->with('failed', 'đăng nhập thất bại !');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
