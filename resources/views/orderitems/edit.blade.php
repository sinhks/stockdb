@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Edit OrderItem</h1>
        <form action="{{ route('orderitems.update', $orderitem->id) }}" method="POST" class="card p-5">
            @csrf
            @method('PUT')
           
            <div class="form-group">
                <label for="order_id">Order:</label>
                <select name="order_id" class="form-control" required>
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" {{$orderitem->order_id == $order->id ? 'selected' : '' }}>{{ $order->shipping_address }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $orderitem->product_id == $product->id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity :</label>
                <input type="text" name="quantity" class="form-control" value="{{ $orderitem->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" value="{{ $orderitem->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
@endsection