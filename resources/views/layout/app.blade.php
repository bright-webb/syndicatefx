<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from unic.orinostudio.com/unic/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 02 Jun 2023 06:36:47 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <!-- <meta name="theme-color" content="#ffffff"> -->
    <meta name="theme-color" content="#ffffff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#222032" media="(prefers-color-scheme: dark)">
    <title>Syndicate fx market</title>
    <meta name="description" content="">
    <meta name="keywords"
        content="" />
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="/images/logo.png" sizes="32x32">
    <!-- IOS SUPPORT -->
    <link rel="apple-touch-icon" href="images/logo.png">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/remixicon.min.css">
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/vendors/zuck_stories/zuck.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.js" integrity="sha512-P3/SDm/poyPMRBbZ4chns8St8nky2t8aeG09fRjunEaKMNEDKjK3BuAstmLKqM7f6L1j0JBYcIRL4h2G6K6Lew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="manifest" href="_manifest.json" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])


</head>
<body>
    <!-- ===================================
      START LODAER PAGE
    ==================================== -->
    {{-- <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section> --}}

    <!-- ===================================
    START FIXED BACKGROUND IMAGE
    ==================================== -->
    <section class="bg-gradient-started">
        <div class="bg-noise"></div>
    </section>

    <!-- START WRAPPER -->
    <div id="wrapper">
        <!-- START CONTENT -->
        <div id="content">

                @yield('content')

            <!-- ===================================
              START THE COPYRIGHT
            ==================================== -->
            <section class="copyright-mark">
                <div class="content">
                    <img class="logo-gray" src="/images/logo.png" style="width: 40px; height: 40px;" alt="image">
                    <p>Copyright © Syndicatfx 2023</p>
                </div>
            </section>

        </div>

    </div>


    <!-- ===================================
      START STATUS CONNECTION
    ==================================== -->
    <div class="d-flex justify-content-center">
        <div class="toast status-connection" role="alert" aria-live="assertive" aria-atomic="true"></div>
    </div>



    <!-- JS FILES -->
    <script src="/assets/vendors/zuck_stories/zuck.min.js"></script>
    <script src="/assets/vendors/smoothscroll/smoothscroll.min.js"></script>
    <script src="/assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/nouislider/wNumb.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <!-- PWA APP SERVICE REGISTRATION AND WORKS JS -->
    <script src="/assets/js/pwa-services.js"></script>
</body>


</html>
