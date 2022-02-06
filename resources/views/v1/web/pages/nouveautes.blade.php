@extends('v1.web.layouts.default')
@section('content')
       <!-- BLOG LOOP -->
    <div class="blog-page blog-loop">
            <div class="container">
                <div class="col-span-12 sm:col-span-12 res:col-span-12">
                    <iframe id="inlineFrameExample" title="Inline Frame Example" width="100%" frameborder="0" height="1700px"
                        src="{{route('allnews')}}">">
                    </iframe>
                </div>
            </div>
    </div>
    <!-- BLOG LOOP END -->
@endsection