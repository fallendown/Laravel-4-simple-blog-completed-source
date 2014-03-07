<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutsbyus</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}
    
    <!-- Add custom CSS here -->
    {{ HTML::style('css/blog-home.css') }}
    {{ HTML::style('css/blog-post.css') }}
    

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{ HTML::link('/', 'Tutorial', array('class' => 'navbar-brand')) }}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
          <li>{{ link_to_route('posts.index', 'Posts') }}</li>
            <li>{{ HTML::link('logout', 'Logout') }}</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        @yield('content')
        </div>
        
        
      </div>
      
      <hr>
      
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}
    {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')}}
    {{ HTML::script('/ckeditor/ckeditor.js')}}
  </body>
</html>