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
    <hr>
        @foreach($singlepost->comments as $comment)
            <li class="list-group-item">{{$comment->body}}</li>
            <small>{{$comment->created_at->toFormattedDateString()}} </small>
            <hr>
        @endforeach

        <div class="card">
                <div class="card-block">
                  <form action="/comments/{{$singlepost->id}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="commbody" placeholder="Your comment here."class="form-control"></textarea>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Comment</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
</div><!-- /.blog-post -->

@endsection