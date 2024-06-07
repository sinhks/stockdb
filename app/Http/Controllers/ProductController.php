<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Suppliers;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products=Product::all();
       return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Suppliers::all();
        return view('products.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_code'=>'required|numeric',
            'product_name'=>'required|string',
            'category_id'=>'required|exists:categories,id',
            'supplier_id'=>'required|exists:suppliers,id',
            'unit_price'=>'required|numeric',
            'units_in_stock'=>'required|numeric',
            'discount'=>'required|numeric',
            'status'=>'required|string',
        ]);

        Product::create($request->all());

        return redirect()->route('products.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories=Category::all();
        $suppliers=Suppliers::all();
        return view('products.edit', compact('product', 'categories', 'suppliers')); // Pass the product data to the view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_code'=>'required|numeric',
            'product_name'=>'required|string',
            'category_id'=>'required|exists:categories,id',
            'supplier_id'=>'required|exists:suppliers,id',
            'unit_price'=>'required|numeric',
            'units_in_stock'=>'required|numeric',
            'discount'=>'required|numeric',
            'status'=>'required|string',
        ]);

        $product = Product::findOrFail($id); // Retrieve the suppliers by its ID or fail
        $product->update($request->all()); // Update the suppliers with the new data

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id); // Find the product by ID or fail
        $product->delete(); // Delete the product

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
