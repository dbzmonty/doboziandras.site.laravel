<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [Controllers\PostController::class, 'index'])->name('portfolio.list');

Route::middleware(['auth'])->group(function () {
    Route::get('/publish', [Controllers\PostController::class, 'create'])->name('portfolio.add');
    Route::post('/publish', [Controllers\PostController::class, 'store']);
});

Route::post('/imageUpload', [Controllers\ImageController::class, 'store'])->name('imageUpload');

Route::get('/post/{post}', [Controllers\PostController::class, 'show'])->name('portfolio.details');

Route::get('/cv', [Controllers\CvEntryController::class, 'index'])->name('cv.list');
Route::get('/cvAdd', [Controllers\CvEntryController::class, 'create'])->name('cv.add');
Route::post('/cvAdd', [Controllers\CvEntryController::class, 'store']);

// fix it
Route::get('/contact', [Controllers\HomeController::class, 'index'])->name('contact');

require __DIR__.'/auth.php';