@extends('layouts.master')
@section('content')

<div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <div class="float-start fs-2">Category</div>
    <div class="float-end mt-2 mb-4">
        <a href="{{route('categories.create')}}" class="btn btn-success">Create New Category</a>
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
                    <th>Description</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->status }}</td>
                        <td>
                            <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                            
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Edit</a>
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