<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Althia Event Services</title>

    <!-- Fonts -->
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/frontend/style.css')}}">


</head>
<body>
    <div id="app">
        <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

        @include('layouts.inc.frontend-navbar')

        <main class="">
            @yield('content')
        </main>

        @include('layouts.inc.frontend-footer')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>


    <script src="{{ asset('assets/js/frontend/main.js')}}"></script>

    <script>
        $('#videoModal').on('show.bs.modal', function (e) {
            var videoSrc = $(e.relatedTarget).data('src');
            $('#videoSource').attr('src', videoSrc);
        });
    </script>
    <script>
        $(document).ready(function() {
            // Function to determine and set the active item
            function setActiveNav() {
                var currentUrl = window.location.href;
                $('.nav-item.nav-link').removeClass('active-link'); // Remove active class from all items

                // Check each nav link and add the active class if the URL matches
                $('.nav-item.nav-link').each(function() {
                    if (currentUrl === $(this).attr('href')) {
                        $(this).addClass('active-link');
                    }
                });
            }

            // Call the function on page load and after any navigation
            setActiveNav();

            $('.nav-item.nav-link').click(function() {
                setActiveNav();
            });
        });
    </script>



</body>
</html>
