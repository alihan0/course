<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("layout.auth.login");
    }

    public function register(){
        return view('layout.auth.register');
    }
}
