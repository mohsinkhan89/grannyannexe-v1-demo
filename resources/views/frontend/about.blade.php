@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK Experts | About ANX Builds">
    <meta name="description"
        content="Garden granny annexe UK specialists at ANX Builds. Learn about our team, values and quality led builds. Speak to us today for a free quote. Book a consultation.">
    <meta property="og:title" content="Garden Granny Annexe UK Experts | About ANX Builds">
    <meta property="og:description"
        content="Garden granny annexe UK specialists at ANX Builds. Learn about our team, values and quality led builds. Speak to us today for a free quote. Book a consultation.">
    <meta name="twitter:title" content="Garden Granny Annexe UK Experts | About ANX Builds">
    <meta name="twitter:description"
        content="Garden granny annexe UK specialists at ANX Builds. Learn about our team, values and quality led builds. Speak to us today for a free quote. Book a consultation.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",

            "@type":"AboutPage",

            "name":"About The Granny Annexe Company",

            "mainEntity":{

            "@type":"Organization",

            "name":"The Granny Annexe Company",

            "description":"Designing and building premium steel-frame granny annexes across the UK."
            }
        }
    </script>
@endsection

@section('title')
    Garden Granny Annexe UK Experts | About ANX Builds
@endsection

@section('css')
    <!-- Demo styles -->
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="breadcrumb-about" loading="lazy" decoding="async"
                src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-about.webp') }}" alt="breadcrumb-about">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">About Us</h1>

                <div class="breadcrumb-list ">
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z"
                            fill="white" />
                    </svg>

                    <a href="{{ route('index') }}">Home</a>
                    <span>About us</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- about-start -->
    <section class="bs-about-1-area py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-about-1-sec-title mb-30 mb-md-3">
                {{-- <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                    <span class="icon">
                        <img title="star-shape" src="{{url('frontend/assets/img/illus/star-shape.webp')}}" alt="star-shape">
                    </span>
                    About Us
                </h6> --}}
                <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">
                    Premium quality granny annexes, engineered to last.
                </h2>
            </div>

            <!-- slider -->
            <div class="swiper AboutImgSwiper">
                <div class="swiper-wrapper">
                    <!-- single-slide -->
                    <div class="swiper-slide">
                        <div class="bs-about-1-item wa-fix ">
                            <a href="{{ url('frontend/assets/img/about/01.webp') }}" class="popup-img wa-img-cover">
                                <img title="about img" loading="lazy" decoding="async"
                                    src="{{ url('frontend/assets/img/about/01.webp') }}" alt="about img">
                            </a>
                        </div>
                    </div>

                    <!-- single-slide -->
                    <div class="swiper-slide">
                        <div class="bs-about-1-item wa-fix ">
                            <a href="{{ url('frontend/assets/img/about/02.webp') }}" class="popup-img wa-img-cover">
                                <img title="about second img" loading="lazy" decoding="async"
                                    src="{{ url('frontend/assets/img/about/02.webp') }}" alt="about second img">
                            </a>
                        </div>
                    </div>

                    <!-- single-slide -->
                    <div class="swiper-slide">
                        <div class="bs-about-1-item wa-fix ">
                            <a href="{{ url('frontend/assets/img/about/03.webp') }}" class="popup-img wa-img-cover">
                                <img title="about third img" loading="lazy" decoding="async"
                                    src="{{ url('frontend/assets/img/about/03.webp') }}" alt="about third img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            {{-- <div class="bs-about-1-slider mb-40 mb-md-3 wa-p-relative">
                <div class="swiper-container wa-fix bs-a1-active">
                    <div class="swiper-wrapper">
                    </div>
                </div>
            </div> --}}

            <!-- content -->
            <div class="bs-about-1-content mt-lg-5 mt-md-3 mt-3">
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    <a href="{{ route('index') }}">The Granny Annexe Company</a> designs, builds and
                    @foreach ($services as $ser)
                        <a href="{{ route('servicedetail', $ser->slug) }}">installs high-quality garden annexes across the UK</a>,
                    @endforeach 
                    created to help families support older loved ones with comfort, privacy and independence close to home.
                    Founded by director <a href="{{ route('teamDetails') }}">Matt Biddle</a> after years building annexes nationwide, our company was built around
                    one simple principle: an annexe should feel like a proper home, not a temporary structure.
                </p>
                <div class="matt-biddle">
                    <div class="mat-content">
                        <p class="bs-p-1 disc  wa-capitalize mb-lg-3">
                            Instead of the lightweight structures common in the industry, Matt set out to create annexes
                            that outperform modern new-build homes in strength, warmth, and energy efficiency. Homes built
                            with the same attention to detail you’d expect in a premium bungalow solid, quiet, durable, and
                            comfortable all year round.
                        </p>
                        <p class="bs-p-1 disc  wa-capitalize mb-lg-2">
                            This commitment to quality can be seen in everything we do:
                        </p>
                        <div class="mat-biddle-points d-md-none d-lg-block d-block">
                            <ul class="ms-lg-3 ms-md-2 ms-2">
                                <li>
                                    @foreach ($services as $ser)
                                        <a href="{{ route('servicedetail', $ser->slug) }}">
                                            <b>Steel-frame</b> construction</a> 
                                        </a>, for unmatched strength and longevity
                                    @endforeach 
                                </li>
                                <li>
                                    <b>High insulation levels</b> to keep running costs low
                                </li>
                                <li>
                                    <b>Thoughtful layouts</b> designed for easy, safe daily living
                                </li>
                                <li>
                                    <b>
                                        Finishes that feel permanent, refined, and welcoming
                                    </b>
                                </li>
                            </ul>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-3">
                                Families choose <a href="{{ route('index') }}">The Granny Annexe Company</a> because they want more than an extra building in
                                the garden. They want a home built with care. A company they can trust.
                            </p>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-2 mb-5">
                                Just as important is the experience. Matt believes creating an annexe should be enjoyable,
                                not stressful. That’s why <a href="{{ route('process') }}">we handle everything from planning and design to construction and
                                handover keeping you informed at every stage</a>.
                            </p>
                        </div>
                    </div>
                    <div class="mat-img">
                        <img loading="lazy" decoding="async"
                            src="{{ url('frontend/assets/img/mat-biddle/mat-biddle.webp') }}" title="Matt Biddle"
                            alt="Matt Biddle">
                    </div>
                </div>
                <div class="matt-biddle laptop-screen">
                    <div class="mat-content">
                        <div class="content">
                            <p class="bs-p-1 disc  wa-capitalize mb-lg-3">
                                Instead of the lightweight structures common in the industry, Matt set out to create annexes
                                that outperform modern new-build homes in strength, warmth, and energy efficiency. Homes
                                built with the same attention to detail you’d expect in a premium bungalow solid, quiet,
                                durable, and comfortable all year round.
                            </p>
                            <p class="bs-p-1 disc  wa-capitalize mb-lg-2">
                                This commitment to quality can be seen in everything we do:
                            </p>
                            <div class="mat-biddle-points d-flex flex-column">
                                <ul class="ms-lg-3 ms-md-2 ms-2">
                                    <li>
                                        @foreach ($services as $ser)
                                            <a href="{{ route('servicedetail', $ser->slug) }}">
                                                <b>Steel-frame</b> construction 
                                            </a>
                                        @endforeach
                                        for unmatched strength and longevity
                                    </li>
                                    <li>
                                        <b>High insulation levels</b> to keep running costs low
                                    </li>
                                    <li>
                                        <b>Thoughtful layouts</b> designed for easy, safe daily living
                                    </li>
                                    <li>
                                        <b>
                                            Finishes that feel permanent, refined, and welcoming
                                        </b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mat-img">
                            <img loading="lazy" decoding="async"
                                src="{{ url('frontend/assets/img/mat-biddle/mat-biddle.webp') }}" title="Matt Biddle"
                                alt="Matt Biddle">
                        </div>
                    </div>
                    <p class="bs-p-1 disc wa-capitalize mb-lg-3">
                        Families choose <a href="{{ route('index') }}">The Granny Annexe Company</a> because they want more than an extra building in the
                        garden. They want a home built with care. A company they can trust.
                    </p>
                    <p class="bs-p-1 disc wa-capitalize mb-lg-2 mb-5">
                        Just as important is the experience. Matt believes creating an annexe should be enjoyable, not
                        stressful. That’s why <a href="{{ route('process') }}">we handle everything from planning and design to construction and handover
                        keeping you informed at every stage</a>.
                    </p>
                </div>
                <div class="matt-biddle d-md-block d-lg-none d-none">
                    <div class="mat-content">
                        <div class="mat-biddle-points">
                            <ul class="ms-lg-3 ms-md-2 ms-2">
                                <li>
                                    <a href="{{ route('service') }}"><b>Steel-frame</b> construction</a> for unmatched strength and longevity
                                </li>
                                <li>
                                    <b>High insulation levels</b> to keep running costs low
                                </li>
                                <li>
                                    <b>Thoughtful layouts</b> designed for easy, safe daily living
                                </li>
                                <li>
                                    <b>
                                        Finishes that feel permanent, refined, and welcoming
                                    </b>
                                </li>
                            </ul>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-3">
                                Families choose <a href="{{ route('index') }}">The Granny Annexe Company</a> because they want more than an extra building in
                                the garden. They want a home built with care. A company they can trust.
                            </p>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-2 mb-5">
                                Just as important is the experience. Matt believes creating an annexe should be enjoyable,
                                not stressful. That’s why <a href="{{ route('process') }}">we handle everything from planning and design to construction and
                                handover keeping you informed at every stage</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    We specialise in
                    @foreach ($services as $ser)
                        <a href="{{ route('servicedetail', $ser->slug) }}">
                            steel-frame granny annexes for long-term strength, stability and year-round comfort
                        </a>.
                    @endforeach
                    Our Annexes are engineered to go beyond the typical “cabin-style” approach, using <a href="{{ route('theGardenStudio') }}">high-performance
                    insulation, soundproofing and triple glazing</a> as standard, with specifications designed to outperform
                    many modern new-build house benchmarks and exceed the UK’s residential park home standard (BS 3632).
                </p>
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    From first ideas to move-in day, we provide a complete <a href="{{ route('theGardenStudio') }}">turnkey garden annexe build service</a>—including
                    drawings and technical design, groundworks and connections, electrics, plumbing, heating, <a href="{{ route('gallery') }}">kitchen and
                    bathroom installation</a>, certification and handover. We also guide the planning route (often via the
                    Caravan Act) and can manage your Lawful Development Certificate, with every build protected by a 10-year
                    structural warranty and a clear aftercare pack.
                </p>
                <div class="btn-wrap wa-fadeInUp">
                    <a href="{{ route('index') }}#meet-the-team" aria-label="name" class="bs-btn-1">
                        <span class="text">
                            Meet the Team
                        </span>
                        <span class="shape"></span>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- about-end -->

    <div class="bs-video-4-area">
        <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="v4-img-1-updated" loading="lazy" decoding="async"
                src="{{ url('frontend/assets/img/video/v4-img-1-updated.webp') }}" alt="v4-img-1-updated">

            <div class="bs-video-4-text">
                {{-- <div class="bs-video-4-marquee-active"> --}}
                {{-- <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">The Granny Annexe Company</h4> --}}
                <div class="banner-logo">
                    <img src="{{ url('storage') }}/{{ setting('site.logo') }}" title="Company Logo"
                        alt="Company Logo">
                    {{-- <img title="Logo" loading="lazy" decoding="async" src="{{ url('storage') }}/{{ setting('site.logo') }}" alt="Logo"> --}}
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <!-- video-end -->

    <!-- choose-start -->
    <section id="why-choose-us" class="bs-choose-4-area wa-bg-default wa-fix pb-lg-5 pb-3 ">
        {{-- <div class="container bs-container-2"> --}}
        <div class="container-fuild mx-lg-5 mx-md-4 mx-3">
            <div class="d-flex flex-lg-row flex-column justify-content-between align-items-center gap-lg-3">
                <div class="bs-choose-4-wrap custom-para-points">

                    <div class="bs-choose-4-content-height">
                        <!-- left-content -->
                        <div class="bs-choose-4-content-pin">
                            <div class="bs-choose-4-content py-lg-5 py-md-3 py-5">

                                <h5 class="bs-subtitle-4 bs-choose-4-subtitle">
                                    <span class="text">WHY CHOOSE US</span>
                                    <span class="icon">
                                        <img title="subtitle-4-icon-2" loading="lazy" decoding="async"
                                            src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}"
                                            title="subtitle-4-icon-2" alt="subtitle-4-icon-2">
                                    </span>
                                </h5>

                                <h2 class="bs-sec-title-1 title wa-split-right wa-capitalize" data-cursor="-opaque">
                                    Why choose the Granny Annexe Company For Your Project
                                </h2>

                                <p class="bs-p-4 disc wa-fadeInUp mb-lg-3 mb-md-2 mb-2">
                                    When comparing annexes, the differences in build quality can be significant. Many look
                                    similar from the outside, but the materials, insulation, and construction methods used
                                    can dramatically affect comfort, running costs, and how long your annexe will last.
                                </p>
                                <p class="bs-p-4 disc wa-fadeInUp">
                                    At <a href="{{ route('index') }}">The Granny Annexe Company</a>, we believe a <a href="{{ route('index') }}">garden annexe</a> should be built to the same
                                    standard as a high-quality home. That’s why we go far beyond the basic requirements used
                                    by many other Companies.
                                </p>

                                <span class="custom-choose-span bs-h-4 item-title title mb-lg-3 mb-md-2 mb-2">
                                    Built To Exceed New-Build House Insulation Standards
                                </span>
                                <p class="bs-p-4 disc wa-fadeInUp mb-lg-5 mb-0">
                                    In the UK, new-build houses must meet strict Building Regulations for thermal
                                    performance (known as U-values). These set maximum limits for how much heat can escape
                                    through walls, floors, roofs, windows, and doors.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="bs-choose-4-feature custom-title-para">

                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <h5 class="custom-choose-second-span bs-choose-4-subtitle mb-3">
                                Typical Building Regulation requirements:
                            </h5>
                            <div class="bs-choose-4-progress ms-lg-3 ms-md-3 ms-0">
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span><strong>Walls:</strong> around 0.26 W/m2K</span>
                                    </h5>
                                </div>
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span><strong>Roofs:</strong> around 0.16 W/m2K</span>
                                    </h5>
                                </div>
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span><strong>Floors:</strong> around 0.18 W/m2K</span>
                                    </h5>
                                </div>
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span>
                                            <strong>Windows:</strong> around 1.4 W/m2K
                                        </span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <h5 class="custom-choose-second-span bs-choose-4-subtitle mb-3">
                                Our annexes are engineered to outperform these figures:
                            </h5>
                            <div class="bs-choose-4-progress ms-lg-3 ms-md-3 ms-0">
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span><strong>Walls:</strong> approx. 0.23 W/m2K</span>
                                    </h5>
                                </div>
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span><strong>Roofs:</strong> approx. 0.14 W/m2K</span>
                                    </h5>
                                </div>
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span><strong>Floors:</strong> approx. 0.15 W/m2K</span>
                                    </h5>
                                </div>
                                <div
                                    class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span>
                                            <strong>Triple-glazed windows:</strong> approx. 0.9–1.0 W/m2K
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <p class="bs-p-4 disc wa-fadeInUp border-top pt-lg-4 pt-md-3 pt-2">
                                This means our homes keep heat in more effectively than most newly built houses resulting in
                                a warmer, quieter, more efficient annexe.
                            </p>
                        </div>
                    </div>

                    {{-- <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-minimalist flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">Acoustic Rockwool</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                Acoustic Rockwool in all walls and floors for exceptional soundproofing and a calm, quiet interior.
                            </p>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-blueprint flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">High-performance PIR</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                High-performance PIR insulation for excellent thermal efficiency.
                            </p>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-property-insurance flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">Triple-glazed UPVC windows & doors</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                Triple-glazed UPVC windows & doors as standard - something rarely offered as standard even in many new-build house houses. 
                            </p>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-goodwill-1 flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">LONG-TERM COMFORT, NOT SHORT-TERM SAVINGS</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                Some annexes on the market are built using lightweight materials, limited insulation, or single/double glazing. These may look appealing at first but can feel colder in winter, hotter in summer, and less solid over time.
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- choose-end -->


    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            var $cards = $('.bs-work-5-card');

            // first card active by default
            $cards.first().addClass('active');

            // hover behavior
            $cards.on('mouseenter', function() {
                $cards.removeClass('active'); // first se active remove
                $(this).addClass('active'); // hovered active
            });

        });
    </script>
@endsection
