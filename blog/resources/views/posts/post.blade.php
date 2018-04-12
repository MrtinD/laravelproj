 


 <div class="blog-post">
          <a href="show\{{$post->id}}">
            <h2 class="blog-post-title">{{$post->title}}</h2>
          </a>
          <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} <a href="#">Martin</a></p>
          <p>{{$post->body}}</p>
          
        </div><!-- /.blog-post -->
