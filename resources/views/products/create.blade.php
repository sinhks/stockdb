@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Create Product</h1>

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

        <form action="{{ route('products.store') }}" method="POST" class="card p-5">
            @csrf
            <div class="form-group">
                <label for="code">Product code:</label>
                <input type="number" name="product_code" class="form-control" value="{{ old('product_code')}}" required>
            </div>
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="product_name" class="form-control" value="{{ old('product_name')}}" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Supplier:</label>
                <select name="supplier_id" class="form-control" required>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Unit Price:</label>
                <input type="number" name="unit_price" class="form-control"  value="{{ old('unit_price')}}" required>
            </div>
            <div class="form-group">
                <label for="price">Unit in Stock:</label>
                <input type="number" name="units_in_stock" class="form-control"  value="{{ old('units_in_stock')}}" required>
            </div>
            <div class="form-group">
                <label for="price">Discount:</label>
                <input type="number" name="discount" class="form-control"  value="{{ old('discount')}}" required>
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
            <a href="{{route('products.index')}}" class="btn btn-info mt-2">Show Product</a>
            
        </form>
    </div>
@endsection