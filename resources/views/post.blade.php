@extends('layouts.layout')
@section('content')
<article>
  <h2>{{$post->title}}</h2>
  <div class="category">
    <p>Category : <a href="/category/{{$category->slug}}">{{$category->name}}</a></p>
  </div>
  <h5>posted at: {{$post->updated_at}}</h5>
  <p>{!!$post->body!!}</p>
  <a id="backbtn" href="/posts">Back</a>
</article>
@endsection