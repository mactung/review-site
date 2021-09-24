<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        {{ getOption('meta') }}
        <title>{{ getOption('title', "Top Good Products | Review everything") }}</title>
        <!-- plugin css for this page -->
        <link
            rel="stylesheet"
            href="/assets/vendors/mdi/css/materialdesignicons.min.css"
        />
        <link
            rel="stylesheet"
            href="/assets/vendors/aos/dist/aos.css/aos.css"
        />
        <link
            rel="stylesheet"
            href="/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
        />
        <link
            rel="stylesheet"
            href="/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
        />
        <!-- End plugin css for this page -->
        <link rel="shortcut icon" href="/assets/images/favicon.png" />
        <!-- inject:css -->
        <link rel="stylesheet" href="/assets/css/style.css" />
        @yield('css')
        <!-- endinject -->
        {{ getOption('head') }}
    </head>

    <body>
        <div class="container-scroller">
            <div class="main-panel">
                <header id="header">
                    <div class="container">
                        <!-- partial:partials/_navbar.html -->
                        @include('inc.navbar')
                        <!-- partial -->
                    </div>
                </header>
                @yield('content')
                <!-- main-panel ends -->
                @include('inc.footer')
            </div>
        </div>
        <!-- inject:js -->
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <script src="/assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- Custom js for this page-->
        <script src="/assets/js/demo.js"></script>
        <!-- End custom js for this page-->
        @yield('script')
    </body>
</html>
