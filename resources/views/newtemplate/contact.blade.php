@extends('newtemplate.layout.template')
@extends('newtemplate.layout.normal')







@section('meta')
    <title>
        Contact | ASASA Kitchens
    </title>
    <meta name="description"
        content="Content For best Renovation and Remodelling services in Toronto, you can contact us at 647-956-1116 or visit our office at 307- 250 Consumers Rd Toronto, ON M2J 4V6">

    <link href="{{ asset('ecommerce/assets/css/contact.css') }} " rel="stylesheet">

    <style>
        .review-section {
            display: none
        }
    </style>


    <style>
        .ftco-intro {
            display: none
        }
    </style>

@section('main-section')

@php($setting = \App\Setting::pluck('value', 'name')->toArray())
    <body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope'
        class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
        <!-- Google Tag Manager (noscript) -->



        <section class="section bg-gray-900 box-custom-1">

            <div class="slideshow-container" style="width:100%;">


                <div class="box-custom-1-main mobheight">
                    <img class="anim" src="{{ asset('newtemplate/asasa-kitchen/contact.jpg') }}">
                    <div class="block-sm mobblock">

                        <h2 class="wow fadeInRight" data-wow-delay=".5s" style="color:#fff">Contact us</h2>
                        <p class="wow fadeInRight" data-wow-delay=".6s" style="color:#fff">We are here as ASASA Kitchen to
                            help our clients and answer every question they ask about the project. Contact us today and book
                            your appointment now.</p>
                        <div class="linespace"></div>
                        <a class="radius button button-primary button-shadow wow fadeInRight"
                            href="tel:{{ $setting['phone'] }}" style="margin-top:10%;">{{ $setting['phone'] }}</a>

                        <a class="radius button button-primary button-shadow wow fadeInRight" href="{{ route('about-us') }}"
                            style="margin-top:10%;">About Us</a>

                    </div>
                </div>

            </div>
            <br>

            </div>

        </section>

        @if (Session::get('success_message'))
            <div class="alert alert-danger" style="margin:auto">
                {{ Session::get('success_message') }}
            </div>
        @endif

        <!--contact us section start-->
        <section class="contact-us-section ptb-100" style="margin-top:5%">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-us-form gray-light-bg rounded p-5" style='background:#f6f6f6'>
                            <h4 style="font-weight: 600;">Ready to get started?</h4>
                            @if (Session::has('success_message'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ Session::get('success_message') }}
                                </div>
                            @endif

                            <form action="{{ route('contact-process') }}" method="post"
                                class="  contact-form php-email-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name"
                                        value="{{ old('name') }}">
                                    @if ($errors->get('name'))
                                        <span style="color:red">{{ $errors->first('name') }}</span>
                                    @else
                                        &nbsp;
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Your Email"
                                        value="{{ old('email') }}">
                                    @if ($errors->get('email'))
                                        <span style="color:red">{{ $errors->first('email') }}</span>
                                    @else
                                        &nbsp;
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                        value="{{ old('phone') }}">
                                    @if ($errors->get('phone'))
                                        <span style="color:red">{{ $errors->first('phone') }}</span>
                                    @else
                                        &nbsp;
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                                    @if ($errors->get('message'))
                                        <span style="color:red">{{ $errors->first('message') }}</span>
                                    @else
                                        &nbsp;
                                    @endif
                                </div>

                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>




                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-us-content">
                            <h2
                                style="color: initial;line-height: 1.21;font-weight: 600;margin: 0 0 1rem;font-family: Montserrat,sans-serif;">
                                Looking for an excellent kitchen renovation service for your project? </h2>
                            <p class="lead">We are here to help you get your desired renovation. Contact us now!</p>


                            <hr class="my-5">

                            <h5>Our Headquarters</h5>
                            <address>
                                @isset($setting['address'])
                                    {{ $setting['address'] }}
                                @endisset
                            </address>
                            <br>
                            <span>Phone: @isset($setting['phone'])
                                    {{ $setting['phone'] }}
                                @endisset
                            </span> <br>
                            <span>Email: <a
                                    href="mailto:@isset($setting['email']){{ $setting['email'] }}@endisset"
                                    class="link-color">
                                    @isset($setting['email'])
                                        {{ $setting['email'] }}
                                    @endisset
                                </a></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->


        </div>
        </div>


    </body>

    <!-- Mirrored from
    impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->

    </html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection
