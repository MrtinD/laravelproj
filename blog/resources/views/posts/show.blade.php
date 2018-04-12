@extends('layouts.app')

@section('content')


<div class="blog-post">

    <h2 class="blog-post-title">{{$singlepost->title}}</h2>

    <p class="blog-post-meta">{{$singlepost->created_at->toFormattedDateString()}} <a href="#">Martin</a></p>
    <p>{{$singlepost->body}}</p>
         
</div><!-- /.blog-post -->

@endsection