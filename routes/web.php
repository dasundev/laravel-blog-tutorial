<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Posts
Route::get('/posts/{postId}/show', [PostController::class, 'show'])->name('posts.show');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::post('/store', [PostController::class, 'store'])->name('posts.store');
        Route::get('/all', [HomeController::class, 'allPosts'])->name('posts.all');
        Route::get('/{postId}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::post('/{postId}/update', [PostController::class, 'update'])->name('posts.update');
        Route::get('/{postId}/delete', [PostController::class, 'delete'])->name('posts.delete');
    }
});

// Admin
Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('admin')->name('dashboard');
});


