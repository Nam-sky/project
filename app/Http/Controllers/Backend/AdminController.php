<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('back-end.login');
    }
    public function login(Request $request){
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($arr)) {
            return view('back-end.admin');
        }else{
            return redirect()->back()->with('message','Tài khoản hoặc mật khẩu sai !');
        }
    }
}
