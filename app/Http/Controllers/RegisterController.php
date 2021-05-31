<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     public function register(){
         return view('register');
     }

     public function postRegister(Request $request){
         $request->validate([
             'name'=>'required|unique:users',
             'email'=>'required|unique:users',
             'password'=>'required|required_with:rePassword|same:rePassword',
         ],[
             'name.required'=>'ten dang nhap khong duoc de trong',
             'name.unique'=>'ten da ton tai',
             'email.required'=>'email khong duoc de trong',
             'email.unique'=>'email da ton tai',
             'password.required'=>'mat khau khong duoc de trong',
             'password.same'=>'mat khau khong khop',

         ]);
         $dataInput=[
           'name'=> $request->name,
           'email'=> $request->email,
           'password'=> Hash::make($request->password),
             'status'=>0,
         ];


         $user = User::create($dataInput);

         if ($user){
             return redirect()->route('login');
         }

     }
}
