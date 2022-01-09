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
                @foreach ($photos as $photo) 
                    <div class="col-md-3">
                        <div class="box-news-1">
                            <div class="media gbr">
                                <a href="{{ Storage::url($photo->image()) }}" data-fancybox="gallery"><img
                                        src="{{ Storage::url($photo->image()) }}" alt="" class="img-responsive"></a>
                            </div>
                            <div class="body">
                                <div class="title">
                                    {{ $photo->description }}
                                </div>
                                <div class="meta">
                                    <span class="date"><i class="fa fa-clock-o"></i>
                                        {{ $photo->created_at }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

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
    <script type="text/javascript">
        function GetPostProj($id) {
            const input = document.querySelector("#proj_id");
            const form = document.querySelector("#PostPro");
            input.value = $id;
            form.submit();
        }
    </script>
    <script type="text/javascript">
        function GetPicAlbum($id) {
            const input = document.querySelector("#album_id");
            const form = document.querySelector("#PicAlbum");
            input.value = $id;
            form.submit();
        }
    </script>
@endsection
