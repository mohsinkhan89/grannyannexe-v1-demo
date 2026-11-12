@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Granny Annexes Providers in London | ANX Builds">
    <meta name="description" content="Fully installed, planning managed, fixed-price granny annexes for families across London. Book a free site survey with ANX Builds today.">
    <meta property="og:title" content="Granny Annexes Providers in London | ANX Builds">
    <meta property="og:description" content="Fully installed, planning managed, fixed-price granny annexes for families across London. Book a free site survey with ANX Builds today.">
    <meta name="twitter:title" content="Granny Annexes Providers in London | ANX Builds">
    <meta name="twitter:description" content="Fully installed, planning managed, fixed-price granny annexes for families across London. Book a free site survey with ANX Builds today.">
@endsection

@section('title')
Granny Annexes Providers in London | ANX Builds
@endsection

@section('css')
    <style>
       

    </style>
@endsection

@section('content')
<div class="london-page">
    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="granny annexes london" loading="lazy" decoding="async" src="{{url('frontend/assets/img/breadcrumb/breadcrumb-about.webp')}}" alt="Granny annexes in London">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">Granny Annexes <br>Providers in London</h1>

                <div class="breadcrumb-list">
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>

                    <a href="{{ route('index') }}">Home</a>
                    <span>London</span>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- showcase-start -->
    <section class="london-showcase py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="london-showcase-card">
                <div class="row align-items-stretch g-0">
                    <div class="col-lg-6">
                        <div class="london-copy-panel">
                            <h2 class="bs-sec-title-1 wa-split-right wa-capitalize" data-cursor="-opaque">
                                Expand your London home with a garden annex
                            </h2>
                            <p class="bs-p-1 disc mt-lg-3 mt-md-3 mt-2 mb-lg-3 mb-md-3 mb-2">
                                Enhance your living space and add value to your property with a garden annexe solution designed to avoid the stress and disruption of traditional extensions.
                            </p>
                            <p class="bs-p-1 disc mb-lg-4 mb-md-3 mb-3">
                                Every annexe is planned around practical layouts, premium finishes, efficient installation, and the way your family wants to live.
                            </p>

                            <div class="london-copy-list">
                                <span><i class="fa-solid fa-check"></i> 
                                    <strong>Survey</strong>
                                    Free site visit and quot
                                </span>
                                <span><i class="fa-solid fa-check"></i> 
                                    <strong>Planning</strong>
                                    Clear route and guidance
                                </span>
                                <span><i class="fa-solid fa-check"></i> 
                                    <strong>Build</strong>
                                    Managed installation
                                </span>
                            </div>

                            <div class="btn-wrap wa-fadeInUp">
                                <a href="{{ route('gallery') }}" aria-label="View gallery" class="bs-btn-1 onhover-border">
                                    <span class="text">View Gallery</span>
                                    <span class="shape"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="london-showcase-media">
                            <div class="london-gallery-img main wa-img-cover">
                                <img title="Garden annexe in London" loading="lazy" decoding="async" src="{{url('frontend/assets/img/gallery/new-second-images/11.jpg')}}" alt="Garden annexe in London">
                            </div>
                            <div class="london-gallery-stack">
                                <div class="london-gallery-img wa-img-cover">
                                    <img title="London annexe living space" loading="lazy" decoding="async" src="{{url('frontend/assets/img/gallery/new-images/03.jpg')}}" alt="London annexe living space">
                                </div>
                                <div class="london-gallery-img wa-img-cover">
                                    <img title="Modern annexe finish" loading="lazy" decoding="async" src="{{url('frontend/assets/img/gallery/new-second-images/22.jpg')}}" alt="Modern annexe finish">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- showcase-end -->

    <!-- hero-start -->
    <section class="london-hero overflow-hidden">
        <div class="london-hero-bg">
            <img title="London granny annexe" loading="lazy" decoding="async" src="{{url('frontend/assets/img/gallery/16.jpg')}}" alt="London granny annexe exterior">
        </div>
        <div class="container bs-container-1 d-flex align-items-center">
            <div class="py-lg-5 py-4">
                <h2 class="text-white bs-sec-title-4 title wa-split-right wa-capitalize mb-md-3 mb-3" data-cursor="-opaque">
                    Fixed-price granny annexes,<br>fully managed from survey to move-in.
                </h2>
                <p class="london-hero-copy bs-p-1 mb-lg-4 mb-md-3 mb-3">
                    Premium steel-frame garden annexes for families across London. We manage design, planning guidance, groundwork, installation, finishes, and handover with one calm, joined-up process.
                </p>
                <div class="london-hero-actions">
                    <div class="london-hero-callout">
                        <strong>25-year guarantee included</strong>
                        <span>Built for year-round living, long-term comfort, and lasting property value.</span>
                    </div>
                    <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Book Free Site Survey" class="bs-btn-1 onhover-border">
                        <span class="text">Book Free Site Survey</span>
                        <span class="shape"></span>
                    </a>
                </div>
            </div>

            <div class="london-floating-panel">
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-house"></i></span>
                    <p class="bs-p-4 mb-0">Premium steel build system with superior finishes</p>
                </div>
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-chart-line"></i></span>
                    <p class="bs-p-4 mb-0">Adds lasting value to your London home</p>
                </div>
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-shield-halved"></i></span>
                    <p class="bs-p-4 mb-0">Non-combustible core for boundary-friendly builds</p>
                </div>
                <div class="feature-item">
                    <span class="icon"><i class="fa-solid fa-award"></i></span>
                    <p class="bs-p-4 mb-0">Planning guidance and installation managed</p>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-end -->

    <!-- stats-start -->
    <section class="london-stat-band overflow-hidden">
        <div class="container bs-container-1">
            <div class="london-stats-grid">
                <div class="london-stat-card">
                    <span class="number">99%</span>
                    <p class="bs-p-4 mb-0 text-center">LDC success rate</p>
                </div>
                <div class="london-stat-card">
                    <span class="number">6-10</span>
                    <p class="bs-p-4 mb-0 text-center">weeks installation time</p>
                </div>
                <div class="london-stat-card">
                    <span class="number">Free</span>
                    <p class="bs-p-4 mb-0 text-center">site survey and quote</p>
                </div>
                <div class="london-stat-card">
                    <span class="number">32</span>
                    <p class="bs-p-4 mb-0 text-center">London boroughs covered</p>
                </div>
                <div class="london-stat-card">
                    <span class="number">Fixed</span>
                    <p class="bs-p-4 mb-0 text-center">price guaranteed</p>
                </div>
            </div>
        </div>
    </section>
    <!-- stats-end -->

    <!-- benefits-start -->
    <section class="london-benefits-section py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="row g-lg-4 g-3 align-items-stretch">
                <div class="col-lg-12">
                    <div class="benefits-main-div text-center">
                        <h2 class="bs-sec-title-1 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">
                            Granny Annexes in London
                        </h2>
                        <p class="bs-p-4 disc wa-fadeInUp text-center">
                            From central London to the surrounding boroughs and nearby towns, add comfort, flexibility, and long-term property value with stylish garden annexes tailored to modern living.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="london-benefit-grid">
                        <div class="bs-core-feature-4-item london-benefit-card">
                            <div class="london-benefit-top">
                                <span class="count">01</span>
                                <span class="london-benefit-icon"><i class="fa-solid fa-arrow-trend-up"></i></span>
                            </div>
                            <h3 class="bs-h-4 item-title text-start mb-2">Adds Value to Your Property</h3>
                            <p class="bs-p-1 mb-0">A high quality garden annexe can increase the value of your home by adding flexible and desirable living space that appeals to future buyers.</p>
                        </div>
                        <div class="bs-core-feature-4-item london-benefit-card">
                            <div class="london-benefit-top">
                                <span class="count">02</span>
                                <span class="london-benefit-icon"><i class="fa-solid fa-layer-group"></i></span>
                            </div>
                            <h3 class="bs-h-4 item-title text-start mb-2">Flexible and Functional Space</h3>
                            <p class="bs-p-1 mb-0">Use your annexe as a guest room, home office, studio, or independent living area, giving your property more freedom and functionality.</p>
                        </div>
                        <div class="bs-core-feature-4-item london-benefit-card">
                            <div class="london-benefit-top">
                                <span class="count">03</span>
                                <span class="london-benefit-icon"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            </div>
                            <h3 class="bs-h-4 item-title text-start mb-2">Extra Space Without Major Disruption</h3>
                            <p class="bs-p-1 mb-0">Create more living space without the stress, cost, and disruption of a loft conversion or rear extension.</p>
                        </div>
                        <div class="bs-core-feature-4-item london-benefit-card">
                            <div class="london-benefit-top">
                                <span class="count">04</span>
                                <span class="london-benefit-icon"><i class="fa-solid fa-people-roof"></i></span>
                            </div>
                            <h3 class="bs-h-4 item-title text-start mb-2">Better Support for Family Living</h3>
                            <p class="bs-p-1 mb-0">Keep loved ones close while giving them comfort, companionship, everyday support, and independence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefits-end -->

    <!-- cta-start -->
    <section class="london-banner-content py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="london-cta">
                <div class="row align-items-center g-4">
                    <div class="col-lg-12">
                        <h2 class="bs-sec-title-1 text-white wa-split-right wa-capitalize mb-3" data-cursor="-opaque">
                            Granny Annexes in London
                        </h2>
                        <p class="bs-p-1 text-white mb-0 text-center">
                            From Luton town to Dunstable, Harpenden, and the surrounding Bedfordshire villages. 
                            Add comfort, flexibility, and long-term property value with stylish garden annexes in Luton tailored to modern living. 
                        </p>
                        <div class="london-cta-badges">
                            <span>32 boroughs covered</span>
                            <span>Fixed-price quote</span>
                            <span>Free site survey</span>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Get a London quote" class="bs-btn-1 onhover-border">
                            <span class="text">Get a London quote</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-end -->

    <!-- faqs-start -->
    <section class="bs-faqs-6-area py-lg-5 py-4">
        <div class="container bs-container-1">
            <div class="bs-team-3-sec-title wa-p-relative text-center mb-35">
                <h2 class="bs-sec-title-3 wa-split-right wa-capitalize" data-cursor="-opaque">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="faq-sidebar-main">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="faq-sidebar d-lg-flex d-md-none bs-testimonial-3-slider wa-fix">
                            <div class="bs-testimonial-3-item">
                                <div class="icon">
                                    <i class="flaticon-quote flaticon"></i>
                                </div>

                                <p class="bs-p-3 comment">
                                    <span class="wa-fadeInUp">
                                        At The Granny Annexe Company, we design and build bespoke annexes with planning support, quality construction, and a smooth project experience across London.
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="55px">
                                        <path fill-rule="evenodd" fill="rgb(0, 0, 0)" d="M15.305,0.5 L53.16,0.5 C56.754,0.5 59.429,2.891 59.237,6.446 L57.915,30.899 C57.733,34.273 54.794,38.70 51.119,39.490 L14.582,53.591 C7.187,56.446 0.587,54.741 0.587,49.447 L0.587,10.464 C0.587,4.706 7.547,0.5 15.305,0.5 Z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="bs-accordion has-details-page" id="accordionExampleLondon">
                            <div class="bs-accordion-item wa-fadeInUp active">
                                <div class="item-header" id="headingLondon0">
                                    <button class="item-title bs-h-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLondon0" aria-expanded="true" aria-controls="collapseLondon0">
                                        <span class="dot"></span>
                                        What do granny annexe providers offer?
                                    </button>
                                </div>
                                <div id="collapseLondon0" class="accordion-collapse collapse show" aria-labelledby="headingLondon0" data-bs-parent="#accordionExampleLondon">
                                    <div class="item-body">
                                        <p class="bs-p-1">Granny annexe providers in London design and build bespoke garden annexes for independent living, guest accommodation, home offices, and extra family space tailored to your property and lifestyle needs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bs-accordion-item wa-fadeInUp">
                                <div class="item-header" id="headingLondon1">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLondon1" aria-expanded="false" aria-controls="collapseLondon1">
                                        <span class="dot"></span>
                                        Does your team handle planning permission?
                                    </button>
                                </div>
                                <div id="collapseLondon1" class="accordion-collapse collapse" aria-labelledby="headingLondon1" data-bs-parent="#accordionExampleLondon">
                                    <div class="item-body">
                                        <p class="bs-p-1">Yes, we can manage the full process, including planning permission guidance, Lawful Development Certificate support, design, installation, and final build completion.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bs-accordion-item wa-fadeInUp">
                                <div class="item-header" id="headingLondon2">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLondon2" aria-expanded="false" aria-controls="collapseLondon2">
                                        <span class="dot"></span>
                                        How much does a garden annexe cost in London?
                                    </button>
                                </div>
                                <div id="collapseLondon2" class="accordion-collapse collapse" aria-labelledby="headingLondon2" data-bs-parent="#accordionExampleLondon">
                                    <div class="item-body">
                                        <p class="bs-p-1">The cost of a garden annexe in London depends on size, design, materials, specification, site access, and chosen finishes. We provide a free site survey and fixed-price quote.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bs-accordion-item wa-fadeInUp">
                                <div class="item-header" id="headingLondon3">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLondon3" aria-expanded="false" aria-controls="collapseLondon3">
                                        <span class="dot"></span>
                                        Are garden annexes a good investment for London homeowners?
                                    </button>
                                </div>
                                <div id="collapseLondon3" class="accordion-collapse collapse" aria-labelledby="headingLondon3" data-bs-parent="#accordionExampleLondon">
                                    <div class="item-body">
                                        <p class="bs-p-1">Garden annexes can add valuable living space and potentially increase property value, making them a popular long-term investment for London homeowners.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bs-accordion-item wa-fadeInUp">
                                <div class="item-header" id="headingLondon4">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLondon4" aria-expanded="false" aria-controls="collapseLondon4">
                                        <span class="dot"></span>
                                        How long does it take to complete a project?
                                    </button>
                                </div>
                                <div id="collapseLondon4" class="accordion-collapse collapse" aria-labelledby="headingLondon4" data-bs-parent="#accordionExampleLondon">
                                    <div class="item-body">
                                        <p class="bs-p-1">Project timelines vary depending on size and complexity, but many installations can be completed in around 6 to 10 weeks after approvals and preparation are complete.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bs-accordion-item wa-fadeInUp">
                                <div class="item-header" id="headingLondon5">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLondon5" aria-expanded="false" aria-controls="collapseLondon5">
                                        <span class="dot"></span>
                                        Can a garden annexe be used as a home office or guest space?
                                    </button>
                                </div>
                                <div id="collapseLondon5" class="accordion-collapse collapse" aria-labelledby="headingLondon5" data-bs-parent="#accordionExampleLondon">
                                    <div class="item-body">
                                        <p class="bs-p-1">Yes, garden annexes are highly versatile and can be used as home offices, guest suites, studios, rental spaces, or independent living areas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bs-accordion-item wa-fadeInUp">
                                <div class="item-header" id="headingLondon6">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLondon6" aria-expanded="false" aria-controls="collapseLondon6">
                                        <span class="dot"></span>
                                        Why choose The Granny Annexe Company?
                                    </button>
                                </div>
                                <div id="collapseLondon6" class="accordion-collapse collapse" aria-labelledby="headingLondon6" data-bs-parent="#accordionExampleLondon">
                                    <div class="item-body">
                                        <p class="bs-p-1">We offer expert design, quality construction, planning support, and tailored solutions to help create a reliable, comfortable, and long-lasting annexe.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faqs-end -->

</div>
@endsection

@section('js')
@endsection
