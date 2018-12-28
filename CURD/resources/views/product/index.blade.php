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
            <th>Quality</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\Cart::getContent() as $cart)
        <tr>
            <td>{{$cart->id}}</td>
            <td>{{$cart->name}}</td>
            <td>{{$cart->quantity}}</td>
            <td>{{$cart->price}}</td>
            <td>{{$cart->getPriceSum()}}</td>
            <td><a href="{{url('/product/DeleteCart/'.$cart->id)}}" class="btn btn-dark">Xóa</a></td>
        </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Thành Tiền: {{\Cart::getSubTotal()}}</h5>
    <br>
    <h2>Product</h2>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Cate</th>
            <th>Price</th>
            <th>Action</th>
            <th>Cart</th>
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
                <td>
                    <div class="form-inline">
                        <form action="{{url('/product/AddCart/'.$product->id)}}" method="post">
                            <input type="number" class="form-control " name="quality" min="1" value="1" style="width: 100px">
                            <button type="submit" class="btn btn-primary">Add To Cart</button>
                            @csrf
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection