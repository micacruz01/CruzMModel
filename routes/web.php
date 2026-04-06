<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostController;

Route::resource('tasks', TaskController::class);
Route::resource('posts', PostController::class);
Route::get('/greet', [GreetController::class, 'greet']);
Route::get('/', function () {
    return view('welcome');
});
