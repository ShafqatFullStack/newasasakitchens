@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
@php
    $section = \App\Section::findOrFail(9);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp
@section("meta")
    <title>@isset($storedColumns['meta_title']) {!! $storedColumns['meta_title'] !!}@endisset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@isset($storedColumns['meta_description']) {!! $storedColumns['meta_description'] !!} @endisset">
    <meta name="keywords" content="@isset($storedColumns['meta_keyword']) {!! $storedColumns['meta_keyword'] !!} @endisset">

@endsection
@section("content")
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Career</h1>
                    <ul class="crumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li>Career</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->
    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Values</h2>

                </div>
                <div class="col-md-12">
                    <h4>Our Philosophy </h4>
                    <p>ASASA Construction's values remain constant even if a shift is a strategy, direction, or even our purpose. Some of our values are:  </p>
                    <h4>Trust</h4>
                    <p>We hire the best of resources and freedom of decision-making. It is upon them to accomplish the target and make our clients satisfied with their work.  </p>
                    <h4>Mutual Accountability </h4>
                    <p>ASASA Construction is committed to making a team that is extremely fast, fluid, and flexible. We empower people, not processes, and deliver on our commitments mutually with each other.  </p>
                    <h4>Enthusiasm </h4>
                    <p>ASASA Construction refuses to be constrained by conventional thinking. We are committed to creating equal opportunities for everyone and strive to innovate continuously.  </p>
                    <h4>Integrity and Respect </h4>
                    <p>ASASA Construction holds to the highest ethical standards when working with both clients and resources. We treat everyone the way we would like to be treated. </p>
                    <h4>Transparency  </h4>
                    <p>ASASA Construction is entirely transparent, either when it comes to working with a client or a resource. We share everything about our company with people, which is why the work is done is the best. <br>

 

 

                        At ASASA Construction, we do everything to allow others to do great things. We are committed to redefining ASASA Construction, which is why we embrace innovation, enthusiasm for work, and growing passion. We provide everyone the freedom, trust, and flexibility, so ASASA Construction progresses and grows as a family. <br> 
                        
                        ASASA Construction holds 10+ years of substantial experience only by empowering driven minds and fostering innovation. We are always evolving, and it's the people who are creating and leading this change.  <br>
                        
                        The purpose of attracting people holding values and enabling them to utilize the full extent of their career potential has created a world-class environment.  </p>
                    <h4>Like what you see? </h4>
                    <p>Since you have seen us and our work, how about being a part of our company? Take a look at our jobs to see if we have a job that matches your skillset.  </p>
                </div>
               

            </div>
            
        </div>

    </section>
    <!-- content begin -->
    <div id="content" >


        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    @if(Session::has('success_message'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ Session::get('success_message') }}
                        </div>
                    @endif

                    <h3>Send Us Message</h3>
                    <form name="contactForm" id='contact_form' method="post" action="{{route("contact-process")}}">
                        <div class="row">
                            @csrf
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p id='submit'>
                                    <input type='submit' id='' value='Submit Form' class="btn btn-line">
                                </p>
                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="sidebar" class="col-md-4">

                    <div class="widget widget_text">
                        <h3>Contact Info</h3>
                        <address>
                            <span>@isset($setting['address']){{ $setting['address']}}@endisset</span>
                            <span><strong>Phone:</strong>@isset($setting['phone']){{ $setting['phone']}}@endisset</span>
                            <span><strong>Email:</strong><a href="mailto:@isset($setting['email']){{ $setting['email']}}@endisset">@isset($setting['email']){{ $setting['email']}}@endisset</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section aria-label="section">
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
            <div class="row mt-20">
                <div class="col-md-12 text-center">
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
@endsection
