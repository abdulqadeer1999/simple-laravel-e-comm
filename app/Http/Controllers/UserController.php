<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Redirect;

class UserController extends Controller
{
    
    function login(Request $request) {

        $user =  User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password,$user->password)) {

        // $request->session()->flash('msg','User Name or Password did not matched');
        return redirect()->route('login')->with('msg','User Name or Password did not matched');
        // return redirect('login');
        }else {
             $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $request) {

        $user = New User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('login');

    }
}
