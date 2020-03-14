<!DOCTYPE html>

<html>
    <head>
        <meta name="author" content="Nile-Theme">
        <meta name="robots" content="index follow">
        <meta name="googlebot" content="index follow">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Travel, HTML5, CSS3, Hotel , Multipurpose, Template, Create a Travel website fast">
        <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/nav.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      

    </head>
    <body style="
     background-image: url('{{asset('img/blosom.jpeg')}}') ;
     background-repeat: no-repeat;
     background-position: center center;
     background-attachment: fixed;

     background-size: 100%;
     height: 200%;
    /* overflow: hidden; */
    /* background-size: cover; */
    "
>

        <!-- <div class="container"> -->
            @include('layoutsmain.partials.nav')
            @include('layoutsmain.partials.header')
               @yield('content')
            @include('layoutsmain.partials.footer')

        <!-- </div> -->
         <script src="{{asset('js/app.js')}}"></script>

         <script src="{{asset('js/sidebar.js')}}"></script>
         <script
			    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			     crossorigin="anonymous">
         </script>



    </body>
</html>
