<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Inertia::render('myProduct', [
        //     'categories' => Category::all(),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return Inertia::render('Admin/Categories/CreateCategories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        // return $request['categories'];
        Product::create([
            "user_id" => Auth::user()->id,
            "category_id" => $request['category'],
            "name" => $request['name'],
            "image" => $request['productImage'],
            "file" => $request['productFile'],
            "price" => $request['price'],
            "type" => NULL ,
            "sizeFile" => NULL ,
            "description" => $request['description']


        ]);
        // dd($request);
        return to_route('myProduct');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }


}
