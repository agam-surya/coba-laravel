<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', ['active' => 'login']);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'password' => 'required|min:6|max:255',
                'email' => 'required|email:dns|unique:users'
            ]
        );
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');

        return back()->with('loginError', 'login error');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        //supaya gabisa dipake
        $request->session()->invalidate();

        //supaya gabisa dibajak
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
