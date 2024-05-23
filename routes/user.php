<?php

use App\Models\Shoporder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoporderController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WordController;
use App\Http\Controllers\Backend\ProfileController;

// user dashboard sidebar
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');


// profile routes
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile/update', [UserController::class, 'update'])->name('profile.update');
Route::post('/profile/update/password', [UserController::class, 'updatePassword'])->name('password.update');

// shop orders routes  
Route::get('/shoporder', [UserController::class, 'shoporder'])->name('shoporder.index');
Route::get('/shoporder/create', [ShoporderController::class, 'create'])->name('shoporder.create');
Route::post('/shoporder/store', [ShoporderController::class, 'store'])->name('shoporder.store');

// name card
Route::get('/namecard', [UserController::class, 'namecard'])->name('namecard');

// user dashboard korean
Route::get('/korean', [UserController::class, 'korean'])->name('korean');

// user word routes
Route::get('/text', [WordController::class, 'showText']);
Route::post('/add-word', [WordController::class, 'addWord']);
Route::get('/words', [WordController::class, 'showWords']);
