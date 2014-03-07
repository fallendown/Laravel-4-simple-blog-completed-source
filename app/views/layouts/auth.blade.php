<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}
    
    <!-- Add custom CSS here -->
    {{ HTML::style('css/blog-home.css') }}
    {{ HTML::style('css/blog-post.css') }}

  </head>

  <body>
    
    @yield('content')
    

    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}
    {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')}}
  </body>
</html>