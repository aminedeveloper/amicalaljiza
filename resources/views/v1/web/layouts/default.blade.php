<!DOCTYPE html>
<html lang="en">

<head>
    <title>Amicale Al Jiza</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/assets/web/css/aos.css" type="text/css">
    <link rel="stylesheet" href="/assets/web/css/style1.css" type="text/css">
    <link rel="stylesheet" href="/assets/web/css/swiper.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/web/css/lightgallery.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/web/css/sm-core-css.css" type="text/css" />
    <link rel="stylesheet" href="/assets/web/css/sm-clean.css" type="text/css" />
    <link rel="stylesheet" href="/assets/web/css/thaw-flex.css" type="text/css" />
    <link rel="stylesheet" href="/assets/web/css/font.css" type="text/css" />
    <link rel="stylesheet" href="/assets/web/css/fontawesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/web/css/plugin.css" type="text/css" />
    <link rel="stylesheet" href="/assets/web/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/assets/web/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link rel="icon" href="/assets/web//assets/web/img/fav-icon.jpg">
    <script>
        document.documentElement.className = 'js';
    </script>
    <style>
        li:hover {
            cursor: pointer;
        }

        ul li:hover>ul,
        ul li ul:hover {
            visibility: visible;
            opacity: 1;
            display: block;
        }

        #main-menu {
            background: #FFC31D;
            padding-bottom: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 30px;
        }

        .background-overlay {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .image-title {
            background-image: url('/assets/web/img/slide1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            z-index: 1;
        }

        .header-clear {
            width: max-content;
        }

        .main-hero {
            height: 71vh !important;
        }

        .news-articles {
            z-index: 33;
            margin-top: -155px;
            width: 69%;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(255, 255, 255, 0.568);
        }
    </style>
    @yield('styles')
</head>

<body class="demo-1">
    <!--MAIN WRAPPER START-->
    <div class="main-wrapper clearfix">
        <!-- HEADER START
                ============================================= -->
        <header id="header" class="header-style-1 animated">
            <div class="container">
                @include('v1.web.layouts.header')
            </div>
        </header>
        <!-- HEADER END -->
        <!-- SECTION -->
        <section class="content">
            <div style="margin-bottom: 131px;" class="main-hero">
                <div class="image-title">
                    <div style="float: right" class="container">
                        <h2>
                            Fournir Une solution Innovante </h2>
                        <div class="button-view" data-aos="fade-up">
                            <a style="background-color: #FFC31D" href="projects.html" class="button-basic-1">Photos
                                Recentes</a>
                            <a style="background-color: #0c1f38" href="projects.html" class="button-basic-1">Videos
                                Recentes</a>

                        </div>
                    </div>
                </div>
                <div class="background-overlay"> </div>
            </div>
            @yield('content')
        </section>
        <!-- SECTION END -->
        <!-- FOOTER START -->
        @include('v1.web.layouts.footer')
        <!-- FOOTER END -->
    </div>
    <!-- MAIN WRAPPER END -->
    <!-- FOOTER SCRIPTS -->
    <script src="/assets/web/js/jquery.3.5.1.min.js"></script>
    <script src="/assets/web/js/main.js"></script>
    <script src="/assets/web/js/gedung-lightbox.js"></script>
    <script src="/assets/web/js/gedung-carousel.js"></script>
    <script src="/assets/web/js/gedung-filter.js"></script>
    <script src="/assets/web/js/imagesloaded.min.js"></script>
    <script src="/assets/web/js/demo1.js"></script>
    <script src="/assets/web/js/jquery.smartmenus.min.js"></script>
    <script src="/assets/web/js/swiper-bundle.min.js"></script>
    <script src="/assets/web/js/lightgallery.min.js"></script>
    <script src="/assets/web/js/isotope.pkgd.js"></script>
    <script src="/assets/web/js/aos.js"></script>

    @yield('scripts')
  
</body>

</html>
