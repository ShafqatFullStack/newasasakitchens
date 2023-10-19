
@extends('newtemplate.layout.template')
@extends('newtemplate.layout.sub-product')
@section('meta')
<title>Our complete Kitchen renovation services – ASASA Kitchens</title>
<meta name="description" content=" ASASA Kitchens is offering complete range of kitchen renovation services in Toronto, GTA. Explore
what you want and contact us. ">
@endsection

@section('main-section')
<style>
.prev, .next{
	background:orange;
}
</style>
 


 <section class="section bg-gray-900 box-custom-1">
        
		
		<div class="slideshow-container" style="width:100%;">




<div class="box-custom-1-main mobheight" >
<img class="anim"  src="{{ asset('newtemplate/gta/main-project/slider/1.jpg') }}">
			<div class="block-sm mobblock">

			<h1 class="wow fadeInRight" data-wow-delay=".5s" style="color:#fff">Projects</h1><br>
				<p class="wow fadeInRight" data-wow-delay=".6s" style="color:#fff">
We are here with the pictures of the projects that we have done. You can see our work by yourself below </p>
				<div class="linespace"></div>
				<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="{{route('contact.kitchen')}}" style="margin-top:10%;">Get In Touch</a>
			
           </div>
        </div>
		
</div>
<br>

		
		
          </div>
 	
      </section>



<section class="ftco-section" style="background: whitesmoke;">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 text-center heading-section ftco-animate">
<span class="subheading">Our Global Work Industries</span>
				<h2 class="mb-4">Latest Projects</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="project">
					<a href="{{ asset('newtemplate/gta/home/product/2.jpg') }}" class="img image-popup d-flex align-items-center" style="background-image:url({{ asset('newtemplate/gta/home/product/2.jpg') }})">
						<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span>
						</div>
					</a>
					<div class="text">
<span class="subheading">
</span>
						<h3>Custom Kitchen Cabinets</h3>
						<p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project">
					<a href="{{ asset('newtemplate/asasa-kitchen/home/product/1.jpg') }}" class="img image-popup d-flex align-items-center" style="background-image:url({{ asset('newtemplate/asasa-kitchen/home/product/1.jpg') }})">
						<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span>
						</div>
					</a>
					<div class="text">
<span class="subheading"></span>
						<h3> Quartz Counter Top</h3>
						<p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection
