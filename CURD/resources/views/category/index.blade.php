@extends('layouts.app')
@section('title')
    Danh Sach Category
@endsection
@section('content')
    <h2>
        <a href="{{url('category/create')}}" class="btn btn-success">Add Category</a>
        <a href="{{url('product')}}" class="btn btn-success">Products</a>
    </h2>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>

            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($cats as $cat )
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->Name}}</td>
                <td>
                    <a href="{{url('category/'.$cat->id.'/edit')}}" class="btn btn-success">Edit</a>
                    <a href="{{url('category/'.$cat->id.'/delete')}}" class="btn btn-warning">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection