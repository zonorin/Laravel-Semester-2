<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{id}', function ($id) {
    return "User ID: $id";
});

Route::get('/post/{slug?}', function ($slug = 'default-post') {
    return "Post Slug: $slug";
});