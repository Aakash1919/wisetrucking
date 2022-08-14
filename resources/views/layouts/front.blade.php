<!DOCTYPE html>
<html lang="en" data-ng-app="">

<head>
    <title>Wise Trucking Solution</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/fav-icon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('asset/js/jquery-2.1.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('asset/releases/v5.0.2/css/all.css') }}" rel="stylesheet">
    <script src="{{ asset('asset/js/angular.js') }}"></script>
    <script src="{{ asset('asset/js/wow.js') }}"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 120,
            mobile: false,
            live: true
        });
        wow.init();
    </script>
    <!--slider-->
    <link rel="stylesheet" type="text/css" href="index.htm">
    <link href="{{ asset('asset/css/animated.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/mediaQueries.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <script src="{{ asset('asset/js/owl.carousel.js') }}"></script>
</head>

<body>
    <div class="wrap">
        @include('components.header.default')
        @yield('content')
        @include('components.footer.default')

    </div>

</body>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false,
            includedLanguages: ''
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<script src="{{asset('asset/js/slider.js')}}"></script>
<script>
    $('#myTabs a').click(function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>
<script>
    $(document).ready(function() {
        $('#Carousel').carousel({
            interval: 3000
        })
    });
</script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        Autoplay: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
</script>

</html>
