@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    
@endphp
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
@section("meta")
    <title>{{$tg->meta_title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{!! $tg->meta_description !!}">
    <meta name="keywords" content="{!!$tg->meta_keyword!!}">
    <style>
        .widget_top_rated_product li img {
            position: absolute;
            width: 60px;
            height: 20px !important;
            margin-top: 10px;
        }
    </style>
@endsection
@section("content")

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog</h1>
                    <ul class="crumb">
					 <a href="{{route("contact")}}" class="btn-custom btn-fullwidth " style="margin-bottom: 15px;color:black">FREE CONSULTATION</a>

                    <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li>Blog</li>
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
                <div class="col-md-8">
                    <ul class="blog-list">
                        @foreach ($blogs as $blog)
                        <li>
                            <div class="post-content">
                                <div class="post-image">
                                    <img src="{{asset('uploads/post/'.$blog->featured_image)}}" alt="" />
                                </div>


                                <div class="date-box">
                                    <div class="day">{{ $blog->created_at->format('d') }}</div>
                                    <div class="month">{{ $blog->created_at->format('M') }}</div>
                                </div>

                                <div class="post-text">
                                    <h3><a href="{{route("single-blog",$blog->slug)}}">{{$blog->title}} </a></h3>
                                    <p>{{substr(stripslashes(strip_tags($blog->content)), 0, 500)}} ...</p>
                                </div>

                                <a href="{{route("single-blog",$blog->slug)}}" class="btn-more">Read More</a>
                            </div>
                        </li>
                        @endforeach




                    </ul>

                    <div class="text-center">
                        {{-- <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul> --}}
                    </div>
                </div>

                <div id="sidebar" class="col-md-4">
                    {{-- <div class="widget widget-post">
                        <h4>Recent Posts</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                            <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                            <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                            <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                            <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                            <li><a href="#">Our Favorite Home Decor Trends of the Year</a></li>

                        </ul>
                    </div> --}}

                    <div class="widget widget-text">
                        <h4>About Us</h4>
                        <div class="small-border"></div>
                        @isset($setting['footer_info']){{ $setting['footer_info']}}@endisset
                    </div>
                    <div class="widget widget_tags">
                        <h4>Tags</h4>
                        <div class="small-border"></div>
                        <ul>
                            @foreach ($tags as $tag)
                        <li><a href="{{route("tag-blogs",$tag->slug)}}">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_top_rated_product">
                        @php $services = \App\Service::select(array('title', 'slug','featured_image'))->get();  @endphp
                        <h4>Our Services</h4>
                        <ul>
                            @foreach($services as $blog)
                                <li>
                                    <img src="{{asset('uploads/post/'.$blog->featured_image)}}" alt="">
                                    <div class="text">
                                        {{$blog->title}}
                                        <div class="price"><a class="id-color" href="{{route("single-service",$blog->slug)}}">Read More</a></div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
