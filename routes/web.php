<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::middleware("auth")->get('/',[ProjectController::class,'index']);
Route::get('/addp',[ProjectController::class,'addp']);
Route::get('/addp',[ProjectController::class,'store']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/addp', function () {
    return view('addp');
});
