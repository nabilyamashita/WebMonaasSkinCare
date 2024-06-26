<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/aboutus', function () {
    return view('aboutus.index');
});

Route::resource('/booking', \App\Http\Controllers\BookingController::class);

// untuk coba pake /posts
Route::resource('/posts', \App\Http\Controllers\PostController::class);
