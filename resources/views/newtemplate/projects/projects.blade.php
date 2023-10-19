
@extends('newtemplate.layout.template')
@extends('newtemplate.layout.product')



@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
    $works = \App\Work::orderBy('ord', 'ASC')->get();
    $categories = \App\Category::where("type",1)->get();
@endphp
@php
    $section = \App\Section::findOrFail(7);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp

@section("meta")
    <title>@isset($storedColumns['meta_title']) {!! $storedColumns['meta_title'] !!}@endisset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@isset($storedColumns['meta_description']) {!! $storedColumns['meta_description'] !!} @endisset">
    
@endsection
@section('main-section')
<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
<!-- Google Tag Manager (noscript) -->



 <section class="section bg-gray-900 box-custom-1">
       
		<div class="slideshow-container" style="width:100%;">


<div class="box-custom-1-main mobheight" >
<img class="anim"  src="{{ asset('newtemplate/asasa-kitchen/main-project/slider/1.jpg') }}">
			<div class="block-sm mobblock">

			<h2  style="color:#fff">OUR  PROJECTS</h2>
				<p style="color:#fff">We will show you some of the fantastic projects that we have done. Below you can see the pictures of the projects that will blow your mind. We always provide the best results and customer satisfaction with our hard work.</p>
<div class="linespace"></div>
				<a class="radius button button-primary button-shadow wow fadeInRight"  href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" href="{{route('contactus')}}" style="margin-top:10%;">Get In Touch</a>
			
           </div>
        </div>
		
</div>
<br>
		
          </div>
 	
      </section>




<section class="ftco-section" id="about-section" style="padding:0px">
<div class="container">
<div class="row">

<div class="col-md-12 ">
<div class="row justify-content-center mb-4 pt-md-4">
<div class="col-md-12 heading-section ">

<h3 class="" style="text-align:center">Projects
<img src="{{ asset('newtemplate/titleicon.png') }}" class="center-section">

</h3>

<div class="d-flex about">

<p>ASASA Construction gives a beautiful scene for residential and commercial construction and renovation services. Compassionately feel free to scrutinize to see a couple of cases of the great work we've done that has left our clients happy and satisfied. Reach out to us today to get a free appraisal of your home or business
</p>
</div>



</div>
</div>
</div>
</div>
</div>
</section>




<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Recent Projects</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
       
<!-- project filter end -->
<div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" >Show All
          </label>
         
 @foreach($categories as $category)
         
          <label for="{{$category->slug}}">
            <input type="radio" name="shuffle-filter" id="{{$category->slug}}" value="{{$category->slug}}">{{$category->name}}
          </label>
           @endforeach
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>
 @foreach($works as $work)
                    
<div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;{{$work->category->slug}}&quot;]">
            <div class="project-img-container">
             
                <img class="img-fluid" src="{{asset("uploads/works/$work->image")}}" alt='project-img' style="width: 100%;height: 250px;">
                
             <a href="{{route("singleprojects",$work->slug)}}"">
             <div class="project-item-info">
                <div class="project-item-info-content">
                   
                  <p class="project-cat" style="font-size:12px !important;color:white;background:none">{{$work->title}} </p>

                </div>
              </div></a>
            </div>
          </div><!-- shuffle item 1 end -->
                    @endforeach
          

        </div><!-- shuffle end -->
      </div>

     
    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->



</div>
</div><!-- #page -->





</body>

<!-- Mirrored from 
impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->
</html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection

