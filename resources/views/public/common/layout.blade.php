<!doctype html>
<html lang="en">
  <head>
    <title>IoTBlitz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/owl.carousel.min.css">
    <!--header icon CSS -->
    <link rel="icon" href="{{ asset('public_page') }}/assets/img/fabicon.png">
    <!-- animations CSS -->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/animate.min.css">
    <!-- font-awsome CSS -->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/bootstrap.min.css">
    <!-- mobile menu CSS -->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/slicknav.min.css">
    <!--css animation-->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/animation.css">
    <!--css animation-->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/material-design-iconic-font.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('public_page') }}/style.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('public_page') }}/assets/css/responsive.css">


    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </head>
  <body>

    @include("public.common.topbar")







        <!-- body -->
        @yield('page_content')



      <!-- footer -->
      @include("public.common.footer")


      <!-- jquery 2.2.4 js-->
      <script src="{{ asset('public_page') }}/assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper js-->
    <script src="{{ asset('public_page') }}/assets/js/popper.js"></script>
    <!-- carousel js-->
    <script src="{{ asset('public_page') }}/assets/js/owl.carousel.min.js"></script>
    <!-- wow js-->
    <script src="{{ asset('public_page') }}/assets/js/wow.min.js"></script>
    <!-- bootstrap js-->
    <script src="{{ asset('public_page') }}/assets/js/bootstrap.min.js"></script>
    <!--skroller js-->
    <script src="{{ asset('public_page') }}/assets/js/skrollr.min.js"></script>
    <!--mobile menu js-->
    <script src="{{ asset('public_page') }}/assets/js/jquery.slicknav.min.js"></script>
    <!--particle s-->
    <script src="{{ asset('public_page') }}/assets/js/particles.min.js"></script>
    <!-- main js-->
    <script src="{{ asset('public_page') }}/assets/js/main.js"></script>


    @yield('page_script')
  </body>
</html>

