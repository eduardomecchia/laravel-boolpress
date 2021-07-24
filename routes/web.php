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

// Authentication routes
Auth::routes();

// Guest routes
Route::get('/', "PageController@index");

Route::get('contact', "ContactController@form")->name("contact");
Route::post('contact', 'ContactController@storeAndSend')->name('contact.send');

Route::get('posts', "PostController@index")->name("posts.index");
Route::get('posts/{post}', "PostController@show")->name("posts.show");

// Admin routes
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    route::resource('posts', PostController::class);
});
