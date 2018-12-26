@extends('layouts.app')
@section('title')
    Add Product
@endsection
@section('content')
    <form name="submit-category"  action="{{url('/product/store')}}" method="post">
        <label for="" class="col-md-4">
            Name:
            <input type="text" name="name" class="form-control">
        </label>
        <label for="" class="col-md-4">
            Price:
            <input type="text" name="price" class="form-control">
        </label>
        <label for="" class="col-md-4">
            Category:
            <select name="cat_id"  class="form-control" style="min-width: 500px">
                <option value="">None</option>
            @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->Name}}</option>
            @endforeach
            </select>
        </label>
        @csrf
        <br>
        <input type="submit" value="Save" class="btn btn-success">
    </form>
@endsection