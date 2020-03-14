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
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

        <!-- <div class="container"> -->
            @include('layoutsmain.partials.adminnav')
              @include('layoutsmain.partials.header')
                  @include('layoutsmain.partials.sidenav')

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
         !-- Include the Quill library -->
         <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
          $(document).ready( function(){
            var toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                [{ 'font': [] }],
                [{ 'align': [] }],
                ['clean']
            ];
            var quill = new Quill('#editor', {

              modules: {
                 toolbar: toolbarOptions
               },
               theme: 'snow',
            });
            quill.on('text-change', function(delta, oldDelta, source) {
                    $('#text-editor').text($('.ql-editor').html());

                //   $('#text-editor').text(quill.getText(0,quill.getLength()));

            });


          });


        </script>







    </body>
</html>
