<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;


Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{id}', [PostController::class, 'blogDetail']); 