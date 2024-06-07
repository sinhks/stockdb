@extends('layouts.master')
@section('content')
    <div class="col-10">
        <div class=" fs-2 mb-3">Create Shopping Card</div>

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
    <form action="{{ route('shopping.store') }}" method="POST" class="card p-5">
            @csrf
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="customer_id" class="form-control" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->customer_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="code">Quantity:</label>
                <input type="number" name="quantity" class="form-control" value="{{ old('quantity')}}" required>
            </div>
           
            
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>

    </div>
@endsection