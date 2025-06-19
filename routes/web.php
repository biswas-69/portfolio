<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Models\Cv;
use App\Http\Controllers\CvController;

Route::get('/cv', [CvController::class, 'index']);
Route::get('/uploadcv', [CvController::class, 'uploadForm']); 
Route::post('/cv', [CvController::class, 'store']);

Route::get('/about', [AboutController::class, 'about']);

Route::middleware("auth")->get('/',[ProjectController::class,'index']);
Route::get('/addp',[ProjectController::class,'addp']);
Route::get('/addp',[ProjectController::class,'store']);
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
Route::get('/addp', function () {
    return view('addp');
});
Route::get('/', [CvController::class, 'create'])->name('cv.create');
Route::post('/cv', [CvController::class, 'store'])->name('cv.store');
Route::get('/cv/preview/{id}', [CvController::class, 'preview'])->name('cv.preview');
Route::get('/cv/download/{id}', [CvController::class, 'download'])->name('cv.download');
