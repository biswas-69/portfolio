<?php

use App\Http\Controllers\PhotoController;

Route::get('/', [PhotoController::class, 'uploadForm'])->name('photos.upload');
Route::post('/upload', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/preview/{id}', [PhotoController::class, 'preview'])->name('photos.preview');
Route::get('/download/{id}', [PhotoController::class, 'download'])->name('photos.download');
