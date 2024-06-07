<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customers;
class OrdertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Orders::all();
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customers::all();
        return view('orders.create',compact('customers'));
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
            'customer_id'=>'required|exists:customers,id',
            'ship_address'=>'required|numeric',
            'total_amount'=>'required|numeric',
            'payment_method'=>'required|numeric',
            'billing_address'=>'required|numeric',
            'shipping_address'=>'required|numeric',
            'status'=>'required|string',
            
        ]);
        Orders::create($request->all());

        return redirect()->route('orders.create')->with('success', 'Order created successfully.');
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
        $order = Orders::findOrFail($id);
        $customers = Customers::all();
        return view('orders.edit',compact('order','customers'));
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
            'customer_id'=>'required|exists:customers,id',
            'ship_address'=>'required|numeric',
            'total_amount'=>'required|numeric',
            'payment_method'=>'required|numeric',
            'billing_address'=>'required|numeric',
            'shipping_address'=>'required|numeric',
            'status'=>'required|string',
            
        ]);

        $order = Orders::findOrFail($id); // Retrieve the suppliers by its ID or fail
        $order->update($request->all()); // Update the suppliers with the new data

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Orders::findOrFail($id); // Find the or$order by ID or fail
        $order->delete(); // Delete the or$order

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
