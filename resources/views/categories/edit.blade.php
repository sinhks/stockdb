@extends('layouts.master')
@section('content')

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="card p-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}" required>
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" name="description" class="form-control" value="{{ $category->description }}" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $category->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="active" {{ $category->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $category->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection