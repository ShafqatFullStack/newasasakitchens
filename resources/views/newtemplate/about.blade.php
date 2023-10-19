

@extends('newtemplate.layout.template')
@extends('newtemplate.layout.sub-product')

@php
    $section = \App\Section::findOrFail(2);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp

@section('meta')
<title>@isset($storedColumns['meta_title']) {!! $storedColumns['meta_title'] !!}@endisset</title>
		<meta name="description" content="@isset($storedColumns['meta_description']) {!! $storedColumns['meta_description'] !!} @endisset">



@endsection

@section('main-section')
<style>
.prev, .next{
	background:orange;
}
.chhose {
		
		background:white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
.ftco-section p{color:#fff}
.ftco-services-2 .services .media-body h3{margin-top:13px;}
@media screen and (max-width: 650px){
.subheadingabout{font-size:18px !important;text-align:center}
.ftco-services-2 .services .media-body h3{margin-top:1px;}
}
</style>



 <section class="section bg-gray-900 box-custom-1">
       
		<div class="slideshow-container" style="width:100%;">

<div class="box-custom-1-main mobheight" >
<img class="anim"  src="{{ asset('newtemplate/asasa-kitchen/about.png') }}">
			<div class="block-sm mobblock">

			<h1 class=""style="color:#fff;font-weight:500">About Us</h1>
				<p class="wow fadeInRight" data-wow-delay=".6s" style="color:#fff">ASASA Kitchen got the solutions of all your kitchen needs. Changing your cooking style by giving a modern and elegant look to your kitchen</p>
				<div class="linespace"></div>
<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="tel:+1-647-956-1116" style="margin-top:5%;color:#000">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="{{route('contact.kitchen')}}" style="margin-top:5%;">Get In Touch</a>
			
           </div>
        </div>
		
</div>
<br>
		
          </div>
 	
      </section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
<div class="container">
<div class="row no-gutters d-flex">
<div class="col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-flex aboutdown">

<div class="media-body pl-4">

<div class="icon justify-content-center align-items-center d-flex"style="float:left;"><span class="flaticon-worker-11"><img src="{{ asset('newtemplate/asasa-kitchen/home/offering/down/1.svg') }}" ></span></div>

<h3 class="heading mb-3" > &nbsp;&nbsp;Committed</h3>
&nbsp;
<p style="text-align:justify">We are a company that is committed to one thing that is important for us is client satisfaction.</p>

</div>
</div>
</div>
<div class="col-lg-4 d-flex align-self-stretch">
<div class="media block-6 services services-2 d-flex">

<div class="media-body pl-4">
<div class="icon justify-content-center align-items-center d-flex"style="float:left;"><span class="flaticon-worker-11"><img src="{{ asset('newtemplate/asasa-kitchen/home/offering/down/2.svg') }}" ></span></div>
<h3 class="heading mb-3" >&nbsp;&nbsp;Work</h3>
&nbsp;
<p  style="text-align:justify">We always provide premium quality work to our customers by countering hardships.</p>
</div>
</div>
</div>
<div class="col-lg-4 d-flex align-self-stretch ">
<div class="media block-6 services d-flex aboutdown">

<div class="media-body pl-4">
<div class="icon justify-content-center align-items-center d-flex"style="float:left;"><span class="flaticon-engineerr"><img src="{{ asset('newtemplate/asasa-kitchen/home/offering/down/3.svg') }}"  ></span></div>
<h3 class="heading mb-3">&nbsp;&nbsp;Trusted</h3>
&nbsp;
<p  style="text-align:justify">We are a proud company that is trusted by many clients who believe in us.</p>
</div>
</div>
</div>
</div>
</div>
</section>






<section class="ftco-section" id="about-section"  style="padding:60px 0 0 0">
<div class="container">
<div class="row">

<div class="col-md-12 ">
<div class="row justify-content-center ">
<div class="col-md-12 heading-section ">
<span class="subheading">About Us</span>
<h2 class="mb-4 subheadingabout">@isset($storedColumns['main_heading']) {!! $storedColumns['main_heading'] !!} @endisset</h2>


</div>
</div>
</div>
</div>
</div>
</section>



<section class="call-to-action  gray-light-bg" style="margin:-35px 0 0 0">
            <div class="container-fluid" style="background: white;">
                <div class="row justify-content-around align-items-center">
				<div class="col-sm-11" style="background: white;">
               
	   
		<div class="row content" style="background: white;">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('newtemplate/asasa-kitchen/about/1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8  order-2 order-md-1" data-aos="fade-up">
              
            <p class="fst-italic">
            ASASA Kitchens can, without much of a stretch and reasonably bring your home redesigning dreams to the real world. We are specialists in the remodel, home upgrades, and kitchen and shower businesses, giving top-quality items and administrations at cutthroat costs. We are focused on guaranteeing total consumer loyalty with the assistance and quality we offer. Redesigning your kitchen can assist with making it more helpful and bringing your home up to the latest construction laws. It can moreover work really hard at helping you in general with regards to your home. Additionally, it helps increment the space's usefulness and is undoubtedly a worthwhile venture which can enhance any property, regardless of whether you live in an apartment, loft, lodge, or condominium. You can use this chance to add first-class machines and improve the magnificence with new <a href="{{route('cabinet')}}" style="color:orange"> kitchen cabinets </a> and kitchen countertops.
			  </p>
			 
			

		  <p class="fst-italic">
		The kitchen is the essence of each home, which a broad scope of variables should be viewed when a mortgage holder is thinking about a kitchen remodel. It can upsurge the value of your home. Don't like anything else, and in case you're considering one, there could be no more excellent chance to do it than Now! A decent plan that meets your way of life needs will consider the requirements of all the relatives and offer a higher ROI.
		</p>	
		
			 
          </div>
        </div>
		

            
		
			<div class="row content" style="background: white;">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('newtemplate/asasa-kitchen/about/6.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 " data-aos="fade-up">
            <div class="section-title" data-aos="fade-up">
          </div>
		 <h3>A Well-Known Company </h3>

            <p class="fst-italic">
            We are notable in Toronto for offering items at severe costs. The last expense of the whole undertaking relies upon the nature of materials being utilized the size of the space. Altered cabinets and countertops are costly need more workers working for longer timeframes. Be that as it may, standard prepared to-introduce items guarantee you set aside time and cash.
			  </p>
			 
			   <h3>We Deliver Enjoyable Experiences</h3>

    
		  <p class="fst-italic">
		At ASASA Kitchens, if our times of involvement have shown us one thing, it's this: that while a quality completed item is an absolute necessity, consumer loyalty begins with our first contact. While you can ensure a beautiful finished article, we endeavor to make a charming client experience.
		</p>


			</div>
		</div>
	<div class="row content" style="background: white;">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('newtemplate/asasa-kitchen/about/7.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8  order-2 order-md-1" data-aos="fade-up">
             


		  <h3>Based On Experience </h3>

    
			  <p class="fst-italic">
			We work in kitchen remodels. We comprehend the mind-boggling nature of the plan for these rooms, including broad information on electrical and plumbing. Our specialists have over many years of involvement with the business, serving inhabitants of Toronto and encompassing regions. 
		</p>
		 <h3>Get Exceptional Designs At Affordable Prices</h3>

    
		  <p class="fst-italic">
		Kitchens weren't constantly viewed as a significant room in a house. Nonetheless, as of late, they have become a fundamental piece of engaging visitors and everyday life. It has finished various changes in the past couple of years and continually develops to meet the property holder's requirements. It used to be considered a utilitarian space, yet with ongoing developments, it has transformed into a multipurpose region. Kitchens presently are utilized to get ready food and offer them with friends and family, all inside a similar space. Because of this, kitchen remodels are becoming extraordinarily well known among mortgage holders searching for savvy home improvement.</p>
		
          </div>
        </div>
		
					
					 </div>			
				</div>
            </div>
			
			
        </section>







@endsection