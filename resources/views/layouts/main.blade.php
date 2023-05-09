<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield("title")</title>

    <!-- slider stylesheet -->
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/theme/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('/theme/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('/theme/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('layouts.includes.menu')
        <!-- end header section -->
        <!-- slider section -->
        @if(Route::currentRouteName() == 'site.home')
            @include('layouts.includes.slider')
        @endif
        <!-- end slider section -->
    </div>

    <!-- content section -->
    <section class="how_section layout_padding">
        <div class="heading_container">
            <h2>
                @yield("title")
            </h2>
        </div>
        <div class="how_container">

            <div class="detail-box">
                @yield("content")
            </div>

        </div>
    </section>
    <!-- end content section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="{{asset('/theme/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/theme/js/bootstrap.js') }}"></script>
    @if(Route::currentRouteName() == 'site.home')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- owl carousel script
    -->
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 0,
            navText: [],
            center: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>
    <!-- end owl carousel script -->
    @endif
</body>

</html>
