<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
class CustomerController extends Controller
{
    public function index(){
        $customers=Customers::all();
        return view('customers.index', compact('customers'));
    }
   public function create(){
    return view('customers.create');
   }

   public function store(Request $request){

        $request->validate([
            'customer_name' => 'required|string',
            'contact_name' => 'required|string',
            'contact_title' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'region' => 'required|string',
            'postal_code' => 'required|numeric',
            'country' => 'required|string',
            'phone' => 'required|numeric',
        ]);

        
        Customers::create($request->all());

        return redirect()->route('customers.create')->with('success', 'Customers created successfully');
   }

   public function edit($id){
    $customer=Customers::findOrFail($id);
    return view('customers.edit',compact('customer'));
   }

   public function update(Request $request, $id){
     $request->validate([
        'customer_name'=>'required|string',
        'contact_name' => 'required|string',
        'contact_title' => 'required|string',
        'address' => 'required|string',
        'city' => 'required|string',
        'region' => 'required|string',
        'postal_code' => 'required|numeric',
        'country' => 'required|string',
        'phone' => 'required|numeric',
     ]);

     $customer = Customers::findOrFail($id);

     $customer->update($request->all());

     return redirect()->route('customers.index')->with('success', 'customers updated successfully.');
   }
   public function destroy($id)
    {
        $customer = Customers::findOrFail($id); // Find the product by ID or fail
        $customer->delete(); // Delete the product

        return redirect()->route('customers.index')->with('success', 'customers deleted successfully.');
    }
}
