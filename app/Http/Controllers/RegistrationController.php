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
        $user = new User;
        $user->fill([
            'username' => $request->username,
        ]);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->intended('/login');
    }
}
