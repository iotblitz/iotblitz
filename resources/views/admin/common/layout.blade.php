<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('public/admin_page') }}/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('public/admin_page') }}/assets/css/style.css">


    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <style>
        .img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>


    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    @include("admin.common.sidebar")
    @include("admin.common.topbar")






    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- body -->
            @yield('admin_page_content')

        </div>
    </div>







    <!-- Required Js -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('public/admin_page') }}/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('public/admin_page') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('public/admin_page') }}/assets/js/ripple.js"></script>
    <script src="{{ asset('public/admin_page') }}/assets/js/pcoded.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('public/admin_page') }}/assets/js/plugins/apexcharts.min.js"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('public/admin_page') }}/assets/js/pages/dashboard-main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {!! Toastr::message() !!}

    @yield('admin_page_script')
</body>

</html>
