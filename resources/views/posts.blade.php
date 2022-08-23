@extends('layouts/layout')
@section('content')
@foreach($posts as $post)
<article>
  <a href="/post/{{$post->slug}}">
    <h2>{{$post->title}}</h2>
  </a>
  <h5>posted at: {{$post->updated_at}}</h5>
  <p>{{$post->excerpt}}</p>
</article>
@endforeach
@endsection