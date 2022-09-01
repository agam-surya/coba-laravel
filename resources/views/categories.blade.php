@extends('layouts.layout')
@section('content')

<h2 class="text-center mb-5">Categories</h2>


<div class="container">
  <div class="row">
    @foreach($categories as $category)
    <div class="col-md-4 mb-2">
      <div class="card text-white bg-dark">
        <img src="https://source.unsplash.com/500x500?{{$category->name}}" class="card-img" alt="{{$category->name}}">
        <div class="card-img-overlay d-flex align-items-center p-0">
          <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)"><a class="text-decoration-none text-white" href="/posts?category={{$category->slug}}">{{$category->name}}</a></h5>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection