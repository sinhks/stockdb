@extends('layouts.master')
@section('content')

<div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <div class="float-start fs-2">Customer</div>
    <div class="float-end mt-2 mb-4">
        <a href="{{route('customers.create')}}" class="btn btn-success">Create New Customer</a>
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
                    <th>Name</th>
                    <th>Contact Name</th>
                    <th>Contact Title</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Region</th>
                    <th>Postal code</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->contact_name }}</td>
                        <td>{{ $customer->contact_title }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->region }}</td>
                        <td>{{ $customer->postal_code }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <form action="{{route('customers.destroy',$customer->id)}}" method="POST">
                            
                                <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-info">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
    
@endsection