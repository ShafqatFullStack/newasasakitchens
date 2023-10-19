@extends('newtemplate.layout.template')


@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    
@endphp
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
@php
    $section = \App\Section::findOrFail(10);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp

@section('meta')
		<title>Blogs - ASASA Kitchen
</title>
		
    

<!-- /Rank Math WordPress SEO plugin -->
<link rel='dns-prefetch' href='http://use.fontawesome.com/' />

<style>
.apbct_wc_honeypot {
display: none !important;
}
</style>



<link rel="stylesheet" type="text/css" href="{{ asset('newtemplate/wp-content/cache/wpfc-minified/lvyhgelm/483ft.css') }}" media="all"/>

<link rel="stylesheet" type="text/css" href="../newtemplate/wp-content/cache/wpfc-minified/qszdiofh/9pujf.css') }}" media="all"/>
<link rel='stylesheet' id='elementor-post-1143-css'  href="{{ asset('newtemplate/wp-content/uploads/elementor/css/post-11439d2f.css?ver=1634699583') }}" media='all' />


<link rel="stylesheet" href="{{ asset('newtemplate/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('newtemplate/css/animation.css') }}" />
<link rel="stylesheet" href="{{ asset('newtemplate/css/header.css') }}" />


<link rel="stylesheet" href="{{ asset('newtemplate/css/theme.css') }}" />


<!-- <script src='https://impressionskitchens.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script> -->
<!-- <script src='https://impressionskitchens.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script> -->
<script id='ct_public_functions-js-extra'>
var ctPublicFunctions = {"_ajax_nonce":"cc392bef77","_rest_nonce":"5b17713fd4","_ajax_url":"\/wp-admin\/admin-ajax.php","_rest_url":"https:\/\/impressionskitchens.com\/index.php?rest_route=\/","_apbct_ajax_url":"https:\/\/impressionskitchens.com\/wp-content\/plugins\/cleantalk-spam-protect\/lib\/Cleantalk\/ApbctWP\/Ajax.php","data__set_cookies":"1","data__set_cookies__alt_sessions_type":"0"};
</script>
<style>
.section-sub{
	padding-top:30px;
	padding-bottom:30px;
}
.subservice h2{
	
		font-size:24px;
		line-height:3;
	
}
.subservice p{
	
		line-height:1.7;
	
}

.subservice .contentsection{
		padding-top:25px;
		background:white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
.subservice	.imagessection{
		padding:0px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	
.subserivce{
	margin-left:5%;
}
.prev, .next{
	background:orange;
} 
p{
color:#707070;
line-height: 1.5;
text-align: justify;

}


.call-to-action h3 {
    font-size: 21px;
    line-height: 3;
    font-weight: bold;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
</style>

</head>
@endsection
@section('main-section')


<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
<!-- Google Tag Manager (noscript) -->



 <section class="section bg-gray-900 box-custom-1">
       
		<div class="slideshow-container" style="width:100%;">


<div class="box-custom-1-main mobheight" >
<img class="anim"  src="{{ asset('newtemplate/asasa-kitchen/blog/1.png') }}">
			<div class="block-sm mobblock">

			<h2 class="wow fadeInRight" data-wow-delay=".5s" style="color:#fff">OUR  BLOGS</h2>
				<p class="wow fadeInRight" data-wow-delay=".6s" style="color:#fff">ASASA Kitchen is here as your kitchen partner. You can read blogs on kitchen renovation services and also find beautiful & modern ideas for your kitchen.</p>
<div class="linespace"></div>
				<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="tel:+1-647-956-1116" style="margin-top:5%;">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="#" style="margin-top:5%;">Get In Touch</a>
			
           </div>
        </div>
		
</div>
<br>
		
          </div>
 	
      </section>




<section class="ftco-section bg-light">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-10 heading-section text-center ">
<span class="subheading">Our Blog</span>
<h2 class="mb-4">Latest Blog Updates</h2>
</div>
</div>

<div class="row d-flex">
 @foreach ($blogs as $blog)
@php $blog->featured_image @endphp
<div class="col-lg-4 ">
<div class="blog-entry">
@php $img=$blog->featured_image;   $img2=asset('uploads/post/'.$img); @endphp


<a href="{{route('single-blog',$blog->slug)}}" class="block-20" style="background-image:url('{{ $img2 }}')">
</a>
<div class="text d-block">
<div class="meta">
<p>
<a href="#"><span class="fa fa-calendar mr-2"></span>{{ $blog->created_at->format('M') }}. {{ $blog->created_at->format('d') }}, {{ $blog->created_at->format('Y') }}</a>

</p>
</div>
<h3 class="heading"><a href="{{route("single-blog",$blog->slug)}}">{{$blog->title}}</a></h3>
<p  class="blogbtn"><a href="{{route('single-blog',$blog->slug)}}" class="btn btn-secondary py-2 px-3">Read more</a></p>
</div>
</div>
</div>
@endforeach



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



<script src="{{ asset('newtemplate/wp-content/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.event.move8a54.js?ver=1.0.0') }}" id='wb-elementor-before-after-slider-event-move-js'></script>

<script src="{{ asset('newtemplate/wp-content/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.twentytwenty8a54.js?ver=1.0.0') }}" id='wb-elementor-before-after-slider-library-js'></script>
<script src="{{ asset('newtemplate/wp-content/plugins/before-after-image-comparison-slider-for-elementor/assets/js/main8a54.js?ver=1.0.0') }}" id='wb-elementor-before-after-slider-main-js'></script>
<script id='8f3bd8296-js-extra'>
var localize = {"ajaxurl":''};
</script>
<script src="{{ asset('newtemplate/wp-content/uploads/essential-addons-elementor/734e5f942.minb0eb.js?ver=1635091632') }}" id='8f3bd8296-js'></script>
<script id='astra-addon-js-js-extra'>
var astraAddon = {"sticky_active":""};
</script>


<script src="{{ asset('newtemplate/wp-content/plugins/elementor/assets/js/webpack.runtime.min9bf7.js?ver=3.4.6') }}" id='elementor-webpack-runtime-js'></script>
<script src="{{ asset('newtemplate/wp-content/plugins/elementor/assets/js/frontend-modules.min9bf7.js?ver=3.4.6') }}" id='elementor-frontend-modules-js'></script>
<script id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":""};
</script>
<script src="{{ asset('newtemplate/wp-content/plugins/elementor-pro/assets/js/frontend.minccfb.js?ver=3.4.2') }}" id='elementor-pro-frontend-js'></script>

<script src="{{ asset('newtemplate/wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1') }}" id='elementor-dialog-js'></script>
<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.6","is_static":false,"experimentalFeatures":{"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":""},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","active_breakpoints":["viewport_mobile","viewport_tablet"],"lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1143,"title":"10%20Before%20And%20After%20Kitchen%20Renovations%20%2F%2F%20IK%20Designs%C2%AE%20Toronto","excerpt":"","featuredImage":false}};
</script>
<script src="{{ asset('newtemplate/wp-content/plugins/elementor/assets/js/frontend.min9bf7.js?ver=3.4.6') }}" id='elementor-frontend-js'></script>


</body>

<!-- Mirrored from 
impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->
</html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection


@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="{{ asset('newtemplate/js/google-map.js') }}"></script><script>eval(mod_pagespeed_PCAJGgbmNY);</script>
<script>eval(mod_pagespeed_WeC_GqZ9y2);</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


@endsection