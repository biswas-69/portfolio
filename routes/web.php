<?php
use App\Http\Controllers\CvController;

Route::get('/', [CvController::class, 'create'])->name('cv.create');
Route::post('/cv', [CvController::class, 'store'])->name('cv.store');
Route::get('/cv/preview/{id}', [CvController::class, 'preview'])->name('cv.preview');
Route::get('/cv/download/{id}', [CvController::class, 'download'])->name('cv.download');
