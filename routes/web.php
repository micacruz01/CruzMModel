<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
Route::get('/greet', [GreetController::class, 'greet']);
Route::get('/', function () {
    return view('welcome');
});
