<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show Admin panel - main page
    public function index() {
        return view('dashboard.index', [
            'posts_number' => Post::count(),
            'php_version' => phpversion()
        ]);
    }
}
