@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well" style="color:black;
            font-size:24px; border: 2px solid gray; 
            padding: 10px; margin: 10px; border-radius: 25px;background-color:whitesmoke; opacity:0.4">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->FirstName}} {{$post->user->LastName}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
   
@endsection

{{-- @extends('layouts.app') @section('content')
<h1>Post</h1>
@if (count($posts) > 0) @foreach ($posts as $post)
<div class="well">

    
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3>
                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        </h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->FirsName}} {{$post->user->LastName}}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3>
                            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                        </h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->FirsName}} {{$post->user->LastName}}</small>
                    </div>
                </div>
            </div>
        </div>
    
</div>
@endforeach {{$posts->links()}} @else
<p>No posts found</p>
@endif @endsection --}}