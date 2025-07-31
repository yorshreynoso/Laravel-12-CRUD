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

Route::get('/post', [PostController::class, 'index'])->name('.index');


// create new user
Route::get('/users/create', [CreateController::class, 'create'])->name('create.user'); //show create form
Route::post('/users', [CreateController::class, 'index'])->name('index.user'); // store new user
