<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Product;
use App\Models\OrderItem;
class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordersitem=OrderItem::all();

        return view('orderitems.index',compact('ordersitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Orders::all();
        $products = Product::all();
        return view('orderitems.create', compact('orders', 'products'));
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
            'order_id'=>'required|exists:orders,id',
            'product_id'=>'required|exists:products,id',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
        ]);

        OrderItem::create($request->all());

        return redirect()->route('orderitems.create')->with('success', 'OrderItem created successfully.');
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
        $orderitem = OrderItem::findOrFail($id);
        $orders=Orders::all();
        $products=Product::all();
        return view('orderitems.edit', compact('orderitem', 'orders', 'products')); 
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
            'order_id'=>'required|exists:orders,id',
            'product_id'=>'required|exists:products,id',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
        ]);

        $orderitem = OrderItem::findOrFail($id); // Retrieve the suppliers by its ID or fail
        $orderitem->update($request->all()); // Update the suppliers with the new data

        return redirect()->route('orderitems.index')->with('success', 'Order item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $orderitem = OrderItem::findOrFail($id); // Find the product by ID or fail
        $orderitem->delete(); // Delete the product

        return redirect()->route('orderitems.index')->with('success', 'order item deleted successfully.');
    }
}
