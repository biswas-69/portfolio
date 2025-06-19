<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;

Route::get('/', [PhotoController::class, 'uploadForm'])->name('photos.upload');
Route::post('/upload', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/preview/{id}', [PhotoController::class, 'preview'])->name('photos.preview');
Route::get('/download/{id}', [PhotoController::class, 'download'])->name('photos.download');


Route::get('/about', [ProjectController::class, 'about']);
Route::get('/contact', [ProjectController::class, 'contact']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::middleware("auth")->get('/',[ProjectController::class,'index']);
Route::get('/addp',[ProjectController::class,'addp']);
Route::get('/addp',[ProjectController::class,'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home'); // or 'home'
});

<<<<<<< HEAD
Route::get('/home', [ProjectController::class, 'index'])->middleware('auth');
=======
 Route::get('home', function () {
    return view('home');

 });

Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});

// use App\Http\Controller\IndexController;

// Route::get('/home',[IndexController::class,'index']);
// Route::get('/login', [ProjectController::class, 'index']);

// Route::get('/about', function () {
//     return view('login');
// });


>>>>>>> 383444fe26dc9e82f15133ff393efbd152ef4118


Route::get('/project', function () {
    return view('project');
});
Route::get('/addp', function () {
    return view('addp');
});
Route::get('/logout', function () {
    return view('/');
});
Route::get('/about', [ProjectController::class, 'about'])->name('about');
Route::get('/dashboard/about', [ProjectController::class, 'dashboardAbout'])->name('dashboard.about'); 
Route::get('/dashboard', [ProjectController::class, 'dashboard'])->name('dashboard');
Route::get('/cvv', [CvController::class, 'create'])->name('cv.create');
Route::post('/cv', [CvController::class, 'store'])->name('cv.store');
Route::get('/cv/preview/{id}', [CvController::class, 'preview'])->name('cv.preview');
Route::get('/cv/download/{id}', [CvController::class, 'download'])->name('cv.download');



Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/upload-image', [AboutController::class, 'uploadImage'])->name('image.upload');
