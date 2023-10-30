@extends('newtemplate.layout.template')
@extends('newtemplate.layout.normal')






@section('meta')
    <title>
        Thanks | ASASA Kitchens
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

    @php($setting = \App\Setting::pluck('value', 'name')->toArray());

    <body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope'
        class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
        <!-- Google Tag Manager (noscript) -->





        </div>
    </div>

    <div class="container" style="text-align: center;margin-top:7%;margin-bottom:2%;font-size:22px;">
        <h3 style="color:red"><strong>Thank You</strong></h3>


            <div>For submitting your request with us!</div>

            <img src="{{ asset('thank.png') }}">
            <div>One of our Representative will contact you shortly.</div>

            <div>You can call us at +1-647-956-1116</div>
            <div>Email: <strong style="color:#f5b315">contact@asasakitchens.com</strong></div>
    </div>



    </body>


    </html>
@endsection
