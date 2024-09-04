<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;

class LoginCOntroller extends Controller
{
    public function dashboard(){
        
        return view('index');
    }

    public function test(){
        return view('finalpage');
    }

    public function blogPost(){
        return view('blogpostform');
    }


    public function loginaction(Request $request){
        $credentials = $request->only('email','password');
        
        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }

    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        return redirect('/login');

    }
}
