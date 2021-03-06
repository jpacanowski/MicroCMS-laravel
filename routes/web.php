<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/posts', [DashboardController::class, 'posts']);
Route::get('/dashboard/post/add', [DashboardController::class, 'addPost']);
Route::get('/dashboard/post/edit/{id}', [DashboardController::class, 'editPost']);
Route::get('/dashboard/pages', [DashboardController::class, 'pages']);
Route::get('/dashboard/page/add', [DashboardController::class, 'addPage']);
Route::get('/dashboard/page/edit/{id}', [DashboardController::class, 'editPage']);
Route::get('/dashboard/categories', [DashboardController::class, 'categories']);
Route::get('/dashboard/category/add', [DashboardController::class, 'addCategory']);
Route::get('/dashboard/category/edit/{id}', [DashboardController::class, 'editCategory']);

Route::get('/', [PostController::class, 'index']);
Route::get('/{slug}', [PostController::class, 'show']);

Route::post('/post/store', [PostController::class, 'store']);
Route::post('/post/update/{id}', [PostController::class, 'update']);
Route::delete('/post/delete/{id}', [PostController::class, 'delete']);

Route::get('/page/{slug}', [PageController::class, 'show']);
Route::post('/page/store', [PageController::class, 'store']);
Route::post('/page/update/{id}', [PageController::class, 'update']);
Route::delete('/page/delete/{id}', [PageController::class, 'delete']);

Route::get('/category/{category:slug}', [CategoryController::class, 'posts']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
Route::delete('/category/delete/{id}', [CategoryController::class, 'delete']);
