<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    function page(){
        return view('registration');
    }

    function register(Request $request){
        $credits = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        $user = new User;
        $user->fill([
            'user_name' => $credits['username'],
            'user_pass' => bcrypt($credits['password'])
        ]);
        $user->save();
        return redirect()->intended('/login');
    }
}
