<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Show all posts
    public function index() {
        return view("posts.index", [
            'posts' => Post::latest()->get()
        ]);
    }
}
