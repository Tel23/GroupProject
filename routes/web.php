<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\LogRequest;

// Group routes that use LogRequest middleware
Route::middleware([LogRequest::class])->group(function () {

    // Login route
    Route::get('/', function () {
        return view('login');
    })->name('login');

    // Route to handle the username and age submission, and store them in the session
    Route::post('/set-username', function (Request $request) {
        $username = $request->input('username') ?: 'Guest';
        $age = $request->input('age');

        // Store the username and age in the session
        session(['username' => $username, 'age' => $age]);

        // Redirect to the home page
        return redirect()->route('home');
    })->name('set-username');

    // About page route
    Route::get('/about', function () {
        $username = session('username', 'Guest');
        return view('about', ['username' => $username]);
    })->name('about');

    // Content page route
    Route::get('/content', function () {
        $username = session('username', 'Guest');
        return view('content', ['username' => $username]);
    })->name('content');

    // Contact Us page route
    Route::get('/contact', function () {
        $username = session('username', 'Guest');
        return view('contact', ['username' => $username]);
    })->name('contact');

    // Access Denied route
    Route::get('/accessDenied', function () {
        \Log::info('Access Denied page visited');
        return view('accessDenied'); // Ensure you create the 'accessDenied' view
    })->name('accessDenied');
});

// Home route for users 18 and above (excluding 25 and above)
Route::get('/home', function () {
    $username = session('username', 'Guest');
    $age = session('age', 0); // Retrieve age for logging/debugging
    \Log::info("Username: $username, Age: $age");
    return view('home', ['username' => $username]);
})->middleware([LogRequest::class, CheckAge::class])->name('home');

// Restricted page for users 25 and above
Route::get('/restricted', function () {
    $username = session('username', 'Guest');
    return view('restricted', ['username' => $username]);
})->middleware([LogRequest::class, CheckAge::class])->name('restricted');  // Only allow users 25 or older to access