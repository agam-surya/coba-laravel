@extends('layouts.layout')
@section('content')

<h2>Category :{{$name}}</h2>
@foreach($posts as $post)
<ul>
  <li><a href="/post/{{$post->slug}}">{{$post->title}}</a></li>
</ul>
@endforeach
@endsection