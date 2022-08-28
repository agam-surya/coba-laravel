<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "posts" => Post::latest()->get(),
            "active" => 'post'
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "post" => $post,
            "active" => 'post',
            "category" => $post->category
        ]);
    }
}
