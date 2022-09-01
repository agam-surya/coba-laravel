<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        return view('posts', [
            "title" => $title,
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(5)->withQueryString(),
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
