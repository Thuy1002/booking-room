<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('Admin.account.profile', compact('user'));
    }

    public function changepro(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->about_me = $request->about_me;
        $user->number_phone = $request->number_phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->save();
        return redirect()->back()->with('success', 'thay đổi thành công');
    }
    public function updatePass(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('POST')) {
            if (Hash::check($request->password, $user->password)) {
                if ($request->password_1 == $request->password_2) {
                    $user->password = Hash::make($request->password_2);
                    $user->save();
                    Auth::logout();
                    if (Auth::attempt(['email' => $user->email, 'password' => $request->new_password])) {
                        // Chuyển hướng người dùng về URL mà họ cố gắng truy cập trước khi đăng xuất
                        return redirect()->intended(Session::get('backUrl', route('admin.account.pass_new')))
                            ->with('success', 'Đăng nhập thành công');
                    } else {
                        return redirect()->route('auth.login')->with('failed', 'Có lỗi khi đăng nhập lại. Vui lòng thử lại!');
                    }
                } else {
                    return redirect()->back()->with('failed', 'Mật khẩu mới không khớp');
                }
            } else {
                return redirect()->back()->with('failed', 'Vui lòng nhập đúng mật khẩu');
            }
        }
        return view('Admin.account.changepass', compact('user'));
    }
}
