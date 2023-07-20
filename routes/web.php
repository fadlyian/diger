<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

//user
Route::get('/produk', function () {
    return Inertia::render('Produk');
})->middleware(['auth'])->name('produk');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/myProduct', [DashboardController::class, 'myProduct'])->name('myProduct');
    Route::get('/pustaka', [DashboardController::class, 'pustaka'])->name('pustaka');
    Route::get('/pengaturan', [DashboardController::class, 'pengaturan'])->name('pengaturan');


    // ADMIN
    Route::group(['prefix' => 'admin', 'middleware' => 'roles:admin'], function(){
        route::get('/', [AdminController::class, 'index'])->name('admin.beranda');
        route::get('/user', [AdminController::class, 'users'])->name('admin.users');
        route::get('/pengaturan', [AdminController::class, 'pengaturan'])->name('admin.pengaturan');

        //CATEGORIES
        route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
        route::get('/categories/create', [CategoryController::class, 'create'])->name('create.categories');
        //
    });
});

require __DIR__.'/auth.php';
