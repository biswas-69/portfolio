<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileContentController;
use App\Http\Controllers\AboutController;
use App\Models\Cv;
use App\Http\Controllers\CvController;
use App\Http\Controllers\AuthController;




Route::get('/about', [AboutController::class, 'about']);

Route::middleware("auth")->get('/',[ProjectController::class,'index']);
Route::get('/addp',[ProjectController::class,'addp']);
Route::post('/addp',[ProjectController::class,'store']);
Route::middleware("auth")->get('/',[ProfileContentController::class,'index']);
Route::get('/addprofile',[ProfileContentController::class,'addprofile']);
Route::post('/addprofile',[ProfileContentController::class,'store']);
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
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/project', [ProjectController::class, 'index']);
Route::get('/profile', [ProfileContentController::class, 'index']);



Route::get('/cv', [CvController::class, 'index'])->name('cv.index');

Route::get('/cv/create', [CvController::class, 'create'])->name('cv.create');


Route::post('/cv', [CvController::class, 'store'])->name('cv.store');


Route::delete('/cv/{id}', [CvController::class, 'destroy'])->name('cv.destroy');

Route::get('/register',[AuthController::class,'registerView']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'loginView'])->name("login");
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout']);
