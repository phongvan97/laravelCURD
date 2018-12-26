@extends('layouts.app')
@section('title')
    Add
@endsection
@section('content')
    <form name="submit-category"  action="{{url('/category')}}" method="post">
        <label for="" class="col-md-4">
            Name:
            <input type="text" name="Name" class="form-control">
        </label>
        @csrf
        <input type="submit" value="Save" class="btn btn-success">
    </form>
@endsection