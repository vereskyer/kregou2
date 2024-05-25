<?php

use App\Models\Shoporder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoporderController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\KoreanArticleController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;

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
Route::get('/shoporder', [ShoporderController::class, 'index'])->name('shoporder.index');

// articles routes
Route::get('/articles', [KoreanArticleController::class, 'index'])->name('articles');
Route::get('/articles/create', [KoreanArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [KoreanArticleController::class, 'store'])->name('articles.store');

// users routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');