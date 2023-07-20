<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
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

// Halaman Utama
Route::get('/', [MainController::class ,'index'])->name('home');
Route::get('/pricing', [MainController::class ,'pricing'])->name('pricing');
Route::get('/discover',[MainController::class, 'discover'])->name('discover');
Route::get('/discover/{id}', [MainController::class, 'show'])->name('product.detail');

Route::get('/allProduct', [MainController::class, 'AllProduct'])->name('allProduct');

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
// Route::get('/product',[ProductController::class, 'index']);

// DETAIL PRODUCT
// Route::get('/product/{id}', function () {
//     return Inertia::render('DetailProduct');
// })->name('product.detail');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/produk', function () {
    return Inertia::render('Produk');
})->middleware(['auth', 'verified'])->name('produk');
Route::get('/pustaka', function () {
    return Inertia::render('Pustaka');
})->middleware(['auth', 'verified'])->name('pustaka');
Route::get('/pengaturan', function () {
    return Inertia::render('Setting');
})->middleware(['auth', 'verified'])->name('pengaturan');

Route::get('/admin', function () {
    return Inertia::render('Admin/Beranda');
})->middleware(['auth', 'verified'])->name('admin.beranda');
Route::get('/admin/pesanan', function () {
    return Inertia::render('Admin/Pesanan');
})->middleware(['auth', 'verified'])->name('admin.pesanan');
Route::get('/admin/laporan', function () {
    return Inertia::render('Admin/Laporan');
})->middleware(['auth', 'verified'])->name('admin.laporan');
Route::get('/admin/pengaturan', function () {
    return Inertia::render('Admin/Pengaturan');
})->middleware(['auth', 'verified'])->name('admin.pengaturan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');

    // dashboard
    Route::get('/myProduct', [ProfileController::class, 'myProduct'])->name('myProduct');
});

require __DIR__.'/auth.php';