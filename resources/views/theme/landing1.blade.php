@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
    $setting =\App\Setting::pluck('value','name')->toArray();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@isset($storedColumns['meta_title']) {!! $storedColumns['meta_title'] !!} @endisset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@isset($storedColumns['meta_description']) {!! $storedColumns['meta_description'] !!} @endisset">
    <meta name="keywords" content="@isset($storedColumns['meta_keyword']) {!! $storedColumns['meta_keyword'] !!} @endisset">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


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
    {{-- <script src="//code.tidio.co/xbznvoahsgttqhwn3rww82255kkav43k.js" async></script> --}}
    <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fdcab49a8a254155ab48b4b/1epqvq73q';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    
    })(window,document,'script','dataLayer','GTM-PXTSL9B');</script>
    
    <!-- End Google Tag Manager -->
</head>

<body id="homepage" class="de_light">
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXTSL9B"

    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">

        <!-- header begin -->
        <header class="autoshow header-light" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="#wrapper">
								{{-- <img class="logo" src="images/logo-border-dark.jpg" alt=""> --}}
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
							<nav>
								<ul id="mainmenu">
									<li><a href="index.html">Home<span></span></a>
										<ul class="mega">
											<li>
												<div class="container-fluid">
													<div class="menu-content">
														<div class="row">
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li><a href="07_index-photography.html">New: Photography</a></li>
																	<li><a href="06_index-architecture.html">New: Architecture</a></li>	
																	<li><a href="05_index-consulting.html">Consulting</a></li>	
																	<li><a href="03_index-apartment.html">Apartment</a></li>	
																	<li><a href="04_index-kitchen.html">Kitchen</a></li>
																	<li><a href="02_index-webstudio.html">Web Studio</a></li>
																	<li><a href="index.html">Original</a></li>
																	<li><a href="index-modern.html">Modern</a></li>
																	<li><a href="index-studio.html">Studio</a></li>
																	<li><a href="index-coworking.html">Coworking</a></li>
																	<li><a href="index-landing-product.html">Product Landing</a></li>
																	<li><a href="index-before-after.html">Before After</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li><a href="index-arts.html">Arts</a></li>
																	<li><a href="index-light.html">Original Light</a></li>
																	<li><a href="index-elegant.html">Elegant</a></li>
																	<li><a href="index-header-bottom.html">Bottom Navigation</a></li>
																	<li><a href="index-header-bottom-light.html">Bottom Navigation Light</a></li>
																	<li><a href="index-sidebar.html">Side Navigation</a></li>
																	<li><a href="sidebar-light-index.html">Side Navigation Light</a></li>
																	<li><a href="index-landing-page.html">Onepage Landing</a></li>
																	<li><a href="index-landing-page-light.html">Onepage Landing Light</a></li>
																	<li><a href="index-minimal.html">Minimal</a></li>			
																	<li><a href="index-corporate.html">Corporate</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>																	
																	<li><a href="01_index-minisite.html">Minisite</a></li>
																	<li><a href="index-onepage.html">Onepage</a></li>
																	<li><a href="index-onepage-light.html">Onepage Light</a></li>
																	<li><a href="index-masonry-med-4-cols.html">Masonry</a></li>
																	<li><a href="index-masonry-light-med-4-cols.html">Masonry Light</a></li>
																	<li><a href="index-profession.html">Profession</a></li>
																	<li><a href="index-profession-light.html">Profession Light</a></li>
																	<li><a href="index-portfolio-minimal.html">Portfolio Minimal</a></li>
																	<li><a href="index-snowy.html">Snowy</a></li>
																	<li><a href="index-coming-soon.html">Coming Soon Page</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li><a href="index-rtl.html">Home (RTL)</a></li>
																	<li><a href="index-hero-slider.html">Hero Slider</a></li>
																	<li><a href="index-hero-particle.html">Hero Particle</a></li>
																	<li><a href="index-hero-parallax.html">Hero Parallax</a></li>
																	<li><a href="index-hero-video.html">Hero Video Background</a></li>
																	<li><a href="index-hero-youtube.html">Hero Youtube Background</a></li>
																	<li><a href="index-hero-looping-image.html">Hero Looping Image</a></li>
																</ul>
															</div>
															
															
														</div>
													</div>
												</div>
											</li>                                        
										</ul>
									</li>
									<li><a href="#">Pages</a>
										<ul class="mega">
											<li>
												<div class="container-fluid">
													<div class="menu-content">
														<div class="row">
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Pages</li>
																	<li><a href="pricing-table-3-cols.html">Pricing 3 Cols</a></li>
																	<li><a href="pricing-table-4-cols.html">Pricing 4 Cols</a></li>
																	<li><a href="faq.html">FAQ</a></li>
																	<li><a href="about.html">About Us</a></li>
																	<li><a href="about-rtl.html">About Us (RTL)</a></li>
																	<li><a href="pricing-table-3-cols-light.html">Pricing 3 Cols Light</a></li>
																	<li><a href="pricing-table-4-cols-light.html">Pricing 4 Cols Light</a></li>
																	<li><a href="faq-light.html">FAQ Light</a></li>
																	<li><a href="about-light.html">About Us Light</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Headers</li>
																	<li><a href="header-custom-style-1.html">Extended Header 1</a></li>
																	<li><a href="header-custom-style-2.html">Extended Header 2</a></li>
																	<li><a href="header-custom-style-3.html">Extended Header 3</a></li>
																	<li><a href="header-custom-style-1-light.html">Extended Header Light 1</a></li>
																	<li><a href="header-custom-style-2-light.html">Extended Header Light 2</a></li>
																	<li><a href="header-custom-style-3-light.html">Extended Header Light 3</a></li>
																	<li><a href="index.html">Header Default</a></li>
																	<li><a href="index-header-bottom.html">Header Bottom</a></li>
																	<li><a href="index-sidebar.html">Header Side</a></li>
																	<li><a href="index-arts.html">Header Autoshow</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Elements</li>
																	<li><a href="icons-fontawesome.html">768 FontAwesome Icons</a></li>
																	<li><a href="icons-elegant.html">358 Elegant Icons</a></li>
																	<li><a href="icons-etline.html">100 Etline Icons</a></li>
																	<li><a href="accordion.html">Accordion</a></li>
																	<li><a href="alerts.html">Alerts</a></li>
																	<li><a href="before-after.html">Before After</a></li>
																	<li><a href="buttons.html">Buttons</a></li>
																	<li><a href="carousel.html">Carousel</a></li>
																	<li><a href="countdown.html">Countdown</a></li>
																	<li><a href="counters.html">Counters</a></li>
																</ul>
															</div>
															
															<div class="col-lg-3 col-md-12">
																<ul>
																	<li class="title">Elements</li>
																	<li><a href="form-style.html">Form Style</a></li>
																	<li><a href="icon-box.html">Icon Box</a></li>
																	<li><a href="modal.html">Modal</a></li>
																	<li><a href="skill-bar.html">Skill Bar</a></li>
																	<li><a href="steps.html">Steps</a></li>
																	<li><a href="tabs.html">Tabs</a></li>
																	<li><a href="team.html">Team</a></li>
																	<li><a href="timeline.html">Timeline</a></li>
																</ul>
															</div>
															
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</li>                                        
										</ul>
									</li>
									<li><a href="project-wide-4-cols.html">Projects</a>
										<ul>
											<li><a href="project-wide-4-cols.html">Wide Style</a>
												<ul>
													<li><a href="project-wide-2-cols.html">2 Cols Wide</a></li>
													<li><a href="project-wide-3-cols.html">3 Cols Wide</a></li>
													<li><a href="project-wide-4-cols.html">4 Cols Wide</a></li>
												</ul>
											</li>
											<li><a href="project-contained-3-cols.html">Contained Style</a>
												<ul>
													<li><a href="project-contained-2-cols.html">2 Cols Contained</a></li>
													<li><a href="project-contained-3-cols.html">3 Cols Contained</a></li>
													<li><a href="project-contained-4-cols.html">4 Cols Contained</a></li>
												</ul>
											</li>
											<li><a href="project-carousel-3-cols.html">Carousel Style</a>
												<ul>
													<li><a href="project-carousel-2-cols.html">2 Cols Carousel</a></li>
													<li><a href="project-carousel-3-cols.html">3 Cols Carousel</a></li>
													<li><a href="project-carousel-4-cols.html">4 Cols Carousel</a></li>
												</ul>
											</li>
											<li><a href="project-inverted-3-cols.html">Inverted Style</a>
												<ul>
													<li><a href="project-inverted-2-cols.html">2 Cols Inverted</a></li>
													<li><a href="project-inverted-3-cols.html">3 Cols Inverted</a></li>
													<li><a href="project-inverted-4-cols.html">4 Cols Inverted</a></li>
												</ul>
											</li>
											<li><a href="project-contained-3-cols.html">Masonry Gallery</a>
												<ul>
													<li><a href="project-masonry-4-cols.html">3 Cols Masonry</a></li>
													<li><a href="project-masonry-3-cols.html">4 Cols Masonry</a></li>
												</ul>
											</li>
											<li><a href="project-contained-3-cols.html">Simple Gallery</a>
												<ul>
													<li><a href="gallery-2-cols.html">2 Cols</a></li>
													<li><a href="gallery-3-cols.html">3 Cols</a></li>
													<li><a href="gallery-4-cols.html">4 Cols</a></li>
												</ul>
											</li>
											<li><a href="#">Misc</a>
												<ul>
													<li><a href="project-before-after.html">Before After</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="services.html">Services</a>
										<ul>
											<li><a href="service-1.html">Residential Design</a></li>
											<li><a href="service-2.html">Hospitaly Design</a></li>
											<li><a href="service-3.html">Office Design</a></li>
											<li><a href="service-4.html">Commercial Design</a></li>
											<li><a href="services.html">All Services</a></li>
											<li><a href="services-style-2.html">New All Services</a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog</a>
										<ul>
											<li><a href="blog.html">Right Sidebar</a></li>
											<li><a href="blog-light.html">Right Sidebar Light</a></li>										
											<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="blog-left-sidebar-light.html">Left Sidebar Light</a></li>
											<li><a href="blog-single.html">Single</a></li>
											<li><a href="blog-single-light.html">Single Light</a></li>
										</ul>
									</li>
									<li><a href="shop.html">Shop</a>
										<ul>
											<li><a href="shop.html">Shop Dark</a></li>
											<li><a href="shop-light.html">Shop Light</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							
							<!-- mainmenu close -->

                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- parallax section -->
            <section id="section-hero-index-landing-product" class="full-height lazy" data-speed="3" data-type="background">
                <div class="text-center d-lg-block d-md-none d-none">
                    <img class="lazy" src="@isset($setting['admin_logo']) {{ asset('uploads/'.$setting['admin_logo']) }}@endisset" alt="logo" style="    width: 200px;
                    border: 1px solid;
                    padding: 5px;">
                </div>

               <!--  <div class="center-y text-center">
					<span class="teaser">Made with finest materials.</span>
					<div class="spacer-half"></div>
                    <h1 class="title">White<span><strong>Luxury</strong></span> Chair</h1>
                    <div class="small-border"></div>                    
                    <div class="spacer-double"></div>
                </div> -->
                <div class="container">
                	<div class="row">	
                		<div class="col-md-7" style="text-align: left !important;margin-top: 80px">	
                			<h2>GET YOUR KITCHENS, BATHROOMS AND BASEMENTS RENOVATED PROFESSIONALLY IN TORONTO</h2>
                			<h4>AFFORDABLE & LOW-COST RENOVATION SERVICES IN TORONTO </h4>
                		</div>	
                		<div class="col-md-5">	
                        <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp" style="margin-top: 30px;">
                            <h2>Ask Us Here</h2>
                        </div>

                        <div class="col-md-12 wow fadeInLeft">
                            @if(Session::has('success_message'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ Session::get('success_message') }}
                                </div>
                            @endif

                            <form name="contactForm" id='contact_form' method="post" action="{{route("ppc-contact")}}">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-4">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control no-bg" placeholder="Your Name" required>
                                        </div>

                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='text' name='email' id='email' class="form-control no-bg" placeholder="Your Email" required>
                                        </div>

                                        <div id='phone_error' class='error'>Please enter your phone number.</div>
                                        <div>
                                            <input type='text' name='phone' id='phone' class="form-control no-bg" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div id='message_error' class='error'>Please enter your message.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control no-bg" placeholder="Your Question" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <p id='submit'>
                                            <input type='submit' id='' value='Submit Question' class="btn btn-more ">
                                        </p>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </div>
                            </form>
                        </div>						
						<div class="spacer-double"></div>
						<div class="spacer-double"></div>		
                    </div>
                		</div>			
                	</div>
                    
                </div>
            </section>
            <!-- parallax section close -->

            <!-- section begin -->
            <section id="section-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 wow fadeInLeft text-middle">
							<h2>ASASA Constructions Toronto’s leading renovators of Basements, Bathrooms, and Kitchens. Step into the future with ASASA. </h2>

                            <p class="lead">Every house needs a makeover; ASASA aims to provide you with the best renovation services in Toronto. We know that your Kitchen is an integral part of your home, and renovating it can be a little tricky. We make this challenge easy to beat, and that too at an affordable rate. ASASA also provides you with the best bathroom renovation services that are sure to revamp your bathroom style completely. Not only this, but we also offer basement renovation services that will make your basement the center of attention in your house. ASASA gives you: </p>
                        </div>
						
						<div class="col-md-1"></div>
						
						<div class="col-md-6 text-middle">
							<img class="lazy" width="100%" src="{{asset("landing/sides/basement.jpg")}}" class="img-responsive" alt="">
						</div>

                    </div>
                </div>
            </section>
            <!-- section close -->
			
            <!-- section service begin -->
            <section id="section-2" class="no-bottom" data-bgcolor="#eee">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-middle">
							<img class="lazy" width="100%" src="{{asset("landing/5.jpg")}}" class="img-responsive" alt="">
						</div>
                        					
						<div class="col-md-1"></div>						
						<div class="col-md-5 wow fadeInLeft text-middle">
							<h2>Continue ...</h2>
                            <ul>
                                <li>Complete Makeovers for your Kitchen, Bathroom, and Basement </li>
                                <li>Innovations in designing and restructuring for whatever look you want.</li>
                                <li>Top-quality products and renovation services at quite affordable rates. </li>
                            </ul>
                            <p class="lead">Renovations can be quite hectic, hard to manage, and expensive. But with ASASA, all these problems go away, and we do all the heavy lifting. By having an expert at your side, you need to set your eyes on the prize and watch us do our magic. We are 100% licensed and insured, so you don’t have to worry about anything going wrong. </p>
                        
                        </div>	

                    </div>
                </div>
            </section>
            
            <!-- section service close -->
            
            <section id="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>THE SERVICES WE OFFER </h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


                        <div class="col-md-4 wow fadeInLeft">
                            <h3><span class="id-color">Kitchen</span> Renovation</h3>
                            Kitchens are the most integral part of any house. We help you in making them more functional, innovative, and beautiful. Our team has changed many house owners' lives with their magic of kitchen renovation; you’ll be surprised at what things we can do for your house. 
                            <div class="spacer-single"></div>
                            <a class="image-popup-no-margins" href="images/misc/pic_1.jpg">
                                {{-- <img src="images/misc/pic_1.jpg" class="img-responsive" alt=""> --}}
                            </a>
                        </div>

                        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                            <h3><span class="id-color">Bathroom</span> Renovation</h3>
                            While it's generally the littlest room in the house, the washroom is a significant space for every household. Whether you use it to get yourself set for the day or unwinding following a difficult day, your restroom should be both practical and outwardly engaging. 
                            <div class="spacer-single"></div>
                            {{-- <img src="images/misc/pic_2.jpg" class="img-responsive" alt=""> --}}
                        </div>

                        <div class="col-md-4 wow fadeInRight">
                            <h3><span class="id-color">Basement</span> Renovation</h3>
                            We are devoted to giving premium basement renovation work that will fulfill all your necessities. We stand out from all our competitors because we use present-day innovations to ensure your revamp is smooth sailing. Turn your basement into the main attraction of your house. 
                            <div class="spacer-single"></div>
                            {{-- <img src="images/misc/pic_3.jpg" class="img-responsive" alt=""> --}}
                        </div>

                    </div>
                </div>
            </section>
			<!-- section begin -->
            <section id="section-portfolio" class="no-top no-bottom">                
                <div id="gallery" class="gallery zoom-gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                        <a href="{{asset("landing/1.jpg")}}" title="View Details">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Details</span>
                                    </span>
                                </span>
                                <img class="lazy" src="{{asset("landing/1.jpg")}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            <a href="{{asset("landing/2.jpg")}}" title="View Details">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Details</span>
                                    </span>
                                </span>
                                <img class="lazy" src="{{asset("landing/2.jpg")}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            <a href="{{asset("landing/3.jpg")}}" title="View Details">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Details</span>
                                    </span>
                                </span>
                                <img class="lazy" src="{{asset("landing/3.jpg")}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                            <a href="{{asset("landing/4.jpg")}}" title="View Details">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Details</span>
                                    </span>
                                </span>
                                <img class="lazy" src="{{asset("landing/4.jpg")}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->
                </div>             
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-2" class="no-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 wow fadeInLeft text-middle">
							<h2>WHAT MAKES US DIFFERENT </h2>

							<p class="lead">ASASA constructions has been in the kitchen, bathroom, and basement redesigning industry for nearly 10+ years. Our consistency is the aftereffect of our clients' confidence in our dedication and services. What separates us is our capacity to give top-notch renovation services at reasonable costs. This is conceivable because we don't manage subcontractors and all products come straightforwardly from our distribution center to our store. 

                                <br>

                                Because of our expertise and years and years of experience in the field, we know where we can cut down manufacturing costs without having any effect on quality. This means that you can save a lot of money by opting to renovate your households with ASASA Constructions. We offer the best and cost-effective solutions to all your renovation needs and requirements. </p>
						</div>						
						<div class="col-md-1"></div>						
						<div class="col-md-6 text-middle">
							<img class="lazy" width="100%" src="{{asset("landing/sides/bath.jpg")}}" class="img-responsive" alt="">
						</div>

                    </div>
                </div>
            </section>



            <section id="section-2" class="no-bottom" data-bgcolor="#eee">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-middle">
							<img class="lazy" width="100%" src="{{asset("landing/sides/kitchen1.jpg")}}" class="img-responsive" alt="">
						</div>
                        					
						<div class="col-md-1"></div>						
						<div class="col-md-5 wow fadeInLeft text-middle">
							<h2>OUR SERVICES REVOLVE AROUND:</h2>
                                <ul>
                                    <li>Increasing your house’s value </li>
                                    <li>Providing cost-effective renovation </li>
                                    <li>Satisfying our clients 100% </li>
                                    <li>Giving you the best options to choose from </li>
                                    <li>24/7 Help and Support </li>
                                    <li>Innovating for your future </li>
                                </ul>
                                <p class="lead">Call ASASA Constructions At: @isset($setting['phone']){{ $setting['phone']}}@endisset  </p>
                            </div>	

                    </div>
                </div>
            </section>
            <!-- section close -->   
            <!-- section service begin -->
           
            <!-- section service close -->
            <!-- section begin -->
            <section id="section-2" class="no-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 wow fadeInLeft text-middle">
							<h2>Some Advantages of Renovating your household: </h2>
                            <h3>BETTER INTERIOR </h3>
							<p class="lead">Our vast collections of products like cabinets and countertops are sure to upgrade your interior for the better.  </p>    
                            <h3>MAKE MORE SPACE </h3>
                            <p class="lead">With our custom designs, you are sure to find more space in your house. Our cabinets are going to increase your storage capacity significantly.  </p>  
                            <h3>ADDED VALUE </h3>
                            <p class="lead">Our renovation services will add a lot of value to your house, meaning that you can increase your house’s worth quite quickly.  </p>  
                            <h3>CUSTOM DESIGNS </h3>
                            <p class="lead">Our team of renovators and designers is dedicated to providing you with the design and style you really want.  </p>  
                            <h3>AFFORDABLE RATES </h3>
                            <p class="lead">All our renovation services are provided at affordable and market competitive pricing, which means you don’t have to spend much money. </p>  
                            <h3>INCREASE FUNCTIONALITY </h3>
                            <p class="lead">We increase the functionality of your bathrooms and kitchens using state-of-the-art technology and innovations. 
                                <br>
                                If you want to know more about how a renovation can help you out, get in touch with one of our professionals today. </p>  
                            <h3>Get Top Quality Renovation Services in Toronto</h3>
                            <p class="lead">The best designs and styles on a budget 
                                
                                We provide the best custom designs and styles at very affordable rates. Our kitchen renovation alone can completely change the overall feel of your house. Add bathroom renovation to the mix, and voila, you have a modern house ready. If you’re still feeling a bit outdated, opt for our basement renovation services that will make your home the coolest house on your block.  </p>  
                            <h3>Make the right choice in renovation </h3>
                            <p class="lead">At ASASA Constructions, we are a team of renovation experts with 5 to 20 years of experience  

                                providing the best kitchen, bathroom, and basement renovation services. When you truly decide to work with us, you can be sure your renovation project will be finished quickly, accurately, and up to the mark. Additionally, the task is never truly completed until you are 100% fulfilled and satisfied with the end results.  </p>  
                           
                        </div>
                        <div class="col-md-4 text-middle">
							<img class="lazy" width="100%" src="{{asset("landing/sides/vertical kitchen image.jpg")}}" class="img-responsive" alt="">
						</div>						
						

                    </div>
                </div>
            </section>
            <!-- section close -->    

            <!-- section begin -->
            <section id="section-contact-landing-product" class="lazy">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h2>Ask Us Here</h2>
                        </div>

                        <div class="col-md-8 offset-md-2 wow fadeInLeft">
                            <form name="contactForm" id='contact_form' method="post" action="{{route("contact-process")}}">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-4">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control no-bg" placeholder="Your Name" required>
                                        </div>

                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='text' name='email' id='email' class="form-control no-bg" placeholder="Your Email" required>
                                        </div>

                                        <div id='phone_error' class='error'>Please enter your phone number.</div>
                                        <div>
                                            <input type='text' name='phone' id='phone' class="form-control no-bg" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div id='message_error' class='error'>Please enter your message.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control no-bg" placeholder="Your Question" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <p id='submit'>
                                            <input type='submit' id='' value='Submit Question' class="btn btn-more">
                                        </p>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </div>
                            </form>
                        </div>						
						<div class="spacer-double"></div>
						<div class="spacer-double"></div>		
                    </div>
                </div>
				
            </section>
            <!-- section close -->
            <!-- section begin -->
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

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        John, Customer
                                    </div>
                                </blockquote>

                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        Michael, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        Patrick, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        James, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- footer begin -->
            <footer class="no-padding light">
            	<div class="container">
                    <div class="row" style="padding-top: 30px">
                        <div class="col-md-4">
                            <img class="lazy" src="@isset($setting['admin_logo']) {{ asset('uploads/'.$setting['admin_logo']) }}@endisset" class="logo-small" alt="" style="    width: 200px;
                            border: 1px solid;
                            padding: 5px;"><br>
                            @isset($setting['footer_info']){{ $setting['footer_info']}}@endisset
                        </div>
        
                        <div class="col-md-4">
                            <div class="widget widget_recent_post">
                                <h3>Services</h3>
        
                                <ul>
                                    <li ><a href="{{route("single-service","commercial-renovation-contractors")}}">Commercial Renovation Contractors in Toronto</a></li>
                                    <li ><a href="{{route("single-service","office-renovations-contractor")}}">Office Renovations Contractor in Toronto</a></li>
                                    <li ><a href="{{route("single-service","school-renovation-services")}}">School Renovation Services in Toronto</a></li>
                                    <li ><a href="{{route("single-service","residential-renovation-contractors")}}">Residential Renovation Contractors in Toronto</a></li>
                                    <li ><a href="{{route("single-service","kitchen-renovation-contractor-in-toronto")}}">Kitchen Renovation Contractor in Toronto</a></li>
                                    <li ><a href="{{route("single-service","bathroom-renovation-contractor")}}">Bathroom Renovation Contractor in Toronto</a></li>
                                    <li ><a href="{{route("single-service","basement-renovation-contractor-in-toronto")}}">Basement Renovation Contractor in Toronto</a></li>
                                </ul>
        
                            </div>
                        </div>
        
                        <div class="col-md-4">
                            <h3>Contact Us</h3>
        
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
                                &copy; Copyright {{date("Y")}} - @isset($setting['copy_right']){{ $setting['copy_right']}}@endisset
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


</body>

</html>