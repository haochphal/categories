@extends('layout.blog')
@section('content')
<br>
<h2 class="text-center">Creat Psot</h2>
<hr>

<form action="{{route('posts.store')}}" method="post">
    @csrf
       <div class="form-group">
           <input type="text" name="title" id="" class="form-control">
       </div>
       <div class="form-group">
           <textarea name="description" id="article-ckeditor" cols="10" rows="5" class="form-control"></textarea>
       </div>
       <div class="form-group">
            <button class="btn btn-primary" type="submit">Create Psot</button>
       </div>
   </form>
@endsection