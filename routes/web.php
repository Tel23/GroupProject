<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Login route - appears first
Route::get('/', function () {
    return view('login');
})->name('login');

// Home route
Route::get('/home', function () {
    $username = session('username', 'Guest');
    return view('home', ['username' => $username]);
})->name('home');

// About page route
Route::get('/about', function () {
    $username = session('username', 'Guest');
    return view('about', ['username' => $username]);
})->name('about');

// (content)Cat Breeds page route
Route::get('/content', function () {
    $username = session('username', 'Guest');
    return view('content', ['username' => $username]);
})->name('content');

// Contact Us page route
Route::get('/contact', function () {
    $username = session('username', 'Guest');
    return view('contact', ['username' => $username]);
})->name('contact');

// Route to handle the username and redirect to the user page
Route::get('/user', function (Request $request) {
    $username = $request->query('username', 'Guest');
    session(['username' => $username]);
    return redirect()->route('user.show', ['username' => $username]);
})->name('user');

// Route to display the user view with the username
Route::get('/user/{username}', function ($username) {
    session(['username' => $username]);
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+')->name('user.show');
