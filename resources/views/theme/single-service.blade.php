@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp
@section("meta")
    <title>{{$service->meta_title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$service->meta_description}}">
    <meta name="keywords" content="{{$service->meta_keyword}}">
    <style>
        .widget_top_rated_product li img {
            position: absolute;
            width: 60px;
            height: 30px !important;
            margin-top: 10px;
        }
    </style>
@endsection
@section("content")

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{asset('uploads/post/'.$service->featured_image)}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$service->title}}</h1>
                    <ul class="crumb">
					 <a href="{{route("contact")}}" class="btn-custom btn-fullwidth " style="margin-bottom: 15px;color:black">FREE CONSULTATION</a>

                        <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Services</a></li>
                        <li class="sep">/</li>
                        <li>{{$service->title}}</li>
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
                <div id="sidebar" class="col-md-3 wow fadeInUp">
                    <ul id="services-list">
                        @php
                            $services = \App\Service::select(array('title', 'slug'))->get();
                        @endphp
                        @foreach($services as $ser)
                            <li @if($ser->id == $service->id) class="active" @endif><a href="{{route("single-service",$ser->slug)}}">{{$ser->title}}</a></li>
                        @endforeach

                    </ul>

                    <div class="widget widget_top_rated_product">
                        @php $blogs = \App\Post::all()->take(10);  @endphp
                        <h4>Our Blogs</h4>
                        <ul>
                            @foreach($blogs as $blog)
                            <li>
                                <img src="{{asset('uploads/post/'.$blog->featured_image)}}" alt="">
                                <div class="text">
                                    {{$blog->title}}
                                    <div class="price"><a class="id-color" href="{{route("single-blog",$blog->slug)}}">Read More</a></div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp justify-content" data-wow-delay=".3s">

                            {!! $service->content !!}
                        </div>

                    </div>
                </div>

            </div>
        </div>



    </div>

    <section id="section-faq-2" data-bgcolor="#1c1e20">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="s2"><span class="id-color">Service</span> Questions</h3>
                </div>

                <div class="col-md-9">

                    <div class="expand-group">
                        <div class="expand">
                            <h4>{{$service->question1}}</h4>
                            <div class="hidden-content">
                               {{$service->answer1}}
                            </div>
                        </div>
                        <div class="expand">
                            <h4>{{$service->question2}}</h4>
                            <div class="hidden-content">
                               {{$service->answer2}}
                            </div>
                        </div>
                        <div class="expand">
                            <h4>{{$service->question3}}</h4>
                            <div class="hidden-content">
                               {{$service->answer3}}
                            </div>
                        </div>


                    </div>


                </div>


            </div>
        </div>
    </section>
    <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
        <a href="{{route("contact")}}" class="btn btn-line black btn-big">Get Quotation</a>
    </section>
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
@endsection
