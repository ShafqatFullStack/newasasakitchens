
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
.services-wrap p{text-align:justify;}
</style>
 



 <section class="section bg-gray-900 box-custom-1">
        
		
		<div class="slideshow-container" style="width:100%;">

<div class="box-custom-1-main mobheight" >
<img class="anim"  src="../newtemplate/asasa-kitchen/main-service/slider/1.png">
			<div class="block-sm mobblock">


			<h2 class="wow fadeInRight" data-wow-delay=".5s" style="color:#fff">Kitchen Renovation Services</h2>
				<p class="wow fadeInRight" data-wow-delay=".6s" style="color:#fff">
We are providing best kitchen renovation services in Toronto. Get in touch with us and book your appointment today </p>
				<div class="linespace"></div>

			<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="tel:+1-647-956-1116" style="margin-top:5%;color:black">+1-647-956-1116</a>
				

			<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="{{route('contact.kitchen')}}" style="margin-top:5%;">Get In Touch</a>
			
           </div>
        </div>
		
</div>
<br>

		
		
          </div>
 	
      </section>





<section class="ftco-section ">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8 text-center heading-section ">
<div class="linespace"></div>
<span class="subheading">Our Services</span>

<h2 class="mb-4 mainheading">ASASA kitchen is offering</h2>
</div>
</div>


<div class="row">
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/1.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-architectt"><img src="../newtemplate/asasa-kitchen/main-service/icon/1.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Painted Kitchen</h2>
<p>We are offering a painting kitchen cabinets service that can be a quick and economical option</p>
<a href="{{route('painted')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/2.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-workerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/2.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Wood Kitchen</h2>
<p>Wood kitchen cabinets, a popular choice due to the wide range of styles, qualities, and finishes</p>
<a href="{{route('wooden')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image: url(../newtemplate/asasa-kitchen/main-service/3.png);"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-hammerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/3.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Thermofoil - PVC kitchen</h2>
<p>Providing thermofoil-PVC kitchen cabinets with high-quality finishes that can withstand frequent use.</p>
<a href="{{route('thermofoil')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>


<div class="row" style="margin-top:20px;">
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/4.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-architectt"><img src="../newtemplate/asasa-kitchen/main-service/icon/4.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Kitchen countertops</h2>
<p>Many options are available at ASASA Kitchen when choosing your new kitchen countertop, including laminate, tiles, stainless steel, and granite surfaces.</p>
<a href="{{route('countertops')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/5.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-workerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/5.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Kitchen Backsplashes </h2>
<p>Whether your kitchen is bucolic and cozy or modern and smooth, we've got backsplash renovation in the mirror, marble, tile, and more.</p>
<a href="{{route('backsplashes')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image: url(../newtemplate/asasa-kitchen/main-service/6.png);"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-hammerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/6.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Kitchen cabinets & doors</h2>
<p>We are providing kitchen cabinets and doors renovation with a variety of designs and materials.</p>
<a href="{{route('cabinet')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>



</div>
<div class="row" style="margin-top:20px;">
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/7.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-architectt"><img src="../newtemplate/asasa-kitchen/main-service/icon/7.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Condo Kitchen </h2>
<p>Condo kitchens are generally dense and fortified with all the latest modern amenities.</p>
<a href="{{route('condo')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/8.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-workerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/8.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Kitchen Style  </h2>
<p>We have expert designers who know the newest trends. They can remodel your cooking area however way you want.</p>
<a href="{{route('style')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image: url(../newtemplate/asasa-kitchen/main-service/9.png);"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-hammerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/9.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Custom Millwork </h2>
<p>Custom millwork will add uniqueness, elegance, and warmth to your home renovation. Using natural wood in your home's design is very attractive.</p>
<a href="{{route('millworks')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>



</div>
<div class="row" style="margin-top:20px;">
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/10.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-architectt"><img src="../newtemplate/asasa-kitchen/main-service/icon/10.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Custom kitchen cabinets</h2>
<p>Our custom cabinetwork and modern kitchen cabinet design will meet all your needs.</p>
<a href="{{route('custom-cabinate')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/11.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-workerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/11.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Kitchen islands & carts</h2>
<p>Stretch yourself more food prep and storing space with a stylish kitchen island or cart, including microwave carts and carts with drawers.</p>
<a href="{{route('island')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image: url(../newtemplate/asasa-kitchen/main-service/12.png);"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-hammerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/12.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>Modular kitchens </h2>
<p>A modular kitchen is perfect for a full-scale kitchen renovation and is just a fraction of the installation effort.</p>
<a href="{{route('modular')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>



</div>
<div class="row" style="margin-top:20px;">
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/13.png)"></div>
<div class="text">
<div class="icon iconcolor"><span class="flaticon-architectt"><img src="../newtemplate/asasa-kitchen/main-service/icon/13.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>kitchen storage Pantry</h2>
<p>Solve your kitchen storage needs with food pantries and kitchen cabinets that keep essentials organized.</p>
<a href="{{route('storage')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="services-wrap ">
<div class="img" style="background-image:url(../newtemplate/asasa-kitchen/main-service/14.png)"></div>
<div class="text">
<div class="icon iconcolor" ><span class="flaticon-workerr"><img src="../newtemplate/asasa-kitchen/main-service/icon/14.svg" style="width:50px;padding-top:20px;"></span></div>
<h2>MDF Kitchens </h2>
<p>If you have a kitchen renovation with a small budget coming up, you should choose the MDF kitchen renovation service.</p>
<a href="{{route('mdf')}}" class="btn-custom">Read more</a>
</div>
</div>
</div>




</div>
</div>
</section>





@endsection
