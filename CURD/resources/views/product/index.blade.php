@extends('layouts.app')
@section('title')
    Danh Sach Product
@endsection
@section('content')
    <h2>
        <a href="{{url('product/create')}}" class="btn btn-success">Add Product</a>
        <a href="{{url('/')}}" class="btn btn-success">Category View</a>
    </h2>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Cate</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$cateDis[$product->cat_id]->Name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{url('product/'.$product->id.'/edit')}}" class="btn btn-success">Edit</a>
                    <a href="{{url('product/'.$product->id.'/delete')}}" class="btn  btn-danger">Delete</a>
                    <a href="{{url('comment/'.$product->id)}}" class="btn  btn-info">Comment</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection