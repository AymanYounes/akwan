<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-ML4JKT8');</script>
    <!-- End Google Tag Manager -->



    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Description" />
    <meta name="keywords" content="" />
    <meta name="author" content="Rowad United" />
    <meta name="google-site-verification" content="BRscrJD91NC3cFvEiulctskiE4N42npKcgNpANzzH8A" />


    <!-- Page Title -->
    <title>Akwan | @yield('title')</title>

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link href="css/plugins.css" rel="stylesheet" type="text/css">


{{--    <link href="css/build.css" rel="stylesheet" type="text/css">--}}
{{--    @if(Config::get('app.locale') == 'ar')--}}
{{--        <link href="css/build-ar.css" rel="stylesheet" type="text/css">--}}
{{--    @endif--}}
    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    @if(Config::get('app.locale') == 'ar')
{{--        <link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">--}}
    @endif
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    @if(Config::get('app.locale') == 'ar')
{{--        <link href="css/style-main-rtl.css" rel="stylesheet" type="text/css">--}}
{{--        <link href="css/style-main-rtl-extra.css" rel="stylesheet" type="text/css">--}}
    @endif
<!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    @if(Config::get('app.locale') == 'ar')
        <link href="css/style-ar.css" rel="stylesheet" type="text/css">
    @endif



<!-- external javascripts -->

    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    @yield('early-scripts')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




    @yield('styles')






</head>

<body>


<!-- Google Tag Manager (noscript) -->
{{--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML4JKT8"--}}
{{--                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>--}}
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper">
    <!-- preloader -->
@include('layouts.preloader')

    <header>

        <div class="left-section">

            <img src="{{asset('images/logo.png')}}">

        </div>


        <div class="right-section">
            <div class="lang">
                <a href="{{route('lang',[trans('nav.langval')])}}" class="text-uppercase">{{trans('nav.langval')}}</a>
            </div>



            <div id="icon3" class="hamburger-menu" onclick="openNav()" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

@include('layouts.nav')

<!-- Start main-content -->
    <div class="main-content">

        @yield('content')


    </div>
    <!-- end main-content -->

    @include('layouts.footer')


    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

</div>
<!-- end wrapper -->

<script src="js/build.js"></script>
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script>


    $(document).on('click','.hamburger-menu',function () {
        if($(this).hasClass('nav-open')){
            $('#fullNav').slideUp('slow');
            $(this).removeClass('nav-open');
        }else{
            $('#fullNav').slideDown('slow');
            $(this).addClass('nav-open');
        }
    });



    $(document).ready(function() {
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            hook: 'data-rel',
            animation_speed:'normal',
            theme:'light_square',
            slideshow:3000,
            autoplay_slideshow: false,
            social_tools: false
        });
    });
</script>
@yield('scripts')



</body>
</html>
