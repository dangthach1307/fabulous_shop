<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="description"
        content="Fabulous is a creative, clean, fully responsive, powerful and multipurpose HTML Template with latest website trends. Perfect to all type of fashion stores.">
    <meta name="keywords" content="HTML,CSS,womens clothes,fashion,mens fashion,fashion show,fashion week">
    <meta name="author" content="JTV">
    <title>@yield('title') | Fabulous Shop</title>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/favicon.ico') }}">

    <!-- CSS Style -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
</head>

<body class="@yield('body_class')">

    <!-- mobile menu -->
    @includeIf('front.components.mobile-menu')
    <!-- end mobile menu -->
    <div id="page">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header -->
        @includeIf('front.components.header')
        <!-- end header -->

        <!-- Navigation -->
        @includeIf('front.components.nav')

        <!-- end nav -->

        {{-- Body --}}
        @yield('body')

        <!-- Footer -->
        @includeIf('front.components.footer')
        <!-- End Footer -->
    </div>


    <!-- jquery js -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>

    <!-- bootstrap js -->
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>

    <!-- jquery-ui js -->
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <!-- owl.carousel.min js -->
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/modernizr.custom.js') }}"></script>
    <!-- jtv-jtv-mobile-menu js -->
    <script src="{{ asset('front/js/jtv-mobile-menu.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('front/js/main.js') }}"></script>

    <!-- rev-slider js -->
    <script src="{{ asset('front/js/rev-slider.js') }}"></script>

    @yield('scripts')

    <script>
        jQuery(document).ready(function() {
            jQuery('#jtv-rev_slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 836,
                startheight: 530,
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,
                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',
                touchenabled: 'on',
                onHoverStop: 'on',
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                spinner: 'spinner0',
                keyboardNavigation: 'true',
                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',
                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: 'off',
                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>


</body>

</html>
