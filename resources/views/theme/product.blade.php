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
                    <h1>{{$product->title}}</h1>
                    <ul class="crumb">
                        <li><a href="#">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Product</a></li>
                        <li class="sep">/</li>
                        <li>{{$product->title}}</li>
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
                            <h3>{{$product->title}}</h3>

                            {!! $product->description !!}
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>Featuress</h3>
                            {!! $product->features !!}

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
        @foreach($product->images as $images)
        <!-- gallery item -->
        <div class="item">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="">
                            <span class="overlay-v">
                                <span class="pf_text">
                                </span>
                            </span>
                </a>
                <img src="{{asset("uploads/service/$images->image")}}" alt="" />
            </div>

        </div>
        @endforeach
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
                                @foreach($product->advantages as $advantage)
                                <tr>
                                    <td><p style="color: white">{{$advantage->point}}</p></td>
                                    <td><p style="color: white">{{$advantage->status}}</p></td>
                                </tr>
                                @endforeach

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
                @php $products = \App\Product::where("category_id",$product->category_id)->get() @endphp
                <!-- gallery item -->
                @foreach($products as $prod)
                    @if($prod->id != $product->id)
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
                    @endif
                @endforeach
                <!-- close gallery item -->



                <!-- close gallery item -->

            </div>
        </div>
    </div>


    <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
        <a href="{{route("contact")}}" class="btn btn-line black btn-big"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
    </section>
@endsection
