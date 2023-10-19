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
                    <h1>Counter Tops</h1>
                    <ul class="crumb">
                        <li><a href="#">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Product</a></li>
                        <li class="sep">/</li>
                        <li>Counter Tops</li>
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
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>MAKING A SELECTION</h3>

                            Redoing a kitchen is a big job. Countertops can be replaced, but as this takes effort and money, so most wanting to make changes in the kitchen find it beneficial to carefully consider materials and styles. Getting feedback and expert advice is recommended in order to find the perfect fit.
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>MAKING A SELECTION</h3>

                            Redoing a kitchen is a big job. Countertops can be replaced, but as this takes effort and money, so most wanting to make changes in the kitchen find it beneficial to carefully consider materials and styles. Getting feedback and expert advice is recommended in order to find the perfect fit.
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{asset("theme/images/services/p1_a.jpg")}}" class="img-responsive" alt="">
                        </div>

                    </div>
                </div>

            </div>
            <div class="row m-t-20" style="margin-top: 50px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>SELECTING A MATERIAL FOR KITCHEN COUNTERTOPS</h3>
                            One type of material that creates a great impression in the kitchen, and that’s known to keep a fantastic appearance for years is natural stone. The most common selections in natural stone for countertops are slate and granite. Soapstone, through not as familiar to most homeowners is also a good choice. Granite is possibly the best option for its attractiveness. As it’s found in several different colours, it’s easy to find one that matches a kitchen’s colour tones. This type of stone is often obtainable in large slabs so seams are not a problem. Granite is usually the highest priced natural stone. Soapstone and slate come in fewer colours than granite, and aren’t quite as strong, but both are dense enough to be resistant to normal wear. Slate in particular has a nonporous quality that makes it naturally almost maintenance free.

                            Solid surfaces such as Avonite and Gibraitar made from acrylics and poly fills are another choice. The higher the quality the more resistant, these will be to stains and scratches. The biggest benefit to manufactured surfaces for countertops are these can be matched exactly by colour and style with other elements of the kitchen.

                            Those who want a traditional or rustic look often select either ceramic tile or wood. The tile must be chosen carefully however, since many types will not be up to the daily tasks common in kitchens. Ceramic is a good choice for secondary work surfaces, but these should always be checked for rating. Those tiles are not rated for either floors or countertops. Wood is not as popular as it once was as this is a porous material and will show wear and tear eventually. Wood counters that are made of very hard wood such as rock maple however, can sustain their appearance for years.

                            Stainless steel is a material that’s become increasing popular in Toronto due to its durability, and style. This material can often blend in with other decorating choices easily. Clean up is simple, and many scratch resistant surfaces such as this can be utilized without concern for diminishing its appearance. As the surface is reflective it can be used in an environment with almost any other colour or style.
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
                        <h3>TYPES OF KITCHEN COUNTERTOPS</h3>
                        In searching for the right décor, many shoppers are surprised by the choices of countertops. From too drab to overly ornate a countertop that doesn’t fit the home’s interior style detracts from the kitchen’s overall appearance. Selecting the right materials, style and colour are important to the home’s overall value. At the same time countertops should also be functional, well designed, and resistance to damage from normal use.</div>

                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">


            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <h3>GRANITE</h3>

                        Redoing a kitchen is a big job. Countertops can be replaced, but as this takes effort and money, so most wanting to make changes in the kitchen find it beneficial to carefully consider materials and styles. Getting feedback and expert advice is recommended in order to find the perfect fit.
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <h3>MARBLE</h3>

                        Redoing a kitchen is a big job. Countertops can be replaced, but as this takes effort and money, so most wanting to make changes in the kitchen find it beneficial to carefully consider materials and styles. Getting feedback and expert advice is recommended in order to find the perfect fit.
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <h3>QUARTZ</h3>

                        Redoing a kitchen is a big job. Countertops can be replaced, but as this takes effort and money, so most wanting to make changes in the kitchen find it beneficial to carefully consider materials and styles. Getting feedback and expert advice is recommended in order to find the perfect fit.
                    </div>

                </div>
            </div>

        </div>

    </div>



    </div>
    <section data-bgcolor="#202124">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeIn" data-wow-delay="0s">
                    <div class="box-number square">
                        <span class="number bg-color wow rotateIn" data-wow-delay=".5s">1</span>
                        <div class="text">
                            <h3><span class="id-color">Interior Expertise</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeIn" data-wow-delay=".25s">
                    <div class="box-number square">
                        <span class="number bg-color wow rotateIn" data-wow-delay=".75s">2</span>
                        <div class="text">
                            <h3><span class="id-color">Awards Winning</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="box-number square">
                        <span class="number bg-color wow rotateIn" data-wow-delay="1s">3</span>
                        <div class="text">
                            <h3><span class="id-color">Affordable Price</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>

                <div class="spacer-single"></div>

                <div class="col-md-4 wow fadeIn" data-wow-delay=".75s">
                    <div class="box-number square">
                        <span class="number bg-color wow rotateIn" data-wow-delay="1.25s">4</span>
                        <div class="text">
                            <h3><span class="id-color">Free Consultation</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeIn" data-wow-delay="1s">
                    <div class="box-number square">
                        <span class="number bg-color wow rotateIn" data-wow-delay="1.5s">5</span>
                        <div class="text">
                            <h3><span class="id-color">Guaranteed Works</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeIn" data-wow-delay="1.25s">
                    <div class="box-number square">
                        <span class="number bg-color wow rotateIn" data-wow-delay="1.75s">6</span>
                        <div class="text">
                            <h3><span class="id-color">24 / 7 Support</span></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
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
