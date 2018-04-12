@extends('layouts.app')

@section('content')

<h1>Publish Post</h1>
<hr>
<form method="POST" action="/posts">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="title" class="form-control" id="exampleInputEmail1" placeholder="Post Title" name="asdtitle">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Body</label>
      <textarea name="asdbody" id="body" class="form-control"  placeholder="Enter Content"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>
    @include('inc.error')

  </form>
@endsection