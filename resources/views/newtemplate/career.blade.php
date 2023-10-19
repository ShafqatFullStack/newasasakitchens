@extends('newtemplate.layout.template')
@extends('newtemplate.layout.normal')


@php $setting =\App\Setting::pluck('value','name')->toArray();
$carrers =\App\Carrer::get()->toArray();
 @endphp


@section('meta')
		<title>Career | ASASA Kitchen
</title>
		<meta name="description" content="You can start your career with us in Toronto at ASASA Kitchen. You can find all the latest job opportunity">
    

<style>
.review-section{display:none}
.img-wrapper{padding:12px}
	.ftco-intro0 p{color:#707070 !important}
	.ftco-intro0 span{color:#707070 !important }
	.ftco-services-2 .services {
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  transition: all 0.3s ease;
  z-index: 0;
  margin-bottom: 30px;
  color: rgba(255, 255, 255, 0.8);
  background: #000000;
  padding: 30px;
  position: relative;
  overflow: hidden;
  margin-bottom: 0; }
</style>
 <style>
        .page_header_wrapper{
            background-color: #1f2732 !important;
        }
        .box {
            position : relative;

            width : 90%;
            height : 400px;
            margin-left: 15px;
            background-size: cover;
            background-position: top;
            border: #fff solid 5px;
            box-shadow: 0 20px 30px rgb(0,0,0,.5);
            transition: 5s;
            border-radius:20px;
        }
        .box:hover {
            background-position: bottom;
        }
        .box h6{
            background-color:
                #f1894ccf;
            padding: 5px;
            text-align: center;
            border-radius: 0px 0px 15px 15px;
        }
		.textcenter h2{font-size:21px;}
		.imagesize2{width:160px;height:160px;display:block;}
		.imagesize{display:none;}
		#about-section{padding-top:8%}
		.applybtn{margin-top:-35px;}
		#about-section{padding-top:8%}
@media only screen and (max-width: 600px) {
	#about-section{padding-top:25%}
	.applybtn{margin-top:0px;font-size:14px !important;padding: .275rem .35rem !important;}
	#about-section{padding-top:25%}
	.img-wrapper{
		// display: flex;
    flex-direction: column;  
    align-items: center;}
	.textcenter{
		padding-left:20px;
		padding-right:20px;
		margin:0 15px;
		}
	.textcenter h2{font-size:12px;padding:8px 12px; }
	.secondary-solid-btn{padding:5px 16px}
	.imagesize{width:50px;height:50px;display:block;}
	
	.imagesize2{display:none;}
	.mbs{display:flex}
	.mbs h2{
		position:absolute;
    width: 50%;
		}
		.mbs span{width:100%}
		.desc{font-size:12px !important;margin-top:2%;}
}
    </style>
@endsection
@section('main-section')


<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
<!-- Google Tag Manager (noscript) -->





<section class="ftco-section" id="about-section"  >
<div class="container">
<div class="row">

<div class="col-md-12 ">
<div class="row justify-content-center mb-4 pt-md-4">
<div class="col-md-12 heading-section ">

<h2 class="mb-4" style=" text-align:center" >Our Hiring Process</h2>
</div>
</div>
</div>
</div>
</div>
 	
      </section>


<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 jobs">
<div class="container-fluid">

<div class="row no-gutters d-flex">
<div class="col-lg-3 d-flex align-self-stretch ">
<div class="media block-6 services d-flex">

<div class="media-body pl-4">
<h3 class="number">01</h3>
<h3 class="heading mb-3">Apply</h3>
<p style="color:#ddd3d3">Start off with following us on social media platforms and applying to the vacancies posted.</p>

</div>
</div>
</div>
<div class="col-lg-3 d-flex align-self-stretch ">
<div class="media block-6 services d-flex">

<div class="media-body pl-4">
<h3 class="number">02</h3>
<h3 class="heading mb-3">Review</h3>
<p style="color:#ddd3d3">Once we receive your resume, our HR team will review it thoroughly to see if your expertise matches our required position.</p>

</div>
</div>
</div>

<div class="col-lg-3 d-flex align-self-stretch ">
<div class="media block-6 services d-flex">
<div class="media-body pl-4">
<h3 class="number">03</h3>
<h3 class="heading mb-3">Interview</h3>
<p style="color:#ddd3d3">Our competency based interviews conducted by subject matter experts would tell if you have what it takes to work with us.</p>
</div>
</div>
</div>
<div class="col-lg-3 d-flex align-self-stretch ">
<div class="media block-6 services d-flex">
<div class="media-body pl-4">
<h3 class="number">04</h3>
<h3 class="heading mb-3">Onboarding</h3>
<p style="color:#ddd3d3">Once you’ve passed the interview, we’ll make you the offer and after accepting it you will be welcomed to start your journey at Asasa Construction.</p>
</div>
</div>
</div>

</div>
</div>
</section>

<div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end" style="padding-top:4%">
<p class="mb-0 register-link"></p>
</div>


@forelse($carrers as $carrer)
@php $img=$carrer['image'];  $img2=asset('uploads/carrer/'.$img); @endphp

<section class="ftco-intro0" style="padding:0 0 3% 0;background:white">

<div class="container" >

<div class="row justify-content-center">

<div class="col-md-12 text-centerr">
<div class="img row">
<div class="overlay"></div>
<div class="col-md-2 col-sm-4">
	<div class="img-wrapper">
	<img class="img-responsive inline imagesize2" src="{{ $img2 }}" >
	</div>
</div>
<div class="col-md-9 textcenter">
<div class="mbs">
<img class="img-responsive inline imagesize" src="{{ $img2 }}" >
<span><h2 >{{ $carrer['title'] }}</h2>
<a href="{{ route('carrer.apply',[ $carrer['id'],$carrer['slug'] ]) }}" class="btn  btn-primary secondary-solid-btn applybtn" style="float:right" data-target="#exampleModalCenter">Apply Now</a>
</<span>

</div>
<div style="clear: both;"></div>

<p class="desc" style="color:black !important" >{!! $carrer['description'] !!}</p>
</div>
</div>
</div>

</div>
</div>
</section>


   
@empty

<section class="ftco-section" id="about-section">
<div class="container">
<div class="row">

<div class="col-md-12 ">
<div class="row justify-content-center mb-4 pt-md-4">
<div class="col-md-12 heading-section ">

<h2 class="mb-4" style="text-align:center">Currently we do not have any open  positions</h2>

<p style="text-align: justify ;color:black !important">

</p>

</div>
</div>
</div>
</div>
</div>
</section>
    
@endforelse



<!-- Mirrored from 
impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->
</html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection

