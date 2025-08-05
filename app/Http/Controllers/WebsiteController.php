<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    
    
    public function signin(){
        return view('signin');
    }
    public function register(){
        return view('register');
    }
    public function forgot_password(){
        return view('forgot-password');
    }
    
}
