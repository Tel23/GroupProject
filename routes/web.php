<?php

use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('home');
});

// About route
Route::get('/about', function () {
    return view('about');
});

// Content route
Route::get('/content', function () {
    return view('content');
});

// Route with required username parameter
Route::get('/user/{username}', function ($username) {
    return view('user', ['username' => $username]);
});

// Route with optional username parameter
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+');  // Restricting the username to alphabetic characters