@extends('layout.blog')
@section('content')
<br>
<a href="{{route('posts.create')}}" class="btn btn-info">Back</a>
    <div class="card mt-2">
        <div class="card-body">
        <h2>{{$post->title}}</h2>
        <p>{!!$post->description!!}</p>
        </div>
        <div class="card-footer text-right">
            <p>Post date:{{$post->created_at}}</p>
        </div>
    </div>
@endsection