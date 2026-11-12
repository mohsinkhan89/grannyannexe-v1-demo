@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Granny Annexe Builders Manchester | Bespoke Garden Annexes">
    <meta name="description" content="Looking for granny annexe builders in Manchester? We design and build bespoke, warm and affordable annexes across Greater Manchester. Get your free quote today.">
    <meta property="og:title" content="Granny Annexe Builders Manchester | Bespoke Garden Annexes">
    <meta property="og:description" content="Looking for granny annexe builders in Manchester? We design and build bespoke, warm and affordable annexes across Greater Manchester. Get your free quote today.">
    <meta name="twitter:title" content="Granny Annexe Builders Manchester | Bespoke Garden Annexes">
    <meta name="twitter:description" content="Looking for granny annexe builders in Manchester? We design and build bespoke, warm and affordable annexes across Greater Manchester. Get your free quote today.">
@endsection

@section('title')
Granny Annexe Builders Manchester | Bespoke Garden Annexes
@endsection

@section('css')
<style>
    .manchester-coverage {
        background: #1f1c1a;
    }
    .manchester-coverage-card {
        position: relative;
        overflow: hidden;
        padding: clamp(28px, 5vw, 64px);
        border: 1px solid rgba(164, 121, 102, .2);
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 18px 45px rgba(31, 28, 26, .18);
    }
    .manchester-coverage-card::before {
        content: "";
        position: absolute;
        top: -85px;
        right: -70px;
        width: 230px;
        height: 230px;
        border: 45px solid rgba(164, 121, 102, .2);
        border-radius: 50%;
    }
    .manchester-coverage-card > * {
        position: relative;
        z-index: 1;
    }
    .manchester-coverage-copy {
        max-width: 880px;
        margin-inline: auto;
    }
    .manchester-coverage-copy .bs-p-1 {
        text-align: center;
        color: rgba(29, 29, 29, .72);
    }
    .manchester-coverage-copy .bs-sec-title-1 {
        color: #1d1d1d;
    }
    .manchester-area-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin: 28px 0 0;
        padding: 0;
        list-style: none;
    }
    .manchester-area-list li {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        border: 1px solid rgba(164, 121, 102, .48);
        border-radius: 50px;
        background: rgba(164, 121, 102, .08);
        color: #1d1d1d;
        font-family: var(--bs-font-1);
        font-size: 18px;
        line-height: 1.4;
    }
    .manchester-area-list i {
        color: var(--bs-clr-pr-1);
    }
    .manchester-coverage-help {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        margin-top: 26px;
        max-width: 850px;
        margin-inline: auto;
        padding: 16px 20px;
        border-left: 3px solid var(--bs-clr-pr-1);
        border-radius: 8px;
        background: #f7f3f1;
        color: rgba(29, 29, 29, .78);
    }
    .manchester-coverage-help .icon {
        display: grid;
        flex: 0 0 42px;
        width: 42px;
        height: 42px;
        place-items: center;
        border-radius: 8px;
        background: var(--bs-clr-pr-1);
        color: #fff;
    }
    @media (max-width: 575px) {
        .manchester-area-list {
            justify-content: flex-start;
        }
        .manchester-area-list li {
            padding: 9px 13px;
            font-size: 16px;
        }
        .manchester-coverage-help {
            align-items: flex-start;
            justify-content: flex-start;
            text-align: left;
        }
    }
</style>
@endsection

@section('content')
<div class="london-page manchester-page">
    <section class="breadcrumb-area wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="Granny annexes Manchester" loading="lazy" decoding="async"
                src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-about.webp') }}" alt="Granny annexes in Manchester">
        </div>
        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">Granny Annexes<br>Manchester</h1>
                <div class="breadcrumb-list">
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825Z" fill="white"/>
                    </svg>
                    <a href="{{ route('index') }}">Home</a>
                    <span>Manchester</span>
                </div>
            </div>
        </div>
    </section>

    <section class="london-showcase py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="london-showcase-card">
                <div class="row align-items-stretch g-0">
                    <div class="col-lg-6">
                        <div class="london-copy-panel">
                            <h2 class="bs-sec-title-1 wa-split-right wa-capitalize" data-cursor="-opaque">Bespoke Granny Annexes for Manchester Homes</h2>
                            <p class="bs-p-1 disc mt-3">If you are looking to keep a loved one close while giving them their own private space, a granny annexe could be the answer. We design and build bespoke garden annexes for homeowners across Manchester and the surrounding areas, giving families a warm, comfortable and practical way to live together, without living on top of each other.</p>
                            <p class="bs-p-1 disc mb-4">From Didsbury to Altrincham, Stockport to Salford, we have helped families across Greater Manchester add a beautiful, fully insulated living space to their garden. Whether it is for an elderly parent, a grown up child, or extra income through renting, our annexes are built to feel like a genuine extension of the family home.</p>
                            <div class="btn-wrap wa-fadeInUp">
                                <a href="{{ route('gallery') }}" aria-label="View gallery" class="bs-btn-1 onhover-border">
                                    <span class="text">View Gallery</span><span class="shape"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="london-showcase-media">
                            <div class="london-gallery-img main wa-img-cover">
                                <img title="Garden annexe in Manchester" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-second-images/11.jpg') }}" alt="Garden annexe in Manchester">
                            </div>
                            <div class="london-gallery-stack">
                                <div class="london-gallery-img wa-img-cover"><img title="Manchester annexe living space" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-images/03.jpg') }}" alt="Manchester annexe living space"></div>
                                <div class="london-gallery-img wa-img-cover"><img title="Modern annexe finish" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-second-images/22.jpg') }}" alt="Modern annexe finish"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="london-hero overflow-hidden">
        <div class="london-hero-bg"><img title="Manchester granny annexe" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/location/manchister.webp') }}" alt="Manchester granny annexe"></div>
        <div class="container bs-container-1 d-flex align-items-center">
            <div class="py-lg-5 py-4">
                <h2 class="text-white bs-sec-title-4 title wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Why Manchester Families Choose Us</h2>
                <p class="london-hero-copy bs-p-1 mb-4">Manchester's weather can be unpredictable, with plenty of rain and cold winters. That is exactly why we build every annexe with triple glazing, high performance insulation and a strong steel frame as standard. This keeps the annexe warm in winter, cool in summer, and quiet all year round, so your loved ones feel comfortable no matter the season.</p>
                <div class="london-hero-actions">
                    <div class="london-hero-callout"><strong>Built for year-round comfort</strong><span>Bespoke design, robust materials and support from a dedicated team.</span></div>
                    <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Get a free Manchester quote" class="bs-btn-1 onhover-border"><span class="text">Get a Free Quote</span><span class="shape"></span></a>
                </div>
            </div>
            <div class="london-floating-panel">
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-window-maximize"></i></span><p class="bs-p-4 mb-0">Triple glazed windows and doors as standard, to cut down draughts and heat loss</p></div>
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-temperature-half"></i></span><p class="bs-p-4 mb-0">Fully insulated walls, floors and roofs for year round comfort</p></div>
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-shield-halved"></i></span><p class="bs-p-4 mb-0">Steel frame construction for lasting strength and durability</p></div>
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-pen-ruler"></i></span><p class="bs-p-4 mb-0">A bespoke design service, so your annexe suits your garden and your family</p></div>
                {{-- <div class="feature-item"><span class="icon"><i class="fa-solid fa-people-group"></i></span><p class="bs-p-4 mb-0">A dedicated local team who understand Manchester planning requirements</p></div> --}}
            </div>
        </div>
    </section>

    <section class="london-benefits-section py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="benefits-main-div text-center mb-4">
                <h2 class="bs-sec-title-1 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Our Simple Process</h2>
                <p class="bs-p-4 disc wa-fadeInUp text-center">We take care of everything, from the first conversation to the final handover. Our team will visit your property, talk through your needs, and design an annexe that fits your garden and your budget. We then manage planning, groundwork, construction and finishing touches, keeping you updated at every stage.</p>
                <p class="bs-p-4 disc wa-fadeInUp text-center">Most projects, from initial design to completed build, take between 8 and 16 weeks, depending on the size and complexity of the annexe. We aim to make the whole process smooth, transparent and stress free for you and your family.</p>
            </div>
            <div class="london-benefit-grid">
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">01</span><span class="london-benefit-icon"><i class="fa-solid fa-comments"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Conversation &amp; Survey</h3><p class="bs-p-1 mb-0">We visit your Manchester property and discuss your family's needs, garden and budget.</p></div>
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">02</span><span class="london-benefit-icon"><i class="fa-solid fa-pen-ruler"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Bespoke Design</h3><p class="bs-p-1 mb-0">Your annexe is designed specifically around your garden, style and practical requirements.</p></div>
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">03</span><span class="london-benefit-icon"><i class="fa-solid fa-file-signature"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Planning &amp; Groundwork</h3><p class="bs-p-1 mb-0">Our team manages planning requirements and prepares the site for construction.</p></div>
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">04</span><span class="london-benefit-icon"><i class="fa-solid fa-house-circle-check"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Build &amp; Handover</h3><p class="bs-p-1 mb-0">We complete construction and finishing touches before a smooth final handover.</p></div>
            </div>
        </div>
    </section>

    <section class="manchester-coverage py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="manchester-coverage-card">
                <div class="manchester-coverage-copy text-center">
                    <h2 class="bs-sec-title-1 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Areas We Cover Near Manchester</h2>
                    <p class="bs-p-1 mb-0">We regularly build annexes across Manchester and the wider region, including Stockport, Bolton, Salford, Trafford, Oldham, Bury, Rochdale, Wigan and Altrincham.</p>
                </div>
                <ul class="manchester-area-list" aria-label="Areas covered near Manchester">
                    <li><i class="fa-solid fa-location-dot"></i> Manchester</li>
                    <li><i class="fa-solid fa-location-dot"></i> Stockport</li>
                    <li><i class="fa-solid fa-location-dot"></i> Bolton</li>
                    <li><i class="fa-solid fa-location-dot"></i> Salford</li>
                    <li><i class="fa-solid fa-location-dot"></i> Trafford</li>
                    <li><i class="fa-solid fa-location-dot"></i> Oldham</li>
                    <li><i class="fa-solid fa-location-dot"></i> Bury</li>
                    <li><i class="fa-solid fa-location-dot"></i> Rochdale</li>
                    <li><i class="fa-solid fa-location-dot"></i> Wigan</li>
                    <li><i class="fa-solid fa-location-dot"></i> Altrincham</li>
                </ul>
                <div class="manchester-coverage-help bs-p-1">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <span>If you live nearby and are not sure whether we cover your area, just get in touch and we will be happy to help.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- cta-start -->
    <section class="london-banner-content py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="london-cta">
                <div class="row align-items-center g-4">
                    <div class="col-lg-12">
                        <h2 class="bs-sec-title-1 text-white wa-split-right wa-capitalize mb-3" data-cursor="-opaque">
                            Get Your Free Quote Today
                        </h2>
                        <p class="bs-p-1 text-white mb-0 text-center">
                            Thinking about adding a granny annexe to your Manchester property? Speak to our friendly team today for a free, no obligation quote. We will talk you through pricing, design options and how the process works, so you can make the right decision for your family.
                        </p>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Get a London quote" class="bs-btn-1 onhover-border">
                            <span class="text">Get a Manchester quote</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-end -->
</div>
@endsection

@section('js')
@endsection
