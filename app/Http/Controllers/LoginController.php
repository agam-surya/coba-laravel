<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
