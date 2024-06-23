<?php

use App\Models\Bandsale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\KoreanController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\BandsaleController;
use App\Http\Controllers\Frontend\GoodItemsController;
use App\Http\Controllers\Backend\KoreanArticleController;
use App\Http\Controllers\Frontend\StoreController as FrontendStoreController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', [GoodItemsController::class, 'homeWelcome'])->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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

// good items frontend
Route::get('good-items', [GoodItemsController::class, 'index'])->name('good-items.index');
// good items show detail page
Route::get('/good-items/{gooditem}', [\App\Http\Controllers\Frontend\GoodItemsController::class, 'show'])->name('good-items.show');

// band sales frontend
Route::get('band-sales', [BandsaleController::class, 'index'])->name('band-sales.index');
// band sales show detail page
Route::get('/band-sales/{bandsale}', [BandsaleController::class, 'show'])
    ->middleware('auth', 'roles:bandsale')->name('band-sales.show');

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
    ->middleware('auth', 'roles:vipstore')->name('all-stores');

    // all buildings
Route::get('all-buildings', [FrontendStoreController::class, 'allBuildings'])->name('all-buildings');

// store images
Route::get('/store-images', [\App\Http\Controllers\Frontend\StoreController::class, 'storeImages'])
    ->name('store-images');

// 東大門取貨訂單介紹
Route::get('dongdaemun-pickup', function () {
    return view('frontend.dongdaemun-pickup');
})->name('dongdaemun-pickup');

// 前臺展示websites
Route::get('websites', [\App\Http\Controllers\Backend\WebsiteController::class, 'showWebsiteFrontend'])->name('websites.frontend');

// 韓國代購介紹
Route::get('hanguodaigou', function () {
    return view('frontend.hanguodaigou');
})->name('hanguodaigou');

// 韓國ems
Route::get('korean-ems', function () {
    return view('frontend.ems');
})->name('korean-ems');

// 韓國->臺灣/香港->空運/海運
Route::get('taiwan-hongkong-freight', function () {
    return view('frontend.taiwan-hongkong');
})->name('taiwan-hongkong-freight');

// products routes
Route::get('all-products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

// cart routes
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
// Route::post('cart/{product}', [CartController::class, 'update'])->name('cart.update');
// Route::delete('cart/{product}', [CartController::class, 'remove'])->name('cart.remove');
// Route::post('cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
// Route::get('cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

Route::post('/cart/submit-order', [CartController::class, 'submitOrder'])->name('cart.submit-order');



Route::get('/sitemap', function () {
    $sitemap = Sitemap::create();

    // 获取所有 GET 路由
    $routes = Route::getRoutes();

    foreach ($routes as $route) {
        if ($route->methods()[0] === 'GET' && !in_array('admin', $route->middleware())) {
            $sitemap->add(Url::create($route->uri())->setPriority(0.8));
        }
    }

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated!';
});

