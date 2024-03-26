<!doctype html>
<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
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
    <script src="{{ asset('public/admin_page') }}/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('public/admin_page') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('public/admin_page') }}/assets/js/ripple.js"></script>
    <script src="{{ asset('public/admin_page') }}/assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('public/admin_page') }}/assets/js/plugins/apexcharts.min.js"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('public/admin_page') }}/assets/js/pages/dashboard-main.js"></script>

    @yield('admin_page_script')
</body>

</html>
