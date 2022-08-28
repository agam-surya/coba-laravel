@extends('dashboard.layouts.main')

@section('container')




<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-3">{{$post->title}}</h1>

      <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To My Posts</a>
      <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <form class="d-inline" action="/dashboard/posts/{{ $post->slug}}" method="post">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you Sure ?')"><span data-feather="x-circle"></span>Delete</button>
      </form>

      @if($post->image)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{asset('storage/'.$post->image)}}" class="img-fluid" alt="{{$post->category->name}}">
      </div>

      @else
      <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid" alt="{{$post->category->name}}">
      @endif


      <article class="my-3 fs-5">
        <p>{!!$post->body!!}</p>
      </article>
      <a class="btn btn-primary text-decoration-none" href="/posts">Back</a>
    </div>
  </div>
</div>

@endsection