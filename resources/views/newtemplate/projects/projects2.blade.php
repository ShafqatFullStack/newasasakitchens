
@extends('newtemplate.layout.template')
@extends('newtemplate.layout.product')



@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
    $works = \App\Project::join('categories','categories.id','=','projects.category_id')->select('projects.*','categories.slug AS cat_slug')->orderBy('ord', 'ASC')->get();
    $categories = \App\Category::where("type",1)->orderBy('id', 'DESC')->get();
// dd( $works);
@endphp
@php
    $section = \App\Section::findOrFail(7);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp

@section("meta")
    <title>Our Renovation Projects | ASASA Kitchen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ASASA Construction Specialize In All Renovation Services, Basement, Kitchen Renovation, Full House Renovation, Garage And Other. You Can Find All Construction And Renovation Projects projects Here">
	<!-- Template Main CSS File -->
  <link href="{{ asset('ecommerce/assets/css/portfolio.css') }} " rel="stylesheet">
    <style>
	h4{
	margin-bottom: 17px;
}
	</style>
@endsection
@section('main-section')
<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
<!-- Google Tag Manager (noscript) -->



 <section class="section bg-gray-900 box-custom-1">
       
		<div class="slideshow-container" style="width:100%;">


<div class="box-custom-1-main mobheight" >
<img class="anim"  src="{{ asset('newtemplate/asasa-kitchen/projects.jpg') }}">
			<div class="block-sm mobblock">

			<h1  style="color:#fff"  class="headingh1">OUR  PROJECTS</h1>
				<p style="color:#fff">Here are some of the projects completed by ASASA kitchen over the years. We wish to give 100% customer satisfaction and only an excellent outcome for our clients.</p>
<div class="linespace"></div>
				<a class="radius button button-primary button-shadow wow fadeInRight"  href="tel:+1-647-956-1116" style="margin-top:5%;">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" href="{{route('contact.kitchen')}}" style="margin-top:5%;">Get In Touch</a>
			
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




<h3 class="" style="text-align:center">Our Renovation Projects
<img src="{{ asset('newtemplate/titleicon.png') }}" class="center-section">

</h3>


<p>Our clients' happiness and the projects below speak eloquently about our experience and commitment. We consistently strive to provide the best possible designs for our clients. We are one of Toronto's premier commercial and residential contractors. To get what you want, use a professional and result-oriented organization. You can take advantage of this opportunity to install high-quality equipment and enhance the beauty of your kitchen with new cabinets and worktops.
</p>
</div>



</div>
</div>
</div>
</div>
</div>
</section>


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio project-area solid-bg"  style="padding:0px">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color:#ffb600"><u>Work of Excellence </u></h2>
         
        </div>

      

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
 @foreach($works as $blog)
   @php $img=$blog->image;  $img2=asset('uploads/projects/'.$img); @endphp
  
   
          <div class="col-lg-6 col-md-6 portfolio-item {{$blog->cat_slug}}">
		   <a href="{{URL::to('/project/'.$blog->slug)}}">
<div class="portfoliotab" style="">

<h4 class="projecttitle">{{ $blog->title}}</h4>
</div>

            <div class="portfolio-wrap">
			
              <img src="{{ $img2}}" class="img-fluid" alt="">
             
			      </div>
				</a> 
         
          </div>

          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->




</div>
</div><!-- #page -->





</body>

<!-- Mirrored from 
impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->
</html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection

  <script src="{{ asset('ecommerce/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('ecommerce/js/swiper-bundle.min.js') }}"></script>
 
  <!-- Template Main JS File -->
  <script src="{{ asset('ecommerce/js/main.js') }}"></script>

 