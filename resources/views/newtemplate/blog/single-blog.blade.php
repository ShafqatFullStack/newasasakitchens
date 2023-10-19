@extends('newtemplate.layout.template')



@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp

@section('meta')
		<title>{{$blog->meta_title}}
</title>
		<meta name="description" content="{{$blog->meta_description}}">
<meta property="og:image" content="{{asset('uploads/post/'.$blog->featured_image)}}" />


<link rel="stylesheet" href="{{ asset('newtemplate/css/animation.css') }}" />

<link rel="stylesheet" href="{{ asset('newtemplate/css/header.css') }}" />

</head>
@endsection
@section('meta3')

p {
    
    font-size: 17px !important;
   font-weight: 500 !important;
    line-height: 150%;
    font-family: Helvetica !important;
}
p span{
    
    font-size: 17px !important;
   // font-weight: 500 !important;
    line-height: 150%;
    font-family: Helvetica !important;
}
h2 span{
    
    font-size: 22px !important;
   font-weight:450
}
.ftco-section img{width:100% !important;margin-bottom:15px;}

@endsection

@section('main-section')


<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
<!-- Google Tag Manager (noscript) -->




	  <section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('newtemplate/asasa-kitchen/providing/1.png') }})" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-start">
<div class="col-md-9">
<h1 class="mb-3 bread">{{$blog->title}}</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="#">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="#">Blog <i class="fa fa-chevron-right"></i></a></span> <span>{{$blog->title}} <i class="fa fa-chevron-right"></i></span></p>

</div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container">
<div class="row">
<div class="col-lg-8  col-md-12">
<article class="post">
                            <div class="post-preview"><img src="{{asset('uploads/post/'.$blog->featured_image)}}" alt="article" class="img-fluid"/></div>
                            <div class="post-wrapper">
                                <div class="post-header"><br>
                                    <h2 class="post-title" style="font-size:22px;"><b>{{$blog->title}}</b></h2>
                                    <ul  style="list-style-type: none;margin-left:-5.2%;">
                                        <li>{{$blog->created_at}} / 
                                        @foreach($blog->categories as $cat)
                                            <a href="#"  style="color:#6c6b6b">{{ $cat->name }}</a> ,
                                        @endforeach
</li>

                                    </ul>
                                </div>
                      {!! $blog->content !!}                              
                            </div>
                        </article>
</div> 
<div class="col-lg-4 sidebar ">

 @php $blogs = \App\Post::all()->take(10);  @endphp
<div class="sidebar-box ">
<h3 class="heading-sidebar">Recent Blog</h3>
@foreach($blogs as $blog)
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image:url('{{asset('uploads/post/'.$blog->featured_image)}}')"></a>
<div class="text">
<h3 class="heading"><a href="{{route("single-blog",$blog->slug)}}">{{$blog->title}}</a></h3>
<div class="meta">

</div>
</div>
</div>
 @endforeach
                           

</div>

</div>
</div>
</div>
</section> 


<script src="{{ asset('newtemplate/js/jquery.min.js') }}"></script>
<script src="{{ asset('newtemplate/js/jquery-migrate.js') }}"></script><script>eval(mod_pagespeed_Udcyhb9c2D);</script>
<script>eval(mod_pagespeed_DFAGfkuvS2);</script>
<script>eval(mod_pagespeed_M3P0bw$3eF);</script>
<script src="{{ asset('newtemplate/js/jquery.easing.js') }}"></script><script>eval(mod_pagespeed_AxF3aNNdP8);</script>
<script>eval(mod_pagespeed_WSJkyIcJ0Y);</script>
<script>eval(mod_pagespeed_ZfhpzvtydJ);</script>
<script>eval(mod_pagespeed_GUluxpY0vO);</script>
<script src="{{ asset('newtemplate/js/jquery.magnifies.js') }}"></script><script>eval(mod_pagespeed_c$OxnWiaz5);</script>
<script>eval(mod_pagespeed_PHXrUG1pI_);</script>
<script>eval(mod_pagespeed_nFFJ_JbqfP);</script>
<script>eval(mod_pagespeed_1F8Ofbwzlo);</script>
<script>eval(mod_pagespeed_MiF2CyD9s2);</script>

</body>

<!-- Mirrored from 
impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->
</html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection


@section('script')

<script src="{{ asset('newtemplate/js/google-map.js') }}"></script><script>eval(mod_pagespeed_PCAJGgbmNY);</script>
<script>eval(mod_pagespeed_WeC_GqZ9y2);</script>


@endsection