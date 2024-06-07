@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Edit order</h1>
        <form action="{{ route('orders.update',$order->id) }}" method="POST" class="card p-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="customer_id" class="form-control" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{$order->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->customer_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="code">Ship Address:</label>
                <input type="text" name="ship_address" class="form-control" value="{{ $order->ship_address }}" required>
            </div>
            <div class="form-group">
                <label for="name">Total amount:</label>
                <input type="text" name="total_amount" class="form-control" value="{{ $order->total_amount }}" required>
            </div>
            
            
            <div class="form-group">
                <label for="price">Payment method:</label>
                <input type="text" name="payment_method" class="form-control"  value="{{ $order->payment_method }}" required>
            </div>
            <div class="form-group">
                <label for="price">Billing address:</label>
                <input type="text" name="billing_address" class="form-control"  value="{{ $order->billing_address }}" required>
            </div>
            <div class="form-group">
                <label for="price">Shipping address:</label>
                <input type="text" name="shipping_address" class="form-control"  value="{{ $order->shipping_address }}" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="active" {{ $order->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $order->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            
            
        </form>
    </div>
@endsection