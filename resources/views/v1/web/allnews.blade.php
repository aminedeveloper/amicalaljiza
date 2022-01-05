<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aha Magazine | Home</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="/assets/web/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/web/css/font-icons.css" />
    <link rel="stylesheet" href="/assets/web/css/news.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload -->
    <script src="/assets/web/js/lazysizes.min.js"></script>
    <style>
        #col {
            color: #ffc31d;
        }

    </style>

</head>

<body style="background-color: white;" class="bg-light">



    <div class="main-container container mt-40" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-12 blog__content mb-30">


                <!-- Latest News -->
                <section class="section">
                    <div class="title-wrap">
                        <h3 class="section-title">Latest News</h3>
                    </div>
                    <form id="PostPro" method="get" action="" target='_parent'>
                        <input type="hidden" name="proj_id" id="proj_id">

                    </form>
                    @foreach ($news as $new)
                        @if (in_array('news', explode(',', $new->type)))
                            <article class="entry post-list">
                                <div class="entry__img-holder post-list__img-holder">
                                    <a href="javascript:;">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="{{Storage::url($new->path)}}" src="{{Storage::url($new->path)}}" class="entry__img lazyload"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="entry__body post-list__body">
                                    <div class="entry__header">
                                        <a href="javascript:;" id="col" class="entry__meta-category">{{$new->category}}</a>
                                        <h2 class="entry__title">
                                            {{-- <a href="javascript:;"> {{$new->name}} </a> --}}
                                        {{$new->name}}
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <i class="ui-author"></i>
                                                <a href="javascript:;">Amicale Aljiza</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                {{$new->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p>{{$new->description}}</p>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                    
                </section>

                <!-- Carousel posts -->
                <section class="section mb-20">
                    <div class="title-wrap">
                        <h3 class="section-title section-title--sm">More News</h3>
                       <div class="carousel-nav">
                            <button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
                               <
                            </button>
                            <button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
                                >
                            </button>
                        </div>  
                    </div>

                    <!-- Slider -->
                    <div id="owl-posts" class="owl-carousel owl-theme">
                        @foreach ($topNews as $new)
                            @if (in_array('news', explode(',', $new->type)))
                                <article class="entry">
                                    <div class="entry__img-holder">
                                        <a href="{{route('nouveautes.show',$new->id)}}">
                                            <div class="thumb-container thumb-75">
                                                <img data-src="{{Storage::url($new->path)}}" src="{{Storage::url($new->path)}}" class="entry__img lazyload"
                                                    alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="entry__body">
                                        <div class="entry__header">
                                            <h2 class="entry__title entry__title--sm">
                                                <a href="{{route('nouveautes.show',$new->id)}}"> {{$new->name}} </a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-date">
                                                    <i class="ui-date"></i>
                                                    {{$new->created_at}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div> <!-- end slider -->
                </section>

            </div> <!-- end posts -->

        </div> <!-- end content -->
    </div> <!-- end main container -->



    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

    </main> <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="/assets/web/js/jquery.min.js"></script>
    <script src="/assets/web/js/bootstrap.min.js"></script>
    <script src="/assets/web/js/easing.min.js"></script>
    <script src="/assets/web/js/owl-carousel.min.js"></script>
    <script src="/assets/web/js/twitterFetcher_min.js"></script>
    <script src="/assets/web/js/jquery.newsTicker.min.js"></script>
    <script src="/assets/web/js/modernizr.min.js"></script>
    <script src="/assets/web/js/scripts.js"></script>
    <script type="text/javascript">
        function GetPostProj($id) {
            const input = document.querySelector("#proj_id");
            const form = document.querySelector("#PostPro");
            input.value = $id;
            form.submit();
        }
    </script>

</body>

</html>
