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


        $image_path = '';
        $file_path = '';
        $file_type='';
        $file_size='';

        // dd($request->file('productFile')->getSize());
        // return $request['image'];
        if($request->hasFile('productImage')) {
            $image_path = $request->file('productImage')->store('image', 'public');
        };

        if($request->hasFile('productFile')){
            $file_path = $request->file('productFile')->store('file', 'public');
            $file_type = $request->file('productFile')->getClientOriginalExtension();
            $file_size = $request->file('productFile')->getSize();
        };
        Product::create([
            "user_id" => Auth::user()->id,
            "category_id" => $request['category'],
            "name" => $request['name'],
            "image" => $image_path,
            "file" => $file_path,
            "price" => $request['price'],
            "type" => $file_type ,
            "sizeFile" => $file_size,
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
        Product::find($id)->delete();

        return to_route('myProduct');
    }


}
