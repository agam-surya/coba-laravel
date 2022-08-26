@extends('layouts.layout')
@section('content')

<h2>Categories</h2>
@foreach($categories as $category)
<ul>
  <li><a href="/category/{{$category->slug}}">{{$category->name}}</a></li>
</ul>
@endforeach
@endsection