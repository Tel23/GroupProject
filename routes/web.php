<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Login route
Route::get('/', function () {
    return view('login');
})->name('login');

// Route to handle the username submission and store it in the session
Route::post('/set-username', function (Request $request) {
    // Get the username from the input, or set it to "Guest" if it's empty
    $username = $request->input('username') ?: 'Guest';

    // Store the username in the session
    session(['username' => $username]);

    // Redirect to the home page
    return redirect()->route('home');
})->name('set-username');

// Home route
Route::get('/home', function () {
    // Get the username from the session, defaulting to "Guest"
    $username = session('username', 'Guest');
    return view('home', ['username' => $username]);
})->name('home');

// About page route
Route::get('/about', function () {
    // Get the username from the session, defaulting to "Guest"
    $username = session('username', 'Guest');
    return view('about', ['username' => $username]);
})->name('about');

// Content page route
Route::get('/content', function () {
    // Get the username from the session, defaulting to "Guest"
    $username = session('username', 'Guest');
    return view('content', ['username' => $username]);
})->name('content');

// Contact Us page route
Route::get('/contact', function () {
    // Get the username from the session, defaulting to "Guest"
    $username = session('username', 'Guest');
    return view('contact', ['username' => $username]);
})->name('contact');

