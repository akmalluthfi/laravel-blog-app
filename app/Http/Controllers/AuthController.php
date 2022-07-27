<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'auth'
        ]);
    }

    public function register()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'auth'
        ]);
    }
}
