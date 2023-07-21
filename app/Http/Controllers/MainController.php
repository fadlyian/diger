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
            'products' => Product::with('user')->get(),
            'categories' => Category::all(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function show($id){
        $d = Product::where('id',$id)->with('user')->first();
        // dd($d);
        // return $d;
        return Inertia::render('DetailProduct', [
            'product' => $d,
        ]);
    }

    public function allProduct(){
        return inertia::render('AllProduct', [
            'products' => Product::with('user')->get(),
            'categories' => Category::all(),
        ]);
    }

    public function productByCategory($id){
        $d = Product::where('category_id', $id)->with(['user','category'])->get();
        // dd($d);
        return inertia::render('ProductByCategory', [
            'products' => $d,
            'categories' => Category::all(),
            'judulCategory' => Category::find($id),
        ]);
    }

    public function terms(){
        return inertia::render('Blog/Terms');
    }

    public function privacy(){
        return inertia::render('Blog/Privacy');
    }
}
