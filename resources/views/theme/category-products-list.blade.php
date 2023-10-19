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
                    <h1>Quartz</h1>
                    <ul class="crumb">
                        <li><a href="#">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Product</a></li>
                        <li class="sep">/</li>
                        <li>{{$category->name}}</li>
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


                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h2 style="display: block">Supernatural Collection</h2>

                            Redoing a kitchen is a big job. Countertops can be replaced, but as this takes effort and money, so most wanting to make changes in the kitchen find it beneficial to carefully consider materials and styles. Getting feedback and expert advice is recommended in order to find the perfect fit.
                        </div>

                    </div>
                </div>
                @foreach($category->products as $product)
                <div class="col-md-12" style="margin-top: 50px;">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{asset("uploads/post/$product->image")}}" class="img-responsive" alt="">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-md-6">
                                    <a href="{{route("product",$product->slug)}}"><h3>{{$product->title}} <span class="id-color">${{$product->price}}</span></h3></a>

                                </div>
                                <div class="col-md-2" style="text-align: right">
                                    <a href="#"><h4><i class="fa fa-pencil id-color" style="margin-right: 10px"></i> Visualizer</h4></a>
                                </div>
                                <div class="col-md-2" style="text-align: right">
                                    <a href="#"><h4><i class="fa fa-shopping-cart id-color" style="margin-right: 10px"></i> Add to Cart</h4></a>
                                </div>
                                <div class="col-md-2" style="text-align: right">
                                    <a href="#"><h4><i class="fa fa-download id-color" style="margin-right: 10px"></i> Download Broucher</h4></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

{{--                <div class="col-md-12" style="margin-top: 50px;">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">--}}
{{--                            <img src="{{asset("product2.png")}}" class="img-responsive" alt="">--}}
{{--                            <div class="row" style="margin-top: 15px">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <a href="{{route("single-product")}}"><h3>Marble  <span class="id-color">$5114</span></h3></a>--}}

{{--                                </div>--}}
{{--                                <div class="col-md-2" style="text-align: right">--}}
{{--                                    <a href="#"><h4><i class="fa fa-pencil id-color" style="margin-right: 10px"></i> Visualizer</h4></a>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-2" style="text-align: right">--}}
{{--                                    <a href="#"><h4><i class="fa fa-shopping-cart id-color" style="margin-right: 10px"></i> Add to Cart</h4></a>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-2" style="text-align: right">--}}
{{--                                    <a href="#"><h4><i class="fa fa-download id-color" style="margin-right: 10px"></i> Download Broucher</h4></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>

    </div>

    <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
        <a href="{{route("contact")}}" class="btn btn-line black btn-big">Get Quotation</a>
    </section>
@endsection
