@extends('layouts.prelogin')
@section('content')

<div class="container">

    <form class="form-signin" method="POST" action='/register/user'>
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Please register</h2>
        <hr>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <hr>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required autofocus>
        <hr>
        <label for="username" class="sr-only">User name</label>
        <input type="textarea" id="inputUsername" class="form-control" placeholder="User Name" name="username" required autofocus>
        <hr>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
</div> <!-- /container -->


@endsection