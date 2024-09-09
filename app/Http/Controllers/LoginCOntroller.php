<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;

class LoginCOntroller extends Controller
{
    public function dashboard(){
        
        return view('admin/dashboard');
    }

    public function registeruser(){
        
        // return "helwo";
        return view('admin/registeruser');
    }
    public function addcategories(){
        
        // return "helwo";
        return view('admin/addcategories');
    }
    public function editcategories(){
        
        // return "helwo";
        return view('admin/editcategories');
    }

    public function addposts(){

        return view('admin/addposts');
    }

    public function loginaction(Request $request){
        $credentials = $request->only('email','password');
        
        if(Auth::attempt($credentials)){
            return redirect()->intended('/admin');
        }

    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        return redirect('/login');

    }
}
