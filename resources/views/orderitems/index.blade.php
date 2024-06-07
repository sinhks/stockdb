@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <div class="fs-2 float-start">Order Item</div>
        <div class="float-end mt-2 mb-4">
            <a href="{{route('orderitems.create')}}" class="btn btn-success">Create New orderItem</a>
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
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($ordersitem as $orderitem)
                <tr>
                    <td>{{$orderitem->id}}</td>
                    <td>{{$orderitem->order_id}}</td>
                    <td>{{$orderitem->product_id}}</td>
                    <td>{{$orderitem->quantity}}</td>
                    <td>{{$orderitem->price}}</td>
                    <td>
                    <form action="{{route('orderitems.destroy',$orderitem->id)}}" method="POST">
                            
                            <a href="{{route('orderitems.edit',$orderitem->id)}}" class="btn btn-info">Edit</a>
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