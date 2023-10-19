@extends('newtemplate.layout.template') 
@extends('newtemplate.layout.service2') 
@section('meta')
<title>Best Kitchen Renovation Contractors, HQ Reno Services - ASASA Kitchens</title>
<meta name="description" content="A top-rated Kitchen Renovation Contractors in toronto, Canada. Asasa Kitchens provides you with high-quality Renovation and Kitchen remodeling services. Call us Today">

<link rel="stylesheet" href="../newtemplate/css/theme.css" />

<link rel="stylesheet" href="../newtemplate/css/animation.css" />
<link rel="stylesheet" href="../newtemplate/css/header.css" />@endsection @section('main-section')
<style>
.services-wrap p{text-align:justify;}
	.client-section p{font-weight:500}
	.prev, .next{
		background:orange;
		
	}
	.services-wrap .text {
			
			background:white;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			width:108% !important;
		}
	.whitesmoke{
		background-position: 50% 158px;background: whitesmoke;
		
		}	
		
		.whychooseuse_head{border-right: 3px solid #f5b315;padding:10px;}
		.whychoose_text{width:63%}
		.whychooseuse{font-size:22px;font-weight:600}
		
@media (min-width: 1200px){
.whychooseuse_head{width:37%;}
		.whitesmoke2{padding:60px;margin-left:10%;position: relative;}
		.whitesmoke2 h2{font-size:37px;}
		.whitesmoke2 p{font-size:20px;}
		.col-set1{width:37%;}
		.col-set2{width:63%;}
			}
	
		@media (max-width: 700px) {
		.whychooseuse_head{width:100%;}
		.col-set2{width:80%;margin: auto}
		.whychooseuse{text-align:center}
		.whychoose_text p {text-align:center;margin-bottom: 71px;
}
.whitesmoke2{margin-top: 30px}
.whychooseuse_head{border-right:0 solid #f5b315;}
		}
	.call-to-action h3 {
    font-size: 21px;
    line-height: 3;
    font-weight: bold;
}	

@media (max-width: 600px){
.dots{display:none !important}
}
</style>


		
		
<section class="section bg-gray-900 box-custom-1">
	<div class="slideshow-container w-100" >
		<div class="  box-custom-1-main " style="background-image: url(../newtemplate/asasa-kitchen/home/slider/1.png);background-size: cover;">
			<div class="block-sm">
				<h2 style="color:#fff;">Modify your kitchen with best Kitchen Renovation Company</h2>
				<br>	<a class="radius button button-primary"  href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>
				<a class="radius button button-primary "  href="{{route('contact.kitchen')}}" style="margin-top:10%;">Get In Touch</a>
			</div>
		</div>
		
		<div class="  box-custom-1-main " style="background-image: url(../newtemplate/asasa-kitchen/home/slider/3.png);background-size: cover;">
			<div class="block-sm">
				<h2  style="color:#fff">Wood Kitchen</h2>
				<p   style="color:#fff">We are specialized in kitchen remodeling and renovation services for over 20 years. Our expert designers can completely alter your old cooking area into a luxurious one.</p>
				<br>	<a class="radius button button-primary "  href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>
				<a class="radius button button-primary "  href="{{route('contact.kitchen')}}" style="margin-top:10%;">Get In Touch</a>
			</div>
		</div>
		<div class="  box-custom-1-main " style="background-image: url(../newtemplate/asasa-kitchen/home/slider/4.png);background-size: cover;">
			<div class="block-sm">
				<h2   style="color:#fff">Thermofoil – PVC Kitchen</h2>
				<p   style="color:#fff">PVC Termofoil kitchens from modern high gloss high sheen PVC film finish. Thermofoil kitchen cabinets have for quite some time been a staple of spending plan kitchen rebuilds.</p>
				<a class="radius button button-primary "  href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>
				<a class="radius button button-primary "  href="{{route('contact.kitchen')}}" style="margin-top:10%;">Get In Touch</a>
			</div>
		</div>
		<div class="  box-custom-1-main " style="background-image: url(../newtemplate/asasa-kitchen/home/slider/5.png);background-size: cover;">
			<div class="block-sm">
				<h2  style="color:#fff">Kitchen Countertops</h2>
				<p   style="color:#fff">Give your kitchen a fresh, improving look with countertop materials that will breathe new life into your kitchen space. Easy to clean and uphold, this material is an excellent match for the rustic kitchen.</p>
				<a class="radius button button-primary "  href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>
				<a class="radius button button-primary "  href="{{route('contact.kitchen')}}" style="margin-top:10%;">Get In Touch</a>
			</div>
		</div>
		<div class="  box-custom-1-main " style="background-image: url(../newtemplate/asasa-kitchen/home/slider/6.png);background-size: cover;">
			<div class="block-sm">
				<h2  style="color:#fff">Kitchen Backsplashes</h2>
				<p   style="color:#fff">Selecting the correct edge type for the tile can improve the finishing touches and bring the whole project composed. Within Tile Backsplashes.</p>
				<a class="radius button button-primary "  href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>
				<a class="radius button button-primary "  href="{{route('contact.kitchen')}}" style="margin-top:10%;">Get In Touch</a>
			</div>
		</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		<div class="d-flex justify-content-center mb-3 my-3 dots" > <span class="dot" onclick="currentSlide(1)"></span>  <span class="dot" onclick="currentSlide(2)"></span>  <span class="dot" onclick="currentSlide(3)"></span>  <span class="dot" onclick="currentSlide(4)"></span>  <span class="dot" onclick="currentSlide(5)"></span> 
 
		</div>
	</div>
	<br>
	</div>
</section>
<div class="container">
	<div class="row whitesmoke2">
		
		<div class="whychooseuse_head ">
				<h2 class="whychooseuse">Why Choose Us</h2>
		</div>
		
		<div class=" col-lg-7 ">
			<p class="text-justify px-2">It's simple. We are a client-focused company driven by the wish to deliver exceptional results that meet our customer's aesthetic, budgetary, functional, and timing requirements.</p>
		</div>
	</div>
</div>
<section class="container">
	<div class="row">
		<div class="col-lg-3 ">
			<div class="services-wrap ">
				<div class="text" >
					<div class="icon">
						<img src="../newtemplate/asasa-kitchen/home/whychoose/1.svg" style="width: 59px;padding-top: 13px;">
					</div>
					<h2>Client Focus</h2>
					<p style="font-size:16px !important;text-align:justify;">Through the conceptualization of the design phase and right through construction until the final handover, it's your style, needs, and dreams that will drive the project.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="services-wrap ">
				<div class="text" >
					<div class="icon">
						<img src="../newtemplate/asasa-kitchen/home/whychoose/2.svg" style="width: 59px;padding-top: 13px;">
					</div>
					<h2>Structural Works</h2>
					<p style="font-size:16px !important;text-align:justify;">ASASA Kitchen is upheld by a group of specialists and authorized designs. Our architects will evaluate  underlying work, load-bearing divider evacuation, and expansions.</p>
					<br>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="services-wrap ">
				<div class="text" >
					<div class="icon">
						<img src="../newtemplate/asasa-kitchen/home/whychoose/3.svg" style="width: 59px;padding-top: 13px;">
					</div>
					<h2>Design</h2>
					<p  style="font-size:16px !important;text-align:justify;">Imagine the new space and see precisely what you are getting, our enrolled inside architect will draw your space and give representations idea drawings before project business.</p>
					<br>
					<br>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="services-wrap ">
				<div class="text" >
					<div class="icon">
						<img src="../newtemplate/asasa-kitchen/home/whychoose/4.svg" style="width: 59px;padding-top: 13px;">
					</div>
					<h2>Functional</h2>
					<p style="font-size:16px !important;text-align:justify;">We love delivering beautiful spaces, but eventually, homes will be lived in, and livability demands functionality.</p>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
	<div class="img image-overlay" style="background-image: url(../newtemplate/asasa-kitchen/home/offering/1.png);"></div>
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-6  bg-secondary aside-stretch">
				<div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
<span class="subheading">Complete Kitchen Renovation</span>
					<h2 class="mb-4">Offering Complete Kitchen Renovation in Toronto</h2>
					<h4>The kitchen is the core of any home. It's the place where families meet up toward the beginning of the day to begin their day and get together in the evening to relate the tales gathered in their hours away. ASASA Kitchen is here to provide you the <a href="{{ route('main-services')}}" style="color:#ffdc25">complete kitchen renovation </a>in Toronto. Providing our clients an attractive and elegant range on the kitchen renovation.</h4>
				</div>
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<div class="row">
					</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
<div class="container">
<div class="row no-gutters d-flex">
<div class="col-lg-4 d-flex align-self-stretch ">
<div class="media block-6 services d-flex">

<div class="media-body pl-4">
<div class="icon justify-content-center align-items-center d-flex" style="float:left;">
<span class="flaticon-engineer-11"><img src="../newtemplate/asasa-kitchen/home/offering/down/1.svg" ></span>
</div>

<h3 class="heading p-3"> &nbsp;Quality Renovation</h3>

<p style="text-align:justify">Over time of involvement, we have gained notoriety at extraordinary costs, quality, and administration.</p>

</div>
</div>
</div>
<div class="col-lg-4 d-flex align-self-stretch ">
<div class="media block-6 services services-2 d-flex">

<div class="media-body pl-4">
<div class="icon justify-content-center align-items-center d-flex"style="float:left;"><span class="flaticon-worker-11"><img src="../newtemplate/asasa-kitchen/home/offering/down/2.svg" ></span></div>
<h3 class="heading  p-3">&nbsp;Proficient Liability</h3>

<p  style="text-align:justify">Proficient responsibility chances are perplexing and broad. Distinguishing and evaluating your dangers requires a deep level of master investigation..</p>
</div>
</div>
</div>
<div class="col-lg-4 d-flex align-self-stretch ">
<div class="media block-6 services d-flex">

<div class="media-body pl-4">
<div class="icon justify-content-center align-items-center d-flex"style="float:left;"><span class="flaticon-engineerr"><img src="../newtemplate/asasa-kitchen/home/offering/down/3.svg"  ></span></div>
<h3 class="heading  p-3" >&nbsp;Committed To Our Clients</h3>
<p  style="text-align:justify">We are a committed firm to our customers and their work project.</p>
</div>
</div>
</div>
</div>
</div>
</section>







<section class="" style="background: white; padding-top: 37px">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ">
<span class="subheading">Our Services</span>
				<h2 class="">We Offer Services</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="services-wrap ">
					<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/home/services/1.png)"></div>
					<div class="text">
						<div class="icon iconcolor"><span class="flaticon-architectt"><img src="../newtemplate/asasa-kitchen/home/services/icon/1.svg" style="width:50px;padding-top:20px;"></span>
						</div>
						<h2>Painted Kitchen</h2>
						<p>We are offering a painting kitchen cabinets service that can be a quick and economical option</p>
<a href="{{route('painted')}}" class="btn-custom">Read more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-wrap ">
					<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/home/services/2.png)"></div>
					<div class="text">
						<div class="icon iconcolor"><span class=""><img src="../newtemplate/asasa-kitchen/home/services/icon/2.svg" style="width:50px;padding-top:20px;"></span>
						</div>
						<h2>Wood Kitchen</h2>
						<p>Wood kitchen cabinets, a popular choice due to the wide range of styles, qualities, and finishes</p>
<a href="{{route('wooden')}}" class="btn-custom">Read more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-wrap ">
					<div class="img" style="background-image: url(../newtemplate/asasa-kitchen/home/services/3.png);"></div> 
					<div class="text">
						<div class="icon iconcolor"><span class=""><img src="../newtemplate/asasa-kitchen/home/services/icon/3.svg" style="width:50px;padding-top:20px;"></span>
						</div>
						<h2>Thermofoil - PVC kitchen</h2>
						<p>Providing thermofoil-PVC kitchen cabinets with high-quality finishes that can withstand frequent use.</p>
<a href="{{route('thermofoil')}}" class="btn-custom">Read more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-wrap ">
					<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/home/services/4.png)"></div>
					<div class="text">
						<div class="icon iconcolor"><span class="flaticon-architectt"><img src="../newtemplate/asasa-kitchen/home/services/icon/4.svg" style="width:50px;padding-top:20px;"></span>
						</div>
						<h2>Kitchen Countertops</h2>
						<p>Many options are available at ASASA Kitchen when choosing your new kitchen countertop, including laminate, tiles, stainless steel, and granite surfaces.</p>
<a href="{{route('countertops')}}" class="btn-custom">Read more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-wrap ">
					<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/home/services/5.png)"></div>
					<div class="text">
						<div class="icon iconcolor"><span class=""><img src="../newtemplate/asasa-kitchen/home/services/icon/6.svg" style="width:50px;padding-top:20px;"></span>
						</div>
						<h2>Condo Kitchen</h2>
						<p>Condo kitchen renovation is all about making intelligent choices. We have expert designers who know the latest trends. That's why it is significant to hire a professional condo renovation service.</p>
<a href="{{route('condo')}}" class="btn-custom">Read more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-wrap ">
					<div class="img" style="background-image: url(../newtemplate/asasa-kitchen/home/services/6.png);"></div>
					<div class="text">
						<div class="icon iconcolor"><span class=""><img src="../newtemplate/asasa-kitchen/home/services/icon/5.svg" style="width:50px;padding-top:20px;"></span>
						</div>
						<h2>Kitchen Backsplashes</h2>
						<p>Whether your kitchen is bucolic and cozy or modern and smooth, we've got backsplash renovation in the mirror, marble, tile, and more.</p>
<a href="{{route('backsplashes')}}" class="btn-custom">Read more</a>
					</div>
				</div>
			</div>
<a href="{{route('main-services')}}" style="margin:1% auto " class="radius button button-primary ">View All</a>
		</div>
	</div>
</section>
<section class="ftco-intro" style="padding:0px">
	<div class="container-fluid" style="padding:0px">
		<div class="row justify-content-center">
			<div class="col-md-12 text-center">
				<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/providing/1.png)">
					<div class="overlay"></div>
					<h2>Providing Personalized and High Quality Services</h2>
					<p>Our Real Success Is Your Trust In Us That You'll Show By Letting Us Handle Your Project</p>
					
					<p class="mb-0">
<a href="{{route('contact.kitchen')}}" style="margin:1% 0 0 0" class="radius button button-primary ">Contact Us</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section" id="about-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="about-wrap img w-100" style="background-image:url(../newtemplate/asasa-kitchen/home/renovation/1.png)">
					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-cranee"><img src="../newtemplate/asasa-kitchen/home/renovation/1.svg"style="width:50px;" ></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 py-5 pl-md-5">
				<div class="row justify-content-center mb-4 pt-md-4">
					<div class="col-md-12 heading-section ">
<span class="subheading">About Us</span>
						<h2 class="mb-4">Top Kitchen  Renovation Company In Toronto</h2>
						<p style="text-align: justify">Start the planning cycle by becoming more acquainted with you, the customer. We at ASASA Kitchens provide the best kitchen renovation contractors in Toronto. We tune in regarding what's going on with your way of life, which incorporates family, use of the room, and future arranging. In light of this load of variables alongside the financial plan we need to work with, we propose a practical and simultaneously planned explicitly to oblige your necessities.</p>

<a href="{{route('about-us')}}" style="margin:2% auto" class="radius button button-primary ">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section" style="background: whitesmoke;">
	<div class="container">
		<div class="row justify-content-center  pb-3">
			<div class="col-md-7 text-center heading-section ">
<span class="subheading">Our Global Work Industries</span>
				<h2 class="mb-4">Latest Projects</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="project">
					<a href="../newtemplate/asasa-kitchen/home/product/2.jpg" class="img image-popup d-flex align-items-center" style="background-image:url(../newtemplate/asasa-kitchen/home/product/2.jpg)">
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
					<a href="../newtemplate/asasa-kitchen/home/product/1.jpg" class="img image-popup d-flex align-items-center" style="background-image:url(../newtemplate/asasa-kitchen/home/product/1.jpg)">
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
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center  pb-3">
			<div class="col-md-7 text-center heading-section ">
<span class="subheading">Our Global Work Industries</span>
				<h2 class="mb-4">Our Products</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="project">
					<a href="../newtemplate/asasa-kitchen/home/product/2.jpg" class="img image-popup d-flex align-items-center" style="background-image:url(../newtemplate/asasa-kitchen/home/product/1.png)">
						<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span>
						</div>
					</a>
					<div class="text">
<span class="subheading">
</span>
						<h3>Kitchen countertops
</h3>
						<p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project">
					<a href="../newtemplate/asasa-kitchen/home/product/1.jpg" class="img image-popup d-flex align-items-center" style="background-image:url(../newtemplate/asasa-kitchen/home/product/2.png)">
						<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span>
						</div>
					</a>
					<div class="text">
<span class="subheading"></span>
						<h3> Kitchen faucets & sinks
</h3>
						<p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project">
					<a href="../newtemplate/asasa-kitchen/home/product/1.jpg" class="img image-popup d-flex align-items-center" style="background-image:url(../newtemplate/asasa-kitchen/home/product/3.png)">
						<div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span>
						</div>
					</a>
					<div class="text">
<span class="subheading"></span>
						<h3> Kitchen lighting</h3>
						<p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
					</div>
				</div>
			</div>
<a href="{{route('main-services')}}" style="margin:1% auto" class="radius button button-primary ">View All</a>
		</div>
	</div>
</section>@php $blogs = \App\Post::orderBy('id', 'desc')->take(3)->get(); @endphp
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center pb-3">
			<div class="col-md-10 heading-section text-center ">
<span class="subheading">Our Blog</span>
				<h2 class="mb-4">Latest Blog Updates</h2>
			</div>
		</div>
		<div class="row d-flex">@foreach ($blogs as $blog)
			<div class="col-lg-4 ">
				<div class="blog-entry">
					<a href="{{route('single-blog',$blog->slug)}}" class="block-20" style="background-image: url('{{asset('uploads/post/'.$blog->featured_image)}}');"></a>
					<div class="text d-block">
						<div class="meta">
							<p>
<a href="#"><span class="fa fa-calendar mr-2"></span>{{ $blog->created_at->format('M') }}. {{ $blog->created_at->format('d') }}, {{ $blog->created_at->format('Y') }}</a>
								<a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
								<a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> </a>
							</p>
						</div>
						<h3 class="heading"><a href="{{route("single-blog",$blog->slug)}}">{{$blog->title}}</a></h3>
						<p><a href="{{route('single-blog',$blog->slug)}}" class="btn btn-secondary py-2 px-3">Read more</a>
						</p>
					</div>
				</div>
			</div>@endforeach</div>
	</div>
</section>




<section class="call-to-action  gray-light-bg">
            <div class="container-fluid" style="background: white;">
                <div class="row justify-content-around align-items-center">
				<div class="col-sm-11" style="background: white;">
                    					  
						

						
						
			<div class="row content" style="background: white;">
          <div class="col-md-4" data-aos="-right">
            <img src="../newtemplate/asasa-kitchen/home/1.jpg" class="img-fluid animated"style="height:100%" >
          </div>
          <div class="col-md-8 " data-aos="-up">
            <div class="section-title" data-aos="-up">
          <h3 style="color:#f5b315">How We Are Best Kitchen Renovation Company</h3>
          
        </div>
            
			<p class="fst-italic"  style="text-align: justify;">
            A kitchen renovation is a significant venture. You need to settle on the ideal choice; however, not all kitchen contractors work the same way or significantly offer similar help, so how would you know which to pick? When you settle on the choice to remodel your kitchen, it's a thrilling time! There is such a significant amount to look over, from sumptuous completions to <a href="{{ route('custom-cabinate')}}" style="color:#007bff">custom cabinets </a>   and fresh out of the box new machines. The cycle can regularly be overpowering, so where do you begin? We suggest starting by picking the best kitchen remodeling contractor to address your issues. Why? Basically, who you recruit to do the work will have a significant effect en route and on the eventual outcome. Furthermore, the right contractor can assist you with major and minor choices, making the whole cycle more agreeable. You need to choose the contractor that is a remodeling contractor with many years of involvement. They'll know what's in store and how to get ready for the unforeseen. </p>
 
			
			 </div>
		</div>
		<div class="row content" style="background: white;">
          <div class="col-md-4 order-1 order-md-2" data-aos="-left">
            <img src="../newtemplate/asasa-kitchen/home/2.jpg" class="img-fluid" style="height:100%;">
          </div>
          <div class="col-md-8  order-2 order-md-1" data-aos="-up">
            
	
			
            <p class="fst-italic" style="text-align: justify;">
            Furthermore, they'll likely even have a  <a href="{{ route('projects')}}" style="color:#007bff">kitchen portfolio  </a>  for you to survey so you can see instances of their work. Perhaps it's our honor-winning plan group and manufacturers with lovely craftsmanship. On the other hand, maybe it's our times of kitchen remodeling experience that has a significant effect. In any case, it's nothing unexpected that a portion of our customers has called us the best kitchen remodeling contractor in Toronto. Be careful about kitchen contractors that utilization abroad producers - they can't generally ensure conveyance times, and assuming any of the  <a href="{{ route('main-services')}}" style="color:#007bff">custom kitchen renovation services </a>  show up inaccurately or there are guarantee/later deals issues, it might consume a large chunk of the day to fix the problem. Regardless of whether you're prepared to start your kitchen renovation now, or you're simply beginning all the while, we'd love to be your remodeling accomplice.</p>
				
          </div>
        </div>
					
				
			

			 
					
					 </div>			
				</div>
            </div>
			
			
        </section>



@endsection @section('script')
<script src="../newtemplate/js/jquery.min.js"></script>
  <!-- Template custom -->
  <script src="../newtemplate/js/script.js"></script>

<script src="../newtemplate/js/jquery-migrate.js"></script>
<script>
	eval(mod_pagespeed_Udcyhb9c2D);
</script>
<script src="../newtemplate/js/jquery.easing.js"></script>

<script>
	eval(mod_pagespeed_WSJkyIcJ0Y);
</script>
<script>
	eval(mod_pagespeed_ZfhpzvtydJ);
</script>
<script>
	eval(mod_pagespeed_GUluxpY0vO);
</script>
<script src="../newtemplate/js/jquery.magnifies.js"></script>

<script>
	eval(mod_pagespeed_PHXrUG1pI_);
</script>


<script>
	eval(mod_pagespeed_MiF2CyD9s2);
</script>

<script src="../newtemplate/js/google-map.js"></script>

<script>
	eval(mod_pagespeed_WeC_GqZ9y2);
</script>
<script>
	var slideIndex = 1;
	showSlides(slideIndex);
	
	function plusSlides(n) {
		showSlides(slideIndex += n);
	}
	
	// function showSlides(n) {
	 
	  // var slides = document.getElementsByClassName("box-custom-1-main");
	  
	  // if (n > slides.length) {slideIndex = 1}    
	  // if (n < 1) {slideIndex = slides.length}
	  // $(".box-custom-1-main").addClass("d-none");
	   // $(".box-custom-1-main").removeClass("d-block");
	   
	   // $(".class"+slideIndex).addClass("d-block");
	    // $(".class"+slideIndex).removeClass("d-none");
	  
	// }
function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("box-custom-1-main");
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
</script>@endsection