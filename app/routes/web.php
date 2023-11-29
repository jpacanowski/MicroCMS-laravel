<?php

use App\Http\Controllers\PostsController;
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
Route::get('/dashboard', [AdminController::class, 'index']);

// Admin panel - posts
Route::get('/dashboard/posts', [AdminController::class, 'posts']);

// Admin panel - form to edit post
Route::get('/dashboard/post/edit/{post:id}', [PostsController::class, 'edit']);


// Show all posts
Route::get('/', [PostsController::class, 'index']);

// Show single post
Route::get('/{post:slug}', [PostsController::class, 'show']);

// Update post
Route::put('/posts/{post}', [PostsController::class, 'update']);

// Delete post
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);
