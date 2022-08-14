<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255'],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('auth', 'User Register Successfully!, Please Login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['email:dns', 'required'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'loginError' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
