@extends('layouts.layout')
@section('content')


<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-3">{{$post->title}}</h1>
      <div class="category">
        <p>Category : <a class="text-decoration-none" href="/posts?category={{$category->slug}}">{{$category->name}}</a></p>
      </div>
      <h5>posted at: {{$post->updated_at->diffForHumans()}}</h5>
      @if($post->image)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{asset('storage/'.$post->image)}}" class="img-fluid" alt="{{$post->category->name}}">
      </div>

      @else
      <img src="https://source.unsplash.com/1200x600?{{$post->category->name}}" class="img-fluid" alt="{{$post->category->name}}">
      @endif
      <article class="my-3 fs-5">
        <p>{!!$post->body!!}</p>
      </article>
      <a class="btn btn-primary text-decoration-none" href="/posts">Back</a>
    </div>
  </div>
</div>



@endsection