<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthManager
{
    //

    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request -> only('name','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route(name:'home'));
        }
        return redirect(route(name:'login'))->with("error", "Login Details ay mali!");
    }


    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request -> name;
        $data['email'] = $request -> email;
        $data['password'] =Hash::make($request -> password);
        $user=User::create($data);
        if(!$user){
            return redirect(route(name:'registration'))->with("error", "Registration Failed, ulitin mo!");
        }
        return redirect(route(name:'login'))->with("Success", "Ang galing mo");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route(name:'login'));
    }
}
