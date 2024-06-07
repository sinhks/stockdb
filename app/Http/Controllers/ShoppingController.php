<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Product;
use App\Models\Shopping;
class ShoppingController extends Controller
{
   public function create(){
    $customers=Customers::all();
    $products=Product::all();
    return view('shopping.create',compact('customers','products'));
   } 

   public function store(Request $request){
    $request->validate([
        'customer_id'=>'required|exists:customers,id',
        'product_id'=>'required|exists:products,id',
        'quantity'=>'required|numeric',
    ]);

    Shopping::create($request->all());

    return redirect()->route('shopping.create')->with('success','Shopping created successfully');
   }
}
