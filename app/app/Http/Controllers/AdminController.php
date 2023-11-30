<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin panel - show main page
    public function index() {
        return view('dashboard.index', [
            'posts_number' => Post::count(),
            'pages_number' => Page::count(),
            'users_number' => User::count(),
            'php_version' => phpversion()
        ]);
    }

    // Admin panel - show posts
    public function posts() {
        return view('dashboard.posts', [
            'posts' => Post::orderBy('title')->get()
        ]);
    }

    // Admin panel - show pages
    public function pages() {
        return view('dashboard.pages', [
            'pages' => Page::orderBy('title')->get()
        ]);
    }

    // Admin panel - show users
    public function users() {
        return view('dashboard.users', [
            'users' => User::all()
        ]);
    }
}
