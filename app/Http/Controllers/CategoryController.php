<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Categories/index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Categories/CreateCategories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request->hasFile('image');
        $request->validate([
            'categories' => '',
            'description' => '',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan kebutuhan Anda
        ]);

        $category = new Category();
        $category->name = $request->categories;
        $category->description = $request->description;

            // Upload gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public'); // Simpan di folder 'categories' dalam direktori 'public'
            $category->image = $imagePath;
        }

        // dd($request);
        return to_route('admin.categories');
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
        $d = Category::findOrFail($id)->delete();

        return to_route('admin.categories');
    }
}