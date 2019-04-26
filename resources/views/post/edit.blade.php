@extends('layout.blog')
@section('content')
<br>
<h1>Edit Post</h1>
<hr>
<form action="{{route('posts.update',$post->id)}}" method="post">
    @csrf
    @method('put')
       <div class="form-group">
       <input type="text" name="title" id="" class="form-control" value="{{$post->title}}">
       </div>
       <div class="form-group">
       <textarea name="description" id="article-ckeditor" cols="10" rows="5" class="form-control">{{$post->description}}</textarea>
       </div>
       <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
       </div>
   </form>
@endsection