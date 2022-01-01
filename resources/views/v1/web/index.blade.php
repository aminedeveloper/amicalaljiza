@extends('v1.web.layouts.default')

@section('content')
<!-- BANNER GOAL --> 
<div class="banner-goal news-articles">
    <div class="container"> 
        <div class="banner-goal-wrap grid grid-cols-12 gap-20">
            @if($topnews)
            <div class="col-span-8 sm:col-span-12 res:col-span-12">
                <div class="col-span-8 sm:col-span-12 res:col-span-6" data-aos="fade-right">
                    <img src="{{Storage::url($topnews->path)}}" alt="{{$topnews->name}}">
                </div>
                <div class="head-title col-span-8 sm:col-span-12 res:col-span-6">
                    <a href="{{route('nouveautes.show',$topnews->id)}}">
                        <h2> {{$topnews->name}} </h2>
                        
                    </a>
                    <span class="line"></span>
                    <p>
                        {{$topnews->description}}
                    </p>
                </div> 
            </div>
            @endif
            <div class="col-span-3 sm:col-span-12 res:col-span-12">
                <div class="col-span-3 sm:col-span-12 res:col-span-12 grid grid-cols-12 gap-12">
                    @foreach ($news as $new)
                        @if($new->id != $topnews->id)
                            @if($new->extension == 'mp4')
                            @if (in_array("acceuil", explode(',',$new->type)))
                                <div class="client-content col-span-12 sm:col-span-4 res:col-span-4">
                                    <video width="200" height="100" controls loop="true">
                                        <source src="/{{$new->path}}" type="video/mp4">
                                        <source src="/{{$new->path}}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                      <a href="{{route('nouveautes.show',$new->id)}}"><p>{{$new->name}}</p></a>
                                    <span class="line"></span>
                                </div>
                            @endif
                            @else
                                @if (in_array("acceuil", explode(',',$new->type)))
                                    <div class="client-content col-span-12 sm:col-span-4 res:col-span-4">
                                        <a href="{{route('nouveautes.show',$new->id)}}">
                                            <img style="width: 128px;" src="{{Storage::url($new->path)}}" alt="client-1">
                                        </a>
                                        <a href="{{route('nouveautes.show',$new->id)}}"><p>{{$new->name}}</p></a>
                                        <span class="line"></span>
                                    </div>
                                @endif
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER GOAL END -->

    <!-- BANNER GOAL -->
    <div class="banner-goal">
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
                    <button class="button" data-filter=".tranche-1">Tranche 1</button>
                    <button class="button" data-filter=".tranche-2">Tranche 2</button>
                    <button class="button" data-filter=".tranche-3">Tranche 3</button>
                    <button class="button" data-filter=".tranche-4">Tranche 4</button>
                </div>
                <div class="grid portfolio-block-grid">
                    <div class="element-item transition tranche-1 tablet-column-3  column-3" data-category="transition">
                        <div class="item-wrap">
                            <a href="single-porto.html">
                                <figure class="portfolio-image">
                                    <img src="/assets/web/img/vue1.jpg" alt="Porto Image 1">
                                    <figcaption>
                                        <div class="caption-inside">
                                            <h3 class="portfolio-loop-title ih-fade-down ih-delay-sm">
                                                Jacob Villa </h3>
                                            <h5 class="portfolio-category ih-fade-up ih-delay-sm">Commercial</h5>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="element-item transition tranche-2 tablet-column-3 column-3" data-category="transition">
                        <div class="item-wrap">
                            <a href="single-porto.html">
                                <figure class="portfolio-image">
                                    <img src="/assets/web/img/vue1.jpg" alt="Porto Image 2">
                                    <figcaption>
                                        <div class="caption-inside">
                                            <h3 class="portfolio-loop-title ih-fade-down ih-delay-sm">
                                                Katora Villa </h3>
                                            <h5 class="portfolio-category ih-fade-up ih-delay-sm">Building</h5>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="element-item transition tranche-3 tablet-column-3 column-3" data-category="transition">
                        <div class="item-wrap">
                            <a href="single-porto.html">
                                <figure class="portfolio-image">
                                    <img src="/assets/web/img/vue1.jpg" alt="Porto Image 3">
                                    <figcaption>
                                        <div class="caption-inside">
                                            <h3 class="portfolio-loop-title ih-fade-down ih-delay-sm">
                                                Barco Villa </h3>
                                            <h5 class="portfolio-category ih-fade-up ih-delay-sm">Commercial</h5>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="element-item transition tranche-4 tablet-column-3 column-3" data-category="transition">
                        <div class="item-wrap">
                            <a href="single-porto.html">
                                <figure class="portfolio-image">
                                    <img src="/assets/web/img/vue1.jpg" alt="Porto Image 4">
                                    <figcaption>
                                        <div class="caption-inside">
                                            <h3 class="portfolio-loop-title ih-fade-down ih-delay-sm">
                                                Bertie Appartment </h3>
                                            <h5 class="portfolio-category ih-fade-up ih-delay-sm">Residential</h5>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
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
                <div class="testi-block col-span-12 sm:col-span-12 res:col-span-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="carousel-slide testimonial-content">
                                    <p>
                                        "Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas."
                                    </p>
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
                                            <h5 class="testi-author">  ABDELLATIF EL ALAMI</h5>
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
                                            <h5 class="testi-author">  Taoufik EL OUDNI</h5>
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
                                            <h5 class="testi-author">  Mohamed EN NAJJAR</h5>
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
                                            <h5 class="testi-author">         Marouan HAMDOUNI</h5>
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
                                            <h5 class="testi-author">   Mohamed EL BOUANANI

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
                                            <h5 class="testi-author">                             Larbi NOURI

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
                                            <h5 class="testi-author">  Mustapha OUDRHIRI
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
                    <a href="blog.html" class="button-basic-3">Voir toutes les actualités</a>
                </div>
            </div>
            <div class="blog-section blog-title-wrap grid grid-cols-12 gap-20">
                <div class="blog-item col-span-6 sm:col-span-12 res:col-span-12">
                    <div class="post-head clearfix">
                        <div class="date">
                            <a href="singlepost.html">
                                <span class="thedate">23</span>
                                <span class="month">Aout</span><span class="year">2021</span>
                            </a>
                        </div>
                        <div class="block-title clearfix">
                            <h3>
                                <a href="singlepost.html">Le Projet TADDART LUXURY HOMES</a>
                            </h3>
                            <div class="meta-wrapper clearfix">
                                <span class="author">
                                    <a href="singlepost.html">
                                        <span class="author-name">
                                            <span class="author-separator">by</span><span class="vcard"> amicale-aljiza</span>
                                        </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="post-thumb">
                        <a href="singlepost.html">
                            <img src="/assets/web/img/luxury_taddart (1).jpg" alt="Phasellus molestie feugiat hendrerit Interdum">
                            <div class="gedung-overlay"></div>
                        </a>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <div class="post-text">
                                <p>
                                    Nichée sur une colline en plein cœur de Californie, le projet Taddart Luxury Home est une résidence fermée et sécurisée qui s’étend sur plus de 14 hectares. Résolument raffiné et moderne, le projet Taddart Luxury Home offre à nos adhérents des appartements de très haut standing avec un large choix de superficies (80m2 au 300m2) et de commodités : mosquée et locaux commerciaux.
                                </p>
                            </div>
                            <span class="btn-more">
                                <a href="singlepost.html" class="read-more">Lire la suite</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="blog-item col-span-6 sm:col-span-12 res:col-span-12">
                    <div class="post-head clearfix">
                        <div class="date">
                            <a href="singlepost.html">
                                <span class="thedate">23</span>
                                <span class="month">Aout</span><span class="year">2021</span>
                            </a>
                        </div>
                        <div class="block-title clearfix">
                            <h3>
                                <a href="singlepost.html">Nous sommes Amicale Al Jiza</a>
                            </h3>
                            <div class="meta-wrapper clearfix">
                                <span class="author">
                                    <a href="singlepost.html">
                                        <span class="author-name">
                                            <span class="author-separator">by</span><span class="vcard"> amicale-aljiza</span>
                                        </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="post-thumb">
                        <a href="singlepost.html">
                            <img src="/assets/web/img/1.jpg" alt="Phasellus molestie feugiat hendrerit Interdum">
                            <div class="gedung-overlay"></div>
                        </a>
                    </div>
                    <div class="post-content-wrap">
                        <div class="post-content">
                            <div class="post-text">
                                <p>
                                    Promouvoir l’habitat à caractère associatif, telle est la vocation de l’Amicale AL JIZA, association créée en 2013 et animée par de grandes missions :
                                    Développer des projets immobiliers novateurs;
Créer un espace de vie agréable et sécurisé offrant luxe et bien-être aux adhérents;
Répondre aux besoins & attentes en matière de logement haut standing;
Permettre aux adhérents d’acquérir un bien immobilier en toute sérénité;
Offrir un large choix de superficies et de types de logements (linéaire, duplex).
                                </p>
                            </div>
                            <span class="btn-more">
                                <a href="singlepost.html" class="read-more">Lire la suite</a>
                            </span>
                        </div>
                    </div>
                </div>
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
                        <p >05 22 25 35 68</p>
                    </div>
                </div>
                <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                    <div class="system-image">
                        <i class="fas fa-map-marker-alt fa-5x"></i>
                    </div>
                    <div class="system-text">
                        <h3>Nous Rendre Visite</h3>
                        <a href="https://goo.gl/maps/vKVDU4kWevXFJ1cA7" target="_blank"><p>Amicale Al Jiza</p></a>
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
    <!-- BANNER BLOCK END -->
@endsection
