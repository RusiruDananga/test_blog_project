<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/editor', function () {
    return view('ckeditor');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

    Route::get('/post/create', [\App\Http\Controllers\CreateBlogPostsController::class,'create'])->name('create');
    Route::get('/post/view', [\App\Http\Controllers\CreateBlogPostsController::class,'view'])->name('view');
    Route::get('/post/remove/{post_id}', [\App\Http\Controllers\CreateBlogPostsController::class,'remove'])->name('remove');

});
