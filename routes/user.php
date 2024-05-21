<?php

use App\Models\Shoporder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoporderController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\ProfileController;

// admin dashboard sidebar
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/forms', [UserController::class, 'forms'])->name('forms');
Route::get('/buttons', [UserController::class, 'buttons'])->name('buttons');
Route::get('/cards', [UserController::class, 'cards'])->name('cards');
Route::get('/charts', [UserController::class, 'charts'])->name('charts');
Route::get('/modals', [UserController::class, 'modals'])->name('modals');
Route::get('/tables', [UserController::class, 'tables'])->name('tables');

// Store routes
Route::resource('store', StoreController::class);

// profile routes
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

// shop orders routes  
Route::get('/shoporder', [ShoporderController::class, 'index'])->name('shoporder.index');