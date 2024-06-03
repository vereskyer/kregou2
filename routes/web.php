<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Backend\KoreanController;
use App\Http\Controllers\Frontend\GoodItemsController;
use App\Http\Controllers\Backend\KoreanArticleController;
use App\Http\Controllers\Frontend\StoreController as FrontendStoreController;
use App\Http\Controllers\QuestionController;

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


// 定义用于搜索商店的 API 路由
Route::get('/AGWcvMZ/search', [StoreController::class, 'search']);

// image gallery
Route::get('/image-gallery', [KoreanController::class, 'imageGallery'])->name('image-gallery');
Route::get('/image-grid', [\App\Http\Controllers\Frontend\StoreController::class, 'imageGrid'])->name('image-grid');


// front korean article route
Route::get('/korean-article', [KoreanArticleController::class, 'koreanArticle'])->name('korean-article');


Route::get('good-items', [GoodItemsController::class, 'index'])->name('good-items.index');


// storepayment route
Route::get('/front-stores', [\App\Http\Controllers\Frontend\StoreController::class, 'index'])
    ->name('front.stores.index');
Route::get('store/{id}/payment', [\App\Http\Controllers\Frontend\StoreController::class, 'payment'])
    ->name('store.payment');

// 有偿问答
Route::resource('questions', QuestionController::class);

// 一些有用的components
Route::get('/components', function () {
    return view('components');
})->name('components.index');

// all stores
Route::get('all-stores', [FrontendStoreController::class, 'allStores'])
    ->middleware('auth', 'role:vendor')->name('all-stores');

    // all buildings
Route::get('all-buildings', [FrontendStoreController::class, 'allBuildings'])->name('all-buildings');

// store images
Route::get('/store-images', [\App\Http\Controllers\Frontend\StoreController::class, 'storeImages'])
    ->name('store-images');