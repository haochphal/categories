@extends('layout.blog')
@section('content')
@foreach ($posts as $item)
    
    <div class="card mt-2">
        <div class="card-body">
        <small class="text-left">{{$item->created_at->diffForHumans()}}</small>
        <h1>{{$item->title}}</h1>
        <p>{!!$item->description!!}</p>
        </div>
        <div class="card-footer text-right">
        <form action="{{route('posts.destroy',$item->id)}}" method="POST">
            @csrf
            @method('delete')
                <a href="{{route('posts.show',$item->id)}}" class="btn btn-info btn-sm">View</a>
                <a href="{{route('posts.edit',$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    </div>
@endforeach
@endsection