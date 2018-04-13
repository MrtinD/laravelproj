<div class="blog-post">
  <a href="show\{{$post->id}}">
    <h2 class="blog-post-title">{{$post->title}}</h2>
  </a>
    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} <a href="#">Martin</a></p>
    <p>{{$post->body}}</p>
  <form method="POST" action="/posts/likes/{{$post->id}}">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary" name="like">Like <i class="fa fa-thumbs-up"></i> </button>
  {{$post->votes}}
  </form>
</div><!-- /.blog-post -->
