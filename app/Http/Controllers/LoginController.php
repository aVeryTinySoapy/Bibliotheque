<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request){
    if(Auth::attempt(['user_name' => $request->user_name, 'password' => $request->user_pass])){
//        return redirect()->intended('/catalogue/1');
    }
//    return 'asagi';
    }
}
