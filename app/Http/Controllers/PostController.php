<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with(['category', 'author'])->latest();
        if (!is_null($request->query('search'))) {
            $posts->search($request->query('search'));
        }

        return view('posts', [
            'title' => 'All Posts',
            'active' => 'blog',
            'posts' => $posts->paginate(10)->appends(['search' => $request->query('search')]),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
