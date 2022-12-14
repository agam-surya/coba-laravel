@extends('layouts/layout')
@section('content')

<h1 class="text-center mt-2">All Posts {{$title}}</h1>
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if(request('category'))
      <input type="hidden" name="category" value="{{request('category')}}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="{{request('search')?? 'search'}}" name="search">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if($posts->count())

<div class="card mb-3">
  @if($posts[0]->image)
  <div style="max-height: 400px; overflow:hidden;">
    <img src="{{asset('storage/'.$posts[0]->image)}}" class="img-fluid" alt="{{$posts[0]->category->name}}">
  </div>

  @else
  <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="img-fluid" alt="{{$posts[0]->category->name}}">
  @endif

  <div class="card-body text-center">
    <h3 class="card-title"><a class="text-decoration-none" href="/post/{{$posts[0]->slug}}">{{$posts[0]->title}}</a></h3>
    <p>
      <small>
        <p>Category <a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a> Last updated {{$posts[0]->updated_at->diffForHumans()}}</p>
      </small>
    </p>
    <p class="card-text">{{$posts[0]->excerpt}}</p>
    <a class="btn btn-primary" href="/post/{{$posts[0]->slug}}">Read more...
    </a>
  </div>
</div>


<div class="container">
  <div class="row">
    @foreach($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card text-center">
        <div class="position-absolute bg-warning p-3 text-white"><a class="text-decoration-none" href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a></div>
        @if($post->image)
        <img src="{{asset('storage/'.$post->image)}}" class="img-fluid" alt="{{$post->category->name}}">

        @else
        <img src="https://source.unsplash.com/600x400?{{$post->category->name}}" class="img-fluid" alt="{{$post->category->name}}">
        @endif
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
@else
<p class="text-center fs-4">No Post Found</p>
@endif

<div class="d-flex justify-content-center">
  {{$posts->links()}}
</div>
@endsection