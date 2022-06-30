<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
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
}
