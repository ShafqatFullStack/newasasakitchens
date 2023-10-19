
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
<link rel="icon" type="image/x-icon" href="@isset($setting['favicon']){{ asset('uploads/'.$setting['favicon']) }}@endisset"  />
   
   

@yield('meta')
@yield('meta2')


   



    <style>
      /* Stops the FOUC */
      html {
        visibility: hidden;
        opacity: 0;
      }
	  .css-1rvpoms{
		      width: 6.25rem;
    height: 1.5rem;
	  }
	.row.content{
margin:60px 10px;}
    </style>
<style>
p{
	font-size:16px;
}
.elementor-top-section{
background:green}
.css-2uxf1f,.css-1bfdvbu{
color:black;}
.css-17vfrxb{
width:100% !important;
}
.css-1075dn3{
display:none;
}
.css-1jzq1qp{
padding-right:15px;
}
ul li a{
	font-size:14px;
}


@media screen and (min-width: 1200px){
	.pcl-nested-list-nav__nav-list-item {
    // width: 50% !important;

}

#about-sectiont .subheading {
	
	margin-left:45%;
}
.textwidth{width:70%;}
.header-main{font-size:30px !important}
.subhead{
font-size:20px !important;
line-height:2.5 !important}
}

@media screen and (min-width: 700px){

.css-183zfck{
display:none !important;
}
.header-main{font-size:36px !important}

}

@media screen and (max-width: 600px){
	.bg-gray-900 {
	background-color: #2c2c2c;
	margin-top: 0px;
}
	.pcl-single-nav-item__nav-btn{
		color:black !important;
	}
#about-sectiont .subheading {
	
	margin-left:30%;
}
.header-main{font-size:22px !important}
.textwidth{width:100%;}
h2.wow{
font-size:30px
}
.subhead{
font-size:10px !important}
}

.ftco-footer-social li
{
  display: inline;
  list-style-type: none;
  
  float: left;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0MZSGDQ6SX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0MZSGDQ6SX');
</script>
<link rel="stylesheet" href="{{ asset('megamenu/all.css') }}">
  <!--Main Menu File-->
  <link id="effect" rel="stylesheet" type="text/css" media="all" href="{{ asset('megamenu/webslidemenu/dropdown-effects/fade-down.css') }}" />
 
 <link rel="stylesheet" type="text/css" media="all" href="{{ asset('megamenu/webslidemenu/webslidemenu.css') }}" />
<!-- Begin Inspectlet Asynchronous Code -->
<script type="text/javascript">
(function() {
window.__insp = window.__insp || [];
__insp.push(['wid', 410824634]);
var ldinsp = function(){
if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=410824634&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
setTimeout(ldinsp, 0);
})();
</script>
<!-- End Inspectlet Asynchronous Code -->


</head>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#F96D00" /></svg></div>
  <body >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCX6R66"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  

  
  
  

  <!-- Mobile Header -->
  <div class="wsmobileheader clearfix">
    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
    <span class="smllogo"><img src="{{ asset('uploads/1991967639logo.png') }}" width="80" alt="" /></span>
    <div class="wssearch clearfix">
      <i class="wsopensearch fas fa-search"></i>
      <i class="wsclosesearch fas fa-times"></i>
      <div class="wssearchform clearfix">
       
      </div>
    </div>
  </div>
  <!-- Mobile Header -->



  

  <div class="headerfull">
    <div class="wsmain clearfix">
      <div class="smllogo" style="margin:8px 0 0 0"><a href="#"><img src="{{ asset('uploads/1991967639logo.png') }}"  /></a></div>
      <nav class="wsmenu clearfix">
        <ul class="wsmenu-list">
		<li aria-haspopup="true"><a href="{{ route('home')}}" class="navtext">  <span>Home</span></a></li>
          <li aria-haspopup="true"><a href="#" class="navtext"><span></span> <span>Services</span></a>
            <div class="wsshoptabing wtsdepartmentmenu clearfix">
              <div class="wsshopwp clearfix">
                <ul class="wstabitem clearfix">
                 
                  <li class="wsshoplink-active"><a href="#"> Services</a>
                    <div class="wstitemright clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-4 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                             <li class="wstheading clearfix"><a href="{{route('painted')}}"> Painted Kitchen </a></li>
							 <li class="wstheading clearfix"><a href="{{route('wooden')}}">Wood Kitchen</a></li>
							 <li class="wstheading clearfix"><a href="{{route('thermofoil')}}">Thermofoil - PVC Kitchen</a></li>
							 <li class="wstheading clearfix"><a href="{{route('countertops')}}">Kitchen Countertops</a></li>
							 <li class="wstheading clearfix"><a href="{{route('backsplashes')}}">Kitchen Backsplashes</a></li>
							 
                              
                            </ul>
                          </div>
                          <div class="col-lg-4 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
							<li class="wstheading clearfix"><a href="{{route('cabinet')}}">Kitchen Cabinets & Doors </a></li>
                            <li class="wstheading clearfix"><a href="{{route('condo')}}">Condo Kitchen </a></li>
							<li class="wstheading clearfix"><a href="{{route('style')}}">Kitchen Style</a></li>
							<li class="wstheading clearfix"><a href="{{route('millworks')}}">Custom Millwork</a></li>
							<li class="wstheading clearfix"><a href="{{route('custom-cabinate')}}">Custom Kitchen Cabinets</a></li>							
                             
                            </ul>
                          </div>
                         
                          <div class="col-lg-4 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                               <li class="wstheading clearfix"><a href="{{route('island')}}">Kitchen Islands & Carts</a></li>
							   <li class="wstheading clearfix"><a href="{{route('modular')}}">Modular Kitchens </a></li>
								
							   <li class="wstheading clearfix"><a href="{{route('storage')}}">Kitchen Storage Pantry</a></li>
								<li class="wstheading clearfix"><a href="{{route('mdf')}}">MDF Kitchens </a></li>
                            </ul>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </li>
                 
				  
                 
                </ul>
              </div>
            </div>
          </li>
		<li aria-haspopup="true"><a href="#" class="navtext"><span></span> <span>Products</span></a>
            <div class="wsshoptabing wtsdepartmentmenu clearfix">
              <div class="wsshopwp clearfix">
                <ul class="wstabitem clearfix">
                 
                  <li class="wsshoplink-active"><a href="#"> Products</a>
                    <div class="wstitemright clearfix">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-4 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                             <li class="wstheading clearfix"><a href="{{route('product.countertops')}}"> Kitchen Countertops</a></li>
							 <li class="wstheading clearfix"><a href="{{route('product.islands')}}">Kitchen Islands</a></li>
							 
							 
                              
                            </ul>
                          </div>
                          <div class="col-lg-4 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
							
                            	<li class="wstheading clearfix"><a href="{{route('product.faucets-sink')}}">Kitchen Faucets & Sinks</a></li>
								<li class="wstheading clearfix"><a href="{{route('product.storage')}}">Wall Storage </a></li>					
                             
                            </ul>
                          </div>
                         
                          <div class="col-lg-4 col-md-12 clearfix">
                            <ul class="wstliststy02 clearfix">
                               <li class="wstheading clearfix"><a href="{{route('product.lighting')}}">Kitchen Lighting</a></li>
							   
                            </ul>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </li>
                 
				  
                 
                </ul>
              </div>
            </div>
          </li>
		
		<li aria-haspopup="true"><a href="{{ route('assesment')}}" class="navtext">  <span>Assessments</span></a></li>
		<li aria-haspopup="true"><a href="{{ route('blogs')}}" class="navtext">  <span>Blogs</span></a></li>
		<li aria-haspopup="true"><a href="{{ route('about-us')}}" class="navtext">  <span>About us</span></a></li>
		<li aria-haspopup="true"><a href="{{ route('contact.kitchen')}}" class="navtext">  <span>Contact us</span></a></li>
		<li aria-haspopup="true"><a href="{{ route('career')}}" class="navtext">  <span>Career </span></a></li>
         

          




        </ul>
      </nav>
    </div>
  </div>












  </body>
  <style>
    html {
      visibility: visible;
      opacity: 1;
    }
p{
  margin-bottom: 5px;
    font-size: 17px !important;
    font-family: Helvetica;
    font-weight: 500;
	line-height: 1.6em
	}
.elementor-column-gap-no{padding:0px !important;}
.elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
padding:0 0 0 0 !important;}

.elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {padding:0px !important;}
.elementor-widget-wrap>.elementor-element{padding: 0 10px  0 0}
  </style>

<!-- Mirrored from www.pcl.com/ca/en by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 19:27:14 GMT -->
</html>



@yield('main-section');















<section class="ftco-intro" style="padding:0px">
<div class="container-fluid" style="padding:0px">
<div class="row justify-content-center">
<div class="col-md-12 text-centerr">
<div class="img row" style="background-image:url(../newtemplate/asasa-kitchen/footer.jpg)">

<div class="overlay"></div>
<div class="col-md-12">

<h2 style="font-size:20px;text-align:center;text-transform: capitalize">We are the most trusted and experienced kitchen renovation company in Toronto. Get your kitchen modified by the best kitchen experts .</h2>
</div>
<br>
<div  class="col-md-12">
<p class="mb-0" style="text-align:center;margin-top:12px;"><a href="{{route('contact.kitchen')}}" class="btn btn-primary px-4 py-3"><b>Contact With Us</b></a></p>

</div>
</div>
</div>
</div>
</div>
</section>



<section class="review-section ftco-section ftco-no-pt ftco-no-pb testimony-section img">
<div class="overlay"></div>
<div class="container">
<div class="row ftco-animatee justify-content-center">
<div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
<div class="heading-section heading-section-white">
<span class="subheading" style="color:#fff;">Read Testimonials</span>
<h2 class="mb-4" style="font-size: 50px;">We Always Love To Hear From Our Customers</h2>
</div>
</div>
<div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
<div class="carousel-testimony owl-carousel ftco-owl">

<div class="item">
<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
<div class="user-img" style="background-image: url(../newtemplate/asasa-kitchen/Review/3.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="fa fa-quote-left"></i>
</span>
</div>
<div class="text">
<p class="name mb-4">Just wanted to pass along how happy Emily and I are with the countertops installed yesterday. We chose the Quartz Countertops, and they really look great. The team at ASASA Kitchens was great to work with as they were professional, courteous, and got into the house, went right to work, and were out under four hours. We are delighted with the outcomes. We are very impressed by the professionalism that they have shown while working on our project. Thanks again, and we will absolutely come back if we have needs in the future</p>
<p class="name">Chris</p>
<span class="position">Toronto</span>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
<div class="user-img" style="background-image:url(../newtemplate/asasa-kitchen/Review/4.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="fa fa-quote-left"></i>
</span>
</div>
<div class="text">
<p class="name mb-4">They were so easy to work with, very cooperative, and I love their service. Their price was the best compared to others in the areas. From the moment I saw their website and contacted them, they were accommodating. They helped us pick out the materials and explained everything. The cabinet installers were also impressive and did an excellent job. Nothing had to be tweaked because they did fantastic work. They were on time, professional, and cleaned up well. I would be happy to highly appreciate them and recommend them to others.</</p>
<p class="name">Jonathan Brown</p>
<span class="position">Oakville</span>
</div>
</div>
</div>

<div class="item">
<div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
<div class="user-img" style="background-image: url(../newtemplate/asasa-kitchen/Review/6.jpg)">
<span class="quote d-flex align-items-center justify-content-center">
<i class="fa fa-quote-left"></i>
</span>
</div>
<div class="text">
<p class="name mb-4">I had a fantastic experience with Asasa Kitchens. The work on my kitchens drawer unit looks impressive. Had some issues with the job done in my past by other companies, but I am happy with Asasa Kitchens. They helped me to achieve the goals that I wanted in my budget. Asasa Kitchens were highly detailed in planning the space and helping to locate the exact finished that we are looking for to achieve a soothing, refined, and streamlined look. Asasa Kitchens knew the careful look I wanted and provided great choices for me to select.</p>
<p class="name">Luther Dory</p>
<span class="position">Mississauga</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<footer class="ftco-footer">
<div class="container">
<div class="row">
<div class="col-lg col-md-6">
<div class="ftco-footer-widget">
<h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
<p>ASASA Kitchen got the solutions of all your kitchen needs.</p>

</div>
</div>





<div class="col-lg-3 col-md-6">
<div class="ftco-footer-widget">
<h2 class="ftco-heading-2">Services</h2>
<div class="d-flex">
<ul class="list-unstyled mr-md-5">
<li><a href="{{route('painted')}}"><span class="fa fa-chevron-right mr-2"></span>Painted Kitchen
</a></li>
<li><a href="{{route('wooden')}}"><span class="fa fa-chevron-right mr-2"></span>Wood Kitchen
</a></li>
<li><a href="{{route('thermofoil')}}"><span class="fa fa-chevron-right mr-2"></span>Thermofoil - PVC kitchen
</a></li>
<li><a href="{{route('countertops')}}"><span class="fa fa-chevron-right mr-2"></span>Kitchen countertops
</a></li>
<li><a href="{{route('backsplashes')}}"><span class="fa fa-chevron-right mr-2"></span>Kitchen Backsplashes
</a></li>
<li><a href="{{route('main-services')}}"><span class="fa fa-chevron-right mr-2"></span>View All
</a></li>
</ul>
<!--
<ul class="list-unstyled ml-md-5">
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Kitchen cabinets & doors</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Condo Kitchen</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Kitchen Style</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Kitchen Style</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>kitchen storage Pantry</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>MDF Kitchens</a></li>
</ul>
-->
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="ftco-footer-widget">
<h2 class="ftco-heading-2">Products</h2>
<ul class="list-unstyled">
<li><a href="{{route('product.countertops')}}"><span class="fa fa-chevron-right mr-2"></span>Kitchen Countertops
</a></li>
<li><a href="{{route('product.faucets-sink')}}"><span class="fa fa-chevron-right mr-2"></span>Kitchen faucets & sinks
</a></li>
<li><a href="{{route('product.lighting')}}"><span class="fa fa-chevron-right mr-2"></span>Kitchen lighting
</a></li>
<li><a href="{{route('product.islands')}}"><span class="fa fa-chevron-right mr-2"></span>Kitchen islands 
</a></li>
<li><a href="{{route('product.storage')}}"><span class="fa fa-chevron-right mr-2"></span>Wall storage
</a></li>
</ul>
</div>
</div>
<div class="col-lg col-md-6">
<div class="ftco-footer-widget">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="fa fa-map-marker mr-3"></span><span class="text">ASASA KITCHENS
401, Highway North York</span></li>
<li style="margin-bottom:0px"><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+1 (647) (956) (1116)</span></a></li>
<li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text"><span class="__cf_email__" data-cfemail="4920272f260930263c3b2d2624282027672a2624">Contact@asasakitchens.com</span></span></a></li>
</ul>
<ul class="ftco-footer-social list-unstyled mt-4">
<li><a href="@isset($setting['twitter']){{ $setting['twitter']}}@endisset"><span class="fab fa-twitter"></span></a></li>
<li><a href="@isset($setting['facebook']){{ $setting['facebook']}}@endisset"><span class="fab fa-facebook-f"></span></a></li>
<li><a href="@isset($setting['instagram']){{ $setting['instagram']}}@endisset"><span class="fab fa-instagram"></span></a></li>
<li><a href="@isset($setting['pinterest']){{ $setting['pinterest']}}@endisset"><span class="fab fa-pinterest fa-lg"></span></a></li>
<li><a href="@isset($setting['linkedin']){{ $setting['linkedin']}}@endisset"><span class="fab fa-linkedin fa-lg"></span></a></li>
<li><a href="@isset($setting['youtube']){{ $setting['youtube']}}@endisset"><span class="fab fa-youtube fa-lg"></span></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid bg-primary">
<div class="container">
<div class="row">
<div class="col-md-6 aside-stretch py-3" style="color:white">
Copyrights © 2021 asasakitchens.com - Developed by NetMaticO 
</div>
</div>
</div>
</div>
</footer>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="fa fa-close"></span>
</button>
</div>
<div class="modal-body p-4 p-md-5">
<form action="{{ Route('career-request')}}" enctype="multipart/form-data"  method="post" class="appointment-form ftco-animate">
@csrf
<h3>Apply Job</h3>
<div class="">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="First Name">
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Last Name">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Phone" name="Phone" >
</div>
</div>
<div class="">
<div class="form-group">
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="fa fa-chevron-down"></span></div>
<select name="positions" id="" class="form-control" >
<option value="">Select Your Services</option>
<option value="">Architecture</option>
<option value="">Renovation</option>
<option value="">Construction</option>
<option value="">Interior &amp; Exterior</option>
<option value="">Chemical Research</option>
<option value="">Petroleum &amp; Gas</option>
<option value="">Other Services</option>
</select>
</div>
</div>
</div>
</div>
<div class="">
<div class="form-group">
<textarea name="msg" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="file" class="form-control" name="cv" >
</div>
<div class="form-group">
<input type="submit" value="Apply" class="btn btn-primary py-3 px-4">
</div>
</div>
</form>
</div>
</div>
</div>
</div>


@yield('script')




</body>


<!-- Mirrored from preview.colorlib.com/theme/wilcon/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 19:20:36 GMT -->
</html>

@yield('script2')

<script type="text/javascript" src="{{ asset('megamenu/webslidemenu/webslidemenu.js') }}"></script>