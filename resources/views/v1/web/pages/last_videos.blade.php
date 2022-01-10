@extends('v1.web.layouts.default')
@section('styles')
    <style>
        #gallery {
            line-height: 0;
            -webkit-column-count: 5;
            /* split it into 5 columns */
            -webkit-column-gap: 5px;
            /* give it a 5px gap between columns */
            -moz-column-count: 5;
            -moz-column-gap: 5px;
            column-count: 5;
            column-gap: 5px;
        }

        #gallery img {
            width: 100% !important;
            height: auto !important;
            filter: grayscale(100%);
            transition: filter 2s;
            margin-bottom: 5px;
            /* to match column gap */
        }

        @media (max-width: 1200px) {
            #gallery {
                -moz-column-count: 4;
                -webkit-column-count: 4;
                column-count: 4;
            }
        }

        @media (max-width: 1000px) {
            #gallery {
                -moz-column-count: 3;
                -webkit-column-count: 3;
                column-count: 3;
            }
        }

        #gallery img:hover {
            filter: none;
        }

    </style>
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="/assets/web/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/bootstrap.min.css" />
@endsection
@section('content')

    <!-- PORTFOLIO BLOCK -->
    <div class="portfolio-block page-porto">
        <div class="container">
            <div id="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            @foreach ($videos as $item)
                                <div class="col-md-4">
                                    {{ $item->description }}
                                    <video width="300" height="300" poster="/assets/web/img/vue1.jpg" controls>
                                        <source src="/{{ $item->path }}?{{ $item->id }}" type="video/mp4">
                                        <source src="/{{ $item->path }}?{{ $item->id }}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- PORTFOLIO BLOCK END -->
    <div class="banner-block">
        <div class="container">
            <div class="system-block-wrap grid grid-cols-12 gap-20">
                <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                    <div class="system-image">
                        <i class="fas fa-phone-alt fa-5x"></i>
                    </div>
                    <div class="system-text">
                        <h3>Appelez-nous</h3>
                        <p>05 22 25 35 68</p>
                    </div>
                </div>
                <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                    <div class="system-image">
                        <i class="fas fa-map-marker-alt fa-5x"></i>
                    </div>
                    <div class="system-text">
                        <h3>Nous Rendre Visite</h3>
                        <a href="https://goo.gl/maps/vKVDU4kWevXFJ1cA7" target="_blank">
                            <p>Amicale Al Jiza</p>
                        </a>
                    </div>
                </div>
                <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                    <div class="system-image">
                        <i class="fas fa-envelope fa-5x"></i>
                    </div>
                    <div class="system-text">
                        <h3>
                            Envoyez Un Message</h3>
                        <p>Amicalealjiza@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/bootstrap.min.js"></script>
    <script src="/assets/web/js/jquery.magnific-popup.js"></script>

    <script>
        $(document).ready(function() {
            $('.test-popup-link').magnificPopup({
                type: 'image'
                // other options
            });
        });
    </script>
@endsection
