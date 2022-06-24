<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::
            whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
