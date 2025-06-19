<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CvController;

use App\Http\Controllers\ProfileContentController;

Route::get('/home', [ProfileContentController::class, 'home'])->name('home');
Route::post('/home', [ProfileContentController::class, 'update'])->name('profile.update');


Route::get('/update', [PhotoController::class, 'uploadForm'])->name('photos.upload');
Route::post('/upload', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/preview/{id}', [PhotoController::class, 'preview'])->name('photos.preview');
Route::get('/download/{id}', [PhotoController::class, 'download'])->name('photos.download');


Route::get('/about', [ProjectController::class, 'about']);


Route::middleware("auth")->get('/',[ProjectController::class,'index']);
Route::get('/addp',[ProjectController::class,'addp']);
Route::get('/addp',[ProjectController::class,'store']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/update', function () {
    return view('update');
});

//  Route::get('home', function () {
//     return view('home');

//  });

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




Route::get('/project', function () {
    return view('project');
});
Route::get('/addp', function () {
    return view('addp');
});
Route::get('/', [CvController::class, 'create'])->name('cv.create');
Route::post('/cv', [CvController::class, 'store'])->name('cv.store');
Route::get('/cv/preview/{id}', [CvController::class, 'preview'])->name('cv.preview');
Route::get('/cv/download/{id}', [CvController::class, 'download'])->name('cv.download');



Route::get('/', [ProfileContentController::class, 'home'])->name('home');
Route::post('/profile/update', [ProfileContentController::class, 'update'])->name('profile.update');

