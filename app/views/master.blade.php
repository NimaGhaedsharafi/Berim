<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ URL::to('public/img/favicon.jpg') }}">

    <title>@yield('title') - بریم؟</title>


    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/style.css') }}
    
    @yield('style')

  </head>

  <body>

    <div class="mybar navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container container2">
        @yield('navbar')
      </div>
    </div>

    <div class="container">
      @yield('content')
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->      
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    @yield('script')
  </body>
</html>
