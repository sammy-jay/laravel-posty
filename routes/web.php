<?php

use Illuminate\Support\Facades\Route;


Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/', function () {
    return view('welcome');
});
