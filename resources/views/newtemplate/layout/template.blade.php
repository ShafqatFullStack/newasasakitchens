<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    @php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
    <link rel="icon" type="image/x-icon"
        href="@isset($setting['favicon'])
        {{ asset('uploads/' . $setting['favicon']) }}@endisset"
        />



    @yield('meta')
    @yield('meta2')






    <style>
        /* Stops the FOUC */
        html {
            visibility: hidden;
            opacity: 0;
        }

        .css-1rvpoms {
            width: 6.25rem;
            height: 1.5rem;
        }

        .row.content {
            margin: 30px 10px;
        }
    </style>
    <style>
        p {
            font-size: 16px;
        }

        .elementor-top-section {
            background: green
        }

        .css-2uxf1f,
        .css-1bfdvbu {
            color: black;
        }

        .css-17vfrxb {
            width: 100% !important;
        }

        .css-1075dn3 {
            display: none;
        }

        .css-1jzq1qp {
            padding-right: 15px;
        }

        ul li a {
            font-size: 14px;
        }


        @media screen and (min-width: 1200px) {
            .pcl-nested-list-nav__nav-list-item {

                // width: 50% !important;
                .footerh2 {
                    font-size: 18px
                }

                .testimal {
                    font-size: 50px !important;
                    margin-top: 12px;
                }

                .testimalh {
                    font-size: 34px !important;
                }
            }

            #about-sectiont .subheading {

                margin-left: 45%;
            }

            .textwidth {
                width: 70%;
            }

            .header-main {
                font-size: 30px !important
            }

            .subhead {
                font-size: 20px !important;
                line-height: 2.5 !important
            }

            .besttrust {
                line-height: 1.6em;
                text-transform: inherit !important;
                font-size: 22px !important;
                text-align: center;
                padding-left: 1%;
                font-family: Helvetica;
                font-weight: 500 !important;
            }
        }

        .testimalh {
            font-size: 34px !important
        }

        @media screen and (max-width: 700px) {

            .css-183zfck {
                display: none !important;
            }

            .header-main {
                font-size: 36px !important
            }

            .footerh2 {
                font-size: 15px !important
            }

            .testimal {
                font-size: 22px !important;
                text-align: center;
                margin-top: 12px
            }

            .subheading {
                font-size: 30px !important
            }

        }

        .besttrustp {
            color: white
        }

        @media screen and (max-width: 650px) {
            .radius {
                font-weight: bold
            }

            .besttrust {
                line-height: 1.6em;
                text-transform: inherit !important;
                font-size: 14px !important;
                text-align: center;
                padding-left: 1%;
                font-family: Helvetica;
                font-weight: 500 !important;
            }

            .besttrustp {
                font-size: 12px !important;
            }

            .bg-gray-900 {
                background-color: #2c2c2c;
                margin-top: 0px;
            }

            .bg-gray-900 {
                background-color: #2c2c2c;
                margin-top: 0px;

            }

            .pcl-single-nav-item__nav-btn {
                color: black !important;
            }

            #about-sectiont .subheading {

                margin-left: 30%;
            }

            .header-main {
                font-size: 22px !important
            }

            .textwidth {
                width: 100%;
            }

            h2.wow {
                font-size: 30px
            }

            .subhead {
                font-size: 10px !important
            }
        }

        .ftco-footer-social li {
            display: inline;
            list-style-type: none;

            float: left;
        }

        .headerfull {
            position: fixed !important;
            top: 0;
            z-index: 12;

        }

        .center-section {
            display: block;
            margin-left: auto;
            margin-right: auto;

        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MZSGDQ6SX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0MZSGDQ6SX');
    </script>
    <link rel="stylesheet" href="{{ asset('megamenu/all.css') }}">
    <!--Main Menu File-->
    <link id="effect" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('megamenu/webslidemenu/dropdown-effects/fade-down.css') }}" />

    <link rel="stylesheet" type="text/css" media="all"
        href="{{ asset('megamenu/webslidemenu/webslidemenu.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('ecommerce/chat.css') }}" />
    <!-- Begin Inspectlet Asynchronous Code -->
    <script type="text/javascript">
        (function() {
            window.__insp = window.__insp || [];
            __insp.push(['wid', 410824634]);
            var ldinsp = function() {
                if (typeof window.__inspld != "undefined") return;
                window.__inspld = 1;
                var insp = document.createElement('script');
                insp.type = 'text/javascript';
                insp.async = true;
                insp.id = "inspsync";
                insp.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://cdn.inspectlet.com/inspectlet.js?wid=410824634&r=' + Math.floor(new Date().getTime() /
                        3600000);
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(insp, x);
            };
            setTimeout(ldinsp, 0);
        })();
    </script>
    <!-- End Inspectlet Asynchronous Code -->
    <script>
        // const queryString = window.location.pathname;
        // let result = queryString.indexOf("index.php");
        // if(result==1){
        // console.log(result);
        // window.location.replace("https://www.asasaconstruction.com/our-services");
        // }
    </script>
    <style>
        .chaticon {
            z-index: 2121;
            position: fixed;
            top: 80%;
        }

        .bootdey {
            display: none;
            position: fixed;
            z-index: 2121;
            top: 25%;


        }

        @media screen and (min-width: 1200px) {
            .bootdey {
                left: 70%;
                width: 25%
            }

            .chaticon {

                left: 93%;

            }
        }

        @media screen and (min-width: 700px) {
            .chaticon {

                left: 95%;
            }
        }

        .blogbtn {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @media screen and (max-width: 700px) {
            .chaticon {
                left: 83%
            }

            .ftco-intro h2 {
                color: #f5b315;
            }

            .ftco-intro p {
                font-size: 14px !important;
            }
        }
    </style>

</head>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#F96D00" />
    </svg></div>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCX6R66" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Mobile Header -->
    <div class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        <span class="smllogo"> <a href="{{ route('home') }}"><img src="{{ asset('uploads/1859343406logo.svg') }}"
                    width="80" alt="" /></a></span>
        <div class="wssearch clearfix">
            <i class="wsopensearch fas fa-search"></i>
            <i class="wsclosesearch fas fa-times"></i>
            <div class="wssearchform clearfix">

            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="headerfull">
        <div class="wsmain clearfix">
            <div class="smllogo" style="margin:8px 0 0 0"><a href="/"><img
                        src="{{ asset('uploads/1859343406logo.svg') }}" style="width:160%;margin-top:4px;" /></a></div>
            <nav class="wsmenu clearfix">
                <ul class="wsmenu-list">
                    <li aria-haspopup="true"><a href="{{ route('home') }}" class="navtext"> <span>Home</span></a></li>
                    <li aria-haspopup="true"><a href="#" class="navtext"> <span>Services</span></a>
                        <div class="wsshoptabing wtsdepartmentmenu clearfix">
                            <div class="wsshopwp clearfix" style="height: 280px;">
                                <ul class="wstabitem clearfix">

                                    <li class="wsshoplink-active"><a
                                            href="{{ route('main-services') }}"class="sub-menu"> Services</a>
                                        <div class="wstitemright clearfix">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12 clearfix">
                                                        <ul class="wstliststy02 clearfix">
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('painted') }}"> Painted Kitchen </a>
                                                            </li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('wooden') }}">Wood Kitchen</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('thermofoil') }}">Thermofoil - PVC
                                                                    Kitchen</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('countertops') }}">Kitchen
                                                                    Countertops</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('backsplashes') }}">Kitchen
                                                                    Backsplashes</a></li>


                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 clearfix">
                                                        <ul class="wstliststy02 clearfix">
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('cabinet') }}">Kitchen Cabinets &
                                                                    Doors </a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('condo') }}">Condo Kitchen </a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('style') }}">Kitchen Style</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('millworks') }}">Custom Millwork</a>
                                                            </li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('custom-cabinate') }}">Custom
                                                                    Kitchen Cabinets</a></li>

                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-4 col-md-12 clearfix">
                                                        <ul class="wstliststy02 clearfix">
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('island') }}">Kitchen Islands &
                                                                    Carts</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('modular') }}">Modular Kitchens
                                                                </a></li>

                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('storage') }}">Kitchen Storage
                                                                    Pantry</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('mdf') }}">MDF Kitchens </a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </li>
                    <li aria-haspopup="true"><a href="{{ route('projects') }}" class="navtext">
                            <span>Projects</span></a></li>
                    <li aria-haspopup="true"><a href="#" class="navtext"> <span>Products</span></a>
                        <div class="wsshoptabing wtsdepartmentmenu clearfix">
                            <div class="wsshopwp clearfix">
                                <ul class="wstabitem clearfix">

                                    <li class="wsshoplink-active"><a href="{{ route('products') }}"
                                            class="sub-menu"> Products</a>
                                        <div class="wstitemright clearfix">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12 clearfix">
                                                        <ul class="wstliststy02 clearfix">
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('product.countertops') }}"> Kitchen
                                                                    Countertops</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('product.islands') }}">Kitchen
                                                                    Islands</a></li>



                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 clearfix">
                                                        <ul class="wstliststy02 clearfix">

                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('product.faucets-sink') }}">Kitchen
                                                                    Faucets & Sinks</a></li>
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('product.storage') }}">Wall Storage
                                                                </a></li>

                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-4 col-md-12 clearfix">
                                                        <ul class="wstliststy02 clearfix">
                                                            <li class="wstheading clearfix"><a
                                                                    href="{{ route('product.lighting') }}">Kitchen
                                                                    Lighting</a></li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </li>

                    <li aria-haspopup="true"><a href="{{ route('assesment') }}" class="navtext">
                            <span>Assessments</span></a></li>
                    <li aria-haspopup="true"><a href="{{ route('blogs') }}" class="navtext"> <span>Blogs</span></a>
                    </li>
                    <li aria-haspopup="true"><a href="{{ route('about-us') }}" class="navtext"> <span>About
                                us</span></a></li>
                    <li aria-haspopup="true"><a href="{{ route('contact.kitchen') }}" class="navtext"> <span>Contact
                                us</span></a></li>
                    <li aria-haspopup="true"><a href="{{ route('career') }}" class="navtext"> <span>Career
                            </span></a></li>





                </ul>
            </nav>
        </div>
    </div>










</body>
<style>
    html {
        visibility: visible;
        opacity: 1;
    }

    p {
        margin-bottom: 5px;
        font-size: 17px !important;
        font-family: Helvetica;
        font-weight: 500;
        line-height: 1.6em
    }

    .elementor-column-gap-no {
        padding: 0px !important;
    }

    .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
        padding: 0 0 0 0 !important;
    }

    .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
        padding: 0px !important;
    }

    .elementor-widget-wrap>.elementor-element {
        padding: 0 10px 0 0
    }

    .aboutdown {
        background: black;
        padding: 12px
    }

    .services-2 {
        padding: 12px
    }

    .services-2 p {
        color: #fff
    }

    .aboutdown p {
        color: #fff
    }
</style>

</html>


@yield('meta3')
@yield('main-section')










<section class="ftco-intro" style="padding:0px">
    <div class="container-fluid" style="padding:0px">
        <div class="row justify-content-center">
            <div class="col-md-12 text-centerr">
                <div class="img row"
                    style="background-image:url({{ asset('newtemplate/asasa-kitchen/footer.jpg') }})">

                    <div class="overlay"></div>
                    <div class="col-md-12">


                        <h2 class="besttrust">WE ARE THE MOST TRUSTED AND EXPERIENCED KITCHEN RENOVATION COMPANY IN
                            TORONTO. </h2>
                        <p class="besttrustp" style="text-align:center;color:white">GET YOUR KITCHEN MODIFIED BY THE
                            BEST KITCHEN EXPERTS.</p>
                    </div>
                    <br>
                    <div class="col-md-12" style="display:flex;flex-direction:column;align-items:center">
                        <a href="{{ route('contact.kitchen') }}" style="margin:0  auto 1% auto"
                            class="radius button button-primary button-shadow wow fadeInRight">Contact Us</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="review-section ftco-section ftco-no-pt ftco-no-pb testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row ftco-animatee justify-content-center">
            <div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
                <div class="heading-section heading-section-white">
                    <span class="subheading testimalh" style="color:#000;">Read Testimonials</span>
                    <h2 class="mb-4 testimal" style="">We Always Love To Hear From Our Customers</h2>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
                <div class="carousel-testimony owl-carousel ftco-owl">

                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img"
                                style="background-image: url({{ asset('newtemplate/asasa-kitchen/Review/4.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="name mb-4">ASASA kitchen is invested in our success, which makes us want to
                                    partner even more. I would gladly commend them and refer them to others. We
                                    appreciate their cutting-edge technology, dependability, and work quality. It comes
                                    highly recommended.</p>
                                <p class="name"> Jack warner</p>
                                <span class="position">Toronto</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img"
                                style="background-image:url({{ asset('newtemplate/asasa-kitchen/Review/5.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="name mb-4">I wouldn't have such a good working relationship with a different
                                    contractor. Very impressed with the professionalism that they have shown while
                                    working on my project. Definitely come back in the future. Highly recommended</< /p>
                                <p class="name">Lucas William</p>
                                <span class="position">Oakville</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img"
                                style="background-image: url({{ asset('newtemplate/asasa-kitchen/Review/2.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="name mb-4">ASASA Kitchen is one of the most professional general contractors
                                    we've ever worked with. The entire team worked well together to achieve a
                                    high-quality product on time and on budget. We want to collaborate with ASASA
                                    kitchen again in the future!</p>
                                <p class="name"> Mason James</p>
                                <span class="position">Mississauga</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer class="ftco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                    <p>ASASA Kitchen got the solutions of all your kitchen needs.</p>

                </div>
            </div>





            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Services</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-md-5">
                            <li><a href="{{ route('painted') }}"><span
                                        class="fa fa-chevron-right mr-2"></span>Painted Kitchen
                                </a></li>
                            <li><a href="{{ route('wooden') }}"><span class="fa fa-chevron-right mr-2"></span>Wood
                                    Kitchen
                                </a></li>
                            <li><a href="{{ route('thermofoil') }}"><span
                                        class="fa fa-chevron-right mr-2"></span>Thermofoil - PVC kitchen
                                </a></li>
                            <li><a href="{{ route('countertops') }}"><span
                                        class="fa fa-chevron-right mr-2"></span>Kitchen countertops
                                </a></li>
                            <li><a href="{{ route('backsplashes') }}"><span
                                        class="fa fa-chevron-right mr-2"></span>Kitchen Backsplashes
                                </a></li>
                            <li><a href="{{ route('main-services') }}"><span
                                        class="fa fa-chevron-right mr-2"></span>View All
                                </a></li>
                        </ul>
                        <!--
<ul class="list-unstyled ml-md-5">
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Kitchen cabinets & doors</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Condo Kitchen</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Kitchen Style</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Kitchen Style</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>kitchen storage Pantry</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>MDF Kitchens</a></li>
</ul>
-->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Products</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('product.countertops') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Kitchen Countertops
                            </a></li>
                        <li><a href="{{ route('product.faucets-sink') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Kitchen faucets & sinks
                            </a></li>
                        <li><a href="{{ route('product.lighting') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Kitchen lighting
                            </a></li>
                        <li><a href="{{ route('product.islands') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Kitchen islands
                            </a></li>
                        <li><a href="{{ route('product.storage') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Wall storage
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="fa fa-map-marker mr-3"></span><span class="text">ASASA KITCHENS
                                    401, Highway North York</span></li>
                            <li><span class="fa fa-phone mr-3"></span><span class="text">+1 (647) (956)
                                    (1116)</span></li>
                            <li><span class="fa fa-paper-plane mr-3"></span><span class="text"><span
                                        class="__cf_email__"
                                        data-cfemail="4920272f260930263c3b2d2624282027672a2624">Contact@asasakitchens.com</span></span>
                            </li>
                        </ul>
                        <ul class="ftco-footer-social list-unstyled mt-4">
                            <li><a href="@isset($setting['twitter']){{ $setting['twitter'] }}@endisset"><span
                                        class="fab fa-twitter"></span></a></li>
                            <li><a href="@isset($setting['facebook']){{ $setting['facebook'] }}@endisset"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a href="@isset($setting['instagram']){{ $setting['instagram'] }}@endisset"><span
                                        class="fab fa-instagram"></span></a></li>
                            <li><a href="@isset($setting['pinterest']){{ $setting['pinterest'] }}@endisset"><span
                                        class="fab fa-pinterest fa-lg"></span></a></li>
                            <li><a href="@isset($setting['linkedin']){{ $setting['linkedin'] }}@endisset"><span
                                        class="fab fa-linkedin fa-lg"></span></a></li>
                            <li><a href="@isset($setting['youtube']){{ $setting['youtube'] }}@endisset"><span
                                        class="fab fa-youtube fa-lg"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-7 aside-stretch py-3" style="color:white">

                    Copyrights © 2022 <a href="{{ route('home') }}" style="color:white">ASASA kitchens</a> -
                    Developed by <a href="https://www.netmatico.com/" style="color:white">NetMaticO Digital marketing
                        agency</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <form action="{{ Route('career-request') }}" enctype="multipart/form-data" method="post"
                    class="appointment-form ftco-animate">
                    @csrf
                    <h3>Apply Job</h3>
                    <div class="">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" name="Phone">
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                    <select name="positions" id="" class="form-control">
                                        <option value="">Select Your Services</option>
                                        <option value="">Architecture</option>
                                        <option value="">Renovation</option>
                                        <option value="">Construction</option>
                                        <option value="">Interior &amp; Exterior</option>
                                        <option value="">Chemical Research</option>
                                        <option value="">Petroleum &amp; Gas</option>
                                        <option value="">Other Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <textarea name="msg" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="cv">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Apply" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@yield('script')



<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-4a5d05d9-91ce-41c1-953c-bb41b900b70f" data-elfsight-app-lazy></div>
</body>



</html>

@yield('script2')

<script type="text/javascript" src="{{ asset('megamenu/webslidemenu/webslidemenu.js') }}"></script>
<script>
    $('#chatbox').click(function() {
        $(".bootdey").css("display", "block");
    })
    $('.close').click(function() {

        $(".bootdey").css("display", "none");
    })
</script>
