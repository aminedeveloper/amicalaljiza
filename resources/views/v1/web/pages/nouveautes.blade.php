@extends('v1.web.layouts.default')
@section('content')
       <!-- BLOG LOOP -->
       <div class="blog-page blog-loop">
        <div class="container">
            <div class="blog-section-wrap grid grid-cols-12 gap-20">
                <div class="main-blog col-span-8 sm:col-span-12 res:col-span-12">
                    <div class="blog-item">
                        <div class="post-head clearfix">
                            <div class="date">
                                <a href="#">
                                    <span class="thedate">23</span>
                                    <span class="month">August</span><span class="year">2021</span>
                                </a>
                            </div>
                            <div class="block-title clearfix">
                                <h3>
                                    <a href="singlepost.html">Phasellus molestie feugiat hendrerit Interdum</a>
                                </h3>
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
                                    <p>Eget ullamcorper turpis. Donec condimentum pulvinar lorem, sit amet ultrices diam bibendum non. Suspendisse potenti. Integer dapibus ligula tortor. Nam metus diam, tempus non...</p>
                                </div>
                                <span class="btn-more">
                                    <a href="#" class="read-more">Read More</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="post-head clearfix">
                            <div class="date">
                                <a href="#">
                                    <span class="thedate">23</span>
                                    <span class="month">August</span><span class="year">2021</span>
                                </a>
                            </div>
                            <div class="block-title clearfix">
                                <h3>
                                    <a href="singlepost.html">Phasellus molestie feugiat hendrerit Interdum</a>
                                </h3>
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
                                    <p>Eget ullamcorper turpis. Donec condimentum pulvinar lorem, sit amet ultrices diam bibendum non. Suspendisse potenti. Integer dapibus ligula tortor. Nam metus diam, tempus non...</p>
                                </div>
                                <span class="btn-more">
                                    <a href="#" class="read-more">Read More</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SIDEBAR -->
                <div class="sidebar-blog col-span-4 sm:col-span-12 res:col-span-12">
                    <div id="search-2" class="widget widget_search">
                        <form class="searchform search__form" role="search">
                            <input type="search" class="field search__input" name="search" id="search" placeholder="Type and hit enter ...">
                            <button type="submit" class="submit search-button" value=""><i class="icon-simple-line-icons-143"></i></button>
                        </form>
                    </div>
                    <div class="gedung-widget widget-sidebar">
                        <div class="title">
                            <h4 class="widget-title"><span class="wrap-1">Dernier </span><span class="wrap-2">Nouvelles </span></h4>
                        </div>
                        <ul class="nav nav-tabs clearfix" role="tablist" id="newsTabs">
                            <li role="presentation"><a href="#default" aria-controls="default" role="tab" data-toggle="tab" class="active" aria-selected="true">Latest</a></li>
                        </ul>
                        <div class="tab-content clearfix">
                            <div role="tabpanel" class="recent-news tab-pane active" id="default">
                                <div class="post-item blog-item clearfix">
                                    <a href="singlepost.html">
                                        <div class="post-thumb">
                                            <img src="/assets/web/img/1.jpg" alt="tab-img-1">
                                            <div class="gedung-overlay"></div>
                                            <div class="index-bg">
                                                <span>1</span>
                                            </div>
                                            <div class="post-content">
                                                <h5>Phasellus molestie feugiat hendrerit Interdum</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="post-item blog-item clearfix">
                                    <a href="singlepost.html">
                                        <div class="post-thumb">
                                            <img src="/assets/web/img/1.jpg" alt="tab-img-2">
                                            <div class="gedung-overlay"></div>
                                            <div class="index-bg">
                                                <span>2</span>
                                            </div>
                                            <div class="post-content">
                                                <h5>Lobortis id bibendum et rhoncus porttitor tortor</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="post-item blog-item clearfix">
                                    <a href="singlepost.html">
                                        <div class="post-thumb">
                                            <img src="/assets/web/img/1.jpg" alt="tab-img-3">
                                            <div class="gedung-overlay"></div>
                                            <div class="index-bg">
                                                <span>3</span>
                                            </div>
                                            <div class="post-content">
                                                <h5>Maecenas Ultrices Justo Metus Quis Facilisis</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SIDEBAR END -->
            </div>
        </div>
    </div>
    <!-- BLOG LOOP END -->
@endsection