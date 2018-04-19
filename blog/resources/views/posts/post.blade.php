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
  @foreach($post->comments as $comment)
  <hr>
  <li class="list-group-item">{{$comment->body}}</li>
    <small>{{$comment->created_at->toFormattedDateString()}} </small>

  @endforeach
  <hr>
  <div class="card">
      <div class="card-block">
        <form action="/comments/{{$post->id}}" method="POST">
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
