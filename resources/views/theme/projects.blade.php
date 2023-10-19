@extends("theme.layouts.master")
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
    <meta name="keywords" content="@isset($storedColumns['meta_keyword']) {!! $storedColumns['meta_keyword'] !!} @endisset">

@endsection
@section("content")
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Projects</h1>
                    <ul class="crumb">
					 <a href="{{route("contact")}}" class="btn-custom btn-fullwidth " style="margin-bottom: 15px;color:black">FREE CONSULTATION</a>

                        <li><a href="#">Home</a></li>
                        <li class="sep">/</li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->
    <div id="content" class="no-bottom no-top">


        <!-- section begin -->
        <section id="section-portfolio-2" class="no-top" aria-label="section-portfolio">
            <div class="container">

                <div class="spacer-single"></div>

                <!-- portfolio filter begin -->
                <div class="row">
                    <div class="col-md-12 mt40">
                        <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                            <li class="pull-right"><a href="#" data-filter="*" class="selected">All Projects</a></li>
                            @foreach($categories as $category)
                            <li><a href="#" data-filter=".{{$category->slug}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <!-- portfolio filter close -->

                <div class="spacer-single"></div>

                <div id="gallery" class="row grid_gallery gallery de-gallery hover-1 wow fadeInUp" data-wow-delay=".3s">
                    @foreach($works as $work)
                    <!-- gallery item -->
                    <div class="col-md-4 item {{$work->category->slug}}">
                        <div class="picframe">
                            <a href="{{route("single-project",$work->slug)}}">
                                    <span class="overlay-1">
                                        <span class="pf_text">
                                            <span class="project-name">{{$work->title}}</span>
                                        </span>
                                    </span>
                            </a>
                            <img src="{{asset("uploads/works/$work->image")}}" alt="" />
                        </div>
                    </div>
                    @endforeach
                    <!-- close gallery item -->

                    <!-- close gallery item -->

                </div>

            </div>

            <div id="loader-area">
                <div class="project-load"></div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <!-- section close -->
        <section id="section-testimonial" class="text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>Customer Says</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">
                    @foreach($testimonials as $testimonial)
                        <div class="item">
                            <div class="de_testi justify-content">
                                <blockquote>
                                    <p>{{$testimonial->comment}}</p>
                                    <div class="de_testi_by">
                                        {{$testimonial->name}}, {{$testimonial->designation}}
                                    </div>
                                </blockquote>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

    </div>
@endsection
