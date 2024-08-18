<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::prefix('admin')->middleware ('admin')->group(function () {
    Route::get('/', function () {
        return view('Admin/AdminHome');
    });
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);

});

Route::group(['middleware'=>['auth']],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


