<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header')

  </head>

  <body>

    @include('partials/nav')

    <div class="container">
    <div class="row">
        <div class="col-lg-8">
        @yield('content')
        </div>
        
      @include('partials/sidebar')
      
      @include('partials/footer')

    @include('partials/scripts')
  </body>