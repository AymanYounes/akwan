<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Rowad Dashboard | @yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('\assets\images\favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('\assets\icon\feather\css\feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('\assets\css\jquery.mCustomScrollbar.css')}}">


    @yield('styles')


</head>


    <body>
    @include('dashboard.layouts.preloader')
        @section('sidebar')
            @include('dashboard.layouts.sidebar2')
        @show
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('dashboard.layouts.navbar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('dashboard.layouts.sidebar')
                    @yield('content')
                </div>
            </div>

        </div>
    </div>


        @include('dashboard.layouts.ieWarnings')





        <!-- Required Jquery -->
{{--        <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>--}}
        <script type="text/javascript" src="{{asset('bower_components\jquery\js\jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components\popper.js\js\popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{asset('bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{asset('bower_components\modernizr\js\modernizr.js')}}"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="{{asset('bower_components\chart.js\js\Chart.js')}}"></script>
        <!-- amchart js -->
        <script src="{{asset('assets\pages\widget\amchart\amcharts.js')}}"></script>
        <script src="{{asset('assets\pages\widget\amchart\serial.js')}}"></script>
        <script src="{{asset('assets\pages\widget\amchart\light.js')}}"></script>
        <script src="{{asset('assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets\js\SmoothScroll.js')}}"></script>
        <script src="{{asset('assets\js\pcoded.min.js')}}"></script>
        <!-- custom js -->
        <script src="{{asset('assets\js\vartical-layout.min.js')}}"></script>
{{--        <script type="text/javascript" src="{{asset('assets\pages\dashboard\custom-dashboard.js')}}"></script>--}}
        <script type="text/javascript" src="{{asset('assets\js\script.min.js')}}"></script>





        @yield('scripts')



    </body>
</html>
