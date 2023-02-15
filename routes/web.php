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


//for special permission crud
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

    Route::get('/post/create', [\App\Http\Controllers\CreateBlogPostsController::class,'create'])->name('create');
    Route::get('/post/view', [\App\Http\Controllers\CreateBlogPostsController::class,'view'])->name('view');
    Route::get('/post/remove/{post_id}', [\App\Http\Controllers\CreateBlogPostsController::class,'remove'])->name('remove');

});


//for caching
Route::get('/storeCache', [App\Http\Controllers\CacheController::class, 'storeCache']);
Route::get('/retrieveCache', [App\Http\Controllers\CacheController::class, 'retrieveCache']);
Route::get('/storeCachePermenantly', [App\Http\Controllers\CacheController::class, 'storeCachePermenantly']);

//for mutating and casting
Route::get('/accessor', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/mutator', [App\Http\Controllers\UserController::class, 'setMutaturValue']);
Route::get('/casting', [App\Http\Controllers\UserController::class, 'casting']);
