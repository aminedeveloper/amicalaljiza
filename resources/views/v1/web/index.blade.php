@extends('v1.web.layouts.default')

@section('content')
    <!-- BANNER GOAL -->
    <div class="banner-goal news-articles">
        <div class="container">
            <div class="banner-goal-wrap grid grid-cols-12 gap-20">

                {{-- @foreach ($news as $new)
                    @if ($new->id)
                        @if ($new->extension == 'mp4')
                            @if (in_array('acceuil', explode(',', $new->type)))
                                <div id="news_{{ $new->id }}" @if ($new->id == $topnews->id) style="display:block;" @else style="display:none;" @endif
                                    class="col-span-8 sm:col-span-12 res:col-span-12 divnews">
                                    <div class="col-span-8 sm:col-span-12 res:col-span-6" data-aos="fade-right">
                                        <video width="600" height="400" controls loop="true">
                                            <source src="/{{ $new->path }}" type="video/mp4">
                                            <source src="/{{ $new->path }}" type="video/ogg"> 
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="head-title col-span-8 sm:col-span-12 res:col-span-6">

                                        <h4> {{ $new->name }} </h4>
                                        <span class="line"></span>
                                        <p>
                                            {{ $new->description }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @else
                            @if (in_array('acceuil', explode(',', $new->type)))
                                <div id="news_{{ $new->id }}" @if ($new->id == $topnews->id) style="display:block;" @else style="display:none;" @endif
                                    class="col-span-8 sm:col-span-12 res:col-span-12 divnews">
                                    <div class="col-span-8 sm:col-span-12 res:col-span-6" data-aos="fade-right">
                                        <img src="{{ Storage::url($new->path) }}" alt="{{ $new->name }}">
                                    </div>
                                    <div class="head-title col-span-8 sm:col-span-12 res:col-span-6">

                                        <h4> {{ $new->name }} </h4>


                                        <span class="line"></span>
                                        <p>
                                            {{ $new->description }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif
                @endforeach
                <div class="col-span-3 sm:col-span-12 res:col-span-12">
                    <div class="col-span-3 sm:col-span-12 res:col-span-12 grid grid-cols-12 gap-12">
                        @foreach ($news as $new)
                            @if ($new->id != $topnews->id)
                                @if ($new->extension == 'mp4')
                                    @if (in_array('acceuil', explode(',', $new->type)))
                                        <div class="client-content col-span-12 sm:col-span-4 res:col-span-4">
                                            <video width="200" height="100" controls loop="true">
                                                <source src="/{{ $new->path }}" type="video/mp4">
                                                <source src="/{{ $new->path }}" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <a news="news_{{ $new->id }}" class="newsbtn" href="javascript:;">
                                                <p>{{ $new->name }}</p>
                                            </a>
                                            <span class="line"></span>
                                        </div>
                                    @endif
                                @else
                                    @if (in_array('acceuil', explode(',', $new->type)))
                                        <div class="client-content col-span-12 sm:col-span-4 res:col-span-4">
                                            <a href="{{ route('nouveautes.show', $new->id) }}">
                                                <img style="width: 128px;" src="{{ Storage::url($new->path) }}"
                                                    alt="client-1">
                                            </a>
                                            <a news="news_{{ $new->id }}" href="javascript:;" class="newsbtn">
                                                <p>{{ $new->name }}</p>
                                            </a>
                                            <span class="line"></span>
                                        </div>
                                    @endif
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div> --}}
                
                <div class="col-span-12 sm:col-span-12 res:col-span-12">
                    <iframe id="inlineFrameExample" title="Inline Frame Example" width="100%" frameBorder="0" height=700px
                        src="{{route('news')}}">">
                    </iframe>
                </div>
            </div>
        </div> 
    </div>
    <!-- BANNER GOAL END -->

    <!-- BANNER GOAL -->
    <div style="background-color: #f2b100" class="banner-goal ">
        <div class="container">
            <div class="banner-goal-wrap grid grid-cols-12 gap-20">
                <div class="block-system col-span-6 sm:col-span-12 res:col-span-6" data-aos="fade-right">
                    <img src="/assets/web/img/vue1.jpg" alt="contractor">
                </div>
                <div class="head-title col-span-6 sm:col-span-12 res:col-span-6">

                    <h2>
                        Votre Meilleur Entreprise Du Logement .</h2>
                    <span class="line"></span>
                    <p>
                        Amicale AL JIZA s’est fixée comme objectif des développer des projets immobiliers novateurs ayant
                        deux dénominateurs communs : Un emplacement stratégique et un rapport qualité prix excellent.

                        L’AMICALE AL JIZA est une association qui a été créée en 2014 par des enseignants des médecins et
                        des professionnels libérales, dans un but de promouvoir l’habitat à caractère associatif.
                    </p>
                    <a style="background-color: #0c1f38" href="projects.html" class="button-basic-1">En Savoir Plus</a>

                </div>
            </div>
        </div>
    </div>
    <!-- BANNER GOAL END -->
    <!-- PORTFOLIO BLOCK  -->
    <div class="portfolio-block">
        <div class="container">
            <div class="portfolio-title-wrap grid grid-cols-12 gap-20">
                <div class="portfolio-title head-title col-span-6 sm:col-span-12 res:col-span-12">
                    <h2 class="text-white">Dernier Projets</h2>
                    <span class="line"></span>
                </div>
                <div class="portfolio-button col-span-6 sm:col-span-12 res:col-span-12">
                    <a href="#" class="button-basic-1">Voir Tous Les Projets</a>
                </div>
            </div>
            <div class="portfolio-block-wrap">
                <div id="mobile-filter-id" class="mobile-filter clearfix">
                    <button id="filter-icon">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                        <span class="bar bar-4"></span>
                    </button>
                </div>
                <div id="filters" class="button-group">
                    <button class="button is-checked" data-filter="*">Tout</button>

                    @foreach ($tranches as $tranche)
                        <button class="button"
                            data-filter=".tranche_{{ $tranche->id }}">{{ $tranche->name }}</button>
                    @endforeach
                </div> 
                <div class="grid portfolio-block-grid">
                    @foreach ($tranches as $tranche)
                        @foreach ($tranche->media as $media)
                            <div class="element-item transition tranche_{{ $tranche->id }} tablet-column-3  column-3" data-category="transition">
                                <div class="item-wrap">
                                    <a href="javascript:;">
                                        <figure class="portfolio-image">
                                            <img src="{{ Storage::url($media->path) }}" alt="Porto Image 1">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- PORTFOLIO BLOCK END  -->
    <!-- TESTIMONIAL BLOCK  -->
    <div class="testimonial-block">
        <div class="testi-overlay"></div>
        <div class="container">
            <div class="test-client-wrap grid grid-cols-12 gap-20">
                {{-- <div class="testi-block col-span-12 sm:col-span-12 res:col-span-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image008.jpg" alt="Mohammed En-nejjar">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author">Mohammed En-nejjar</h5>
                                            <cite class="testi-job">
                                                Vice S </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image003.jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author">Abdelilah FAHMI</h5>
                                            <cite class="testi-job">
                                                1er VICE PRESIDENT </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image002.jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author"> ABDELLATIF EL ALAMI</h5>
                                            <cite class="testi-job">
                                                2ème VICE PRESIDENT </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image010.jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author"> Taoufik EL OUDNI</h5>
                                            <cite class="testi-job">
                                                TRESORIER </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image008 (1).jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author"> Mohamed EN NAJJAR</h5>
                                            <cite class="testi-job">
                                                VICE SECRETAIRE GENERAL </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image006.jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author"> Marouan HAMDOUNI</h5>
                                            <cite class="testi-job">
                                                VICE TRESORIER </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image007.jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author"> Mohamed EL BOUANANI

                                            </h5>
                                            <cite class="testi-job">
                                                CONSEILLER </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image005.jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author"> Larbi NOURI

                                            </h5>
                                            <cite class="testi-job">
                                                CONSEILLER </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."</p>
                                    <div class="testimonial-details clearfix">
                                        <div class="testimonial-image">
                                            <img src="/assets/web/img/image009.jpg" alt="Patrick Johanson">
                                        </div>
                                        <div class="testimonial-detail-inner">
                                            <h5 class="testi-author"> Mustapha OUDRHIRI
                                            </h5>
                                            <cite class="testi-job">
                                                CONSEILLER </cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="team-block-grid grid grid-cols-12 gap-12">


                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image008.jpg" alt="Mohammed En-nejjar">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author">Mohammed En-nejjar</h5>
                                    <cite class="testi-job">
                                        Vice S </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image003.jpg" alt="Patrick Johanson">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author">Abdelilah FAHMI</h5>
                                    <cite class="testi-job">
                                        1er VICE PRESIDENT </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image002.jpg" alt="Patrick Johanson">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author"> ABDELLATIF EL ALAMI</h5>
                                    <cite class="testi-job">
                                        2ème VICE PRESIDENT </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image010.jpg" alt="Patrick Johanson">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author"> Taoufik EL OUDNI</h5>
                                    <cite class="testi-job">
                                        TRESORIER </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image006.jpg" alt="Patrick Johanson">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author"> Marouan HAMDOUNI</h5>
                                    <cite class="testi-job">
                                        VICE TRESORIER </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image007.jpg" alt="Patrick Johanson">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author"> Mohamed EL BOUANANI

                                    </h5>
                                    <cite class="testi-job">
                                        CONSEILLER </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image005.jpg" alt="Patrick Johanson">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author"> Larbi NOURI

                                    </h5>
                                    <cite class="testi-job">
                                        CONSEILLER </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                    <div class="swiper-slide">
                        <div class="carousel-slide testimonial-content">
                            <div class="testimonial-details clearfix">
                                <div class="testimonial-image">
                                    <img src="/assets/web/img/image009.jpg" alt="Patrick Johanson">
                                </div>
                                <div class="testimonial-detail-inner">
                                    <h5 class="testi-author"> Mustapha OUDRHIRI
                                    </h5>
                                    <cite class="testi-job">
                                        CONSEILLER </cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL BLOCK END -->
    <!-- BLOG LOOP BLOCK -->
    <div class="blog-loop">
        <div class="container">
            <div class="blog-title-wrap grid grid-cols-12 ">
                <div class="blog-title head-title col-span-6 sm:col-span-12 res:col-span-12">
                    <h2>Nouveautés</h2>
                    <span class="line"></span>
                </div>
                <div class="blog-button col-span-6 sm:col-span-12 res:col-span-12">
                    <a href="{{ route('nouveautes') }}" class="button-basic-3">Voir toutes les actualités</a>
                </div>
            </div>
            <div class="blog-section blog-title-wrap grid grid-cols-12 gap-20">
                @foreach ($news as $new)
                    <div class="blog-item col-span-6 sm:col-span-12 res:col-span-12">
                        <div class="post-head clearfix">
                            <div class="date">
                                <a href="singlepost.html">
                                    <span class="thedate">{{ $new->created_at->format('d') }}</span>
                                    <span class="month">{{ $new->created_at->format('F') }}</span><span
                                        class="year">{{ $new->created_at->format('Y') }}</span>
                                </a>
                            </div>
                            <div class="block-title clearfix">
                                <h3>
                                    <a href="{{ route('nouveautes.show', $new->id) }}">{{ $new->name }}</a>
                                </h3>
                                <div class="meta-wrapper clearfix">
                                    <span class="author">
                                        <a href="{{ route('nouveautes.show', $new->id) }}">
                                            <span class="author-name">
                                                <span class="author-separator">by</span><span class="vcard">
                                                    amicale-aljiza</span>
                                            </span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumb">
                            <a href="{{ route('nouveautes.show', $new->id) }}">
                                @if ($new->extension == 'mp4')
                                    <video width="500" height="300" controls loop="true">
                                        <source src="/{{ $new->path }}?{{ $new->id }}" type="video/mp4">
                                        <source src="/{{ $new->path }}?{{ $new->id }}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <img src="{{ Storage::url($new->path) }}"
                                        alt="Phasellus molestie feugiat hendrerit Interdum">
                                @endif

                                <div class="gedung-overlay"></div>
                            </a>
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <div class="post-text">
                                    <p>
                                        {{ $new->description }}
                                    </p>
                                </div>
                                <span class="btn-more">
                                    <a href="{{ route('nouveautes.show', $new->id) }}" class="read-more">Lire la
                                        suite</a>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- BLOG LOOP BLOCK END -->
    <!-- BANNER BLOCK -->
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
                                               <a href="mailto:contact@amicalaljiza.com">Amicalealjiza@gmail.com</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER BLOCK END -->
@endsection


@section('scripts')
    <script>
        $('.newsbtn').click(function() {
            let id = $(this).attr("news");
            let old = $('.divnews');
            for (let i = 0; i < old.length; i++) {
                $(old[i]).hide();
            }
            $('#' + id).show();
        });
    </script>
@endsection
