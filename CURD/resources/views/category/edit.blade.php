@extends('layouts.app')
@section('title')
    Edit for {{ $cat->id }}
@endsection
@section('content')
    <form action="{{url('/category/update/'. $cat->id )}} " method="post">
        <label for="" class="col-md-4">
            Name:
            <input type="text" name="Name" class="form-control" value="{{$cat->Name}}">
        </label>
        @csrf
        <input type="submit" value="Save" class="btn btn-success">
    </form>
@endsection