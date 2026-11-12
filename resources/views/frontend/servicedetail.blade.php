@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ ucwords($serviceDetails->meta_title) }}">
    <meta name="description" content="{{ $serviceDetails->meta_description }}">
    <meta property="og:title" content="{{ ucwords($serviceDetails->meta_title) }}">
    <meta property="og:description" content="{{ $serviceDetails->meta_description }}">
    <meta name="twitter:title" content="{{ ucwords($serviceDetails->meta_title) }}">
    <meta name="twitter:description" content="{{ $serviceDetails->meta_description }}">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",

        "@graph":[

            {
            "@type":"WebPage",

            "@id":"https://www.grannyannexecompany.co.uk/service/purpose-built-garden-annexes-premium-steel-frame-installation#webpage",

            "url":"https://www.grannyannexecompany.co.uk/service/purpose-built-garden-annexes-premium-steel-frame-installation",

            "name":"Purpose Built Garden Annexes: Premium Steel Frame Installation",

            "description":"Premium bespoke steel-frame garden annexe installation service with planning, construction and full project delivery.",

            "isPartOf":{
            "@id":"https://www.grannyannexecompany.co.uk/#website"
            }
            },

            {
            "@type":"Service",

            "@id":"https://www.grannyannexecompany.co.uk/service/purpose-built-garden-annexes-premium-steel-frame-installation#service",

            "name":"Purpose Built Garden Annexes – Premium Steel Frame Installation",

            "description":"Complete turnkey design and installation of premium steel-frame garden annexes across the UK.",

            "provider":{

            "@type":"Organization",

            "@id":"https://www.grannyannexecompany.co.uk/#org",

            "name":"The Granny Annexe Company",

            "url":"https://www.grannyannexecompany.co.uk/"
            },

            "serviceType":[

            "Steel Frame Garden Annexe",

            "Garden Annexe Construction",

            "Granny Annexe",

            "Turnkey Build Service",

            "Planning & Installation"

            ],

            "areaServed":{

            "@type":"Country",

            "name":"United Kingdom"
            },

            "hasOfferCatalog":{

            "@type":"OfferCatalog",

            "name":"Included Services",

            "itemListElement":[

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Planning Guidance"
            }
            },

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Technical Design"
            }
            },

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Groundworks"
            }
            },

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Steel Frame Installation"
            }
            },

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Kitchen Installation"
            }
            },

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Bathroom Installation"
            }
            },

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Electrical & Plumbing"
            }
            },

            {
            "@type":"Offer",
            "itemOffered":{
            "@type":"Service",
            "name":"Final Handover"
            }
            }

            ]
            },

            "offers":{

            "@type":"Offer",

            "availability":"https://schema.org/InStock",

            "priceCurrency":"GBP"
            }

            },

            {
            "@type":"FAQPage",

            "mainEntity":[

            {
            "@type":"Question",

            "name":"Do I need planning permission for a garden annexe?",

            "acceptedAnswer":{

            "@type":"Answer",

            "text":"Many projects may qualify under applicable routes and support is included during planning stages."
            }

            },

            {
            "@type":"Question",

            "name":"What makes steel frame construction different?",

            "acceptedAnswer":{

            "@type":"Answer",

            "text":"Steel frame construction provides durability, structural strength and supports high insulation performance."
            }

            },

            {
            "@type":"Question",

            "name":"Is installation included?",

            "acceptedAnswer":{

            "@type":"Answer",

            "text":"The service includes complete delivery from design through final installation."
            }

            }

            ]
            },

            {
            "@type":"BreadcrumbList",

            "itemListElement":[

            {
            "@type":"ListItem",

            "position":1,

            "name":"Home",

            "item":"https://www.grannyannexecompany.co.uk/"
            },

            {
            "@type":"ListItem",

            "position":2,

            "name":"Services",

            "item":"https://www.grannyannexecompany.co.uk/services"
            },

            {
            "@type":"ListItem",

            "position":3,

            "name":"Purpose Built Garden Annexes",

            "item":"https://www.grannyannexecompany.co.uk/service/purpose-built-garden-annexes-premium-steel-frame-installation"
            }

            ]
            }

            ]
        }
        </script>
@endsection

@section('title')
    {{ ucwords($serviceDetails->meta_title) }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- breadcrumb-start -->
    <section class="breadcrumb-area has-2 wa-p-relative overflow-hidden">


        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                {{-- <a href="{{ route('service') }}" aria-label="name" class="breadcrumb-back-page-btn">
                    <i class="fa-solid fa-angle-left"></i>
                    Back to Services Page
                </a> --}}
                <h1 class="bs-sec-title-4 service-detail-title wa-split-right wa-capitalize" data-split-delay="1.1s">
                    {{ ucwords($serviceDetails->title) }}</h1>

                <div class="bs-services-details-content">
                    <p class="desc">
                        Fully managed turnkey annexe installations built to feel like real homes. Warm, quiet and energy
                        efficient with <b>triple glazing included</b> as standard in every annexe.
                    </p>
                </div>
                {{-- <div class="breadcrumb-bg-shape">
                    <img src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-shape.png') }}" title="breadcrumb-shape" alt="breadcrumb-shape">
                </div> --}}
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <section class="bs-services-details-area pt-lg-4 pt-md-3 pt-2">

        <div class="container bs-container-1">
            <div class="bs-services-details-content">
                <div class="service-banner-img mb-lg-5 mb-md-3 mb-2">
                    <img src="{{ url('storage/' . $serviceDetails->service_banner) }}" title="{{ $serviceDetails->title }}"
                        alt="{{ ucwords($serviceDetails->title) }}">
                </div>

                <div class="bs-about-4-content">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                        <strong>Granny Annexes: Designed for You!</strong>
                    </h2>
                    <p class="desc">
                        Not all annexes are created equal, while some companies prioritize a low price over quality, Our
                        steel frame <a href="{{ route('index') }}">garden annexes</a> are engineered for longevity. By utilizing a steel frame <a href="{{ route('index') }}">granny annexe
                        system</a>, we provide a structure far stronger than timber and naturally resistant to rot or dampness.
                    </p>
                    <p class="desc">
                        <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">Our innovative modular steel annexes process allows us to deliver fast build annexes UK homeowners
                        can rely on</a>, <a href="{{ route('process') }}">completed up to three times faster than traditional construction</a>. Additionally, these
                        are highly energy efficient annexes, designed to stay warm and reduce costs. Our <a href="{{ route('index') }}">prefabricated steel
                        annexes</a> boast unmatched structural integrity, providing a 10-year guarantee for complete peace of
                        mind, knowing your home will stand strong for decades.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details-end -->
    <section class="bs-services-details-area pt-lg-4 pt-md-3 pt-2">
        <div class="container bs-container-1">
            <div class="bs-services-details-content pricing-table-title-table mb-lg-5 mb-md-3 mb-2">
                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize mb-md-3 mb-3" data-cursor="-opaque">
                    <strong>Our 100%</strong> Turn-Key <strong>Packages Start from</strong> £62,395
                </h2>
                <div class="pricing-custom-main">
                    <div class="pricing-width pricing-custom-matric">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark custom-table">
                                <tr>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th>Footprint</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4m x 5.5m</td>
                                    <td>£62,395</td>
                                    <td>22 sqm</td>
                                </tr>
                                <tr>
                                    <td>4m x 7m</td>
                                    <td>£71,084</td>
                                    <td>28 sqm</td>
                                </tr>
                                <tr>
                                    <td>4m x 9m</td>
                                    <td>£84,240</td>
                                    <td>36 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 10m</td>
                                    <td>£96,720</td>
                                    <td>50 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 12m</td>
                                    <td>£111,644</td>
                                    <td>60 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 15m</td>
                                    <td>£135,590</td>
                                    <td>75 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 19m</td>
                                    <td>£151,554</td>
                                    <td>95 sqm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pricing-width pricing-include-points bg-transperent">
                        <div class="bs-about-4-content service-detail-table-para">
                            <p class="desc text-white">
                                Prices include full groundwork preparation, mains supply and waste connections, a luxury
                                shower room supplied and installed, a modern kitchen supplied and installed, a lawful
                                development certificate, premium flooring, interior decorating and complete project
                                management. Every Granny annexe is delivered as a true turn-key solution, ready to move into
                                day one.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="desc mt-lg-4 pt-3 mb-lg-0 mb-md-0">
                    Please note that the dimensions and prices above are for guidance only. As <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">we offer a bespoke service</a>,
                    we can build annexes to any dimensions - not just those listed above.
                </p>
            </div>
        </div>
    </section>
    <!-- service-details-end -->

    <!-- work-start -->
    <section class="bs-work-5-area why-choose-second wa-bg-default py-lg-5 py-5 overflow-hidden"
        data-background="{{ url('frontend/assets/img/work/w5-bg-img.webp') }}">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-work-5-sec-title mb-lg-5 mb-5">
                <h2 class="bs-sec-title-4 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Premium Insulation In
                    Every Annexe</h2>
                <p class="bs-p-4 disc wa-fadeInUp">
                    We combine multiple layers of high-performance insulation to create year-round comfort:
                </p>
            </div>

            <!-- cards -->
            <div class="bs-work-5-wrap">

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-up active">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">Acoustic Rockwool</h4>
                    <p class="bs-p-4 disc custom-para"> Acoustic Rockwool in all walls and Roof for exceptional
                        soundproofing and a calm, quiet interior.</p>
                    <h5 class="bs-h-1 number">01</h5>
                </div>

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-down">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">High-performance PIR</h4>
                    <p class="bs-p-4 disc custom-para">High-performance PIR insulation for excellent thermal efficiency.
                    </p>
                    <h5 class="bs-h-1 number">02</h5>
                </div>

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-up">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">Triple-glazed UPVC windows & doors</h4>
                    <p class="bs-p-4 disc custom-para">Triple-glazed UPVC windows & doors as standard - something rarely
                        offered as standard even in many new-build house. </p>
                    <h5 class="bs-h-1 number">03</h5>
                </div>

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-down">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">Long-Term Comfort, Not Short-Term Savings </h4>
                    <p class="bs-p-4 disc custom-para">Some annexes on the market are built using lightweight materials,
                        limited insulation, or single/double glazing. These may look appealing at first but can feel colder
                        in winter, hotter in summer, & less solid over time.</p>
                    <h5 class="bs-h-1 number">04</h5>
                </div>
            </div>

        </div>
    </section>
    <!-- work-end -->

    <!-- services-start -->
    <section class="bs-services-3-area bg-black py-lg-5 py-5"
        data-background="{{ url('frontend/assets/img/services/s4-bg.webp') }}">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-services-3-sec-title mb-40 text-lg-start text-start">
                <h2 class="bs-sec-title-3  wa-split-right wa-capitalize mb-lg-4 mb-md-2 mb-2" data-cursor="-opaque">What’s
                    Included As Standard?</h2>
                <p class="bs-p-4 disc wa-fadeInUp text-white">
                    Every annexe we build is fully finished and ready to furnish, with all the essential features included
                    as standard - no hidden extras and no unexpected costs. We take pride in delivering a home that feels
                    complete, comfortable, and welcoming from the moment you step inside.
                </p>
            </div>

            <!-- card -->
            <div class="bs-services-3-wrap  mb-70">

                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="fa-solid fa-trowel-bricks"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Groundworks & foundations
                    </h5>
                    <p class="bs-p-1 card-disc">All builds include ground screw foundations as standard, plus trenching and
                        associated works for service runs.</p>
                    <h5 class="bs-h-1 card-number">1</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="fa-solid fa-faucet"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Supply & waste connections
                    </h5>
                    <p class="bs-p-1 card-disc">
                        We include all required service connections (water, electricity and waste) to your annexe for runs
                        up to 25 metres as standard.
                    </p>
                    <h5 class="bs-h-1 card-number">2</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        High-quality flooring throughout
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Durable, easy-to-clean flooring, available in a choice of modern finishes.
                    </p>
                    <h5 class="bs-h-1 card-number">3</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="fa-solid fa-door-open"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Skirting boards and oak-effect doors
                    </h5>
                    <p class="bs-p-1 card-disc">
                        A polished, homely finish that feels like a high-quality bungalow.
                    </p>
                    <h5 class="bs-h-1 card-number">4</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Internal lighting
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Ceiling rose lights installed in every room.
                    </p>
                    <h5 class="bs-h-1 card-number">5</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Fully decorated interior
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Professionally plastered walls, finished in white paint.
                    </p>
                    <h5 class="bs-h-1 card-number">6</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-temperature-high"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Smart panel radiators
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Professionally plastered walls, finished in white paint.
                    </p>
                    <h5 class="bs-h-1 card-number">7</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-plug"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Double plug sockets
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Conveniently positioned throughout your annexe.
                    </p>
                    <h5 class="bs-h-1 card-number">8</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-kitchen-set"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Fully fitted kitchen
                    </h5>
                    <p class="bs-p-1 card-disc">
                        A high-quality, fully customisable kitchen including a sink, fridge, oven and 8 units. Unlimited
                        upgrades are also available.
                    </p>
                    <h5 class="bs-h-1 card-number">9</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-shower"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Fully fitted shower room
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Includes Aquapanel wall finish, electric shower, low-threshold shower tray, toilet, basin, extractor
                        fan and electric towel heater.
                    </p>
                    <h5 class="bs-h-1 card-number">10</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Instant hot water heater
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Kitchen and bathroom sinks are supplied by a compact instant hot water heater for efficient,
                        on-demand hot water.
                    </p>
                    <h5 class="bs-h-1 card-number">11</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Certificate of Lawfulness / planning application
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Built under the Caravan Sites Act. Classed as a mobile structure. Simplifies planning approval.
                        Faster, easier process.
                    </p>
                    <h5 class="bs-h-1 card-number">12</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-regular fa-window-maximize"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Triple Glazing
                    </h5>
                    <p class="bs-p-1 card-disc">
                        High-performance triple glazed windows and doors designed to improve insulation, reduce external
                        noise, and create a warmer, more energy-efficient home year-round.
                    </p>
                    <h5 class="bs-h-1 card-number">13</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-industry"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Steel Frame Construction
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Precision-engineered light gauge steel frame construction provides exceptional structural strength,
                        long-term durability, and superior build accuracy compared to traditional methods.
                    </p>
                    <h5 class="bs-h-1 card-number">14</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        High Performance Insulation
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Built with high-specification insulation throughout the walls, roof, and floors to create a
                        comfortable living environment with lower running cost
                    </p>
                    <h5 class="bs-h-1 card-number">15</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Full Project Management
                    </h5>
                    <p class="bs-p-1 card-disc">
                        From initial consultation through to final handover, our team manages every stage of the project to
                        ensure a smooth and stress-free experience.
                    </p>
                    <h5 class="bs-h-1 card-number">16</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        BS3632 Residential Standard Certification
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Constructed to BS3632 residential specification standards, ensuring your annexe is built for
                        permanent, comfortable year-round living.
                    </p>
                    <h5 class="bs-h-1 card-number">17</h5>
                </div>

            </div>

            <!-- all-btn -->
            <div class="bs-services-3-all-btn text-center wa-fadeInUp">
                <button class="bs-btn-1 see-more text-capitalize">
                    <span class="text">
                        See More
                    </span>
                    <span class="icon">
                        <i class="fa-solid fa-right-long"></i>
                        <i class="fa-solid fa-right-long"></i>
                    </span>
                    <span class="shape"></span>
                </button>
            </div>


        </div>
    </section>
    <!-- services-end -->
    
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
                                    At The Granny Annexe Company, we believe a garden annexe should be built to the same
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
                </div>
            </div>
        </div>
    </section>
    <!-- choose-end -->

    <!-- about-start -->
    <section class="bs-about-5-area why-choose-third wa-fix wa-p-relative py-lg-5 py-5">
        {{-- <div class="bs-about-5-bg-shape">
            <img src="{{ url('frontend/assets/img/about/a5-bg-shape.webp') }}" title="a5-bg-shape" alt="a5-bg-shape">
        </div>
        <div class="bs-about-5-bg-shape-2">
            <img src="{{ url('frontend/assets/img/about/a5-bg-shape-2.webp') }}" title="a5-bg-shape-2" alt="a5-bg-shape-2">
        </div> --}}

        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-work-5-sec-title mb-lg-4 mb-md-2 mb-2">
                <h2 class="bs-sec-title-4 wa-split-right wa-capitalize mb-lg-4 mb-md-2 mb-2" data-cursor="-opaque">
                    We Take Care Of Everything
                </h2>
                <p class="bs-p-4 disc wa-fadeInUp">
                    Building a granny annexe should feel exciting, not overwhelming. That’s why we offer a complete,
                    start-to-finish service, handling every stage of the project so you don’t have to worry about a thing.
                </p>
            </div>

            <div class="bs-about-5-wrap">

                <!-- left-side -->
                <div class="bs-about-5-left">
                    <p class="bs-p-4 disc wa-fadeInUp">
                        From the moment you choose your design, we manage:
                    </p>

                    <!-- right-side -->
                    <div class="bs-about-5-right mb-lg-4 mb-md-3 mb-2">

                        <ul class="bs-about-5-feature wa-list-style-none">
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                <span>
                                    All planning applications and approvals
                                </span>
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                <span>
                                    Full drawings and technical design
                                </span>
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                <span>
                                    Demolition of existing outbuildings, if required
                                </span>
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                <span>
                                    Groundworks, foundations, and service connections
                                </span>
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                <span>
                                    Construction of your annexe, fully finished inside and out
                                </span>
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                <span>
                                    Electrical, plumbing, heating, kitchen, and bathroom installation
                                </span>
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                <span>
                                    Final checks, certification, and handover
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="bs-about-5-img-1 wa-fix wa-img-cover wa-fadeInUp" data-cursor="-opaque">
                        <img class="wa-parallax-img" title="First Gallery"
                            src="{{ url('frontend/assets/img/gallery/01.webp') }}" alt="First Gallery">
                    </div>
                </div>

                <!-- right-side -->
                <div class="bs-about-5-right">
                    <div class="bs-about-5-img-2 wa-fix wa-img-cover wa-fadeInUp" data-cursor="-opaque">
                        <img class="wa-parallax-img" title="Second Gallery"
                            src="{{ url('frontend/assets/img/gallery/01.webp') }}" alt="Second Gallery">
                    </div>

                    <p class="bs-p-4 disc wa-fadeInUp ms-lg-3 ms-md-2 ms-2">
                        When your annexe is complete, the only thing left for you to do is move in your furniture and start
                        enjoying your new home.
                        The only area we do not cover is garden landscaping. But everything relating to the annexe itself,
                        from preparation to completion, is taken care of by our team.
                        With The Granny Annexe Company, “full service” truly means everything is handled for you, smoothly
                        and professionally, from day one to move-in day.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about-end -->

    <!-- testimonial-start -->
    <section class="bs-testimonial-5-area bg-black why-choose-fourth wa-fix pb-lg-5 pt-lg-0 py-5"
        data-background="{{ url('frontend/assets/img/services/s4-bg.webp') }}">
        <div class="container bs-container-1">
            <div class="bs-testimonial-5-wrap">

                <!-- left-content -->
                <div class="bs-testimonial-5-content pt-lg-5 pt-md-3 pt-0">

                    <!-- section-title -->
                    <div class="bs-testimonial-5-sec-title mb-lg-4 mb-md-3 mb-2">
                        <h2 class="bs-sec-title-4 text-white wa-split-right wa-capitalize" data-cursor="-opaque">
                            Why choose a steel frame annexe?
                        </h2>
                        <p class="bs-p-4 text-white disc wa-fadeInUp">
                            At The Granny Annexe Company, we build with steel because it delivers a stronger, smarter, and
                            more future-proof annexe.
                            Steel has an outstanding strength-to-weight ratio, meaning it can support heavier loads and span
                            spaces more confidently than many traditional materials. That strength translates into a solid
                            structure you can rely on for the long term.
                        </p>
                        <p class="bs-p-4 text-white disc wa-fadeInUp">
                            Steel frame construction is also ideal for high-performance insulation. Our annexes can be
                            insulated to the highest standards to help maintain a comfortable, consistent temperature all
                            year round. The result is a warmer home in winter, cooler in summer, and lower energy costs over
                            time with a more sustainable build that can add long-term value to your property.
                        </p>
                    </div>

                </div>

                <div class="bs-testimonial-5-img wa-fix wa-img-cover" data-cursor="-opaque">
                    <img class="wa-parallax-img" title="steel-frame"
                        src="{{ url('frontend/assets/img/services/steel-frame.webp') }}" alt="steel-frame">
                </div>

            </div>
            <div class="container bs-container-1 ps-0 ms-0 me-0">
                <div class="d-flex flex-column mb-lg-5 mb-md-3 mb-0 mt-3 mt-lg-0">
                    <p class="bs-p-4 text-white disc wa-fadeInUp mb-lg-3 mb-md-3 mb-2">
                        Our modular steel frame system brings big practical benefits too. Much of the build is prepared in a
                        controlled environment, which keeps the process cleaner and more efficient, reduces waste, and helps
                        minimise disruption at your home. On-site assembly is faster and more streamlined, so you get your
                        annexe sooner with less mess.
                    </p>
                    <p class="bs-p-4 disc text-white wa-fadeInUp">
                        Finally, steel is built for resilience. It’s highly durable and naturally resistant to issues that
                        can affect other building types, including extreme weather, fire risk, and pests. Combined with
                        excellent insulation, it also helps to reduce noise transfer, creating a quieter, more peaceful
                        space to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-end -->

    <!-- testimonial-start -->
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
                                        At <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">the Granny Annexe Company</a>, we are committed to delivering exceptional quality,
                                        precision craftsmanship, and reliable service across every project. As <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">a trusted
                                        name in the UK, The Granny Annexe Company</a> specialises in designing & building
                                        <a href="{{ route('index') }}">bespoke granny annexes</a> according to your lifestyle and property needs.
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
                                        What is a steel frame garden annexe UK?
                                    </button>
                                </div>

                                <div id="collapse0" class="accordion-collapse collapse show" aria-labelledby="heading0"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            A <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">steel frame garden annexe UK</a> is a fully self-contained living space built
                                            using durable steel structures, offering superior strength, longevity and modern
                                            design compared to traditional builds.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading1">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        <span class="dot"></span>
                                        Why choose a steel frame granny annexe over timber?
                                    </button>
                                </div>

                                <div id="collapse1" class="accordion-collapse collapse " aria-labelledby="heading1"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            A steel frame granny annexe offers greater structural integrity, resistance to
                                            weather & pests and improved lifespan, making it a more reliable long-term
                                            investment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading3">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        <span class="dot"></span>
                                        Are modular steel annexes UK faster to build?
                                    </button>
                                </div>

                                <div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            Yes, <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">modular steel annexes UK</a> are designed for efficiency, with much of the
                                            construction completed off-site, allowing installation up to three times faster
                                            than traditional builds.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading4">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <span class="dot"></span>
                                        What are prefabricated steel annexes UK?
                                    </button>
                                </div>

                                <div id="collapse4" class="accordion-collapse collapse " aria-labelledby="heading4"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">Prefabricated steel annexes UK</a> are built in controlled environments and then
                                            assembled on-site, ensuring precision, reduced waste and consistent quality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading5">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        <span class="dot"></span>
                                        How energy efficient are modern annexes?
                                    </button>
                                </div>

                                <div id="collapse5" class="accordion-collapse collapse " aria-labelledby="heading5"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">Energy efficient annexes UK</a> are built with advanced insulation, triple glazing &
                                            airtight construction, helping maintain comfortable temperatures and reduce
                                            energy costs year-round.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading6">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        <span class="dot"></span>
                                        Are steel frame annexes suitable for year-round living?
                                    </button>
                                </div>

                                <div id="collapse6" class="accordion-collapse collapse " aria-labelledby="heading6"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            Yes, <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">steel frame garden annexes UK</a> are designed to meet or exceed UK building
                                            standards, providing a warm, quiet and comfortable home throughout all seasons.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading7">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        <span class="dot"></span>
                                        How long does a fast build annexe UK take to install?
                                    </button>
                                </div>

                                <div id="collapse7" class="accordion-collapse collapse " aria-labelledby="heading7"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">Fast build annexes UK</a> can typically be installed in a matter of weeks, depending
                                            on size and design, thanks to modular construction and streamlined processes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading8">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        <span class="dot"></span>
                                        Do prefabricated annexes require planning permission?
                                    </button>
                                </div>

                                <div id="collapse8" class="accordion-collapse collapse " aria-labelledby="heading8"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            In many cases, <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">prefabricated steel annexes UK</a> can be approved under permitted
                                            development or the Caravan Act, but this depends on your property & local
                                            regulations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading9">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                        <span class="dot"></span>
                                        What is included in a steel frame granny annexe?
                                    </button>
                                </div>

                                <div id="collapse9" class="accordion-collapse collapse " aria-labelledby="heading9"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            Most steel frame granny annexes include full insulation, kitchen, bathroom,
                                            utilities & interior finishes delivered as a live in space.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bs-accordion-item wa-fadeInUp ">
                                <div class="item-header" id="heading10">
                                    <button class="item-title bs-h-1 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        <span class="dot"></span>
                                        Are modular steel annexes UK a good investment?
                                    </button>
                                </div>

                                <div id="collapse10" class="accordion-collapse collapse " aria-labelledby="heading10"
                                    data-bs-parent="#accordionExample_31">
                                    <div class="item-body">
                                        <p class="bs-p-1">
                                            Yes, <a href="https://share.google/QTJFrEh0lyQMqTVw5" target="_blank" rel="noopener noreferrer">modular steel annexes UK</a> can add property value while providing flexible
                                            living space for family, guests, or independent living.
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

    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->
@endsection

@section('microformats')
    <div class="h-entry d-none d-md-none d-lg-none">

        <h1 class="p-name">
        Purpose Built Garden Annexes: Premium Steel Frame Installation
        </h1>

        <p class="p-summary">
        Premium bespoke steel-frame garden annexes designed and installed across the UK with complete turnkey delivery.
        </p>

        <a class="u-url"
        href="https://www.grannyannexecompany.co.uk/service/purpose-built-garden-annexes-premium-steel-frame-installation">
        View Service
        </a>

        <div class="p-author h-card">

        <span class="p-name">
        The Granny Annexe Company
        </span>

        <a class="u-url"
        href="https://www.grannyannexecompany.co.uk/">
        Website
        </a>

        </div>

        <div class="p-category">
        Steel Frame Garden Annexe
        </div>

        <div class="p-category">
        Premium Garden Annexe
        </div>

        <div class="p-category">
        Turnkey Build
        </div>

        <div class="p-category">
        Planning Support
        </div>

        <div class="p-category">
        Garden Studio Installation
        </div>

        <div class="p-category">
        Bespoke Annexe Construction
        </div>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $(".see-more").click(function() {
                var hiddenItems = $(".why-choose-card-hide");

                // Toggle display
                if (hiddenItems.css("display") === "none") {
                    hiddenItems.css("display", "flex"); // flex show
                    $(this).find(".text").text("Show Less");
                } else {
                    hiddenItems.css("display", "none"); // hide again
                    $(this).find(".text").text("See More");
                }
            });

            $('.team-item').first().trigger('mouseenter');
        });
    </script>
@endsection
