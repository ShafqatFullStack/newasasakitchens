@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(2);
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
                    <h1>About Us</h1>
                    <ul class="crumb">
					 <a href="{{route("contact")}}" class="btn-custom btn-fullwidth " style="margin-bottom: 15px;color:black">FREE CONSULTATION</a>

                        <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-top no-bottom">
        <section id="section-about-us-2" class="side-bg no-padding">
            <div class="image-container col-md-4 pull-left" data-delay="0" style="background-image: url('@isset($storedColumns['image_1']){{ asset('uploads/'.$storedColumns['image_1']) }}@endisset');height: 2131px;"></div>

            <div class="container">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-md-8 offset-md-4 justify-content" data-animation="fadeInRight" data-delay="200">
                            <h2>@isset($storedColumns['main_heading']) {!! $storedColumns['main_heading'] !!} @endisset</h2>

                            @isset($storedColumns['short_desc']) {!! $storedColumns['short_desc'] !!} @endisset
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>


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
                    <div class="item justify-content" >
                        <div class="de_testi">
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

        <!-- section begin -->
        <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
            <a href="contact" class="btn btn-line black btn-big">Talk With Us</a>
        </section>
        <!-- logo carousel section close -->

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Our Area of Operation</h2>
                        <p>We Offer Commercial and Residential Renovation Services in Toronto, GTA.</p>

                    </div>
                    @php
                        $areas = \App\Area::where("type",1)->orderBy('title')->get();
                    @endphp
                    @foreach($areas as $area)
                        <div class="col-lg-3 col-md-6 demo-icon-wrap-s2">
                            <span aria-hidden="true" class="icon_check_alt2 id-color"></span> &nbsp;{{$area->title}}
                        </div>
                    @endforeach

                </div>
                <div class="row mt-20">
                    <div class="col-md-12 text-center">
                        <h2>Why Choose ASASA</h2>
                        <p>ASASA has a Team of Skilled Professionals who are Offering a Variety of Renovation Services</p>

                    </div>
                    @php
                        $areas = \App\Area::where("type",2)->orderBy('title')->get();
                    @endphp
                    @foreach($areas as $area)
                        <div class="col-lg-3 col-md-6 demo-icon-wrap-s2">
                            <span aria-hidden="true" class="icon_check_alt2 id-color"></span> &nbsp;{{$area->title}}
                        </div>
                    @endforeach

                </div>
            </div>

        </section>
    </div>
@endsection
