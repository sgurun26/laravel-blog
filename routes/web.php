<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::resource('posts', PostController::class);

// Route::group(['middleware'=>['auth']],function(){
//     Route::resource('posts', PostController::class);
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });


