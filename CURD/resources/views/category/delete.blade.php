@extends('layouts.app')
@section('title')
    Delete  {{ $cat->id }}
@endsection
@section('content')
    <h1>Chac Chan Xóa : {{$cat->Name}}</h1>

        <form name="des" action="{{url('/category/destroy/'.$cat->id)}}" method="post">

            @csrf
            <input type="submit" value="Xóa Ngay" class="btn btn-warning">
        </form>
@endsection