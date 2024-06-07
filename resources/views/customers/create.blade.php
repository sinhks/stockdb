@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <h2>Create New Customer</h2>

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

<form action="{{ route('customers.store') }}" method="POST" class="card p-5">
    @csrf
    <div class="form-group">
        <label for="name">Customer Name:</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ old('customer_name') }}">
    </div>
    <div class="form-group">
        <label for="name">Contact Name:</label>
        <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}">
    </div>
    <div class="form-group">
        <label for="name">Contact title:</label>
        <input type="text" class="form-control" id="contact_title" name="contact_title" value="{{ old('contact_title') }}">
    </div>
   
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address">{{ old('address') }}</textarea>
    </div>
    <div class="form-group">
        <label for="name">City:</label>
        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
    </div>
    <div class="form-group">
        <label for="region">Region:</label>
        <input type="text" class="form-control" id="region" name="region" value="{{ old('region') }}">
    </div>
    <div class="form-group">
        <label for="postal_code">postal code:</label>
        <input type="number" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code') }}">
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
    </div>
    <div class="form-group">
        <label for="phone">phone:</label>
        <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('customers.index')}}" class="btn btn-info mt-2">Show Customer</a>
</form>
    </div>
@endsection