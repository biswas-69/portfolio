<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController; //

Route::get('/about', [ProjectController::class, 'about']);
Route::get('/', function () {
    return view('welcome');
});

 Route::get('home', function () {
    return view('home');

 });

Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});

// Route::get('/login', [ProjectController::class, 'index']);

// Route::get('/about', function () {
//     return view('login');
// });




