@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid" style="width: 100%; height: 500px;object-fit: cover;" src="{{asset('images/'.$post->image)}}" />
      </div>
      <div class="col-lg-6">
        <div class="p-5 mt-4">
            @foreach ($post->categories as $category)
                        <span class="btn btn-dark
                        ">#{{$category->name}}</span> 
                      @endforeach</td>
            <h1 class="display-4">{{$post->title}}</h1>
            <p class="lead" style="overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            /* truncate to 4 lines */
            -webkit-line-clamp: 4;">{{$post->body}} </p>
            <a href="#" class="btn btn-outline-dark">Read More</a>
          </div>
      </div>
  </div>
@endsection


