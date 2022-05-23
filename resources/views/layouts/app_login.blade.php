<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- INTERNAL SWEET ALERT CSS -->
    <link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet"/>

    <!-- SIDE-MENU CSS -->
    <link href="{{asset('assets/css/sidemenu.css')}}" rel="stylesheet">

    <!--PERFECT SCROLL CSS-->
    <link href="{{asset('assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet"/>

    <!-- SIDEBAR CSS -->
    <link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
    <!-- INTERNAL SINGLE-PAGE CSS -->
    <link href="{{asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}" />

</head>
<body class="app sidebar-mini">

        @yield('content')
        {{--Scripts--}}
        <!-- JQUERY JS -->
            <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>

            <!-- BOOTSTRAP JS -->
            <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>

            <!-- SPARKLINE JS -->
            <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>

            <!-- CHART-CIRCLE JS -->
            <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>

            <!-- RATING STAR JS -->
            <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

            <!-- EVA-ICONS JS -->
            <script src="{{asset('assets/iconfonts/eva.min.js')}}"></script>

            <!-- INTERNAL CHARTJS CHART JS -->
            <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
            <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

            <!-- INTERNAL PIETY CHART JS -->
            <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
            <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

            <!-- SIDE-MENU JS-->
            <script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

            <!-- PERFECT SCROLL BAR js-->
            <script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.min.js')}}"></script>
            <script src="{{asset('assets/plugins/sidemenu/sidemenu-scroll.js')}}"></script>

            <!-- SIDEBAR JS -->
            <script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

            <!-- INTERNAL APEXCHART JS -->
            <script src="{{asset('assets/js/apexcharts.js')}}"></script>

            <!--INTERNAL  INDEX JS -->
            <script src="{{asset('assets/js/index1.js')}}"></script>



            <!-- INPUT MASK JS -->
            <script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

            <!-- CUSTOM SCROLL BAR JS-->
            <script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
            <!-- INTERNAL SWEET-ALERT JS -->
            <script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>


            <!-- CUSTOM JS-->
            <script src="{{asset('assets/js/custom.js')}}"></script>




</body>
</html>

