<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class ProductController extends Controller
{
    // public function index(){
    //     return Inertia::render('Product', [
    //         'products' => Product::all(),
    //         'categories' => Category::all(),
    //         'canLogin' => Route::has('login'),
    //         'canRegister' => Route::has('register'),
    //         'laravelVersion' => Application::VERSION,
    //         'phpVersion' => PHP_VERSION,
    //     ]);
    // }

    // public function show($id){
    //     return Inertia::render('DetailProduct', [
    //         'product' => Product::find($id),
    //     ]);
    // }


}
