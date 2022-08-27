@extends('dashboard.layouts.main')

@section('container')

<article>
  <h2>{{$post->title}}</h2>
  <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To My Posts</a>
  <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
  <form class="d-inline" action="/dashboard/posts/{{ $post->slug}}" method="post">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Are you Sure ?')"><span data-feather="x-circle"></span>Delete</button>
  </form>
  <div class="category">
    <p>Category : <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></p>
  </div>
  <h5>posted at: {{$post->updated_at}}</h5>
  <p>{!!$post->body!!}</p>
</article>

@endsection