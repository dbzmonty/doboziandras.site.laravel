<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Controller;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

// megjelenítések
Route::get('/portfolio', [Controllers\PostController::class, 'index'])->name('portfolio.list');
Route::get('/cv', [Controllers\CvEntryController::class, 'index'])->name('cv.list');
Route::get('/post/{post}', [Controllers\PostController::class, 'show'])->name('portfolio.details');
// fix it
Route::get('/contact', [Controllers\HomeController::class, 'index'])->name('contact');

// loginhoz kötöttek
Route::middleware(['auth'])->group(function () {
    // képfeltöltéshez
    Route::post('/imageUpload', [Controllers\ImageController::class, 'store'])->name('imageUpload');
    
    // publikálni egy bejegyzést
    Route::get('/publish', [Controllers\PostController::class, 'create'])->name('portfolio.add');
    Route::post('/publish', [Controllers\PostController::class, 'store']);

    // módosítani egy bejegyzést
    Route::get('/post/{post}/edit', [Controllers\PostController::class, 'edit'])->name('portfolio.edit');
    Route::post('/post/{post}/edit', [Controllers\PostController::class, 'update']);

    // publikálni egy kommentet
    Route::post('/post/{post}/comment', [Controllers\PostController::class, 'comment'])->name('portfolio.comment');

    // publikálni egy cv elemet
    Route::get('/cvAdd', [Controllers\CvEntryController::class, 'create'])->name('cv.add');
    Route::post('/cvAdd', [Controllers\CvEntryController::class, 'store']);
});

require __DIR__.'/auth.php';