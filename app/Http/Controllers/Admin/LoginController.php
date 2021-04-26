<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;
use App\Models\Users;
use Hash;
session_start();

class LoginController extends Controller
{
    //
    public function index()
    {
       return view("Admin.login");
    }
    public function login(Request $req)
    {
        //
        $us = $req->username;
        $pw = $req->password;

      //   $result = DB::table('users')->where('username', $us)->where('password', $pw)->first();
         $result = Users::where('username', $us)->where('password', $pw)->first();
        //  dd($result);
        if($result == true){
            Session::put('username', $result->username);
            Session::put('password', $result->password);

            return redirect()->route('/Admin/index');
        }
        else{
            Session::put('message','Tên người dùng hoặc mật khẩu không đúng');
            return redirect()->route('/login/index');
        }
    } 
    public function logout()
    {
        Session::put('us',null);
        Session::put('id',null);
        Session::put('message','Bạn đã đăng xuất thành công khỏi hệ thống');
        return redirect()->route("/login/index");
    }
  
}
