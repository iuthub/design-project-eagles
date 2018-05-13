@extends('layouts.app')

@section('content')


<a  href="/posts" class="btn btn-default">Go Back</a>
<div class="blog_bosy">

<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
<h1 style="text-center">{{$post->title}}</h1>
<br><br>
   <h4> {!!$post->body!!} </h4>    
</div>  
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->FirsName}} {{$post->user->LastName}}</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endif
@endsection