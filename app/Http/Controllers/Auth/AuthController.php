<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
                'role' => 'user'
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
            'role' => 'admin'
        ])) {
            return redirect()->route('admin.home')->with('success', 'Đăng nhập thành công');
        } else {
            //  dd(auth()->user());
            return redirect()->route('auth.login')->with('failed', 'đăng nhập thất bại');
            // return redirect('login')->with('failed', 'đăng nhập thất bại !');
        }
    }
    public function singup(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->post('re_password') != $request->post('password')) {
                return redirect()->route('auth.register')->with('failed', 'Mật khẩu không khớp');
            } else {
                //  $password = $request->password;
                $user = User::create(
                    array_merge(
                        $request->all(),
                        [
                            'avatar' => 'images/avatar_icon.png',
                            'password' => Hash::make(123456),
                            'email_verified_at' => now(),
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                        ],
                    )
                );
                //   dd( $user);
                // $db = User::where('email', 'like', $request->email)->first();
                // Mail::send('screens.email.user.actived-user', compact('db', 'password'), function ($email) use ($db) {
                //     $email->subject('Đăng ký tài khoản Eduport');
                //     $email->to($db->email, $db->name);
                // });
                return redirect()->route('auth.login')->with('success', 'Tạo tài khoản thành công');
            }
        }
        return view('auth.register');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login')->with('success', 'Đăng xuất thành công!!');
    }
}
