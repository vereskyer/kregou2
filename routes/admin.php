<?php

use App\Models\Shoporder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoporderController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\WebsiteController;
use App\Http\Controllers\Backend\BandsaleController;
use App\Http\Controllers\Backend\BuildingController;
use App\Http\Controllers\Backend\GooditemController;
use App\Http\Controllers\Backend\SiteorderController;
use App\Http\Controllers\Backend\AdminOrderController;
use App\Http\Controllers\Backend\StoreImageController;
use App\Http\Controllers\Backend\KoreanArticleController;

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
Route::post('store/{store}/images', [StoreController::class, 'storeImage'])->name('store.images');

// profile routes
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

// shop orders routes  
Route::get('/shoporder', [ShoporderController::class, 'index'])->name('shoporder.index');
Route::get('/shoporder/{shoporder}/edit', [ShoporderController::class, 'edit'])->name('shoporder.edit');
Route::put('/shoporder/{shoporder}/update', [ShoporderController::class, 'update'])->name('shoporder.update');

// articles routes
Route::get('/articles', [KoreanArticleController::class, 'index'])->name('articles');
Route::get('/articles/create', [KoreanArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [KoreanArticleController::class, 'store'])->name('articles.store');

// users routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

// user money routes
Route::post('user/{id}/deposit', [UserController::class, 'deposit'])->name('users.deposit');
Route::post('user/{id}/force-withdraw', [UserController::class, 'forceWithdraw'])->name('users.force-withdraw');

// building routes
Route::get('/buildings', [BuildingController::class, 'index'])->name('buildings.index');
Route::get('/buildings/{id}/edit', [BuildingController::class, 'edit'])->name('buildings.edit');
Route::put('/buildings/{id}/update', [BuildingController::class, 'update'])->name('buildings.update');

// website routes
Route::get('/websites', [WebsiteController::class, 'index'])->name('websites.index');
Route::get('/websites/create', [WebsiteController::class, 'create'])->name('websites.create');
Route::post('/websites/store', [WebsiteController::class, 'store'])->name('websites.store');
Route::put('/websites/{website}/update', [WebsiteController::class, 'update'])->name('websites.update');

// good items routes
Route::get('/gooditems', [GooditemController::class, 'index'])->name('gooditems.index');
Route::get('/gooditems/create', [GooditemController::class, 'create'])->name('gooditems.create');
Route::post('/gooditems/store', [GooditemController::class, 'store'])->name('gooditems.store');
// ckeditor image upload
Route::post('/gooditems/upload', [GooditemController::class, 'upload'])->name('ckeditor.upload');

// site orders routes
Route::get('/siteorder', [SiteorderController::class, 'index'])->name('siteorder.index');
Route::get('/siteorder/{id}/edit', [SiteorderController::class, 'edit'])->name('siteorder.edit');
// Route::post('/siteorder/store', [SiteorderController::class, 'store'])->name('siteorder.store');
Route::post('/siteorder/{id}/update', [SiteorderController::class, 'update'])->name('siteorder.update');

// bandsales routes
Route::get('/bandsales', [BandsaleController::class, 'index'])->name('bandsales.index');
Route::get('/bandsales/create', [BandsaleController::class, 'create'])->name('bandsales.create');
Route::post('/bandsales/store', [BandsaleController::class, 'store'])->name('bandsales.store');

// Products routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

// cart routes
Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('orders.show');
Route::put('/orders/{order}', [AdminOrderController::class, 'update'])->name('orders.update');
Route::get('/orders/{order}/preview', [AdminOrderController::class, 'getOrderDetails'])->name('orders.preview');
