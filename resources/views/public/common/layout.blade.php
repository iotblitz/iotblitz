<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>IoTBlitz</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/public_page') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('public/public_page') }}/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="icon" type="image/x-icon" href="{{ asset('public/public_page') }}/assets/images/favicon.ico">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>




            @yield('page_style')
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    @include('public.common.topbar')







    <!-- body -->
    @yield('page_content')



    <!-- footer -->
    @include('public.common.footer')

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('public/public_page') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('public/public_page') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/counter.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/custom.js"></script>


    @yield('page_script')
</body>

</html>
