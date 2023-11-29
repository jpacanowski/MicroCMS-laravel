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


// Show all posts
Route::get('/', [PostsController::class, 'index']);

// Show single post
Route::get('/{post:slug}', [PostsController::class, 'show']);
