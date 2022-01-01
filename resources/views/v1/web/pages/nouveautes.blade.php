@extends('v1.web.layouts.default')
@section('content')
       <!-- BLOG LOOP -->
       <div class="blog-page blog-loop">
        <div class="container">
            <div class="blog-section-wrap grid grid-cols-12 gap-20">
                <div class="main-blog col-span-8 sm:col-span-12 res:col-span-12">
                    @foreach ($news as $new)
                        @if (in_array("news", explode(',',$new->type)))
                            <div class="blog-item">
                                <div class="post-head clearfix">
                                    <div class="date">
                                        <a href="#">
                                            <span class="thedate">{{$new->created_at->format('d')}}</span>
                                            <span class="month">{{$new->created_at->format('F')}}</span><span class="year">{{$new->created_at->format('Y')}}</span>
                                        </a>
                                    </div>
                                    <div class="block-title clearfix">
                                        <h3>
                                            <a href="{{route('nouveautes.show',$new->id)}}">{{$new->name}}</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="post-thumb">
                                    <a href="{{route('nouveautes.show',$new->id)}}">
                                        <img src="{{Storage::url($new->path)}}" alt="{{$new->name}}">
                                        <div class="gedung-overlay"></div>
                                    </a>
                                </div>
                                <div class="post-content-wrap">
                                    <div class="post-content">
                                        <div class="post-text">
                                            <p>{{$new->description}}</p>
                                        </div>
                                        <span class="btn-more">
                                            <a href="{{route('nouveautes.show',$new->id)}}" class="read-more">Avoir plus</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                   
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
                            <li role="presentation"><a href="#default" aria-controls="default" role="tab" data-toggle="tab" class="active" aria-selected="true">Dernier</a></li>
                        </ul>
                        <div class="tab-content clearfix">
                            <div role="tabpanel" class="recent-news tab-pane active" id="default">
                                @foreach ($news as $new)
                                    <div class="post-item blog-item clearfix">
                                        <a href="singlepost.html">
                                            <div class="post-thumb">
                                                <img src="{{Storage::url($new->path)}}" alt="tab-img-1">
                                                <div class="gedung-overlay"></div>
                                                <div class="index-bg">
                                                    <span>1</span>
                                                </div>
                                                <div class="post-content">
                                                    <h5>{{$new->name}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
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