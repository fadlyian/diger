<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/discover', function () {
    return Inertia::render('Discover', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('discover');

Route::get('/pricing', function () {
    return Inertia::render('Pricing', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('pricing');

// ALL PRODUCT
// Route::get('/product', function () {
//     return Inertia::render('Product', [
//         'products' => Product::all(),
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/product',[ProductController::class, 'index']);

// DETAIL PRODUCT
// Route::get('/product/{id}', function () {
//     return Inertia::render('DetailProduct');
// })->name('product.detail');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');

// Route::get('/cart', function () {
//     return Inertia::render('Cart');
// })->middleware(['auth', 'verified'])->name('cart');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/pesanan', function () {
    return Inertia::render('Pesanan');
})->middleware(['auth', 'verified'])->name('pesanan');
Route::get('/laporan', function () {
    return Inertia::render('Laporan');
})->middleware(['auth', 'verified'])->name('laporan');
Route::get('/pengaturan', function () {
    return Inertia::render('Pengaturan');
})->middleware(['auth', 'verified'])->name('pengaturan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
});

require __DIR__.'/auth.php';