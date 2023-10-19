
@extends('newtemplate.layout.template')
@extends('newtemplate.layout.project2')


@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp


@section('meta')
<title>{{$work->meta_title}}
</title>
		<meta name="description" content="{{$work->meta_description}}">
	<style>
	@media only screen and (max-width: 600px) {
		   elementor-widget-container h2{font-size:25px}
	}
hr{width:50px;}
.elementor-1143 .elementor-element.elementor-element-4ac65fb .elementor-heading-title{margin:0px !important;}


	p{
		 text-align: justify;
	}
	
	</style>
     <link rel="stylesheet" href="{{ asset('newtemplate/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('newtemplate/plugins/fontawesome/css/all.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('newtemplate/plugins/slick/slick.css') }}">
  
 
  <link rel="stylesheet" href="{{ asset('newtemplate/plugins/style.css') }}">

<link rel="stylesheet" href="{{ asset('newtemplate/css/header.css') }}" />
@endsection
@section('main-section')
<body>
<!-- Google Tag Manager (noscript) -->
	
		<!--<section id="main-container" class="main-container" style="padding:0px;">
  

    <div class="row">
      <div class="col-lg-12">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" style="width:100%;height:550px" src="../newtemplate/asasa/project/slider2.jpg" alt="project-image" />
          
			</div>

          <div class="item">
            <img loading="lazy" class="img-fluid" style="width:100%;height:550px" src="../newtemplate/asasa/project/slider1.jpg" alt="project-image"  />
          </div>

        </div>
      </div>

          <h1 style="color: orange;position: absolute; margin: 15% 7%;">Example</h1>
     
    </div>

</section>-->
<!--
<section class="section bg-gray-900 box-custom-1 main-container" id="main-container" class="" >
	<div class="slideshow-container w-100" >
		<div id="page-slider" class="page-slider small-bg  " >
 <div class="item">
            <img loading="lazy" class="img-fluid" style="width:100%;height:550px" src="../newtemplate/asasa/project/slider1.jpg" alt="project-image"  />
          </div><div class="item">
            <img loading="lazy" class="img-fluid" style="width:100%;height:550px" src="../newtemplate/asasa/project/slider2.jpg" alt="project-image"  />
          </div>

		
		</div>
		<h2 style="color: white;position: absolute; margin: -28% 7%;font-weight:700;width:40%">
		PROJECT DETAIL OF MASTER ENSUITE BATHROOM RENOVATION IN OAKVILLE</h2>
		
		<div class="d-flex justify-content-center mb-3 my-3 dots" > 
 
		</div>
		</div>

	</div>
	<br>
	</div>
</section>-->

 <section class="section bg-gray-900 box-custom-1">
       
		<div class="slideshow-container" style="width:100%;">

@php $img=$work->image;  $img2=asset('uploads/projects/'.$img); @endphp


<div class="box-custom-1-main" style="background-image: url('{{ $img2 }}');background-repeat:no-repeat;background-size: cover;">
			<div class="block-sm" style="padding-top:10%;">
			<h1  style="color:#fff"  class="titlep">{{$work->title}}</h1>
				
				<a class="radius button button-primary button-shadow wow fadeInRight"  href="tel:+1-647-956-1116" style="margin-top:5%;">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" href="{{route('contact.kitchen')}}" style="margin-top:5%;">Get In Touch</a>
			
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


<!-- Main container end -->

<section class="ftco-section" id="about-sectiont" id="about-section" >

<div class="row justify-content-center">
<div class="col-md-12 ">


<h3 class="titlep" style="text-align:center">{{$work->title}}
<img src="{{ asset('newtemplate/titleicon.png') }}" class="center-section">

</h3>

<div class=" about container">

<p style="color:#707070;">{!! $work->description !!}
</p>



</div>

</div>

</div>

</div>
</section>






<div id="content" class="site-content">
<div class="ast-container">
<div data-elementor-type="wp-page" data-elementor-id="1143" class="elementor elementor-1143" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">

<section class="elementor-section elementor-top-section elementor-element elementor-element-103651f elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="103651f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
<div class="elementor-background-overlay"></div>

<div class="container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ba37fa9 elementor-invisible" data-id="ba37fa9" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-2ceabd63 elementor-widget elementor-widget-heading" data-id="2ceabd63" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default"><b>Before & After </b></h2>		</div>
</div>
<div class="elementor-element elementor-element-23ddcb4 elementor-widget elementor-widget-text-editor" data-id="23ddcb4" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p> {!! $work->before_description !!}</p>					</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>












@if(!empty($before_after[0]->description))



<section class="elementor-section elementor-top-section elementor-element elementor-element-e2f49aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2f49aa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row revert">
<div class="elementor-column  elementor-top-column elementor-element elementor-element-ff9518d" data-id="ff9518d" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-e9935b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e9935b5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">





<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c02dad" data-id="7c02dad" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4ac65fb elementor-widget elementor-widget-heading" data-id="4ac65fb" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">{!! $before_after[0]->heading !!}</h2>		</div>
</div>
<div class="elementor-element elementor-element-cee855f elementor-widget elementor-widget-text-editor" data-id="cee855f" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>{!! $before_after[0]->description !!}</p>					</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a0aec0" data-id="1a0aec0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-bea60a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bea60a8" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2b46271" data-id="2b46271" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b92eaa5 elementor-widget elementor-widget-wb-before-after-image-slider-elementor" data-id="b92eaa5" data-element_type="widget" data-widget_type="wb-before-after-image-slider-elementor.default">
<div class="elementor-widget-container">
<div class="wb_ebais_twentytwenty_container twentytwenty-container" id="wb_before_after_b92eaa5">
<span class='before_text'>Before</span>
<span class='after_text'>After</span>

<img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[0]->before}}" class="attachment-full size-full" alt="{{ $before_after[0]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[0]->before}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[0]->before}} 300w, {{ '../public/uploads/projects/before/'.$before_after[0]->before}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" /><img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[0]->after}}" class="attachment-full size-full" alt="{{ $before_after[0]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[0]->after}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[0]->after}} 300w, {{ '../public/uploads/projects/before/'.$before_after[0]->after}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" />		</div>
<style>
#wb_before_after_b92eaa5{
max-width: auto;
}
</style>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>
@endif










@if(!empty($before_after[1]->description))

<section class="elementor-section elementor-top-section elementor-element elementor-element-5b795e4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5b795e4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row ">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7d2a2d8" data-id="7d2a2d8" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-fa0077b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="fa0077b" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1f4ff53" data-id="1f4ff53" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-5a903f7 elementor-widget elementor-widget-wb-before-after-image-slider-elementor" data-id="5a903f7" data-element_type="widget" data-widget_type="wb-before-after-image-slider-elementor.default">
<div class="elementor-widget-container">
<div class="wb_ebais_twentytwenty_container twentytwenty-container" id="wb_before_after_5a903f7">
<span class='before_text'>Before</span>
<span class='after_text'>After</span>
<img width="804" height="538" src="{{ '../public/uploads/projects/before/'.$before_after[1]->before}}" class="attachment-full size-full" alt="{{ $before_after[1]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[1]->before}} 804w, {{ '../public/uploads/projects/before/'.$before_after[1]->before}} 300w, {{ '../public/uploads/projects/before/'.$before_after[1]->before}} 768w" sizes="(max-width: 804px) 100vw, 804px" /><img width="804" height="538" src="{{ '../public/uploads/projects/before/'.$before_after[1]->after}}" class="attachment-full size-full" alt="{{ $before_after[1]->heading }}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[1]->after}} 804w, {{ '../public/uploads/projects/before/'.$before_after[1]->after}} 300w, {{ '../public/uploads/projects/before/'.$before_after[1]->after}} 768w" sizes="(max-width: 804px) 100vw, 804px" />		</div>
<style>
#wb_before_after_5a903f7{
max-width: auto;
}
</style>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d0e3212" data-id="d0e3212" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-5b426fa elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="5b426fa" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="" width="width:100%" data-id="ac4ee84" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b44fa68 elementor-widget elementor-widget-heading" data-id="b44fa68" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">{!! $before_after[1]->heading !!}</h2>		</div>
</div>
<div class="elementor-element elementor-element-7c8236c elementor-widget elementor-widget-text-editor" data-id="7c8236c" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>{!! $before_after[1]->description !!}</p>					</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>

</div>
</div>
</div>
</div>
</div>
</section>


@endif



@if(!empty($before_after[2]->description))


<section class="elementor-section elementor-top-section elementor-element elementor-element-e2f49aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2f49aa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row revert">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ff9518d" data-id="ff9518d" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-e9935b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e9935b5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row ">





<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c02dad" data-id="7c02dad" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4ac65fb elementor-widget elementor-widget-heading" data-id="4ac65fb" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">{!! $before_after[2]->heading !!}</h2>		</div>
</div>
<div class="elementor-element elementor-element-cee855f elementor-widget elementor-widget-text-editor" data-id="cee855f" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>{!! $before_after[2]->description !!}</p>					</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a0aec0" data-id="1a0aec0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-bea60a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bea60a8" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2b46271" data-id="2b46271" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b92eaa5 elementor-widget elementor-widget-wb-before-after-image-slider-elementor" data-id="b92eaa5" data-element_type="widget" data-widget_type="wb-before-after-image-slider-elementor.default">
<div class="elementor-widget-container">
<div class="wb_ebais_twentytwenty_container twentytwenty-container" id="wb_before_after_b92eaa5">
<span class='before_text'>Before</span>
<span class='after_text'>After</span>
<img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[2]->before}}" class="attachment-full size-full" alt="{{ $before_after[2]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[2]->before}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[2]->before}} 300w, {{ '../public/uploads/projects/before/'.$before_after[2]->before}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" /><img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[2]->after}}" class="attachment-full size-full" alt="{{ $before_after[2]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[2]->after}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[2]->after}} 300w, {{ '../public/uploads/projects/before/'.$before_after[2]->after}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" />		</div>
<style>
#wb_before_after_b92eaa5{
max-width: auto;
}
</style>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>
@endif

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
       
        <h3 class="section-sub-title" style="margin:0 0 14px">Project Gallery</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row"  >
      <div class="col-12" >
       


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

		@forelse($projectimages as $key => $projectimage)

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container"  style="" >
              
                <img class="img-fluid imagezoom" src="../public/uploads/projects/{{ $projectimage->image }}" alt="{{ $key }}">
             
            </div>
          </div><!-- shuffle item 1 end -->
@empty
		@endforelse
        </div><!-- shuffle end -->
      </div>

     
    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->








@if(!empty($before_after[3]->description))





<section class="elementor-section elementor-top-section elementor-element elementor-element-e2f49aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2f49aa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row revert">
<div class="elementor-column  elementor-top-column elementor-element elementor-element-ff9518d" data-id="ff9518d" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-e9935b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e9935b5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">





<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c02dad" data-id="7c02dad" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4ac65fb elementor-widget elementor-widget-heading" data-id="4ac65fb" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">{!! $before_after[3]->heading !!}</h2>		</div>
</div>
<div class="elementor-element elementor-element-cee855f elementor-widget elementor-widget-text-editor" data-id="cee855f" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>{!! $before_after[3]->description !!}</p>					</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a0aec0" data-id="1a0aec0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-bea60a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bea60a8" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2b46271" data-id="2b46271" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b92eaa5 elementor-widget elementor-widget-wb-before-after-image-slider-elementor" data-id="b92eaa5" data-element_type="widget" data-widget_type="wb-before-after-image-slider-elementor.default">
<div class="elementor-widget-container">
<div class="wb_ebais_twentytwenty_container twentytwenty-container" id="wb_before_after_b92eaa5">
<span class='before_text'>Before</span>
<span class='after_text'>After</span>
<img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[3]->before}}" class="attachment-full size-full" alt="{{ $before_after[3]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[3]->before}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[3]->before}} 300w, {{ '../public/uploads/projects/before/'.$before_after[3]->before}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" /><img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[3]->after}}" class="attachment-full size-full" alt="{{ $before_after[3]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[3]->after}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[3]->after}} 300w, {{ '../public/uploads/projects/before/'.$before_after[3]->after}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" />		</div>
<style>
#wb_before_after_b92eaa5{
max-width: auto;
}
</style>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>

@endif








@if(!empty($before_after[4]->description))


<section class="elementor-section elementor-top-section elementor-element elementor-element-5b795e4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5b795e4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7d2a2d8" data-id="7d2a2d8" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-fa0077b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="fa0077b" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1f4ff53" data-id="1f4ff53" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-5a903f7 elementor-widget elementor-widget-wb-before-after-image-slider-elementor" data-id="5a903f7" data-element_type="widget" data-widget_type="wb-before-after-image-slider-elementor.default">
<div class="elementor-widget-container">
<div class="wb_ebais_twentytwenty_container twentytwenty-container" id="wb_before_after_5a903f7">
<span class='before_text'>Before</span>
<span class='after_text'>After</span>
<img width="804" height="538" src="{{ '../public/uploads/projects/before/'.$before_after[4]->before}}" class="attachment-full size-full" alt="{{ $before_after[4]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[4]->before}} 804w, {{ '../public/uploads/projects/before/'.$before_after[4]->before}} 300w, {{ '../public/uploads/projects/before/'.$before_after[4]->before}} 768w" sizes="(max-width: 804px) 100vw, 804px" /><img width="804" height="538" src="{{ '../public/uploads/projects/before/'.$before_after[4]->after}}" class="attachment-full size-full" alt="{{ $before_after[4]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[4]->after}} 804w, {{ '../public/uploads/projects/before/'.$before_after[4]->after}} 300w, {{ '../public/uploads/projects/before/'.$before_after[4]->after}} 768w" sizes="(max-width: 804px) 100vw, 804px" />		</div>
<style>
#wb_before_after_5a903f7{
max-width: auto;
}
</style>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d0e3212" data-id="d0e3212" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-5b426fa elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="5b426fa" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="" width="width:100%" data-id="ac4ee84" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b44fa68 elementor-widget elementor-widget-heading" data-id="b44fa68" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">{!! $before_after[4]->heading !!}</h2>		</div>
</div>
<div class="elementor-element elementor-element-7c8236c elementor-widget elementor-widget-text-editor" data-id="7c8236c" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>{!! $before_after[4]->description !!} </p>					</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>

</div>
</div>
</div>
</div>
</div>
</section>
@endif

@if(!empty($before_after[5]->description))





<section class="elementor-section elementor-top-section elementor-element elementor-element-e2f49aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2f49aa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row revert">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ff9518d" data-id="ff9518d" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-e9935b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e9935b5" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">




<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c02dad" data-id="7c02dad" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4ac65fb elementor-widget elementor-widget-heading" data-id="4ac65fb" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">{!! $before_after[5]->heading !!}</h2>		</div>
</div>
<div class="elementor-element elementor-element-cee855f elementor-widget elementor-widget-text-editor" data-id="cee855f" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>{!! $before_after[5]->description !!}</p>					</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a0aec0" data-id="1a0aec0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-bea60a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bea60a8" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2b46271" data-id="2b46271" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b92eaa5 elementor-widget elementor-widget-wb-before-after-image-slider-elementor" data-id="b92eaa5" data-element_type="widget" data-widget_type="wb-before-after-image-slider-elementor.default">
<div class="elementor-widget-container">
<div class="wb_ebais_twentytwenty_container twentytwenty-container" id="wb_before_after_b92eaa5">
<span class='before_text'>Before</span>
<span class='after_text'>After</span>
<img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[5]->before}}" class="attachment-full size-full" alt="{{ $before_after[5]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[5]->before}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[5]->before}} 300w, {{ '../public/uploads/projects/before/'.$before_after[5]->before}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" /><img width="1000" height="562" src="{{ '../public/uploads/projects/before/'.$before_after[5]->after}}" class="attachment-full size-full" alt="{{ $before_after[5]->heading}}" loading="lazy" srcset="{{ '../public/uploads/projects/before/'.$before_after[5]->after}} 1000w, {{ '../public/uploads/projects/before/'.$before_after[5]->after}} 300w, {{ '../public/uploads/projects/before/'.$before_after[5]->after}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" />		</div>
<style>
#wb_before_after_b92eaa5{
max-width: auto;
}
</style>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>


@endif








</div>
</div><!-- #page -->

</body>

<!-- Mirrored from 
impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->
</html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection

