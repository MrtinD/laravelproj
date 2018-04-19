@extends('layouts.prelogin')
@section('content')
    <div class="container">

        <form class="form-signin" method="GET" action="\login\user">
            {{csrf_field()}}
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only" name="email">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only" name="pass">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <a href="http://laravelblog.local/register">Register</a>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
@endsection
