<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show Admin panel - main page
    public function index() {
        return view('dashboard.index', [
            'posts_number' => Post::count(),
            'pages_number' => Page::count(),
            'users_number' => User::count(),
            'php_version' => phpversion()
        ]);
    }
}
