<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        return Inertia::render('Dashboard');
    }

    public function myProduct(){
        $product = Product::where('user_id', Auth::user()->id)->get();
        $categories = Category::all();

        return Inertia::render('MyProduct', [
            'products' => $product,
            'categories' => $categories,
        ]);
    }

    public function pustaka(){
        return Inertia::render('Pustaka');
    }

    public function pengaturan(){
        return Inertia::render('Profile/Edit');
    }
}
