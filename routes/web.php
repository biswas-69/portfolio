<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});
Route::get('contacts', function () {
    return view('contacts');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});