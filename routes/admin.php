<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Backend\ProfileController;

// admin dashboard sidebar
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/forms', [AdminController::class, 'forms'])->name('forms');
Route::get('/buttons', [AdminController::class, 'buttons'])->name('buttons');
Route::get('/cards', [AdminController::class, 'cards'])->name('cards');
Route::get('/charts', [AdminController::class, 'charts'])->name('charts');
Route::get('/modals', [AdminController::class, 'modals'])->name('modals');
Route::get('/tables', [AdminController::class, 'tables'])->name('tables');

// Store routes
Route::resource('store', StoreController::class);

// profile routes
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

// shop orders routes  