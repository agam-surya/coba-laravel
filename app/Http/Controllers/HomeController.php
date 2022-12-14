<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
        return view('home', [
            'active' => 'home',
            "posts" => Post::latest()->get(),
        ]);
    }
}
