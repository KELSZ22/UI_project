<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientManager extends Controller
{
    //
    function clientlogin(){
        return view('Clients/clientlogin');
    }

    function clientregistration(){
        return view('Clients/clientregistration');
    }

    function clientloginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route(name:'home'));
        }
        return redirect(route('clientlogin'))->with("error", "Login details are not valid!");
    }

    function clientregistrationPost(Request $request){
        $request->validate([
            'username' => 'required',
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]); 

        $data['username'] = $request->username;
        $data['lastname'] = $request->lastname;
        $data['firstname'] = $request->firstname;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route(name:'clientregistration'))->with("error", "Registration Failed!");
        }
        return redirect()->intended(route('clientlogin'))->with("Success", "Registration Successful, Please Log in.");
    }
    
    function clientlogout(){
        Session::flush();
        Auth::logout();
        return redirect(route('clientlogin'));
    }
}
