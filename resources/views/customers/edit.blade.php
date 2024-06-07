@extends('layouts.master')
@section('content')

<div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <h1>Edit Customer</h1>
<form action="{{ route('customers.update',$customer->id) }}" method="POST" class="card p-5">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Customer Name:</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $customer->customer_name }}" require>
    </div>
    <div class="form-group">
        <label for="name">Contact Name:</label>
        <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ $customer->contact_name }}" require>
    </div>
    <div class="form-group">
        <label for="name">Contact title:</label>
        <input type="text" class="form-control" id="contact_title" name="contact_title" value="{{ $customer->contact_title }}" require>
    </div>
   
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" require>{{ $customer->address }}</textarea>
    </div>
    <div class="form-group">
        <label for="name">City:</label>
        <input type="text" class="form-control" id="city" name="city" value="{{ $customer->city }}" require>
    </div>
    <div class="form-group">
        <label for="region">Region:</label>
        <input type="text" class="form-control" id="region" name="region" value="{{ $customer->region }}" require>
    </div>
    <div class="form-group">
        <label for="postal_code">postal code:</label>
        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $customer->postal_code }}" require>
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" name="country" value="{{ $customer->country }}" require>
    </div>
    <div class="form-group">
        <label for="phone">phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" require>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    
</form>
</div>
@endsection