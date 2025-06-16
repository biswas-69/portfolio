<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('index');
});

use App\Http\Controller\IndexController;

Route::get('/home',[IndexController::class,'index']);