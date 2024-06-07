@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Create Inventory</h1>

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

        <form action="{{ route('inventories.store') }}" method="POST" class="card p-5">
            @csrf
            
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="order_id">Order:</label>
                <select name="order_id" class="form-control" required>
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}">{{ $order->shipping_address}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="code">Quantity:</label>
                <input type="number" name="quantity" class="form-control" value="{{ old('quantity')}}" required>
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('inventories.index')}}" class="btn btn-info mt-2">Show Inventory</a>
            
        </form>
    </div>
@endsection