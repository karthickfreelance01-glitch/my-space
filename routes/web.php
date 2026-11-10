<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page shows the birthday site (public/birthday/index.html)
Route::get('/', function () {
    $html = file_get_contents(public_path('birthday/index.html'));
    // make the photo paths load from /birthday/
    $html = str_replace('<head>', '<head><base href="/birthday/">', $html);
    return response($html)->header('Content-Type', 'text/html; charset=UTF-8');
});

// Old default page, still available at /welcome
Route::get('/welcome', function () {
    return view('welcome');
});
