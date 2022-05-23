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
<div class="page">
    <div class="page-main">
@include('layouts.header')
        @yield('content')

@include('layouts.footer')
