@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
    $blogs = \App\Post::all()->take(2);
    $works = \App\Work::all()->take(3);
    $categories = \App\Category::where("type",1)->get();
@endphp
<section id="section-why-choose-us-2">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="lazy" src="@isset($storedColumns['side_image']){{ asset('uploads/'.$storedColumns['side_image']) }}@endisset" class="img-responsive wow fadeInUp" width="100%" alt="">
            </div>
            <div class="col-md-8">

                <div class="row">

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0s">
                        <div class="box-icon">
                            <span class="icon wow fadeIn" data-wow-delay=".5s"><i class="id-color @isset($storedColumns['icon3']) {!! $storedColumns['icon3'] !!} @endisset "></i></span>
                            <div class="text justify-content">
                                <h3>@isset($storedColumns['main_heading3']) {!! $storedColumns['main_heading3'] !!} @endisset</h3>
                                <p>@isset($storedColumns['short_desc3']) {!! $storedColumns['short_desc3'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".25s">
                        <div class="box-icon">
                            <span class="icon wow fadeIn" data-wow-delay=".75s"><i class="id-color @isset($storedColumns['icon4']) {!! $storedColumns['icon4'] !!} @endisset "></i></span>
                            <div class="text justify-content">
                                <h3>@isset($storedColumns['main_heading4']) {!! $storedColumns['main_heading4'] !!} @endisset</h3>
                                <p>@isset($storedColumns['short_desc4']) {!! $storedColumns['short_desc4'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="box-icon">
                            <span class="icon wow fadeIn" data-wow-delay="1s"><i class="id-color @isset($storedColumns['icon5']) {!! $storedColumns['icon5'] !!} @endisset "></i></span>
                            <div class="text justify-content">
                                <h3>@isset($storedColumns['main_heading5']) {!! $storedColumns['main_heading5'] !!} @endisset</h3>
                                <p>@isset($storedColumns['short_desc5']) {!! $storedColumns['short_desc5'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".75s">
                        <div class="box-icon">
                            <span class="icon wow fadeIn" data-wow-delay="1.25s"><i class="id-color @isset($storedColumns['icon6']) {!! $storedColumns['icon6'] !!} @endisset "></i></span>
                            <div class="text justify-content">
                                <h3>@isset($storedColumns['main_heading6']) {!! $storedColumns['main_heading6'] !!} @endisset</h3>
                                <p>@isset($storedColumns['short_desc6']) {!! $storedColumns['short_desc6'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="1.25s">
                        <div class="box-icon">
                            <span class="icon wow fadeIn" data-wow-delay="1.5s"><i class="id-color @isset($storedColumns['icon7']) {!! $storedColumns['icon7'] !!} @endisset "></i></span>
                            <div class="text justify-content">
                                <h3>@isset($storedColumns['main_heading7']) {!! $storedColumns['main_heading7'] !!} @endisset</h3>
                                <p>@isset($storedColumns['short_desc7']) {!! $storedColumns['short_desc7'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="1s">
                        <div class="box-icon">
                            <span class="icon wow fadeIn" data-wow-delay="1.75s"><i class="id-color @isset($storedColumns['icon8']) {!! $storedColumns['icon8'] !!} @endisset "></i></span>
                            <div class="text justify-content">
                                <h3>@isset($storedColumns['main_heading8']) {!! $storedColumns['main_heading8'] !!} @endisset</h3>
                                <p>@isset($storedColumns['short_desc8']) {!! $storedColumns['short_desc8'] !!} @endisset</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- section close -->


<!-- section begin -->
<section id="section-typing" aria-label="section-typing" class="padding40 bg-color text-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="typing-wrap">
                    We do
                    <div class="typed-strings">
                        <p>Residential Design</p>
                        <p>Office Design</p>
                        <p>Hospital Design</p>
                        <p>Commercial Design</p>
                    </div>
                    <span class="typed"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->

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
                    <img class="lazy" src="{{asset("uploads/works/$work->image")}}" alt="" />
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
<section id="section-custom-2" class="lazy">
    <div class="container">
        <div class="row">
            <ul id="blog-carousel" class="owl-carousel owl-theme blog-list blog-snippet wow fadeInUp">
                @foreach ($blogs as $blog)
                    <li class="col-md-12 item">
                        <div class="post-content">
                            <div class="post-image">
                                <img class="lazy" src="{{asset('uploads/post/'.$blog->featured_image)}}" alt="" />
                            </div>


                            <div class="date-box">
                                <div class="day">{{ $blog->created_at->format('d') }}</div>
                                <div class="month">{{ $blog->created_at->format('M') }}</div>
                            </div>

                            <div class="post-text justify-content">
                                <h3><a href="{{route("single-blog",$blog->slug)}}">{{$blog->title}} </a></h3>
                                <p>{{substr(stripslashes(strip_tags($blog->content)), 0, 500)}} ...</p>
                            </div>

                            <a href="{{route("single-blog",$blog->slug)}}" class="btn-more">Read More</a>
                        </div>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
</section>
<!-- section close -->
<section id="section-testimonial" class="text-light lazy">
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
{{-- <section>
    <div class="container">
        <h3>Products</h3>
        <div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide" style="margin-top: 50px;">
            @php $products = \App\Product::all()->take(4); @endphp
            <!-- gallery item -->
                @foreach($products as $prod)
                    <div class="item">
                        <div class="picframe">
                            <a  href="{{route("product",$prod->slug)}}">
                        <span class="overlay-v">
                            <span class="pf_text">
                                <span class="project-name">{{$prod->title}}</span>
                            </span>
                        </span>
                            </a>
                            @php $img = $prod->img; @endphp
                            <img src="{{asset("uploads/service/$img->image")}}" alt="" />
                        </div>

                    </div>
                @endforeach
            <!-- close gallery item -->


            <!-- close gallery item -->

        </div>
    </div>
</section> --}}

<section aria-label="section" style="margin-top: -90px">
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
        <div class="row mt-20" >
            <div class="col-md-12 text-center" style="margin-top: 30px;">
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