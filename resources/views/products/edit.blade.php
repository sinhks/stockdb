@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST" class="card p-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="code">Product code:</label>
                <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}" required>
            </div>
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{$product->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Supplier:</label>
                <select name="supplier_id" class="form-control" required>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>{{ $supplier->supplier_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="price">Unit Price:</label>
                <input type="text" name="unit_price" class="form-control"  value="{{ $product->unit_price }}" required>
            </div>
            <div class="form-group">
                <label for="price">Unit in Stock:</label>
                <input type="text" name="units_in_stock" class="form-control"  value="{{ $product->units_in_stock }}" required>
            </div>
            <div class="form-group">
                <label for="price">Discount:</label>
                <input type="text" name="discount" class="form-control"  value="{{ $product->discount }}" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $product->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="active" {{ $product->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $product->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection