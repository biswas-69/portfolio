<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactDashboardController;

Route::get('/contact', [ContactController::class, 'show']); 
Route::post('/contact', [ContactController::class, 'submit']); 

Route::get('/dashboard', [ContactDashboardController::class, 'index'])->name('dashboard');





Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});