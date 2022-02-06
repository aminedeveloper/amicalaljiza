@extends('v1.web.layouts.default')
@section('styles')
    <style>
        .videos-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-column-gap: 30px;
        }

        .videos-grid-video {}

        .videos-grid-video>iframe {
            height: 278px;
        }

    </style>
    <!-- Magnific Popup core CSS file -->
    {{-- <link rel="stylesheet" href="/assets/web/css/magnific-popup.css"> --}}
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/bootstrap.min.css" />
@endsection
@section('content')

    <!-- PORTFOLIO BLOCK -->
    <div class="portfolio-block page-porto">
        <div class="container">
            <div id="gallery">
                <div class="container">
                    <div class="row">
                        <div class="system-block-wrap grid grid-cols-12 gap-20">
                            <div class="videos-grid">
                                @foreach ($videos as $item)

                                    {{-- <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                                     
                                    <div class="system-text">
                                       <video width="300" height="300" poster="/assets/web/img/vue1.jpg" controls>
                                                <source src="/{{ $item->path }}?{{ $item->id }}" type="video/mp4">
                                                <source src="/{{ $item->path }}?{{ $item->id }}" type="video/ogg">
                                                Your browser does not support the video tag.
                                        </video>
                                        <p style="margin-top:25px;color:black" >{{ $item->description }}</p>
                                    </div>
                                </div> --}}

                                    <div class="videos-grid-video">
                                        <h5 id="videos-grid">
                                            {{ $item->description }}
                                        </h5>
                                        <video width="300" height="300" controls>
                                            <source src="/{{ $item->path }}#t=0.1?{{ $item->id }}" type="video/mp4">
                                            <source src="/{{ $item->path }}?{{ $item->id }}" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="videos-grid-video">
                                        <h5 id="videos-grid">
                                            {{ $item->description }}
                                        </h5>
                                        <video width="300" height="300" controls>
                                            <source src="/{{ $item->path }}#t=0.1?{{ $item->id }}" type="video/mp4">
                                            <source src="/{{ $item->path }}?{{ $item->id }}" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="videos-grid-video">
                                        <h5 id="videos-grid">
                                            {{ $item->description }}
                                        </h5>
                                        <video width="300" height="300" controls>
                                            <source src="/{{ $item->path }}#t=0.1?{{ $item->id }}" type="video/mp4">
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
                        <a href="mailto:Amicalealjiza@gmail.com">Amicalealjiza@gmail.com</a>
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
