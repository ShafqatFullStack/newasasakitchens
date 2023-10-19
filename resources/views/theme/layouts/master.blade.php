<!DOCTYPE html>
<html lang="en">
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
<head>
    <meta charset="utf-8">
    @yield("meta")
    <meta name="author" content="">


    <!--[if lt IE 9]>
    <script src="{{asset("theme/js/html5shiv.js")}}"></script>
    <![endif]-->
    <link rel="icon" type="image/png" sizes="16x16"
    href="@isset($setting['favicon']){{ asset('uploads/'.$setting['favicon']) }}@endisset">

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{ mix('theme/css/theme.css') }}">
    <!-- custom background -->
    <link rel="stylesheet" href="{{asset("theme/css/bg.css")}}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{asset("theme/css/colors/yellow.css")}}" type="text/css" id="colors">
    <link rel="stylesheet" href="{{asset("theme/css/color.css")}}" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="{{asset("theme/fonts/font-awesome/css/font-awesome.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("theme/fonts/elegant_font/HTML_CSS/style.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("theme/fonts/et-line-font/style.css")}}" type="text/css">
    <style>
        .header-custom:not(.header-mobile) .menu-group {
            background: rgb(29 30 31);
            margin-bottom: -1px;
            height: 60px;
            padding-top: -1;
        }
        .header-custom:not(.header-mobile) {
            height: auto;
            position: fixed;
            width: 100%;
            left: 0;
        }
        ul .title{
            padding: 0px !important;
        }
        @media screen and (min-width: 480px) {
            #subheader{
                padding-top: 140px;
            }
        }
        .justify-content {
            text-align: justify;
            text-justify: inter-word;
        }
        .pf_text{
            padding: 30px;
        }
    </style>
    <!-- Google Tag Manager -->
    <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/20364664.js"></script>
<!-- End of HubSpot Embed Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PXTSL9B');</script>
    <!-- End Google Tag Manager -->
</head>

<body id="homepage">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXTSL9B"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<div id="wrapper">
    <header class="header-custom s2">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3 col-md-12">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="{{route("home")}}">
                            <img class="logo" src="@isset($setting['admin_logo']) {{ asset('uploads/'.$setting['admin_logo']) }}@endisset" alt="">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"></span>
                    <!-- small button close -->
                </div>

                <div class="col-lg-3 offset-md-6 text-right sm-hide">
                    <div class="social-icons">
                        <a href="@isset($setting['facebook']){{ $setting['facebook']}}@endisset"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="@isset($setting['twitter']){{ $setting['twitter']}}@endisset"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="@isset($setting['youtube']){{ $setting['youtube']}}@endisset"><i class="fa fa-youtube fa-lg"></i></a>
                        <a href="@isset($setting['google']){{ $setting['google']}}@endisset"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a href="@isset($setting['instagram']){{ $setting['instagram']}}@endisset"><i class="fa fa-instagram fa-lg"></i></a>
                        <a href="@isset($setting['pinterest']){{ $setting['pinterest']}}@endisset"><i class="fa fa-pinterest fa-lg"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="menu-group">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-12">

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="{{route("home")}}">Home<span></span></a>
                                <li><a href="#">Services</a>
                                    <ul class="mega">
                                        <li>
                                            <div class="container-fluid">
                                                <div class="menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            @php
                                                                $sn = 0;
                                                                $servcs = \App\Service::where("category",1)->select(array('title', 'slug'))->get();
                                                            @endphp
                                                            <ul>
                                                                @foreach($servcs as $servce)
                                                                    @php
                                                                        $sn = $sn+1;
                                                                    @endphp
                                                                    <li @if($sn == 1) class="title" @endif><a href="{{route("single-service",$servce->slug)}}">{{$servce->title}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            @php
                                                                $sn = 0;
                                                                $servcs = \App\Service::where("category",2)->select(array('title', 'slug'))->get();
                                                            @endphp
                                                            <ul>
                                                                @foreach($servcs as $servce)
                                                                    @php
                                                                        $sn = $sn+1;
                                                                    @endphp
                                                                    <li @if($sn == 1) class="title" @endif><a href="{{route("single-service",$servce->slug)}}">{{$servce->title}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>



                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Shop</a>
                                    <ul class="mega">
                                        <li>
                                            <div class="container-fluid">
                                                <div class="menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-12">

                                                            <ul>
                                                                <li class="title" ><a href="{{route("counter-tops")}}">Counter tops</a></li>
                                                                {{--                                                                <li ><a href="{{route("product-category","quartz")}}">Quartz</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Granite</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Marble</a></li>--}}
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-12">
                                                            <ul>
                                                                <li class="title" ><a href="{{route("flooring")}}">Flooring</a></li>
                                                                {{--                                                                <li ><a href="#">Laminate</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Vynle</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Tiles</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Hardwood</a></li>--}}
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-12">

                                                            <ul>
                                                                <li class="title" ><a href="{{route("kitchen-accessories")}}">Kitchen Accessories</a></li>
                                                                {{--                                                                <li ><a href="#">Door Designs</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Pull Bars</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Door knobs</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Hardware</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Back Splash</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Sinks</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Sink Faucets</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Lights</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Floor Tiles</a></li>--}}
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-12">
                                                            <ul>
                                                                <li class="title" ><a href="{{route("bathroom-accessories")}}">Bathroom Accessories</a></li>
                                                                {{--                                                                <li ><a href="#">Vanity</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Sink Faucets</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Shower Faucets</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Shower Glass Door</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Toilet Seats</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Tubs/Freestanding Tubs</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Vanity Lights</a></li>--}}
                                                                {{--                                                                <li ><a href="#">Floor Tiles</a></li>--}}
                                                            </ul>
                                                        </div>



                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route("projects")}}">Projects</a>

                                </li>
                                <li><a href="{{route("blogs")}}">Blog</a>

                                </li>
                                <li><a href="{{route("about-us")}}">About Us<span></span></a>
                                </li>






                                <li><a href="{{route("career")}}">Career</a></li>
                                <li><a href="{{route("contact")}}">Contact</a></li>
                            </ul>
                        </nav>

                        <!-- mainmenu close -->

{{--                        <div class="pop-search sm-hide">--}}
{{--                            <form class="form-default">--}}
{{--                                <input type='text' name='search' placeholder="type and hit enter...">--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                        <div class="pop-search-click sm-hide"></div>--}}
                    </div>



                </div>
            </div>
        </div>


    </header>
    <!-- header begin -->

    <!-- header close -->

    <!-- content begin -->
   @yield("content")

    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="@isset($setting['admin_logo']) {{ asset('uploads/'.$setting['admin_logo']) }}@endisset" class="logo-small" alt=""><br>
                    @isset($setting['footer_info']){{ $setting['footer_info']}}@endisset
                </div>

                <div class="col-md-4">
                    <div class="widget widget_recent_post">
                        <h3 class="id-color">Services</h3>

                        <ul>
                            <li ><a href="{{route("single-service","commercial-renovation-contractors-in-toronto")}}">Commercial Renovation Contractors in Toronto</a></li>
                            <li ><a href="{{route("single-service","office-renovations-contractor-in-toronto")}}">Office Renovations Contractor in Toronto</a></li>
                            <li ><a href="{{route("single-service","school-renovation-services-in-toronto")}}">School Renovation Services in Toronto</a></li>
                            <li ><a href="{{route("single-service","residential-renovation-contractors-in-toronto")}}">Residential Renovation Contractors in Toronto</a></li>
                            <li ><a href="{{route("single-service","kitchen-renovation-contractor-in-toronto")}}">Kitchen Renovation Contractor in Toronto</a></li>
                            <li ><a href="{{route("single-service","bathroom-renovation-contractor-in-toronto")}}">Bathroom Renovation Contractor in Toronto</a></li>
                            <li ><a href="{{route("single-service","basement-renovation-contractor-in-toronto")}}">Basement Renovation Contractor in Toronto</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <h3 class="id-color">Contact Us</h3>

                    <div class="widget widget-address">
                        <address>
                            <span>@isset($setting['address']){{ $setting['address']}}@endisset</span>
                            <span><strong>Phone:</strong>@isset($setting['phone']){{ $setting['phone']}}@endisset</span>
                            <span><strong>Email:</strong><a href="mailto:@isset($setting['email']){{ $setting['email']}}@endisset">@isset($setting['email']){{ $setting['email']}}@endisset</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyright {{date("Y")}} - @isset($setting['copy_right']){!! $setting['copy_right']!!}@endisset
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="@isset($setting['facebook']){{ $setting['facebook']}}@endisset"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="@isset($setting['twitter']){{ $setting['twitter']}}@endisset"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="@isset($setting['youtube']){{ $setting['youtube']}}@endisset"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="@isset($setting['google']){{ $setting['google']}}@endisset"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="@isset($setting['instagram']){{ $setting['instagram']}}@endisset"><i class="fa fa-instagram fa-lg"></i></a>
                            <a href="@isset($setting['pinterest']){{ $setting['pinterest']}}@endisset"><i class="fa fa-pinterest fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="back-to-top"></a>
    </footer>
    <!-- footer close -->
</div>



<!-- Javascript Files
================================================== -->
<script src="{{ mix('theme/js/theme.js') }}"></script>

<script>
    $(function () {
        // jquery typed plugin
        $(".typed").typed({
            stringsElement: $('.typed-strings'),
            typeSpeed: 100,
            backDelay: 1500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function () { null; },
            resetCallback: function () { newTyped(); }
        });
    });
    $(function() {
        $('.lazy').Lazy();
    });
</script>
@yield("scripts")
</body>

</html>
