<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/posts/{id}', [PostController::class, 'display'])->name('posts.display');

Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/posts', PostController::class)->middleware('auth');
Route::resource('/categories', CategoryController::class)->middleware('auth');