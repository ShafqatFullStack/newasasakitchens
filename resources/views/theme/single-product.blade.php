@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
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
                    <h1>Single Product</h1>
                    <ul class="crumb">
					 <a href="{{route("contact")}}" class="btn-custom btn-fullwidth " style="margin-bottom: 15px;color:black">FREE CONSULTATION</a>

                        <li><a href="#">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Product</a></li>
                        <li class="sep">/</li>
                        <li>Single Product</li>
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

                <div class="col-md-12" style="margin-bottom: 30px">
                    <iframe width="100%" height="300"
                            src="https://www.youtube.com/embed/B0dJZ3uKZUU">
                    </iframe>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>Single Product</h3>

                            Redoing a kitchen is a big job. Countertops can be replaced, but as this takes effort and money, so most wanting to make changes in the kitchen find it beneficial to carefully consider materials and styles. Getting feedback and expert advice is recommended in order to find the perfect fit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aliquam amet aperiam assumenda deserunt doloribus enim expedita labore laboriosam maxime nesciunt nihil placeat praesentium quae, quisquam repellendus reprehenderit voluptatibus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dignissimos distinctio doloribus et excepturi expedita natus. Ab aliquid, cum, eius esse ipsam, itaque placeat porro quam quisquam tempore velit voluptas.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus distinctio est libero odio reprehenderit? Accusantium, architecto commodi doloribus in laboriosam libero mollitia numquam quam quia quidem quis quo recusandae tenetur.
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>Featuress</h3>

                            <ul>
                                <li>Feaure</li>
                                <li>Feaure</li>
                                <li>Feaure</li>
                                <li>Feaure</li>
                            </ul>

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
                <a class="simple-ajax-popup-align-top" href="project-details-1.html">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Quartz</span>
                                </span>
                            </span>
                </a>
                <img src="{{asset("theme/images/portfolio/pf%20(1).jpg")}}" alt="" />
            </div>

        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-2.html">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Marble</span>
                                </span>
                            </span>
                </a>

                <img src="{{asset("theme/images/portfolio/pf%20(2).jpg")}}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Granite</span>
                                </span>
                            </span>
                </a>

                <img src="{{asset("theme/images/portfolio/pf%20(3).jpg")}}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->


        <!-- close gallery item -->

    </div>
    </div>
    <div class="container">
        <div class="row m-t-20" >
            <div class="col-md-12">
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <h3>Pros And Cons Of Product</h3>
                        <table class="table table-bordered " style="width: 100%;margin: 30px 0px">
                            <thead>
                                <tr>
                                    <th class="id-color">Pros</th>
                                    <th class="id-color">Cons</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                </tr>
                                <tr>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                </tr>
                                <tr>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                </tr>
                                <tr>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                </tr>
                                <tr>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                    <td><p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>


    </div>



    </div>
        <div class="container">
            <h3>Related Products</h3>
            <div class="owl-custom-nav">
                <a class="btn-next"></a>
                <a class="btn-prev"></a>
            </div>

            <div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide" style="margin-top: 50px;">

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-1.html">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Quartz</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{asset("theme/images/portfolio/pf%20(1).jpg")}}" alt="" />
                    </div>

                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-2.html">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Marble</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("theme/images/portfolio/pf%20(2).jpg")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Granite</span>
                                </span>
                            </span>
                        </a>

                        <img src="{{asset("theme/images/portfolio/pf%20(3).jpg")}}" alt="" />
                    </div>
                </div>
                <!-- close gallery item -->
                <div class="item">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details-1.html">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name">Quartz</span>
                                </span>
                            </span>
                        </a>
                        <img src="{{asset("theme/images/portfolio/pf%20(1).jpg")}}" alt="" />
                    </div>

                </div>

                <!-- close gallery item -->

            </div>
        </div>
    </div>


    <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
        <a href="{{route("contact")}}" class="btn btn-line black btn-big"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
    </section>
@endsection
