<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::controller(PostController::class)->group(function () {
//    Route::get('/', 'index')->name('posts.index');
//    Route::post('/', 'store')->name('posts.store');
//    Route::get('/{post}', 'show')->name('posts.show');
//    Route::put('/{post}', 'update')->name('posts.update');
//    Route::delete('/{post}', 'destroy')->name('posts.destroy');
//});

Route::resource('/posts', PostController::class);
