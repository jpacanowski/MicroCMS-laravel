<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index', [
            'php_version' => phpversion(),
            'posts_number' => Post::count(),
            'pages_number' => Page::count(),
            'users_number' => User::count(),
            'categories_number' => Category::count(),
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

    public function addPage() {
        return view('dashboard.page_add');
    }

    public function editPage(int $pageId) {
        return view('dashboard.page_edit', [
            'page' => Page::whereId($pageId)->first()
        ]);
    }

    public function categories() {
        return view('dashboard.categories', [
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function addCategory() {
        return view('dashboard.category_add');
    }

    public function editCategory(int $categoryId) {
        return view('dashboard.category_edit', [
            'category' => Category::whereId($categoryId)->first()
        ]);
    }
}
