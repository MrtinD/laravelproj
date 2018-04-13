@extends('layouts.app')

@section('content')


<div class="blog-post">

    <h2 class="blog-post-title">{{$singlepost->title}}</h2>

    <p class="blog-post-meta">{{$singlepost->created_at->toFormattedDateString()}} <a href="#">Martin</a></p>
    <p>{{$singlepost->body}}</p>
         
    <form method="POST" action="/posts/likes/{{$singlepost->id}}">
        {{ csrf_field() }}
            {{-- <input type="hidden" value="{{$post->id}}"> --}}
            <button type="submit" class="btn btn-primary" name="like">Like <i class="fa fa-thumbs-up"></i> </button>
            {{$singlepost->votes}}
      </form>
</div><!-- /.blog-post -->

@endsection