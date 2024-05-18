<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function page(){
        return view('login');
    }

    function authenticate(LoginRequest $request){
        $input = $request->validated();
        if(Auth::attempt($input)){
            $request->session()->regenerate();
            if(User::where('username', $input['username'])->get()[0]->attributesToArray()['user_role'] == 'admin'){
                return response()->json(['redirect' => 'admin']);
            }
            return response()->json(['redirect' => 'user']);
        }
        return response()->abort(422);
    }
}
