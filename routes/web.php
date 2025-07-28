<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, CreateController, PostController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('index');
});

Route::get('/controller', [HomeController::class, 'index'])->name('posts.index');

Route::get('/post', [PostController::class, 'index']);

Route::post('/create', [CreateController::class, 'index']);
