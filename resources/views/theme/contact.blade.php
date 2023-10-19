@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
@php
    $section = \App\Section::findOrFail(8);
    $storedColumns = json_decode($section->content,TRUE);
    $testimonials = \App\Testimonial::all();
@endphp
@section("meta")
    <title>@isset($storedColumns['meta_title']) {!! $storedColumns['meta_title'] !!}@endisset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@isset($storedColumns['meta_description']) {!! $storedColumns['meta_description'] !!} @endisset">
    <meta name="keywords" content="@isset($storedColumns['meta_keyword']) {!! $storedColumns['meta_keyword'] !!} @endisset">
<style>
    .hbspt-form span{
        color: white !important;
    }
</style>
@endsection
@section("content")
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                    <ul class="crumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li class="sep">/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-top">
        <section id="de-map" aria-label="map-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-container map-fullwidth img-rounded">
                            <iframe src="https://maps.google.com/maps?q=307-%20250%20Consumers%20Rd%20Toronto%2C%20ON%20M2J%204V6&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">

                <div class="col-md-7">
                    @if(Session::has('success_message'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ Session::get('success_message') }}
                        </div>
                    @endif

                    <h3>Send Us Message</h3>
                    {{-- <form name="contactForm" id='contact_form' method="post" action="{{route("contact-process")}}">
                        <div class="row">
                            @csrf
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name" required>
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='email' name='email' id='email' class="form-control" placeholder="Your Email" required>
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message" required></textarea>
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
                    </form> --}}
                    <div class="col-md-9">
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                        <script>
                          hbspt.forms.create({
                            region: "na1",
                            portalId: "20364664",
                            formId: "3bdd2550-801d-4e1b-88d6-2718070b77d4"
                        });
                        </script>
                    </div>
                   
                </div>

                <div id="sidebar" class="col-md-5">

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
