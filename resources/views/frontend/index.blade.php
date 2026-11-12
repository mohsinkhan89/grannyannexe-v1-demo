@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Granny Annexe Builders UK | Custom Garden Annexes Experts">
    <meta name="description"
        content="Looking for granny annexe builders UK? Our expert granny annexe builders UK design & build bespoke, affordable annexes. Fully compliant. Get your free quote today">
    <meta property="og:title" content="Granny Annexe Builders UK | Custom Garden Annexes Experts">
    <meta property="og:description"
        content="Looking for granny annexe builders UK? Our expert granny annexe builders UK design & build bespoke, affordable annexes. Fully compliant. Get your free quote today">
    <meta name="twitter:title" content="Granny Annexe Builders UK | Custom Garden Annexes Experts">
    <meta name="twitter:description"
        content="Looking for granny annexe builders UK? Our expert granny annexe builders UK design & build bespoke, affordable annexes. Fully compliant. Get your free quote today">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",
        "@graph":[

        {
            "@type":"Organization",

            "@id":"https://www.grannyannexecompany.co.uk/#org",

            "name":"The Granny Annexe Company",

            "url":"https://www.grannyannexecompany.co.uk/",

            "logo":"https://www.grannyannexecompany.co.uk/logo.png",

            "description":"Premium bespoke garden annexes and granny annexes designed and installed across the UK.",

            "telephone":"+44 333 444 0376",

            "email":"[email protected]",

            "founder":{
            "@type":"Person",
            "name":"Matt Biddle"
            },

            "address":{
            "@type":"PostalAddress",
            "streetAddress":"128 City Road",
            "addressLocality":"London",
            "postalCode":"EC1V 2NX",
            "addressCountry":"GB"
            },

            "areaServed":"GB"
            },

            {
            "@type":"WebSite",

            "@id":"https://www.grannyannexecompany.co.uk/#website",

            "url":"https://www.grannyannexecompany.co.uk/",

            "name":"The Granny Annexe Company",

            "publisher":{
            "@id":"https://www.grannyannexecompany.co.uk/#org"
            }
            },

            {
            "@type":"Service",

            "name":"Garden Annexe Design & Build",

            "provider":{
            "@id":"https://www.grannyannexecompany.co.uk/#org"
            },

            "serviceType":"Garden Annexe Construction",

            "areaServed":"United Kingdom"
            },

            {
            "@type":"Service",

            "name":"Granny Annexe Construction",

            "provider":{
            "@id":"https://www.grannyannexecompany.co.uk/#org"
            },

            "serviceType":"Bespoke Granny Annexe"
            },

            {
            "@type":"Service",

            "name":"Garden Studio Installation",

            "provider":{
            "@id":"https://www.grannyannexecompany.co.uk/#org"
            },

            "serviceType":"Garden Studio"
            },

            {
            "@type":"Service",

            "name":"Turnkey Annexe Build Service",

            "provider":{
            "@id":"https://www.grannyannexecompany.co.uk/#org"
            },

            "serviceType":"Planning To Installation"
            }

            ]
        }
    </script>
@endsection

@section('title')
    Garden Granny Annexe UK | Custom Designs - Granny Annexe Co.
@endsection

@section('css')
@endsection

@section('content')

    <!-- hero-start -->
    <section class="bs-hero-4-area wa-p-relative pt-90 wa-fix">
        <div class="container bs-container-2">
            <div class="bs-hero-4-content">
                <h1 class="bs-hero-4-title bs-h-4 wa-split-y cd-headline clip " data-split-delay="1s">
                    Bespoke Garden Annexes Designed for Modern Living
                    {{-- <span class="cd-words-wrapper single-headline">
                        <b class="is-visible">Designed</b>
                        <b>Built</b>
                        <b>Across</b>
                        <b>UK</b>
                    </span> --}}
                </h1>
                <div class="inner-div">
                    {{-- <a href="{{ route('about') }}" aria-label="name" class="bs-hero-4-circle-btn wa-magnetic-btn">
                        <span class="btn-icon ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00001 7C8.00001 6.73478 8.10537 6.48043 8.2929 6.29289C8.48044 6.10536 8.73479 6 9.00001 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8947 6.48043 18 6.73478 18 7V15C18 15.2652 17.8947 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16C16.7348 16 16.4804 15.8946 16.2929 15.7071C16.1054 15.5196 16 15.2652 16 15V9.414L7.70701 17.707C7.51841 17.8892 7.26581 17.99 7.00361 17.9877C6.74141 17.9854 6.4906 17.8802 6.30519 17.6948C6.11978 17.5094 6.01461 17.2586 6.01234 16.9964C6.01006 16.7342 6.11085 16.4816 6.29301 16.293L14.586 8H9.00001C8.73479 8 8.48044 7.89464 8.2929 7.70711C8.10537 7.51957 8.00001 7.26522 8.00001 7Z" fill="#a47966"/>
                            </svg>
                        </span>
                        <img src="{{url('frontend/assets/img/illus/cta-button.webp')}}" alt="">
                    </a> --}}
                    <a href="https://calendly.com/helengilmore-anxbuilds/30min"
                        onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;"
                        aria-label="Free consultation" class="bs-hero-4-circle-btn wa-magnetic-btn">
                        <span class="btn-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.00001 7C8.00001 6.73478 8.10537 6.48043 8.2929 6.29289C8.48044 6.10536 8.73479 6 9.00001 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8947 6.48043 18 6.73478 18 7V15C18 15.2652 17.8947 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16C16.7348 16 16.4804 15.8946 16.2929 15.7071C16.1054 15.5196 16 15.2652 16 15V9.414L7.70701 17.707C7.51841 17.8892 7.26581 17.99 7.00361 17.9877C6.74141 17.9854 6.4906 17.8802 6.30519 17.6948C6.11978 17.5094 6.01461 17.2586 6.01234 16.9964C6.01006 16.7342 6.11085 16.4816 6.29301 16.293L14.586 8H9.00001C8.73479 8 8.48044 7.89464 8.2929 7.70711C8.10537 7.51957 8.00001 7.26522 8.00001 7Z"
                                    fill="#a47966" />
                            </svg>
                        </span>


                        <!-- Circular Text -->
                        <svg class="circle-text" viewBox="0 0 200 200">
                            <defs>
                                <path id="circlePath" d="M100,100 m-75,0 a75,75 0 1,1 150,0 a75,75 0 1,1 -150,0" />
                            </defs>
                            <text>
                                <textPath href="#circlePath">
                                    ------------------------ BOOK AN APPOINTMENT
                                </textPath>
                            </text>
                        </svg>
                    </a>

                    <p class="bs-p-4" data-split-delay="1.6s">
                        As experts in designing and building Granny Annexes, we create
                        @foreach ($services as $ser)
                            <a href="{{ route('servicedetail', $ser->slug) }}">bespoke steel-frame living spaces</a>
                        @endforeach
                        tailored to your needs. From planning and groundwork to final handover, we manage every stage of
                        your project with precision and care.
                    </p>
                </div>
            </div>
        </div>

        <!-- slider -->
        <div class="bs-hero-4-slider">

            <div class="bs-hero-4-slider-img">
                <div class="swiper-container bs-h4-img-active wa-fix">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero First Banner" src="{{ url('frontend/assets/img/hero/05.jpg') }}"
                                        alt="Hero First Banner">
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero First Banner" src="{{ url('frontend/assets/img/gallery/16.jpg') }}"
                                        alt="Hero First Banner">
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero First Banner" src="{{ url('frontend/assets/img/hero/01-new.webp') }}"
                                        alt="Hero First Banner">
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero Second Banner" src="{{ url('frontend/assets/img/hero/03-new.webp') }}"
                                        alt="Hero Second Banner">
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero Third Banner" src="{{ url('frontend/assets/img/hero/04.webp') }}"
                                        alt="Hero Third Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bs-hero-4-slider-thum">
                <div class="swiper-container bs-h4-thum-active wa-fix">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero First Banner" src="{{ url('frontend/assets/img/hero/05.jpg') }}"
                                    alt="Hero First Banner">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero First Banner" src="{{ url('frontend/assets/img/gallery/16.jpg') }}"
                                    alt="Hero First Banner">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero First Banner" src="{{ url('frontend/assets/img/hero/01-new.webp') }}"
                                    alt="Hero First Banner">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero Second Banner" src="{{ url('frontend/assets/img/hero/03-new.webp') }}"
                                    alt="Hero Second Banner">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero Third Banner" src="{{ url('frontend/assets/img/hero/04.webp') }}"
                                    alt="Hero Third Banner">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <h2 class="bs-hero-4-big-title bs-h-4 wa-split-up" data-split-delay="1.5s">ANX BUILDS</h2>
        </div>


        {{-- <div class="bs-hero-4-bg" data-background="{{url('frontend/assets/img/hero/h4-bg.webp')}}"></div> --}}
    </section>
    <!-- hero-end -->

    <!-- core-feature-start -->
    <section class="bs-core-feature-4-area hp-card-height py-lg-5 py-md-3 py-4">
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <div class="bs-core-feature-4-wrap">

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight">
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">Modular Installation</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="Build System" loading="lazy" decoding="async"
                        src="{{ url('frontend/assets/img/core-features/build-system-01.webp') }}" alt="Build System">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    <a href="{{ route('process') }}">Our process</a> ensures <a href="{{ route('teamDetails') }}">high-quality craftsmanship</a> delivered in just a matter of weeks.
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.2s">
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">Design Your Annexe</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="Custom Unique" loading="lazy" decoding="async"
                        src="{{ url('frontend/assets/img/core-features/custom-unique-01.webp') }}" alt="Custom Unique">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    <a href="{{ route('gallery') }}">Every project reflects</a> your personal style and practical needs, creating a space that feels truly yours.
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.4s">
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">Highly insulated</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="High Efficincy Build" loading="lazy" decoding="async"
                        src="{{ url('frontend/assets/img/core-features/cf-4-icon-3-01.webp') }}"
                        alt="High Efficiency Build">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    Our annexes feature fully <a href="{{ route('gallery') }}">insulated walls, roofs, and floors</a> to ensure comfort during any season.
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.6s">
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">Engineered Strength</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="Engineered" loading="lazy" decoding="async"
                        src="{{ url('frontend/assets/img/core-features/engineered-01.webp') }}" alt="Engineered">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    Our
                    @foreach ($services as $ser)
                        <a href="{{ route('servicedetail', $ser->slug) }}">steel-frame construction</a>
                    @endforeach
                    provides a solid core, clean architectural lines and lasting durability.
                </p>
            </div>

        </div>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    </section>
    <!-- core-feature-end -->

    <!-- core-services-start -->
    <section class="bs-core-services-2-area home-pricing-banner wa-bg-default wa-fix">
        <div class="bs-core-services-2-wrap">

            <!-- single-item -->
            <div class="bs-core-services-2-item ">
                {{-- <div class="item-title"> --}}
                <div class="bs-h-2 item-title">
                    <span class="wa-split-up wa-capitalize wa-fix">
                        Prices Starting From
                    </span>
                </div>
                <div class="bs-h-2 item-title custom-top">
                    <strong>£62,395</strong>
                </div>
                <div class="item-btn custom-top-btn">
                    <a href="{{ route('price') }}" aria-label="name" class="bs-btn-1">
                        <span class="text">
                            See Our Prices
                        </span>
                        <span class="shape"></span>
                    </a>
                </div>
                {{-- </div> --}}
                {{-- <div class="content-wrap">
                    <h4 class="bs-h-2 item-title">
                        Prices Starting From
                    </h4>
                    <h4 class="bs-h-2 item-title">
                       <strong>£62,395</strong>
                    </h4>
                    <div class="item-btn">
                        <a href="{{ route('price') }}" aria-label="name" class="bs-btn-1">
                            <span class="text">
                                See Our Prices
                            </span>
                            <span class="shape" ></span>
                        </a>
                    </div>
                </div> --}}

                <div class="item-img wa-fix wa-img-cover">
                    <img title="Breadcrumb Blog Detail" loading="lazy" decoding="async"
                        src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-blog-detail.webp') }}"
                        alt="Breadcrumb Blog Detail">
                </div>
            </div>
        </div>
    </section>
    <!-- core-services-end -->

    <!-- comfort-section-start -->
    <section class="comfort-section py-lg-5 py-5 wa-fix">
        <div class="container bs-container-2">
            <div class="row align-items-center mb-5 comfort-top-row">
                <!-- Left: Main Large Image -->
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="comfort-main-img-wrap">
                        <img src="{{ url('frontend/assets/img/comfort/triple-glazing.png') }}"
                            alt="Cozy Granny Annexe Living Room" class="img-fluid comfort-main-img">
                    </div>
                </div>
                <!-- Right: Header Content -->
                <div class="col-lg-6 col-md-12 comfort-header-col">
                    <div class="comfort-header-content">
                        <div class="comfort-subtitle d-flex align-items-center gap-2 mb-3">
                            <span class="comfort-subtitle-icon">
                                <i class="fa-solid fa-house"></i>
                            </span>
                            <span class="comfort-subtitle-text">WARM, QUIET & COMFORTABLE</span>
                        </div>
                        <h2 class="comfort-title mb-4">Warm, Quiet & Comfortable Granny Annexes for Year-Round Living</h2>
                        <div class="comfort-desc">
                            <p class="mb-3">
                                Older family members often feel the cold more during winter months, which is why warmth and
                                comfort are at the heart of <a href="{{ route('gallery') }}">every annexe we build</a>.
                            </p>
                            <p class="mb-3">
                                Unlike many lower-spec annexes on the market, ours are designed for true year-round living. With
                                @foreach ($services as $ser)
                                    <a href="{{ route('servicedetail', $ser->slug) }}">
                                        triple glazing, high-performance insulation and precision-engineered steel frame construction
                                    </a>
                                @endforeach
                                , every detail is carefully considered to create a warm, quiet and
                                energy-efficient living environment.
                            </p>
                            <p class="mb-0">
                                In fact, our annexes are engineered to match and in many areas outperform the thermal
                                comfort standards found in many modern new-build bungalows.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom: 4 Column Feature Grid -->
            <div class="row comfort-grid mt-5">
                <!-- Card 1 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="comfort-card">
                        <div class="comfort-card-img-wrap">
                            <img src="{{ url('frontend/assets/img/comfort/triple-glazing.png') }}"
                                alt="Triple Glazing As Standard" class="comfort-card-img">
                        </div>
                        <div class="comfort-card-body">
                            <div class="comfort-card-icon-title d-flex align-items-start gap-2 mb-2">
                                <span class="comfort-card-icon">
                                    <i class="fa-solid fa-border-all"></i>
                                </span>
                                <h4 class="comfort-card-title">TRIPLE GLAZING AS STANDARD</h4>
                            </div>
                            <p class="comfort-card-text">
                                Every annexe we build includes high-performance triple glazed windows and doors as standard,
                                helping reduce heat loss, minimise drafts, and create a warmer and quieter home throughout
                                the year.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="comfort-card">
                        <div class="comfort-card-img-wrap">
                            <img src="{{ url('frontend/assets/img/comfort/insulation.jpg') }}"
                                alt="Highly Insulated Construction" class="comfort-card-img">
                        </div>
                        <div class="comfort-card-body">
                            <div class="comfort-card-icon-title d-flex align-items-start gap-2 mb-2">
                                <span class="comfort-card-icon"><i class="fa-solid fa-shield-halved"></i></span>
                                <h4 class="comfort-card-title">HIGHLY INSULATED CONSTRUCTION</h4>
                            </div>
                            <p class="comfort-card-text">
                                Our walls, floors and roofs are fully insulated to exceed many modern thermal performance
                                standards, helping maintain a comfortable indoor temperature in both winter and summer.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="comfort-card">
                        <div class="comfort-card-img-wrap">
                            <img src="{{ url('frontend/assets/img/comfort/energy-efficiency.jpg') }}"
                                alt="Lower Running Costs" class="comfort-card-img">
                        </div>
                        <div class="comfort-card-body">
                            <div class="comfort-card-icon-title d-flex align-items-start gap-2 mb-2">
                                <span class="comfort-card-icon"><i class="fa-solid fa-leaf"></i></span>
                                <h4 class="comfort-card-title">LOWER RUNNING COSTS</h4>
                            </div>
                            <p class="comfort-card-text">
                                Improved thermal efficiency means less energy is needed to keep the annexe warm during
                                colder months, helping reduce ongoing heating costs and improve long-term comfort.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="comfort-card">
                        <div class="comfort-card-img-wrap">
                            <img src="{{ url('frontend/assets/img/comfort/noise-reduction.jpg') }}"
                                alt="Peaceful Living Environment" class="comfort-card-img">
                        </div>
                        <div class="comfort-card-body">
                            <div class="comfort-card-icon-title d-flex align-items-start gap-2 mb-2">
                                <span class="comfort-card-icon">
                                    <i class="fa-solid fa-wave-square"></i>
                                    <!-- <i class="fa-solid fa-ear-slash"></i> -->
                                </span>
                                <h4 class="comfort-card-title">PEACEFUL LIVING ENVIRONMENT</h4>
                            </div>
                            <p class="comfort-card-text">
                                Triple glazing and insulated construction also help reduce outside noise, creating a quieter
                                and more relaxing space for everyday living.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom note banner -->
            <div class="comfort-note-banner">
                <div class="d-flex flex-column flex-lg-row flex-md-row align-items-center gap-3">
                    <span class="comfort-banner-icon">
                        <img src="{{ url('frontend/assets/img/icons/shield.webp') }}" alt="Shield Icon">
                    </span>
                    <p class="comfort-banner-text mb-0">
                        The result is an annexe that feels less like a garden building and more like a true extension of the
                        family home
                        <strong>– designed for comfortable independent living in every season.</strong>
                    </p>
                </div>
                <div class="comfort-banner-right-icon">
                    <!-- <i class="fa-solid fa-mug-hot"></i> -->
                    <img src="{{ url('frontend/assets/img/icons/coffee.webp') }}" alt="Coffee Icon">
                    <img src="{{ url('frontend/assets/img/icons/plant-pot.webp') }}" alt="Plant Pot Icon">
                </div>
            </div>
        </div>
    </section>
    <!-- comfort-section-end -->

    <!-- about-start -->
    <section class="bs-about-4-area py-lg-5 py-5 wa-fix">
        <div class="container bs-container-2">
            <div class="bs-subtitle-4 ">
                <span class="text">about us</span>
                <span class="icon">
                    <img title="Subtitle Svg" src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}"
                        alt="Subtitle Svg">
                </span>
            </div>

            <div class="bs-about-4-wrap">

                <!-- left-content -->
                <div class="bs-about-4-content">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Premium Quality
                        That Feels Like Home</h2>

                    <div class="inner-div">
                        <p class="bs-p-4 disc wa-fadeInUp">
                            Our bespoke annexes are built to exceed expectations, combining lasting comfort with house-level
                            specifications for warmth, security and everyday living. Unlike standard modular spaces, our
                            homes are designed to feel truly permanent.
                        </p>
                        <div class="btn-wrap wa-fadeInUp">
                            <a href="{{ route('about') }}" aria-label="name" class="bs-btn-1">
                                <span class="text">
                                    About Us
                                </span>
                                <span class="shape"></span>
                            </a>
                        </div>
                    </div>

                    <div class="illus wa-clip-left-right">
                        <img src="{{ url('frontend/assets/img/about/a4-illus-1.webp') }}" loading="lazy"
                            decoding="async" title="a4-illus First Img" alt="a4-illus First Img">
                    </div>

                    <!-- feature -->
                    {{-- <div class="bs-about-4-feature">

                        <!-- single -->
                        <div class="bs-about-4-feature-single wow fadeInRight">
                            <div class="item-icon">
                                <i class="flaticon-denver flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 item-title">
                                <a href="#" aria-label="name">modern Design</a>
                            </h4>
                            <p class="bs-p-4 item-disc">post no so what deal evil rent by real in. but her ready lived spite solid</p>
                        </div>

                        <!-- single -->
                        <div class="bs-about-4-feature-single wow fadeInRight" data-wow-delay=".2s">
                            <div class="item-icon">
                                <i class="flaticon-goodwill-1 flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 item-title">
                                <a href="#" aria-label="name">quality work</a>
                            </h4>
                            <p class="bs-p-4 item-disc">collaboration is at the core of our process as our architects work.</p>
                        </div>

                    </div> --}}
                </div>

                <div class="bs-about-4-right">
                    <div class="bs-about-4-project wa-bg-default wa-parallax-item-right-left"
                        data-background="{{ url('frontend/assets/img/about/about-small-img.webp') }}">
                        <div class="icon">
                            <i class="flaticon-right-arrow flaticon"></i>
                        </div>
                        <h3 class="bs-h-4 title">
                            <a href="{{ route('gallery') }}" aria-label="name">Find Inspiration for Your Garden
                                Annexe</a>
                        </h3>
                        <p class="bs-p-4 disc">
                            Discover your style with our newly installed Granny Annexes.
                        </p>
                    </div>

                    <div class="bs-about-4-img wa-fix wa-img-cover">
                        <img class="wa-parallax-img" src="{{ url('frontend/assets/img/about/about-img.webp') }}"
                            loading="lazy" decoding="async" title="About Img" alt="About Img">
                    </div>

                    <div class="illus-2">
                        <img src="{{ url('frontend/assets/img/about/a4-illus-2.webp') }}" loading="lazy"
                            decoding="async" title="a4-illus Second Img" alt="a4-illus Second Img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-end -->

    <!-- video-start -->
    <div class="bs-video-4-area">
        <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{ url('frontend/assets/img/video/v4-img-1-updated.webp') }}"
                loading="lazy" decoding="async" title="img updated" alt="img updated">

            <div class="bs-video-4-text">
                {{-- <div class="bs-video-4-marquee-active"> --}}
                {{-- <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">The Granny Annexe Company</h4> --}}
                <div class="banner-logo">
                    {{-- <img src="{{ url('frontend/assets/img/logo/banner-logo.webp') }}" alt="Company Logo"> --}}
                    <img src="{{ url('storage') }}/{{ setting('site.logo') }}" title="Logo" alt="Logo">
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <!-- video-end -->


    <!-- services-start -->
    @include('frontend.inc.servicecards')
    <!-- services-end -->

    <section class="custom-choose wa-bg-default wa-fix pb-lg-5 pb-0">
        <div class="container bs-container-2">
            <div class="bs-choose-4-wrap">

                <div class="bs-choose-4-content-height">
                    <!-- left-content -->
                    <div class="bs-choose-4-content-pin">
                        <div class="bs-choose-4-content py-lg-5 py-md-4 py-5">

                            <div class="bs-subtitle-4 bs-choose-4-subtitle">
                                <span class="text">WHY CHOOSE US</span>
                                <span class="icon">
                                    <img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}"
                                        title="subtitle icon second" alt="subtitle icon second">
                                </span>
                            </div>

                            <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                                More Than 'Just' a Garden Annexe, It's an Extension of your home
                            </h2>

                            <p class="bs-p-4 disc wa-fadeInUp mb-lg-3 mb-md-2 mb-2">
                                When comparing options, the difference often lies beneath the surface. While many granny
                                annexes may appear similar, the quality of materials, insulation, and construction plays a
                                crucial role in long-term performance.
                            </p>
                            <p class="bs-p-4 disc wa-fadeInUp">
                                We believe a <a href="{{ route('theGardenStudio') }}">garden annexe</a> should be built to the same standard as a high-quality home. That
                                is why we go beyond basic requirements, focusing on durability, comfort, and craftsmanship
                                that lasts for years.
                            </p>

                            <div class="btn-wrap wa-fadeInUp">
                                <a href="{{ route('about') }}#why-choose-us" aria-label="name" class="bs-btn-1">
                                    <span class="text">
                                        Learn More
                                    </span>
                                    <span class="shape"></span>
                                </a>
                            </div>

                            {{-- <h5 class="bs-subtitle-4 bs-choose-4-subtitle mb-3">
                                <span class="text">
                                    Typical Building Regulation requirements:
                                </span>
                            </h5>
                            <div class="bs-choose-4-progress">
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Walls: around 0.26 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Roofs: around 0.16 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Floors: around 0.18 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span>
                                            Windows: around 1.4 W/m2K
                                        </span>
                                    </h5>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- right-play-btn -->
                <div class="bs-choose-4-right d-flex justify-content-center align-items-center">

                </div>
            </div>
        </div>
    </section>
    <!-- choose-end -->

    @include('frontend.inc.client-experiences', ['mode' => 'home'])

    <!-- gallery-start -->
    <section class="anx-home-gallery-area py-lg-5 py-md-4 py-4">
        <div class="container bs-container-2">
            <div class="bs-blog-4-content">
                <div class="bs-subtitle-4 text-white">
                    <span class="text">project gallery</span>
                    <span class="icon">
                        <img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third"
                            alt="subtitle third">
                    </span>
                </div>
                <div class="inner-div">
                    <div class="d-flex flex-column">
                        <h2 class="text-white bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                            Explore Our Completed Annexes</h2>
                    </div>
                    <div class="btn-wrap wa-fadeInRight">
                        <a href="{{ route('gallery') }}" aria-label="View full gallery"
                            class="bs-btn-1 transperent-btn">
                            <span class="text">View Gallery</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="anx-home-gallery-grid wa-fadeInUp">
                <a href="{{ route('gallery') }}" class="gallery-box anx-home-gallery-item is-large wa-img-cover"
                    data-cursor-text="View">
                    <img src="{{ url('frontend/assets/img/gallery/16.jpg') }}" loading="lazy" decoding="async"
                        title="Garden Annexe Exterior" alt="Garden Annexe Exterior">
                    <div class="gallery-caption">
                        Exterior Design
                    </div>
                </a>
                <a href="{{ route('gallery') }}" class="gallery-box anx-home-gallery-item wa-img-cover"
                    data-cursor-text="View">
                    <img src="{{ url('frontend/assets/img/gallery/new-second-images/11.jpg') }}" loading="lazy"
                        decoding="async" title="Exterior Design Drone View" alt="Exterior Design Drone View">
                    <div class="gallery-caption">
                        Exterior Design Drone View
                    </div>
                </a>
                <a href="{{ route('gallery') }}" class="gallery-box anx-home-gallery-item wa-img-cover"
                    data-cursor-text="View">
                    <img src="{{ url('frontend/assets/img/gallery/new-second-images/15.jpg') }}" loading="lazy"
                        decoding="async" title="Interior Design" alt="Interior Design">
                    <div class="gallery-caption">
                        Interior Design
                    </div>
                </a>
                <a href="{{ route('gallery') }}" class="gallery-box anx-home-gallery-item wa-img-cover"
                    data-cursor-text="View">
                    <img src="{{ url('frontend/assets/img/gallery/new-second-images/29.jpg') }}" loading="lazy"
                        decoding="async" title="Kitchen Design" alt="Kitchen Design">
                    <div class="gallery-caption">
                        Kitchen Design
                    </div>
                </a>
                <a href="{{ route('gallery') }}" class="gallery-box anx-home-gallery-item wa-img-cover"
                    data-cursor-text="View">
                    <img src="{{ url('frontend/assets/img/gallery/new-images/05.jpg') }}" loading="lazy"
                        decoding="async" title="Kitchen Design" alt="Kitchen Design">
                    <div class="gallery-caption">
                        Kitchen Design
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- gallery-end -->

    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close" id="closeVideoModal">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6l12 12" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <div class="video-loader" id="videoLoader" style="display: none;">
                <div class="spinner"></div>
                <p>Loading video...</p>
            </div>
            <video id="modalVideo" class="w-100 h-100" controls preload="metadata" playsinline>
                <source id="modalVideoSource" src="data:video/mp4;base64," type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <iframe id="modalYoutubeVideo" class="w-100 h-100" src="about:blank" title="Client experience video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen style="display: none;"></iframe>
        </div>
    </div>
    <!-- client-videos-end -->

    <!-- team-start -->
    <section id="meet-the-team" class="bs-team-4-area py-lg-5 py-4 wa-fix">
        <div class="container bs-container-2">

            <!-- section-title -->
            <div class="bs-team-3-sec-title wa-p-relative text-center mb-35">
                <h2 class="bs-sec-title-3  wa-split-right wa-capitalize" data-cursor="-opaque">
                    OUR TEAM
                </h2>
            </div>

            <!-- member -->
            <div class="swiper bs-team-4-slider wa-fix">
                <div class="swiper-wrapper">

                    <!-- single-member -->
                    @foreach ($Teams as $team)
                        <div class="swiper-slide">
                            <div class="bs-team-4-member-single">
                                <div class="member-img wa-fix wa-img-cover">
                                    <a href="{{ route('teamDetails', ['member' => $team->id]) }}"
                                        data-cursor-text="Details">
                                        <img src="{{ url('storage/' . $team->card_img) }}" alt="{{ $team->name }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h3 class="bs-h-4 name">
                                        <a href="{{ route('teamDetails', ['member' => $team->id]) }}"
                                            aria-label="name">{{ $team->name }}</a>
                                    </h3>
                                    <p class="bs-p-4 bio">{{ $team->designation }}</p>
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                    <span class="line-4"></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </section>
    <!-- team-end -->

    <!-- faq-start -->
    <section class="bs-faqs-6-area py-lg-5 py-4">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-team-3-sec-title wa-p-relative text-center mb-35">
                <h2 class="bs-sec-title-3  wa-split-right wa-capitalize" data-cursor="-opaque">
                    Frequently Asked Questions
                </h2>
            </div>

            <!-- bs-wrap -->
            <div class="faq-sidebar-main">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- left-slider -->
                        <div class="faq-sidebar d-lg-flex d-md-none bs-testimonial-3-slider wa-fix">
                            <div class="bs-testimonial-3-item">
                                <div class="icon">
                                    <i class="flaticon-quote flaticon"></i>
                                </div>

                                <p class="bs-p-3 comment">
                                    <span class="wa-fadeInUp">
                                        At The Granny Annexe Company, we are committed to delivering exceptional quality,
                                        precision craftsmanship, and reliable service across every project.
                                        <a href="https://share.google/QTJFrEh0lyQMqTVw5">
                                            As a trusted name in the UK, Granny Annexe Company specialises in designing & building bespoke granny annexes
                                        </a>
                                        according to your lifestyle & property needs.
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="60px" height="55px">
                                        <path fill-rule="evenodd" fill="rgb(0, 0, 0)"
                                            d="M15.305,0.5 L53.16,0.5 C56.754,0.5 59.429,2.891 59.237,6.446 L57.915,30.899 C57.733,34.273 54.794,38.70 51.119,39.490 L14.582,53.591 C7.187,56.446 0.587,54.741 0.587,49.447 L0.587,10.464 C0.587,4.706 7.547,0.5 15.305,0.5 Z" />
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <!-- right-faqs -->
                        <div class="bs-accordion has-details-page" id="accordionExample_31">
                            <!-- single-team -->
                            <div class="bs-accordion-item wa-fadeInUp active">

                                <div class="item-header" id="heading0">
                                    <button class="item-title bs-h-1 " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                        <span class="dot"></span>
                                        How do we start your project?
                                    </button>
                                </div>

                                <div id="collapse0" class="accordion-collapse collapse show" role="region" aria-labelledby="heading0"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            As <a href="https://share.google/QTJFrEh0lyQMqTVw5">expert granny annexe providers</a>, we manage <a href="{{ route('process') }}">everything from planning permission to the final build</a>. We specialise in creating
                                            @foreach ($services as $ser)
                                                <a href="{{ route('servicedetail', $ser->slug) }}">bespoke steel-frame granny annexes</a>
                                            @endforeach
                                            and <a href="https://share.google/QTJFrEh0lyQMqTVw5">independent living spaces</a> designed for comfort, quality, and peace of mind.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading1">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        <span class="dot"></span>
                                        What makes our construction superior?
                                    </button>
                                </div>

                                <div id="collapse1" class="accordion-collapse collapse " role="region" aria-labelledby="heading1"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            @foreach ($services as $ser)
                                                <a  href="{{ route('servicedetail', $ser->slug) }}">Our steel-frame garden annexes</a>
                                            @endforeach
                                            are the premium structural choice, offering more
                                            durability than standard modular annexes. As a <a href="https://share.google/QTJFrEh0lyQMqTVw5">leading annexe provider</a>, we
                                            ensure every <a href="{{ route('theGardenStudio') }}">garden annexe</a> feature house-level specification for security &
                                            comfort.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading3">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        <span class="dot"></span>
                                        How much does it cost to build a granny annexe?
                                    </button>
                                </div>

                                <div id="collapse3" class="accordion-collapse collapse " role="region" aria-labelledby="heading3"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            The <a href="{{ route('price') }}">cost of a granny annexe in the UK</a> typically depends on size, design,
                                            materials, and site conditions. We offer fully tailored solutions to suit
                                            different budgets, ensuring high-quality construction without hidden costs.
                                            <a href="{{ route('contact') }}">Contact us for a personalised quote</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading4">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <span class="dot"></span>
                                        Can a granny annexe add value to my property?
                                    </button>
                                </div>

                                <div id="collapse4" class="accordion-collapse collapse " role="region" aria-labelledby="heading4"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            Yes, a <a href="https://share.google/QTJFrEh0lyQMqTVw5">professionally built granny annexe</a> can significantly increase your
                                            property’s value. It adds functional living space and is highly attractive to
                                            buyers looking for <a href="https://share.google/QTJFrEh0lyQMqTVw5">multi-generational living solutions</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading5">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        <span class="dot"></span>
                                        How long does it take to design and build a granny annexe?
                                    </button>
                                </div>

                                <div id="collapse5" class="accordion-collapse collapse " role="region" aria-labelledby="heading5"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            The timeline can vary depending on the complexity of the design, site
                                            conditions, and planning approvals. On average, the <a href="{{ route('process') }}">full process from initial
                                            consultation and design to construction and final handover can take between 8 to
                                            16 weeks</a>. We aim to keep the process smooth, transparent, and efficient at every
                                            stage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial-start -->
    {{-- <section class="bs-faqs-6-area py-lg-5 py-4">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-team-3-sec-title wa-p-relative text-center mb-35">
                <h2 class="bs-sec-title-4  wa-split-right wa-capitalize" data-cursor="-opaque">
                    Frequently Asked Questions
                </h2>
            </div>

            <!-- bs-wrap -->
            <div class="bs-faqs-6-wrap bs-testimonial-3-wrap">

                <!-- left-slider -->
                <div class="bs-testimonial-3-slider wa-fix">
                    <div class="bs-testimonial-3-item">
                        <div class="icon">
                            <i class="flaticon-quote flaticon"></i>
                        </div>

                        <p class="bs-p-3 comment">
                            <span class="wa-fadeInUp">
                                At Granny Annexe Company, we are committed to delivering exceptional quality, precision craftsmanship, and reliable service across every project. As a trusted name in the UK, Granny Annexe Company specialises in designing & building bespoke granny annexes according to your lifestyle & property needs.
                            </span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="60px" height="55px">
                                <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                                d="M15.305,0.5 L53.16,0.5 C56.754,0.5 59.429,2.891 59.237,6.446 L57.915,30.899 C57.733,34.273 54.794,38.70 51.119,39.490 L14.582,53.591 C7.187,56.446 0.587,54.741 0.587,49.447 L0.587,10.464 C0.587,4.706 7.547,0.5 15.305,0.5 Z"/>
                            </svg>
                        </p>
                    </div>
                </div>


                <!-- right-faqs -->
                <div class="bs-accordion has-details-page" id="accordionExample_31">
                    <!-- single-team -->
                    <div class="bs-accordion-item wa-fadeInUp active">

                        <div class="item-header" id="heading0">
                            <button class="item-title bs-h-1 " type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                <span class="dot"></span>
                                How do we start your project?
                            </button>
                        </div>

                        <div id="collapse0" class="accordion-collapse collapse show" aria-labelledby="heading0" data-bs-parent="#accordionExample_31">
                            <div class="item-body">
                                <p class="bs-p-1">
                                    As expert granny annexe builders UK, we manage everything from planning permission to the final build. We specialize in providing a bespoke granny annexe or an annexe for elderly parents UK families trust, creating high quality, independent living spaces.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="bs-accordion-item wa-fadeInUp ">
                        <div class="item-header" id="heading1">
                            <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                <span class="dot"></span>
                                What makes our construction superior?
                            </button>
                        </div>

                        <div id="collapse1" class="accordion-collapse collapse " aria-labelledby="heading1" data-bs-parent="#accordionExample_31">
                            <div class="item-body">
                                <p class="bs-p-1">
                                    Our steel-frame garden annexes are the premium structural choice, offering more durability than standard modular annexes UK. As a leading UK provider, we ensure every garden annexe UK features house-level specifications for security & comfort.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="bs-accordion-item wa-fadeInUp ">
                        <div class="item-header" id="heading2">
                            <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <span class="dot"></span>
                                How much does it cost to build a granny annexe?
                            </button>
                        </div>

                        <div id="collapse2" class="accordion-collapse collapse " aria-labelledby="heading2" data-bs-parent="#accordionExample_31">
                            <div class="item-body">
                                <p class="bs-p-1">
                                    The cost of a granny annexe in the UK typically depends on size, design, materials, and site conditions. We offer fully tailored solutions to suit different budgets, ensuring high-quality construction without hidden costs. Contact us for a personalised quote.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="bs-accordion-item wa-fadeInUp ">
                        <div class="item-header" id="heading3">
                            <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <span class="dot"></span>
                                Can a granny annexe add value to my property?
                            </button>
                        </div>

                        <div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3" data-bs-parent="#accordionExample_31">
                            <div class="item-body">
                                <p class="bs-p-1">
                                    Yes, a professionally built granny annexe can significantly increase your property’s value. It adds functional living space and is highly attractive to buyers looking for multi-generational living solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- blog-start -->
    <section class="bs-blog-4-area py-lg-5 py-md-4 py-4 overflow-hidden">
        <div class="container bs-container-2">
            <div class="bs-blog-4-content">
                <div class="bs-subtitle-4 ">
                    <span class="text">blog & news</span>
                    <span class="icon">
                        <img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third"
                            alt="subtitle third">
                    </span>
                </div>
                <div class="inner-div">
                    <div class="d-flex flex-column">
                        <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize mb-md-3 mb-3" data-cursor="-opaque">
                            Latest Guides & Articles</h2>
                        <p class="bs-p-4 disc wa-fadeInUp">
                            Discover everything you need to know about planning <a href="{{ route('gallery') }}">garden annexe designs</a>.
                        </p>
                    </div>
                    <div class="btn-wrap wa-fadeInRight">
                        <a href="{{ route('blogs') }}" aria-label="name" class="bs-btn-1 white-btn">
                            <span class="text">
                                View All Blogs
                            </span>
                            <span class="shape"></span>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Swiper -->
            <div class="swiper BlogSwiper">
                <div class="swiper-wrapper">
                    @foreach ($blogs as $blog)
                        <div class="swiper-slide">
                            <div class="bs-blog-4-wrap">
                                <div class="bs-blog-4-item wow fadeInRight">
                                    <div class="item-img wa-fix wa-img-cover">
                                        <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name"
                                            data-cursor-text="View">
                                            <span class="anx-blog-hover-badge">{{ $blog->blogarticle }}</span>
                                            <img src="{{ url('storage/' . str_replace('\\', '/', $blog->home_card_img)) }}"
                                                loading="lazy" decoding="async" title="{{ $blog->title }}"
                                                alt="{{ $blog->title }}">
                                            {{-- <img src="{{ url('storage/' . $blog->home_card_img) }}" title="{{ $blog->title }}" alt="{{ $blog->title }}"> --}}
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name"
                                            class="item-btn">
                                            <i class="flaticon-top-right flaticon"></i>
                                        </a>
                                        <p class="bs-p-4 author">{{ ucwords($blog->sub_title) }}</p>
                                        <h3 class="title bs-h-1 text-ellipsis-2">
                                            <a href="{{ route('blogDeails', $blog->slug) }}"
                                                aria-label="name">{{ ucwords($blog->title) }}</a>
                                        </h3>
                                        <p class="item-meta bs-p-4">
                                            {{-- <span class="categories" >Garden Annexes</span> --}}
                                            <span class="date">
                                                {{ substr(\Carbon\Carbon::parse($blog->created_at)->format('F'), 0, 3) }}
                                                {{ substr(\Carbon\Carbon::parse($blog->created_at)->format('Y'), 0, 4) }}
                                            </span>
                                            <span class="read">read</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- blog-end -->

    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->

@endsection

@section('microformats')
    <div class="h-card h-org d-none d-md-none d-lg-none">

        <div class="p-name">The Granny Annexe Company</div>

        <img class="u-logo"
        src="https://www.grannyannexecompany.co.uk/logo.png"
        alt="The Granny Annexe Company">

        <p class="p-note">
        Premium bespoke steel-frame granny annexes and garden living spaces across the UK.
        </p>

        <a class="u-url"
        href="https://www.grannyannexecompany.co.uk/">
        https://www.grannyannexecompany.co.uk/
        </a>

        <div class="p-adr h-adr">
        <span class="p-street-address">
        128 City Road
        </span>

        <span class="p-locality">
        London
        </span>

        <span class="p-postal-code">
        EC1V 2NX
        </span>

        <span class="p-country-name">
        United Kingdom
        </span>
        </div>

        <a class="u-email"
        href="mailto:[email protected]">
        [email protected]
        </a>

        <a class="p-tel"
        href="tel:+443334440376">
        03334440376
        </a>

        <div class="p-category">
        Garden Annexes
        </div>

        <div class="p-category">
        Granny Annexes
        </div>

        <div class="p-category">
        Garden Studios
        </div>

    </div>
@endsection


@section('js')
    <!-- Swiper JS -->
    <script>
        var partnerSwiper = new Swiper('.BlogSwiper', {
            // slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                prevEl: '.prev-partner',
                nextEl: '.next-partner',
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                510: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },

                980: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 2
                }
            }
        });

        var clientVideoSwiper = new Swiper('.ClientVideoSwiper', {
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.ClientVideoSwiper .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                }
            }
        });

        // Lazy load and autoplay videos when they come into view
        document.addEventListener("DOMContentLoaded", function() {
            let lazyVideos = [].slice.call(document.querySelectorAll("video.lazy-video"));
            if ("IntersectionObserver" in window) {
                let lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(video) {
                        if (video.isIntersecting) {
                            for (let source in video.target.children) {
                                let videoSource = video.target.children[source];
                                if (typeof videoSource.tagName === "string" && videoSource
                                    .tagName === "SOURCE") {
                                    if (videoSource.dataset.src) {
                                        videoSource.src = videoSource.dataset.src;
                                        videoSource.removeAttribute('data-src');
                                    }
                                }
                            }
                            video.target.load();
                            video.target.play().catch(function(error) {
                                console.log("Autoplay prevented:", error);
                            });
                            video.target.classList.remove("lazy-video");
                            lazyVideoObserver.unobserve(video.target);
                        }
                    });
                });

                lazyVideos.forEach(function(lazyVideo) {
                    lazyVideoObserver.observe(lazyVideo);
                });
            }
        });

        // Video Modal Functionality with Optimized Loading
        document.addEventListener('DOMContentLoaded', function() {
            // Get all video cards and modal elements
            const videoCards = document.querySelectorAll('.youtube-video-card');
            const videoModal = document.getElementById('videoModal');
            const modalVideo = document.getElementById('modalVideo');
            const modalVideoSource = document.getElementById('modalVideoSource');
            const modalYoutubeVideo = document.getElementById('modalYoutubeVideo');
            const closeButton = document.getElementById('closeVideoModal');
            const videoLoader = document.getElementById('videoLoader');
            const seekableVideoUrls = new Map();
            let activeVideoRequest = null;
            let videoLoadToken = 0;

            // Preload video metadata only
            function preloadVideo(videoSrc) {
                const video = document.createElement('video');
                video.preload = 'metadata';
                video.src = videoSrc;
            }

            // Preload all videos on page load
            videoCards.forEach(card => {
                const videoSrc = card.getAttribute('data-video-src');
                if (card.getAttribute('data-video-type') !== 'youtube') {
                    preloadVideo(videoSrc);
                }
            });

            async function getSeekableVideoUrl(videoSrc, signal) {
                if (seekableVideoUrls.has(videoSrc)) {
                    return seekableVideoUrls.get(videoSrc);
                }

                const response = await fetch(videoSrc, {
                    signal
                });
                if (!response.ok) {
                    throw new Error('Unable to load video');
                }

                const videoBlob = await response.blob();
                const videoUrl = URL.createObjectURL(videoBlob);
                seekableVideoUrls.set(videoSrc, videoUrl);
                return videoUrl;
            }

            function playModalVideo() {
                modalVideo.load();

                const playPromise = modalVideo.play();
                if (playPromise !== undefined) {
                    playPromise.then(function() {
                        console.log('Video playback started');
                        videoLoader.style.display = 'none';
                    }).catch(function(error) {
                        console.log('Autoplay failed:', error);
                        videoLoader.innerHTML = '<p>Click play button to start video</p>';
                    });
                }
            }

            // Handle video ready state
            modalVideo.addEventListener('loadedmetadata', function() {
                videoLoader.style.display = 'none';
                modalVideo.classList.add('ready');
                console.log('Video metadata loaded');
            });

            modalVideo.addEventListener('canplay', function() {
                videoLoader.style.display = 'none';
                modalVideo.classList.add('ready');
            });

            modalVideo.addEventListener('waiting', function() {
                if (!modalVideo.seeking) {
                    videoLoader.style.display = 'block';
                }
            });

            modalVideo.addEventListener('playing', function() {
                videoLoader.style.display = 'none';
            });

            modalVideo.addEventListener('seeking', function() {
                videoLoader.style.display = 'none';
            });

            modalVideo.addEventListener('seeked', function() {
                videoLoader.style.display = 'none';
            });

            // Open modal and play video
            document.addEventListener('click', async function(e) {
                const card = e.target.closest('.youtube-video-card');
                if (!card) {
                    return;
                }

                e.preventDefault();
                e.stopPropagation();

                const videoSrc = card.getAttribute('data-video-src');
                const videoType = card.getAttribute('data-video-type') || 'mp4';
                console.log('Opening video modal:', videoSrc);
                const currentLoadToken = ++videoLoadToken;

                if (activeVideoRequest) {
                    activeVideoRequest.abort();
                }
                activeVideoRequest = new AbortController();

                // Show loading indicator
                videoLoader.style.display = 'block';
                videoLoader.innerHTML = '<div class="spinner"></div><p>Loading video...</p>';
                modalVideo.classList.remove('ready');
                modalVideo.pause();
                modalYoutubeVideo.style.display = 'none';
                modalYoutubeVideo.src = '';
                modalVideo.style.display = 'block';

                // Clear the old video before loading the next one
                modalVideoSource.src = '';
                modalVideo.load();

                // Make modal visible
                videoModal.classList.add('active');
                document.body.style.overflow = 'hidden';

                if (videoType === 'youtube') {
                    modalVideo.style.display = 'none';
                    modalYoutubeVideo.style.display = 'block';
                    modalYoutubeVideo.src = videoSrc;
                    videoLoader.style.display = 'none';
                    return;
                }

                try {
                    const seekableVideoUrl = await getSeekableVideoUrl(videoSrc, activeVideoRequest
                        .signal);
                    if (currentLoadToken !== videoLoadToken) {
                        return;
                    }

                    modalVideoSource.src = seekableVideoUrl;
                    playModalVideo();
                } catch (error) {
                    if (error.name === 'AbortError') {
                        return;
                    }

                    console.log('Seekable video load failed, using direct source:', error);
                    modalVideoSource.src = videoSrc;
                    playModalVideo();
                }
            });

            // Close modal
            function closeModal() {
                videoLoadToken++;
                if (activeVideoRequest) {
                    activeVideoRequest.abort();
                    activeVideoRequest = null;
                }
                videoModal.classList.remove('active');
                modalVideo.pause();
                modalVideo.currentTime = 0;
                modalVideo.classList.remove('ready');
                modalVideo.style.display = 'block';
                modalYoutubeVideo.style.display = 'none';
                modalYoutubeVideo.src = '';
                videoLoader.style.display = 'none';
                videoLoader.innerHTML = '<div class="spinner"></div><p>Loading video...</p>';
                modalVideoSource.src = '';
                document.body.style.overflow = 'auto';
            }

            window.addEventListener('beforeunload', function() {
                seekableVideoUrls.forEach(function(videoUrl) {
                    URL.revokeObjectURL(videoUrl);
                });
            });

            // Close button click
            if (closeButton) {
                closeButton.addEventListener('click', closeModal);
            }

            // Close when clicking on overlay
            const modalOverlay = document.querySelector('.modal-overlay');
            if (modalOverlay) {
                modalOverlay.addEventListener('click', closeModal);
            }

            // Close on Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && videoModal.classList.contains('active')) {
                    closeModal();
                }
            });
        });
    </script>
@endsection
