@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <div>
        <div class="fs-2 float-start">Product</div>
        <div class="float-end mt-2 mb-4">
            <a href="{{route('products.create')}}" class="btn btn-success">Create New Product</a>
        </div>
        </div><br><br>
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
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Code</th>
                    <th>Porduct Name</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Unit Price</th>
                    <th>Unit in Stock</th>
                    <th>Discount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_code }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->supplier_id }}</td>
                        <td>{{ $product->unit_price }}</td>
                        <td>{{ $product->units_in_stock }}</td>
                        <td>{{ $product->discount }}</td>
                        <td>{{ $product->status}}</td>
                        <td>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-info">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection