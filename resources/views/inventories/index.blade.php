@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <div class="fs-2 float-start">Order Item</div>
        <div class="float-end mt-2 mb-4">
            <a href="{{route('inventories.create')}}" class="btn btn-success">Create New orderItem</a>
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
    <table class="table table-striped  text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Order_id</th>
            <th>Product_Name</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{$inventory->id}}</td>
                    <td>{{$inventory->order_id}}</td>
                    <td>{{$inventory->product_id}}</td>
                    <td>{{$inventory->quantity}}</td>
                    
                    <td>
                    <form action="{{route('inventories.destroy',$inventory->id)}}" method="POST">
                            
                            <a href="{{route('inventories.edit',$inventory->id)}}" class="btn btn-info">Edit</a>
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