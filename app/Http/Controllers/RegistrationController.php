<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    function page(){
        return view('registration');
    }

    function register(RegistrationRequest $request){
        $input = $request->validated();
        $user = new User;
        $user->fill([
            'username' => $input['username'],
        ]);
        $user->password = Hash::make($input['password']);
        $user->save();
        if($user->saveOrFail()){
            return response()->json(['redirect' => true]);
        }
        return response()->abort(442);
    }
}
