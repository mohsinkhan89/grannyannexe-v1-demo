@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK Contact | ANX Builds Today">
    <meta name="description" content="Garden granny annexe UK experts at ANX Builds. Contact our team for pricing, advice or a free consultation. Speak to us today and start your project with confidence.">
    <meta property="og:title" content="Garden Granny Annexe UK Contact | ANX Builds Today">
    <meta property="og:description" content="Garden granny annexe UK experts at ANX Builds. Contact our team for pricing, advice or a free consultation. Speak to us today and start your project with confidence.">
    <meta name="twitter:title" content="Garden Granny Annexe UK Contact | ANX Builds Today">
    <meta name="twitter:description" content="Garden granny annexe UK experts at ANX Builds. Contact our team for pricing, advice or a free consultation. Speak to us today and start your project with confidence.">
@endsection

@section('schema')
    <div class="h-card">
        <span class="p-name">
        The Granny Annexe Company
        </span>

        <a class="p-tel"
        href="tel:+443334440376">
        03334440376
        </a>

        <a class="u-email"
        href="mailto:[email protected]">
        [email protected]
        </a>
    </div>
@endsection

@section('title')
Garden Granny Annexe UK Contact | ANX Builds Today
@endsection



@section('content')

<!-- breadcrumb-start -->
<section class="breadcrumb-area wa-p-relative">
    <div class="breadcrumb-bg-img wa-fix wa-img-cover">
        <img class="wa-parallax-img" title="breadcrumb-contact" loading="lazy" decoding="async" src="{{url('frontend/assets/img/breadcrumb/breadcrumb-contact.webp')}}" alt="breadcrumb-contact">
    </div>

    <div class="container bs-container-1">
        <div class="breadcrumb-wrap">
            <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Contact Us</h1>

            <div class="breadcrumb-list " >
                <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                </svg>

                <a href="{{ route('index') }}">Home</a>
                <span>Contact Us</span>
            </div>

        </div>
    </div>
</section>
<!-- breadcrumb-end -->

<!-- core-feature-start -->
<section class="bs-core-feature-6-area contact-information-icon py-lg-5 py-4">
    <div class="container bs-container-1">
        <div class="bs-core-feature-6-wrap">

            <!-- single-item -->
            @if(setting('site.web-address'))
            <div class="bs-core-feature-4-item wow fadeInRight" data-background="{{url('frontend/assets/img/services/s4-bg.webp')}}">
                <a href="javascript:void(0)">
                    <div class="item-icon">
                        <i class="fa-solid fa-location-arrow"></i>
                    </div>
                    <div class="d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center gap-lg-2 gap-md-2 gap-2">
                        <h4 class="bs-h-4 item-title contact-page-h4">
                            Address
                        </h4>
                        <p class="bs-p-4 item-disc contact-page-p">{{ setting('site.web-address') }}</p>
                    </div>
                </a>
            </div>
            @endif

            <!-- single-item -->
            @if(setting('site.web-email'))
            <div class="bs-core-feature-4-item wow fadeInRight" data-background="{{url('frontend/assets/img/services/s4-bg.webp')}}">
                <a href="mailto:{{ setting('site.web-email') }}">
                    <div class="item-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center gap-lg-2 gap-md-2 gap-2">
                        <h4 class="bs-h-4 item-title contact-page-h4">
                            Emails Address
                        </h4>
                        <p class="bs-p-4 item-disc contact-page-p">
                            {{ setting('site.web-email') }}
                        </p>
                    </div>
                </a>
            </div>
            @endif

            <!-- single-item -->
            @if(setting('site.web-phone'))
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <a href="tel:{{ setting('site.web-phone') }}">
                    <div class="item-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center gap-lg-2 gap-md-2 gap-2">
                        <h4 class="bs-h-4 item-title contact-page-h4">
                            Call Us
                        </h4>
                        <p class="bs-p-4 item-disc contact-page-p">
                            {{ setting('site.web-phone') }}
                        </p>
                    </div>
                </a>
            </div>
            @endif

            @if(setting('site.web-phone'))
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <a href="tel:{{ setting('site.web-phone') }}">
                    <div class="item-icon">
                        <i class="fa-brands custom-whatsapp fa-whatsapp"></i>
                    </div>
                    <div class="d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center gap-lg-2 gap-md-2 gap-2">
                        <h4 class="bs-h-4 item-title contact-page-h4">
                            Whatsapp Us
                        </h4>
                        <p class="bs-p-4 item-disc contact-page-p">
                            {{ setting('site.web-phone') }}
                        </p>
                    </div>
                </a>
            </div>
            @endif

        </div>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    </div>
</section>
<!-- core-feature-end -->

<!-- contact-form-start -->
<section class="bs-contact-6-area anx-contact-section">
    <div class="container bs-container-1">
        <div class="bs-contact-6-wrap">

            <div class="bs-contact-6-img wa-fix wa-img-cover">
                <img title="contact-img" loading="lazy" decoding="async" src="{{url('frontend/assets/img/contact/contact-img.webp')}}" alt="A thoughtfully designed garden annexe by ANX Builds">                <div class="anx-contact-image-copy">
                    <span class="anx-contact-eyebrow">YOUR SPACE. YOUR POSSIBILITIES.</span>
                    <h3>A little more space.<br>A whole new chapter.</h3>
                    <p>From the first idea to the finishing touches, let us help you create a space that feels like home.</p>
                </div>
            </div>

            <div class="bs-contact-6-content">

                <div class="anx-contact-intro">
                    <span class="anx-contact-eyebrow">LET'S TALK ABOUT YOUR PROJECT</span>
                    <h2 class="bs-sec-title-1 mb-0">Get in touch<span>.</span></h2>
                </div>
                <div class="hs-form-frame" data-region="eu1" data-form-id="b1ddfe6a-9874-401a-b6f1-449a19d1068b" data-portal-id="147670011"></div>

            </div>
        </div>
    </div>
</section>
<!-- contact-form-end -->

<!-- map-start -->
<div class="bs-contact-page-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.5311719374954!2d-1.322155733509978!3d52.30112831779093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48a8ae5bab557591%3A0xeb8ace085cd16f39!2sGranny%20Annexe%20Company!5e0!3m2!1sen!2s!4v1776170318850!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- map-end -->

<!-- office-start -->
@include('frontend.inc.locations')
<!-- office-end -->

@endsection

@section('js')
<script src="https://js-eu1.hsforms.net/forms/embed/147670011.js" defer></script>
@endsection
