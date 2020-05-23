<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS PERSONAL -->
    <link rel="stylesheet" type="text/css" href="../resources/sass/app.scss">
    <link href='../public/css/layout.css' rel='stylesheet' type='text/css' media='all'>

    <title>INK HEART STUDIO TATTOO</title>
    <link rel='shortcut icon' type='image/x-icon' href='../public/img/logo.jpg'/>

  </head>

  <body>

    {{-- INCLUDE SIN ; --}}
    @include('partials.navbar')

    {{-- INCLUIMOS UNA SECTION QUE CADA PAGINA TENDRÁ SU CONTENIDO --}}
    <section>
      @yield('content')
    </section>

    <a id='backtotop' href='#top'><i class='fa fa-chevron-up'></i></a>

    {{-- @include('partials.footer') --}}


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />


    {{-- OUR SCRIPTS --}}
    <script src="../resources/js/backtotop.js"></script>
    {{-- <script src="../resources/js/dropdown.js"></script> --}}
    <script src="../resources/js/galeria.js"></script>
    {{-- <script src="../resources/js/validacion.js"></script> --}}
    <script src="../resources/js/login.js"></script>

    {{-- <script src="../resources/js/myJavascript.js" ></script>
    <script src="../resources/js/edit.js" ></script>
    <script src="../resources/js/main.js"></script>
     --}}

  </body>
</html>
