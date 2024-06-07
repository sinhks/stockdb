<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Product;
use App\Models\Inventory;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories=Inventory::all();
        return view('inventories.index',compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $products = Product::all();
        $orders = Orders::all();
        return view('inventories.create', compact( 'products','orders'));
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
            'product_id'=>'required|exists:products,id',
            'order_id'=>'required|exists:orders,id',
            'quantity'=>'required|numeric',
        ]);

        Inventory::create($request->all());

        return redirect()->route('inventories.create')->with('success', 'Inventory created successfully.');
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
        $inventory = Inventory::findOrFail($id);
        $products=Product::all();
        $orders=Orders::all();
        return view('inventories.edit', compact('inventory', 'products', 'orders')); 
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
            'product_id'=>'required|exists:products,id',
            'order_id'=>'required|exists:orders,id',
            'quantity'=>'required|numeric',
        ]);

        $inventory = Inventory::findOrFail($id); // Retrieve the suppliers by its ID or fail
        $inventory->update($request->all()); // Update the suppliers with the new data

        return redirect()->route('inventories.index')->with('success', 'Inventory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id); // Find the product by ID or fail
        $inventory->delete(); // Delete the product

        return redirect()->route('inventories.index')->with('success', 'Inventory deleted successfully.');
    }
}
