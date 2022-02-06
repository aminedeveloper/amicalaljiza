@extends('v1.web.layouts.default')
@section('styles')
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/assets/web/gallery/style.css" />
    <script type="text/javascript" src="/assets/web/gallery/modernizr.min.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/lightbox.js"></script>
    <link href="/assets/web/gallery/lightbox.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets/web/gallery/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="/assets/web/gallery/jquery.fancybox.min.css">
@endsection
@section('content')

    <!-- PORTFOLIO BLOCK -->
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12">
{{--             
                @foreach ($tranche->media as $media)
                    <div class="col-md-3">
                        <div class="box-news-1">
                            <div class="media gbr">
                                <a href="{{ Storage::url($media->path) }}" data-fancybox="gallery"><img
                                        src="{{ Storage::url($media->path) }}" alt="" class="img-responsive"></a>
                            </div>
                          
                        </div>
                    </div>

                @endforeach --}}

                <div class="owl-carousel owl-theme">
                    @foreach ($tranche->media as $media))
                        <div class="item">
                            <div class="box-news-1">
                                <div class="media gbr">
                                    <a href="{{ Storage::url($media->path) }}" data-fancybox="gallery"><img
                                            src="{{ Storage::url($media->path) }}" alt="" class="img-responsive"></a>
                                </div>
                               
                            </div>
                        </div>
                    @endforeach
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
    <script type="text/javascript" src="/assets/web/gallery/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/jquery.superslides.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/owl.carousel.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/easings.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/isotope.pkgd.min.js"></script>

    <!-- sendmail -->
    <script type="text/javascript" src="/assets/web/gallery/validator.min.js"></script>
    <script type="text/javascript" src="/assets/web/gallery/form-scripts.js"></script>

    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;ver=4.1.5'></script>

    <script type="text/javascript" src="/assets/web/gallery/script.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay:true,
            margin: 10,
            nav: true, 
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
