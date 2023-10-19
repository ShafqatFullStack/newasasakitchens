@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp
@section("meta")
    <title>{{$work->title}}</title>
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
                    <h1>{{$work->title}}</h1>
                    <ul class="crumb">
					 <a href="{{route("contact")}}" class="btn-custom btn-fullwidth " style="margin-bottom: 15px;color:black">FREE CONSULTATION</a>

                        <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Services</a></li>
                        <li class="sep">/</li>
                        <li>{{$work->title}}</li>
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
                            <li  ><a href="{{route("single-service",$ser->slug)}}">{{$ser->title}}</a></li>
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
                            {!! $work->description !!}
                        </div>

                    </div>
                </div>

            </div>
        </div>



    </div>

    <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
        <a href="#" class="btn btn-line black btn-big">Get Quotation</a>
    </section>
@endsection
