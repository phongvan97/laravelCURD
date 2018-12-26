@extends('layouts.app')
@section('title')
    Delete  {{ $pro->id }}
@endsection
@section('content')
    <h1>Chac Chan Xóa Pro: {{$pro->name}}</h1>

    <form name="des" action="{{url('/product/destroy/'.$pro->id)}}" method="post">

        @csrf
        <input type="submit" value="Xóa Ngay" class="btn btn-warning">
    </form>
@endsection