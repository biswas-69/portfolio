<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;


Route::get('/dashboard', [ContactController::class, 'dashboard']);
Route::post('/contact', [ContactController::class, 'contact']);






Route::get('/', function () {
    return view('welcome');
});

