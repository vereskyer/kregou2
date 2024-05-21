<?php

use App\Http\Controllers\Backend\KoreanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// korean frontend page
Route::get('/korean', [KoreanController::class, 'index'])->name('korean.index');
// korea show on admin page
Route::get('/korean/show', [KoreanController::class, 'show'])->name('korean.show');
// korean store
Route::post('/korean', [KoreanController::class, 'store'])->name('korean.store');
