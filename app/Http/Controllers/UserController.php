<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getList (){
        $userData = DB::table('users')->select('*');
        $userData = $userData->get();
        return view('user.list')->with(['users' =>$userData]);
    }
}
