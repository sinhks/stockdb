@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Create Order</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <form action="{{ route('orders.store') }}" method="POST" class="card p-5">
            @csrf
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="customer_id" class="form-control" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="code">Ship Address:</label>
                <input type="text" name="ship_address" class="form-control" value="{{ old('ship_address')}}" required>
            </div>
            <div class="form-group">
                <label for="name">Total amount:</label>
                <input type="number" name="total_amount" class="form-control" value="{{ old('total_amount')}}" required>
            </div>
            
            
            <div class="form-group">
                <label for="price">Payment method:</label>
                <input type="number" name="payment_method" class="form-control"  value="{{ old('payment_method')}}" required>
            </div>
            <div class="form-group">
                <label for="price">Billing address:</label>
                <input type="number" name="billing_address" class="form-control"  value="{{ old('billing_address')}}" required>
            </div>
            <div class="form-group">
                <label for="price">Shipping address:</label>
                <input type="number" name="shipping_address" class="form-control"  value="{{ old('shipping_address')}}" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('orders.index')}}" class="btn btn-info mt-2">Show Order</a>
            
        </form>
    </div>
@endsection