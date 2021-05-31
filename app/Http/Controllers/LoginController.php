<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'ten khong duoc de trong',
            'password.required' => 'mat khau khong duoc de trong'
        ]);
        $dataInput = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        $credentials = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) { // kiểm tra xem thông tin đăng nhập có trong dd hay không
            $request->session()->regenerate(); // đưa thông tin lên trên sesion
            return redirect()->route('home');

        }
        return back()->withErrors([
            'name'=>'tên dăng nhập không thành công',
        ]);

    }
}
