<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show']); 
Route::post('/contact', [ContactController::class, 'submit']); 



Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});