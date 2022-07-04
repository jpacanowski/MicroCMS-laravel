<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index', [
            'php_version' => phpversion(),
            'posts_number' => Post::count(),
            'users_number' => User::count(),
        ]);
    }

    public function posts() {
        return view('dashboard.posts', [
            'posts' => Post::orderBy('title')->get()
        ]);
    }

    public function addPost() {
        return view('dashboard.post_add');
    }


    public function editPost(int $postId) {
        return view('dashboard.post_edit', [
            'post' => Post::whereId($postId)->first()
        ]);
    }

    public function pages() {
        return view('dashboard.pages', [
            'pages' => Page::orderBy('title')->get()
        ]);
    }
}
