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
Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/{postId}/show', [PostController::class, 'show'])->name('show');
    Route::group(['middleware' => 'auth'], function () {
        Route::post('/store', [PostController::class, 'store'])->name('store');
        Route::get('/all', [HomeController::class, 'allPosts'])->name('all');
        Route::get('/{postId}/edit', [PostController::class, 'edit'])->name('edit');
        Route::post('/{postId}/update', [PostController::class, 'update'])->name('update');
        Route::get('/{postId}/delete', [PostController::class, 'delete'])->name('delete');
    });
}

// Admin
Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('admin')->name('dashboard');
});


