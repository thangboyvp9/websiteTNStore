<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view("Admin.Register");
    }

    public function register(Request $req)
    {
        $this->validate($req,
            [
                'password'=>'required|min:6|max:20',
                'username'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'password.required'=>'Vui lòng nhập password',
                're_password.same'=>"Mật khẩu không giống nhau",
                'password.min'=>'Mật khẩu ít nhất 6 ký tự'
            ]
            );
        $user = new Users();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->save();
        return redirect()->back()->with("message","Đã tạo tài khoản thành công");
    }
}

