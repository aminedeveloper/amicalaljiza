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
 

    </style>
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="/assets/web/css/magnific-popup.css">

@endsection
@section('content')

    <!-- PORTFOLIO BLOCK -->
    <div class="portfolio-block page-porto">
        <div class="container">
            <div id="gallery">
                @foreach ($photos as $photo)
                    @foreach ($photo->photo as $item)
                        <a class="test-popup-link" href="{{ Storage::url($item->path) }}">
                            <img src="{{ Storage::url($item->path) }}">
                        </a>
                    @endforeach
                   
                @endforeach

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
