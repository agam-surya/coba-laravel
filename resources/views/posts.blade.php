@extends('layouts/layout')
@section('content')


@if($posts->count())

<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
  <div class="card-body text-center">
    <h3 class="card-title"><a class="text-decoration-none" href="/post/{{$posts[0]->slug}}">{{$posts[0]->title}}</a></h3>
    <p>
      <small>
        <p>Category <a href="/category/{{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a> Last updated {{$posts[0]->updated_at->diffForHumans()}}</p>
      </small>
    </p>
    <p class="card-text">{{$posts[0]->excerpt}}</p>
    <a class="btn btn-primary" href="/post/{{$posts[0]->slug}}">Read more...
    </a>
  </div>
</div>
@else
<p class="text-center fs-4">No Post Found</p>
@endif

<div class="container">
  <div class="row">
    @foreach($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card text-center">
        <div class="position-absolute bg-warning p-3 text-white"><a class="text-decoration-none" href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></div>
        <img src="https://source.unsplash.com/600x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
        <div class="card-body">
          <h5 class="card-title"><a class="text-decoration-none" href="/post/{{$post->slug}}">{{$post->title}}</a></h5>
          <p>
            <small>
              <p>Last updated {{$post->updated_at->diffForHumans()}}</p>
            </small>
          </p>
          <p class="card-text">{{$post->excerpt}}</p>
          <a class="btn btn-primary" href="/post/{{$post->slug}}">Read more...</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection