@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(5);
    $storedColumns = json_decode($section->content,TRUE);
@endphp
@section("meta")
    <title>@isset($storedColumns['meta_title']) {!! $storedColumns['meta_title'] !!} @endisset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@isset($storedColumns['meta_description']) {!! $storedColumns['meta_description'] !!} @endisset">
    <meta name="keywords" content="@isset($storedColumns['meta_keyword']) {!! $storedColumns['meta_keyword'] !!} @endisset">

@endsection
@section("content")

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$section->name}}</h1>
                    <ul class="crumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Product</a></li>
                        <li class="sep">/</li>
                        <li>{{$section->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">


                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                            <h3>@isset($storedColumns['main_heading1']) {!! $storedColumns['main_heading1'] !!} @endisset</h3>
                            @isset($storedColumns['short_desc1']) {!! $storedColumns['short_desc1'] !!} @endisset
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                            <h3>@isset($storedColumns['main_heading2']) {!! $storedColumns['main_heading2'] !!} @endisset</h3>
                            @isset($storedColumns['short_desc2']) {!! $storedColumns['short_desc2'] !!} @endisset
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                            <img src="@isset($storedColumns['image_1']){{ asset('uploads/'.$storedColumns['image_1']) }}@endisset" class="img-responsive" alt="">
                        </div>

                    </div>
                </div>

            </div>
            <div class="row m-t-20" style="margin-top: 50px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                            <h3>@isset($storedColumns['main_heading3']) {!! $storedColumns['main_heading3'] !!} @endisset</h3>
                            @isset($storedColumns['short_desc3']) {!! $storedColumns['short_desc3'] !!} @endisset
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <div class="container">
            <div class="owl-custom-nav">
                <a class="btn-next"></a>
                <a class="btn-prev"></a>
            </div>

            <div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide" style="margin-top: 50px;">

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Lights</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{asset("Lights.png")}}" alt="" />
                    </div>

                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Sink Faucets</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("Sink Faucets.png")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Sink</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("Sink.png")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                
                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Hardware</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("Hardware.png")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Backsplash</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("Backsplash.png")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Pull Bars</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("Pull Bars.png")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Door Knobs</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("Door Knobs.png")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Door Design</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("Door Design.png")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->


            </div>
        </div>
        <div class="container">
            <div class="row m-t-20" >
                <div class="col-md-12">
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                            <h3>@isset($storedColumns['main_heading4']) {!! $storedColumns['main_heading4'] !!} @endisset</h3>
                            @isset($storedColumns['short_desc4']) {!! $storedColumns['short_desc4'] !!} @endisset

                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px;margin-bottom: 50px">


                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                                <h3>@isset($storedColumns['main_heading5']) {!! $storedColumns['main_heading5'] !!} @endisset</h3>
                                @isset($storedColumns['short_desc5']) {!! $storedColumns['short_desc5'] !!} @endisset
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                                <h3>@isset($storedColumns['main_heading6']) {!! $storedColumns['main_heading6'] !!} @endisset</h3>
                                @isset($storedColumns['short_desc6']) {!! $storedColumns['short_desc6'] !!} @endisset
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">
                                <h3>@isset($storedColumns['main_heading7']) {!! $storedColumns['main_heading7'] !!} @endisset</h3>
                                @isset($storedColumns['short_desc7']) {!! $storedColumns['short_desc7'] !!} @endisset
                            </div>

                        </div>
                    </div>

                </div>

            </div>



        </div>
        <section data-bgcolor="#202124" style="display: none">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0s">
                        <div class="box-number square">
                            <span class="number bg-color wow rotateIn" data-wow-delay=".5s">1</span>
                            <div class="text justify-content">
                                <h3><span class="id-color">@isset($storedColumns['title1']) {!! $storedColumns['title1'] !!} @endisset</span></h3>
                                <p>@isset($storedColumns['description1']) {!! $storedColumns['description1'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay=".25s">
                        <div class="box-number square">
                            <span class="number bg-color wow rotateIn" data-wow-delay=".75s">2</span>
                            <div class="text justify-content">
                                <h3><span class="id-color">@isset($storedColumns['title2']) {!! $storedColumns['title2'] !!} @endisset</span></h3>
                                <p>@isset($storedColumns['description2']) {!! $storedColumns['description2'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="box-number square">
                            <span class="number bg-color wow rotateIn" data-wow-delay="1s">3</span>
                            <div class="text justify-content">
                                <h3><span class="id-color">@isset($storedColumns['title3']) {!! $storedColumns['title3'] !!} @endisset</span></h3>
                                <p>@isset($storedColumns['description3']) {!! $storedColumns['description3'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay=".75s">
                        <div class="box-number square">
                            <span class="number bg-color wow rotateIn" data-wow-delay="1.25s">4</span>
                            <div class="text justify-content">
                                <h3><span class="id-color">@isset($storedColumns['title4']) {!! $storedColumns['title4'] !!} @endisset</span></h3>
                                <p>@isset($storedColumns['description4']) {!! $storedColumns['description4'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay="1s">
                        <div class="box-number square">
                            <span class="number bg-color wow rotateIn" data-wow-delay="1.5s">5</span>
                            <div class="text justify-content">
                                <h3><span class="id-color">@isset($storedColumns['title5']) {!! $storedColumns['title5'] !!} @endisset</span></h3>
                                <p>@isset($storedColumns['description5']) {!! $storedColumns['description5'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay="1.25s">
                        <div class="box-number square">
                            <span class="number bg-color wow rotateIn" data-wow-delay="1.75s">6</span>
                            <div class="text justify-content">
                                <h3><span class="id-color">@isset($storedColumns['title6']) {!! $storedColumns['title6'] !!} @endisset</span></h3>
                                <p>@isset($storedColumns['description6']) {!! $storedColumns['description6'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
            <a href="{{route("contact")}}" class="btn btn-line black btn-big">Get Quotation</a>
        </section>
@endsection
