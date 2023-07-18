<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CartController extends Controller
{
    public function index(){
        // return Auth::user()->id;

        $cart = Cart::where('user_id', Auth::user()->id)->get();
        // return $cart;
        return Inertia::render('Cart', [
            'products' => Cart::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    public function addToCart($id){
        $product = Product::find($id);

        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
        ]);

        return to_route('cart');
    }
}
