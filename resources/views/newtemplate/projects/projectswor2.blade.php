
@extends('newtemplate.layout.template')
@extends('newtemplate.layout.product')



@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
    $works = \App\Project::join('categories','categories.id','=','projects.category_id')->select('projects.*','categories.slug AS cat_slug')->orderBy('ord', 'DESC')->get();
    $categories = \App\Category::where("type",1)->orderBy('id', 'DESC')->get();
// dd( $works);
@endphp
@php
    $section = \App\Section::findOrFail(7);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp

@section("meta")
    <title>Construction And Renovation Projects | ASASA Construction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ASASA Construction Specialize In All Renovation Services, Basement, Kitchen Renovation, Full House Renovation, Garage And Other. You Can Find All Construction And Renovation Projects projects Here">
    
@endsection
@section('main-section')
<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
<!-- Google Tag Manager (noscript) -->



 <section class="section bg-gray-900 box-custom-1">
       
		<div class="slideshow-container" style="width:100%;">



<div class="box-custom-1-main" style="background-image: url(../newtemplate/asasa/project.jpg);background-repeat:no-repeat;background-size: cover;">
			<div class="block-sm">
			<h2  style="color:#fff">OUR  PROJECTS</h2>
				<p style="color:#fff">Here are some of the projects ASASA Construction has accomplished over the years. We strive to provide our clients with complete customer satisfaction and only the best results.</p>
				<a class="radius button button-primary button-shadow wow fadeInRight"  href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" href="{{route('contactus')}}" style="margin-top:10%;">Get In Touch</a>
			
           </div>
        </div>
		<div style="text-align:center;padding: 14px;">
  
		</div>
<div style="text-align:center"> 
   
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




<h1 class="" style="text-align:center">Construction And Renovation Projects </h1>
<span class="subheading mb-4" style="display: inline-flex;margin-left:43%"> <hr style="width:50px; border:1px solid;margin: 5px;"><span class="icon novi-icon fab fa-youtube"></span> <hr style="width:50px; border:1px solid;margin: 5px;"></span>
<div class="d-flex about">

<p>ASASA Construction provides you with quality construction and <a href="{{ route('main-services') }}">renovation services </a>whether you are looking to outsource a residential or commercial project. Feel free to go through some of the projects we have completed that have left our clients happy and satisfied. <a href="{{ route('contactus') }}">Reach us today</a> to get a free appraisal of your home or office. Our client’s satisfaction and projects that you can see below speak volumes about our experience and dedication. We always design the best for our clients. We are one of the top leading <a href="{{ route('home') }}">commercial and residential contractors</a> in Toronto. Hire an experienced and result-oriented company to get what you desire.
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
        <h2 class="section-title" style="color:#ffb600;font-weight:700;font-size:24px;">Work of Excellence</h2>
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
 @php
         $myvalue = $category->slug;
		
$arr = explode('-',trim($myvalue));
$slud2 = $arr[0];
   @endphp
          <label for="{{$category->slug}}" >
            <input type="radio" name="shuffle-filter" id='{{$category->slug}}' value="{{$category->slug}}">{{$category->name}}
          </label>
           @endforeach
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>
 @foreach($works as $blog)
   @php $img=$blog->image;  $img2=asset('uploads/projects/'.$img);

$myvalue = $blog->cat_slug;
	
$arr = explode('-',trim($myvalue));
$slud2 = $arr[0];
   @endphp

<div class="col-md-4  shuffle-item"  data-groups='[&quot;{{ $blog->cat_slug}}&quot;]' style="padding-left:15px;padding-right:15px">
<div class="project">
<a href="{{route('singleprojects',$blog->slug)}}" class="img   align-items-center" style="background-image:url('{{ $img2 }}')">

</a>
<a href="{{route('singleprojects',$blog->slug)}}">
<div class="text">

<h3>{{ $blog->title}}</h3>
</div>
</a>
</div>
</div>   

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

