@extends('layouts.app')
@section('title')
    Comment
@endsection
@section('content')
    <a href="{{url('/product')}}">
        <button class="btn btn-success">Products View</button>
    </a>
    <h2>
        Comment For Product {{$pro->name}}
    </h2>
    <table class="table table-hover table-striped">
        <tbody>

        @foreach($coms as $com )
            <tr>
                <td>{{$com->id}}</td>
                <td class="font-weight-bold">{{$com->Title}}</td>
                <td>{{$com->content}}</td>
            </tr>
        @endforeach

        </tbody>

    </table>
    <form action="{{url('comment/'.$pro->id.'/post')}}" method="post">
        <label for="" class="col-md-3">
            Title:
            <input type="text" name="title" class="form-control">
        </label>
        <label for="" class="col-md-12">
            Content:
            <input type="text" name="content" class="form-control">
        </label>
        <label for="" class="col-md-2">
            <button type="submit" class="btn btn-success">Post</button>
        </label>
        @csrf
    </form>
@endsection