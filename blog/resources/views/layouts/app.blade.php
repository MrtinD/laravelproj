<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Template for Bootstrap</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

        <!-- Bootstrap core CSS -->
        <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Custom styles for this template -->
        <link href="http://v4-alpha.getbootstrap.com/examples/blog/blog.css" rel="stylesheet">
    </head>

    <body>

        @include('inc.navbar')

        @include('inc.header')
    
        <div class="container">
    
            <div class="row">

                <div class="col-sm-8 blog-main">
    
                @yield('content')
                    
                </div>
                
                @include('inc.sidebar')
                    
            </div>

        </div>

        @include('inc.error')

        @include('inc.footer')
    
    </body>
</html>
