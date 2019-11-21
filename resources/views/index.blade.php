@extends('layouts.app')
@section('title', 'Home Page')

@section('styles')
    <link  href="{{asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>


    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
@endsection
@section('content')


<section id="slider" class="divider">

    <!-- Section: home -->
    <section id="home" class="divider">
        <div class="container-fluid p-0">


            <!-- Slider Revolution Start -->
            <div dir="ltr" class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-1" data-transition="parallaxtoright" data-slotamount="7" data-delay="10000"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/slider/1.webp"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="2500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/1.webp"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>

                        </li>

                        <!-- SLIDE 2 -->
                        <li data-index="rs-2" data-transition="parallaxtoright" data-slotamount="7" data-delay="10000"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/slider/2.webp"  data-rotate="0"  data-fstransition="parallaxtoright" data-fsmasterspeed="2500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/2.webp"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>

                        </li>
                    </ul>
                </div><!-- end .rev_slider -->

                <a href="#about">
                    <div class="icon-scroll-bg"></div>
                    <div class="icon-scroll"></div>
                </a>
            </div>
            <!-- end .rev_slider_wrapper -->

        </div>
    </section>


    <!-- Section: about -->
    <section id="about" class="pt-100 pb-100 background-dark">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 about-img hidden-xs">
                <div class="about-img-wrapper">
                    <img src="{{asset('images/about.png')}}" class=" img-responsive">
                </div>

                <div class="img-shadow">

                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-7 about-content-wrapper">
                <h3 class="text-uppercase about-us-head-1"> about us</h3>
                <h2 class="about-us-head-2">Lorem Ipsum is simply dummy</h2>


                <div class="about-content">
                    <h2 class="about-us-head-3 theme-second-colored font-playfair">text of the printing .</h2>
                    <p class="about-p font-merriweather-light">
                        {{trans('homePage.aboutAkwan')}}
                    </p>
                    <a href="{{url('/about')}}" class="more-details text-white">
                        {{trans('homePage.moreDetails')}} &nbsp; <span class="ml-5 mr-5"><i class="fa fa-long-arrow-right"></i> </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: about cards -->
    <section id="about_cards" class="">

        <div class="cards-shadow">

        </div>
        <div class="container">

            <div class="row">

                <div class="col-sm-3 col-xs-12">
                    <div class="about-icon">
                        <img src="{{asset('images/about-icon-1.webp')}}" alt="">
                        <div class="about-item-header">
                            <h5>lorem ibsum</h5>
                        </div>
                        <div class="about-item-p">
                            <p>is simply dummy text of
                                printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="about-icon">
                        <img src="{{asset('images/about-icon-2.webp')}}" alt="">
                        <div class="about-item-header">
                            <h5>lorem ibsum</h5>
                        </div>
                        <div class="about-item-p">
                            <p>is simply dummy text of
                                printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="about-icon">
                        <img src="{{asset('images/about-icon-3.webp')}}" alt="">
                        <div class="about-item-header">
                            <h5>lorem ibsum</h5>
                        </div>
                        <div class="about-item-p">
                            <p>is simply dummy text of
                                printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="about-icon">
                        <img src="{{asset('images/about-icon-4.webp')}}" alt="">
                        <div class="about-item-header">
                            <h5>lorem ibsum</h5>
                        </div>
                        <div class="about-item-p">
                            <p>is simply dummy text of
                                printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Section: Services -->
    <section id="services" class="background-dark">

    <div class="row">
        <div class="col-sm-3 services-header-wrapper justify-content-center align-self-center">
            <div class="services-text">

                <h2 class="text-white header-first" >Our</h2>
                <h2 class="theme-second-colored font-playfair-boldItalic header-second">Services</h2>
                <p class="text-white short-desc italic" >
                    Professionalism and
                    quality at work .
                </p>
{{--<div class="clearfix"></div>--}}

                <a href="{{url('/about')}}" class="more-details theme-second-colored services-more-details">
                    {{trans('homePage.moreDetails')}} &nbsp; <span class="ml-5 mr-5"><i class="fa fa-long-arrow-right"></i> </span>
                </a>

            </div>
        </div>

        <div class="col-sm-9">
            <div class="owl-carousel owl-theme services-carousel">
                <div class="item">
                    <div class="item-header">
                        <h4 class="theme-colored font-merriweather-light">Corporate</h4>
                        <p class="text-black font-merriweather-light">identity design</p>
                    </div>
                    <img src="images/services/1.png" alt="">
                </div>
                <div class="item">
                    <div class="item-header">
                        <h4 class="theme-colored font-merriweather-light">UX/UI Design &
                            Development</h4>
                        <p class="text-white font-merriweather-light">Services</p>
                    </div>
                    <img src="images/services/2.png" alt="">
                </div>
                <div class="item">
                    <div class="item-header">
                        <h4 class="theme-colored font-merriweather-light">Corporate</h4>
                        <p class="text-black font-merriweather-light">identity design</p>
                    </div>
                    <img src="images/services/1.png" alt="">
                </div>
                <div class="item">
                    <div class="item-header">
                        <h4 class="theme-colored font-merriweather-light">Corporate</h4>
                        <p class="text-white font-merriweather-light">identity design</p>
                    </div>
                    <img src="images/services/2.png" alt="">
                </div>
                <div class="item">
                    <div class="item-header">
                        <h4 class="theme-colored font-merriweather-light">Corporate</h4>
                        <p class="text-black font-merriweather-light">identity design</p>
                    </div>
                    <img src="images/services/1.png" alt="">
                </div>
                <div class="item">
                    <div class="item-header">
                        <h4 class="theme-colored font-merriweather-light">Corporate</h4>
                        <p class="text-white font-merriweather-light">identity design</p>
                    </div>
                    <img src="images/services/2.png" alt="">
                </div>
            </div>


        </div>

    </div>


    </section>



    <section id="divider_banner">
        <h2 class="text-white">A Perfect Place to Get Started!</h2>
    </section>


    <section id="features">
    <div class="row">
        <div class="col-sm-6">
            <div class="owl-carousel owl-theme features-carousel">
                <div class="item">
                    <img src="images/features/1.png" alt="">
                </div>
                <div class="item">
                    <img src="images/features/1.png" alt="">
                </div>
                <div class="item">
                    <img src="images/features/1.png" alt="">
                </div>
            </div>
        </div>

        <div class="col-sm-6 justify-content-center align-self-center features-text">
            <h3 class="text-uppercase about-us-head-1 section-header"> Our Features</h3>
            <h2 class="about-us-head-2 text-black-111">Lorem Ipsum is simply dummy</h2>

            <div class="about-content features-content">
                <h2 class="about-us-head-3 features-head-3 theme-colored font-playfair-boldItalic">text of the printing .</h2>

                <a href="{{url('/about')}}" class="more-details text-black">
                    {{trans('homePage.moreDetails')}} &nbsp; <span class="ml-5 mr-5"><i class="fa fa-long-arrow-right"></i> </span>
                </a>
            </div>

        </div>

    </div>


    </section>

    <section id="projects" class="background-dark pb-100">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <h2 class="text-white">Featured <span class="theme-second-colored font-playfair-boldItalic">Projects</span></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{url('/about')}}" class="more-details text-black pull-right text-white">
                        View all projects &nbsp; <span class="ml-5 mr-5"><i class="fa fa-long-arrow-right"></i> </span>
                    </a>
                </div>

            </div>
            <!-- Slider main container -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/projects/1.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/projects/2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/projects/3.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/projects/1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/projects/2.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/projects/3.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/projects/1.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/projects/3.png" alt="">
                    </div>
                </div>
                <!-- Add Pagination -->
{{--                <div class="swiper-pagination"></div>--}}

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


            <div class="swiper-pagination"></div>
        </div>

    </section>


    <section id="contact" class="divider parallax background-dark pb-xl-100 pb-lg-50 pb-xs-20">
        <div class="container contact-wrapper" data-bg-img="images/contact-bg.png">
            <div class="col-md-6 col-sm-12">
                <h2 class="text-center theme-second-colored text-uppercase"> Contact Us</h2>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group contact-btn-wrapper">
                        <input type="submit" value="Send"  class="btn btn-success btn-second-theme-colored contact-btn text-uppercase font-merriweather-bold">
                    </div>
                </form>
            </div>
        </div>

    </section>

    <section>
        @include('layouts.map')
    </section>


    @include('modals')

@endsection


@section('scripts')

        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                // loop: true,
                spaceBetween: 10,
                watchSlidesProgress: true,
                watchSlidesVisibility: true,
                // preloadImages: true,
                // updateOnImagesReady: true,
                autoplay: {
                    delay: 5000,
                },
                // slidesPerColumn: 3,
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    // when window width is >= 480px
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 10
                    },
                    // when window width is >= 640px
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 10
                    }
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'custom',

                    renderCustom: function (e, t, i) {
                        var a = (100 / i) * t;
                        var n = t.toString(),
                            s = i.toString();
                        return '<div class="fraction"><span class="current">' + (n = n.padStart(2, "0")) + '</span><span class="fraction-separator"> / </span><span class="total">' + (s = s.padStart(2, "0")) + "</span></div>" + '<div class="progressbar"><div class="filled" data-width="' + a + '" style="width: ' + a + "%" + ' "></div></div>'
                    },
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function(){

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
            </script>
        <script>
            // Initialize and add the map
            function initMap() {
                // The location of egypt
                var egypt = {lat: 30.051361, lng: 31.333961};
                // The map, centered at egypt


                var map = new google.maps.Map(
                    document.getElementById('map'), {
                        zoom: 16,
                        center: egypt,
                        styles: [
                            {
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#616161"
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative.land_parcel",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#bdbdbd"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#eeeeee"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#757575"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#e5e5e5"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#9e9e9e"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#757575"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#dadada"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#616161"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#9e9e9e"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit.line",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#e5e5e5"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit.station",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#eeeeee"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#c9c9c9"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#9e9e9e"
                                    }
                                ]
                            }
                        ]
                    });
                // The marker, positioned at Egypt
                var marker = new google.maps.Marker(
                    {
                        position: egypt,
                        // icon:,
                        map: map
                    }
                    );
            }
        </script>
        <!--Load the API from the specified URL
        * The async attribute allows the browser to render the page while the API loads
        * The key parameter will contain your own API key (which is not needed for this tutorial)
        * The callback parameter executes the initMap() function
        -->
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLl6pxkt_Fc0bDDLH2jEKTwZ7I-BlT4i4&callback=initMap">
        </script>


        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
          (Load Extensions only on Local File Systems !
           The following part can be removed on Server for On Demand Loading) -->


        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

    <script>
        $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
                sliderType:"standard",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "gyges",
                        enable: false,
                    },
                    bullets: {
                        enable: false,
                    }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [700, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        });
    </script>
    <!-- Slider Revolution Ends -->






        <!-- Lazy load SCRIPTS -->

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.3.0/dist/lazyload.min.js"></script>


    <script>

        /* Lazy load SCRIPTS */
        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });



        /* menu icon */
        $(document).ready(function(){
            $('#icon3').on('click touchstart', function () {
                $(this).toggleClass('open');
            });
        });


        $('.services-carousel').owlCarousel({
            loop:true,
            margin:0,
            autoplay:true,
            nav:true,
            dots: false,
            // center:true,
            navText: [
                '<',
                '>'
            ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })


        $('.features-carousel').owlCarousel({
            loop:true,
            margin:0,
            autoplay:true,
            nav:false,
            dots: true,
            responsive:{
                0:{
                    items:1
                }
            }
        })

    </script>


@endsection
