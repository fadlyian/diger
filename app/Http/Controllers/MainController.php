<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index(){
        return Inertia::render('Home', [
            'categories' => Category::all(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'categories' => Category::all(),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function pricing(){
        return Inertia::render('Pricing', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function discover(){
        return Inertia::render('Discover', [
            'products' => Product::all(),
            'categories' => Category::all(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function show($id){
        return Inertia::render('DetailProduct', [
            'product' => Product::find($id),
        ]);
    }

    public function allProduct(){
        return Product::all();
        return inertia::render('allProduct', [
            'products' => Product::get(),
        ]);
    }
}