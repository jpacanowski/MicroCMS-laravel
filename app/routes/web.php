<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin panel
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

// Admin panel - posts
Route::get('/dashboard/posts', [AdminController::class, 'posts'])->name('dashboard.posts');

// Admin panel - pages
Route::get('/dashboard/pages', [AdminController::class, 'pages'])->name('dashboard.pages');

// Admin panel - form to edit post
Route::get('/dashboard/post/edit/{post:id}', [PostsController::class, 'edit'])->name('posts.edit');

// Admin panel - form to edit page
Route::get('/dashboard/page/edit/{page:id}', [PagesController::class, 'edit'])->name('pages.edit');

// Admin panel - add new post
Route::get('/dashboard/post/create', [PostsController::class, 'create'])->name('dashboard.post.create');

// Admin panel - add new page
Route::get('/dashboard/page/create', [PagesController::class, 'create'])->name('dashboard.page.create');


// Show all posts
Route::get('/', [PostsController::class, 'index']);

// Show single post
Route::get('/{post:slug}', [PostsController::class, 'show']);

// Store post data
Route::post('/posts', [PostsController::class, 'store']);

// Update post
Route::put('/posts/{post}', [PostsController::class, 'update']);

// Delete post
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);


// Show single page
Route::get('/page/{page:slug}', [PagesController::class, 'show']);

// Store page data
Route::post('/pages', [PagesController::class, 'store']);

// Update page
Route::put('/pages/{page}', [PagesController::class, 'update']);

// Delete page
Route::delete('/pages/{page}', [PagesController::class, 'destroy']);
