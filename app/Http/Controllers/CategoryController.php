<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all(); // Retrieve all products from the database
        return view('categories.index', compact('categories')); // Pass the products to the view
    }

    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        
        $request->validate([
            'category_name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        Category::create($request->all());

        return redirect()->route('categories.create')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id); // Retrieve the product by its ID or fail
        return view('categories.edit', compact('category')); // Pass the product data to the view
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        $category = Category::findOrFail($id); // Retrieve the categories by its ID or fail
        $category->update($request->all()); // Update the categories with the new data

        return redirect()->route('categories.index')->with('success', 'Categories updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id); // Find the product by ID or fail
        $category->delete(); // Delete the product

        return redirect()->route('categories.index')->with('success', 'categories deleted successfully.');
    }
}
