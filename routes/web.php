<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/content', function () {
    return view('content');
});

// Add the user route here
Route::get('/user/{username}', function ($username) {
    return view('user', ['username' => $username]);
});
