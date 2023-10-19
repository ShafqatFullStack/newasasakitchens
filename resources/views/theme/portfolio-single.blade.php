@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp
@section("meta")
    <title>{{$work->meta_title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$work->meta_description}}">
    <meta name="keywords" content="{{$work->meta_keyword}}">
    <script src="{{asset("slider/js/jssor.slider-28.0.0.min.js")}}" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
                {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
                {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InQuint,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
                {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
                {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
                {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
                {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
                {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
                {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];

            var jssor_1_options = {
                $AutoPlay: 0,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $Rows: 2,
                    $SpacingX: 14,
                    $SpacingY: 12,
                    $Orientation: 2,
                    $Align: 156
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1200;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
@endsection
@section("scripts")
    <script src="{{asset("theme/js/jquery.event.move.js")}}"></script>
    <script src="{{asset("theme/js/jquery.twentytwenty.js")}}"></script>
    <script>
        $(window).on("load", function(){
            $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
            $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
        });
    </script>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
@endsection
@section("content")

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$work->title}}</h1>
                    <ul class="crumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Project Detail</a></li>
                        <li class="sep">/</li>
                        <li>Project Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
<div style="background-color: #18191b">
    <div  id="jssor_1" style="
    border: 5px solid #fbfbfb;position:relative;margin:0 auto;top:25px;left:0px;width:1200px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset("slider/")}}img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
            @foreach($work->images as $image)
            <div>
                <img data-u="image" src="{{asset('uploads/work/'.$image->image)}}" />
                <img data-u="thumb" src="{{asset('uploads/work/'.$image->image)}}" />
            </div>
            @endforeach
                @if($work->video_url)
                    <div >
                        <iframe data-u="image" width="100%" height="300"
                                src="{{$work->video_url}}">
                        </iframe>
                        <iframe data-u="thumb" width="100%" height="300"
                                src="{{$work->video_url}}">
                        </iframe>
                    </div>

                @endif

                @foreach($work->videos as $url)
                    <div >
                        <iframe data-u="image" width="100%" height="300"
                                src="{{$url->url}}">
                        </iframe>
                        <iframe data-u="thumb" width="100%" height="300"
                                src="{{$url->url}}">
                        </iframe>
                    </div>

                @endforeach
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    </div>
    <div id="content" class="no-bottom no-top">

        <div class="container">

            <div class="row">

                <div class="col-md-12 " style="margin-bottom: 50px;margin-top: 30px">

{{--                    <iframe width="100%" height="300"--}}
{{--                            src="https://www.youtube.com/embed/B0dJZ3uKZUU">--}}
{{--                    </iframe>--}}
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>Project Detail</h3>
                            {!! $work->description !!}

                           </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <h3>Project Facts</h3>

                            {!! $work->features !!}

                        </div>

                    </div>
                </div>


            </div>

        </div>
       
        <!-- section begin -->
        <section id="section-welcome-14" class="no-top no-bottom sm-mt0">

            <div class="container-fluid">
                @php $sn = 0 @endphp
                @foreach($work->befores as $before)
                    @php $sn++; @endphp
                @if($sn % 2 == 0)
                <div class="row align-items-center no-gutters wow fadeInUp" data-bgcolor="rgba(20,20,20,.9)">

                    <div class="col-md-6 text-middle">
                        <div class="padding50">
                            {!! $before->description !!}
                        </div>
                    </div>

                    <div class="col-md-6 text-middle">
                        <div class="twentytwenty-container">
                            <img src="{{asset("uploads/works/before/$before->before")}}" alt="" class="img-responsive" />
                            <img src="{{asset("uploads/works/before/$before->after")}}" alt="" class="img-responsive" />
                        </div>
                    </div>

                </div>
                    @else
                    <div class="row align-items-center no-gutters wow fadeInUp" data-bgcolor="rgba(20,20,20,.9)">

                        <div class="col-md-6 text-middle">
                            <div class="twentytwenty-container">
                                <img src="{{asset("uploads/works/before/$before->before")}}" alt="" class="img-responsive" />
                                <img src="{{asset("uploads/works/before/$before->after")}}" alt="" class="img-responsive" />
                            </div>
                        </div>

                        <div class="col-md-6 text-middle">
                            <div class="padding50">
                                {!! $before->description !!}
                            </div>
                        </div>

                    </div>
                    @endif
                @endforeach




{{--                <div class="row align-items-center no-gutters wow fadeInUp" data-bgcolor="rgba(20,20,20,.9)">--}}

{{--                    <div class="col-md-6 text-middle">--}}
{{--                        <div class="padding50">--}}
{{--                            <h3><span class="id-color">Restaurant Re-design</span></h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>--}}
{{--                            <a href="#" class="btn-line">View Details</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-6 text-middle">--}}
{{--                        <div class="twentytwenty-container">--}}
{{--                            <img src="{{asset("theme/images/before-after/3b.jpg")}}" alt="" class="img-responsive" />--}}
{{--                            <img src="{{asset("theme/images/before-after/3a.jpg")}}" alt="" class="img-responsive" />--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

            </div>


        </section>

    </div>

    <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
        <a href="{{route("contact")}}" class="btn btn-line black btn-big">Get Quotation</a>
    </section>
@endsection
