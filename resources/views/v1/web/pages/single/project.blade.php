@extends('v1.web.layouts.default')
@section('content') 
       <!-- PORTFOLIO BLOCK -->
       <div class="portfolio-block page-porto">
        <div class="container">
            <div class="portfolio-title-wrap grid grid-cols-12 gap-20">
                <div class="portfolio-title text-center head-title col-span-12 sm:col-span-12 res:col-span-12">
                    <h2>Nos projets</h2>
                    <span data-aos="fade-up" class="line center"></span>

                </div>
            </div>
            <div class="portfolio-block-wrap text-center">
                <div id="mobile-filter-id" class="mobile-filter clearfix">
                    <button id="filter-icon">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                        <span class="bar bar-4"></span>
                    </button>
                </div>

                <div class="grid portfolio-block-grid">
                    <div class="element-item transition column-3" data-category="transition">
                        @foreach ($tranche->projects as $project)
                            <div class="col-span-4 sm:col-span-12 res:col-span-4">
                                <div class="item-wrap">
                                    <a href="#">
                                        <figure class="portfolio-image">
                                            <img src="{{ Storage::url($project->path) }}" alt="Porto Image 1">
                                            <figcaption>
                                                <div class="caption-inside">
                                                    <h3 class="portfolio-loop-title ih-fade-down ih-delay-sm">
                                                        {{ $project->name }} </h3>
                                                    <h5 class="portfolio-category ih-fade-up ih-delay-sm">
                                                        {{ $project->category->name }}</h5>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- pagination has path -->
            {{-- <div id="load-more-causes"><a href="page2.html"></a></div>
            <p class="text-center">
                <button class="view-more-button button-basic-1">Load more</button>
            </p> --}}
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
@endsection