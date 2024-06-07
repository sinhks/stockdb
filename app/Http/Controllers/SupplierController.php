<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;
class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all(); // Retrieve all products from the database
        return view('suppliers.index', compact('suppliers')); // Pass the products to the view
    }
    public function create(){
        return view('suppliers.create');
    }
    public function store(Request $request){
   
        $request->validate([
            'supplier_name' => 'required|string',
            'contact_name' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|numeric',
            'phone' => 'required|numeric',
            'email' => 'required|string', 
        ]);

        Suppliers::create($request->all());

        return redirect()->route('suppliers.create')->with('success', 'Suppliers created successfully');
    }

    public function edit($id)
    {
        $supplier = Suppliers::findOrFail($id); // Retrieve the product by its ID or fail
        return view('suppliers.edit', compact('supplier')); // Pass the product data to the view
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_name' => 'required|string|max:255',
            'contact_name' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|numeric',
            'phone' => 'required|numeric',
            'email' => 'required|string',
        ]);

        $supplier = Suppliers::findOrFail($id); // Retrieve the suppliers by its ID or fail
        $supplier->update($request->all()); // Update the suppliers with the new data

        return redirect()->route('suppliers.index')->with('success', 'suppliers updated successfully.');
    }

    public function destroy($id)
    {
        $supplier = Suppliers::findOrFail($id); // Find the product by ID or fail
        $supplier->delete(); // Delete the product

        return redirect()->route('suppliers.index')->with('success', 'suppliers deleted successfully.');
    }
}
