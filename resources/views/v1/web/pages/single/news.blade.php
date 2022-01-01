@extends('v1.web.layouts.default')
@section('styles')
@endsection
@section('content')
    <!-- SINGLE POST START -->
    <div class="single-post-wrap blog-loop">
        <div class="container">
            <div class="single-post grid grid-cols-12 gap-20">
                <div class="blog-single col-span-8 sm:col-span-12 res:col-span-12">
                    <div class="content-section">
                        <div id="post-54" class="blog-item">
                            <div class="post-head clearfix">
                                <div class="date">
                                    <a href="#">
                                        <span class="thedate">{{$new->created_at->format('d')}}</span>
                                        <span class="month">{{$new->created_at->format('F')}}</span><span class="year">{{$new->created_at->format('Y')}}</span>
                                    </a>
                                </div>
                                <div class="block-title clearfix">
                                    <h1 class="post-title entry-title">
                                        <a href="{{route('nouveautes.show',$new->id)}}">{{$new->name}}</a>
                                    </h1>
                                    <div class="meta-wrapper clearfix">
                                        <span class="author">
                                            <span class="author-name">
                                                <span class="author-separator"></span><span class="vcard">
                                                    Amicale Al Jiza</span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-thumb">
                                @if($new->extension == 'mp4')
                                    <video width="600" height="400" controls loop="true">
                                        <source src="/{{$new->path}}" type="video/mp4">
                                        <source src="/{{$new->path}}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <img src="{{Storage::url($new->path)}}" alt="{{$new->name}}">
                                @endif

                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <div class="content-inner-wrapper clearfix">
                                        <div class="post-text entry-content clearfix">
                                            <p>
                                                {{$new->description}}
                                            </p>
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
    <!-- SINGLE POST END -->

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

@endsection
