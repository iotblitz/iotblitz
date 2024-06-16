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

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        #cookieConsent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #7b6ad8b1;
            /* border-top: 1px solid rgb(238, 10, 10); */
            z-index: 9999;
            border-radius: 20px;
        }

        .cookiealert {
            box-shadow: none;
            padding: 1rem;
        }

        .cookiealert-text {
            margin: 0;
            color: #fff;
        }

        .accept-btn {
            border-color: #fff;
            color: #fff;
        }

        .accept-btn:hover {
            background-color: #fff;
            color: #000;
        }
    </style>

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

    <div id="cookieConsent" class="alert alert-dark cookiealert" role="alert" style="display: none;">
        <div class="d-flex align-items-center justify-content-between">
            <span class="cookiealert-text">This website uses cookies to ensure you get the best experience on our
                website.</span>
            <button type="button" class="btn btn-outline-light btn-sm accept-btn">Got it!</button>
        </div>

    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('public/public_page') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('public/public_page') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/counter.js"></script>
    <script src="{{ asset('public/public_page') }}/assets/js/custom.js"></script>


    @yield('page_script')



    <script>
        $(document).ready(function() {
            var cookieConsent = $("#cookieConsent");


            if (!getCookie("cookieAccepted")) {
                cookieConsent.css("display", "block");
            }

            $("#cookieConsent .accept-btn").on("click", function() {
                setCookie("cookieAccepted", true, 365);
                cookieConsent.css("display", "none");
                $(this).off("click"); // Remove the event listener after the button is clicked once
            });

            // Check for cookie on page load
            if (getCookie("cookieAccepted")) {
                cookieConsent.css("display", "none");
            }
        });

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    </script>
</body>

</html>
