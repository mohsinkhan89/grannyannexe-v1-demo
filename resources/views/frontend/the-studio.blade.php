@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="The Studio - Garden Annexe Range">
    <meta name="description"
        content="Explore The Studio range of turnkey granny annexes, including The Garden Studio, Oak Lodge, The Willow Lodge and The Garden Retreat.">
    <meta property="og:title" content="The Studio - Garden Annexe Range">
    <meta property="og:description"
        content="Compare our garden annexe designs and open each model for full details, pricing and layouts.">
    <meta name="twitter:title" content="The Studio - Garden Annexe Range">
    <meta name="twitter:description"
        content="Compare our garden annexe designs and open each model for full details, pricing and layouts.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CollectionPage",
            "name": "The Studio",
            "description": "Garden annexe range by The Granny Annexe Company"
        }
    </script>
@endsection

@section('title')
    The Studio - Garden Annexe Range
@endsection

@section('content')
    <main class="studio-listing-page">
        <!-- breadcrumb-start -->
        <section class="breadcrumb-area wa-p-relative studio-listing-hero" >
            <div class="breadcrumb-bg-img wa-fix wa-img-cover">
                <img class="wa-parallax-img" src="{{ url('frontend/assets/img/garden-living/hero_annexe_new.png') }}" title="breadcrumb-pricing" alt="breadcrumb-pricing">
            </div>

            <div class="container bs-container-1">
                <div class="breadcrumb-wrap">
                    <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >The Studio</h1>
                    <div class="breadcrumb-list " >
                        <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                        </svg>

                        <a href="{{ route('index') }}">Home</a>
                        <span>The Studio</span>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-end -->

        <!-- work-start -->
        <section class="bs-work-5-area pricing-builds-section wa-bg-default py-lg-5 py-3" data-background="{{ url('frontend/assets/img/work/w5-bg-img.webp') }}">
            <div class="container bs-container-2">

                <!-- section-title -->
                <div class="bs-work-5-sec-title mb-lg-5 mb-4">
                    <h2 class="bs-sec-title-4 wa-split-right wa-capitalize" data-cursor="-opaque">Our Bespoke Garden Annexe Builds.</h2>
                    <p class="bs-p-4 disc wa-fadeInUp mt-3 mb-0">
                        Take a look at some of our previous designs for inspiration and discover what's possible. Every annexe is bespoke, so if there's something you like, we'll tailor it to suit your exact requirements.
                    </p>
                </div>

                <!-- cards -->
                <div class="bs-work-5-wrap brochure-cards">

                    <!-- single-card -->
                    <div class="bs-work-5-card has-ani-up">
                        <a href="{{ route('theGardenStudio') }}">
                            <div class="bg-img wa-img-cover wa-fix">
                                <img src="{{ url('frontend/assets/img/garden-living/studio-external.png') }}" title="First Brochures" alt="First Brochures">
                            </div>
                            <h4 class="bs-h-1 title">5.5m x 4m The Garden Studio</h4>
                            <span class="build-price-badge">FROM £67,000 TURNKEY</span>
                            <p class="bs-p-4 disc">
                                Compact, beautifully designed and incredibly versatile, The Garden Studio is the smallest annexe within our range that we would comfortably recommend for full-time living.
                            </p>
                            <h5 class="bs-h-1 number">01</h5>
                        </a>
                    </div>

                    <!-- single-card -->
                    <div class="bs-work-5-card has-ani-down">
                        <a href="{{ route('theGardenStudioBadroom9x') }}">
                            <div class="bg-img wa-img-cover wa-fix">
                                <img src="{{ url('frontend/assets/img/garden-living/badroom-9x/studio-external.png') }}" title="Second Brochures" alt="Second Brochures">
                            </div>
                            <h4 class="bs-h-1 title">9m x 4m Oak Lodge</h4>
                            <span class="build-price-badge">FROM £88,350 TURNKEY</span>
                            <p class="bs-p-4 disc">
                                Compact, beautifully designed and incredibly versatile, The Garden Studio is the smallest annexe within our range that we would comfortably recommend for full-time living.
                            </p>
                            <h5 class="bs-h-1 number">02</h5>
                        </a>
                    </div>

                    <!-- single-card -->
                    <div class="bs-work-5-card has-ani-up">
                        <a href="{{ route('theGardenStudioBadroom8x') }}">
                            <div class="bg-img wa-img-cover wa-fix">
                                <img src="{{ url('frontend/assets/img/garden-living/badroom-8x/studio-external.png') }}" title="Third Brochures" alt="Third Brochures">
                            </div>
                            <h4 class="bs-h-1 title">8m x 4m The Willow Lodge</h4>
                            <span class="build-price-badge">FROM £83,125 TURNKEY</span>
                            <p class="bs-p-4 disc">
                                Compact, beautifully designed and incredibly versatile, The Garden Studio is the smallest annexe within our range that we would comfortably recommend for full-time living.
                            </p>
                            <h5 class="bs-h-1 number">03</h5>
                        </a>
                    </div>

                    <div class="bs-work-5-card has-ani-down">
                        <a href="{{ route('theGardenStudioBadroomGardenRetreat') }}">
                            <div class="bg-img wa-img-cover wa-fix">
                                <img src="{{ url('frontend/assets/img/garden-living/badroom-6x/studio-external.png') }}" title="Third Brochures" alt="Third Brochures">
                            </div>
                            <h4 class="bs-h-1 title">6.5m x 6.5m The Garden Retreat</h4>
                            <span class="build-price-badge">FROM £93,700 TURNKEY</span>
                            <p class="bs-p-4 disc">
                                The Garden Retreat is a spacious granny annexe designed for comfortable, independent living with modern style and privacy. It offers more space than a traditional studio, making it ideal for long-term family living.
                            </p>
                            <h5 class="bs-h-1 number">04</h5>
                        </a>
                    </div>

                    <div class="bs-work-5-card has-ani-up">
                        <a href="{{ route('theForeverLodge') }}">
                            <div class="bg-img wa-img-cover wa-fix">
                                <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-external.png') }}" title="Third Brochures" alt="Third Brochures">
                            </div>
                            <h4 class="bs-h-1 title">12m x 6.3m  The Forever Lodge</h4>
                            <span class="build-price-badge">FROM £148,000 Turnkey</span>
                            <p class="bs-p-4 disc">
                                The Forever Lodge has been designed to deliver exceptional space, comfort and practicality for full-time independent living. This design combines expansive internal living areas with premium finishes throughout, creating a beautiful self-contained home within your existing garden.
                            </p>
                            <h5 class="bs-h-1 number">05</h5>
                        </a>
                    </div>

                    <div class="bs-work-5-card has-ani-down">
                        <a href="{{ route('theGrandLodge') }}">
                            <div class="bg-img wa-img-cover wa-fix">
                                <img src="{{ url('frontend/assets/img/garden-living/grand-lodge/studio-external.png') }}" title="Third Brochures" alt="Third Brochures">
                            </div>
                            <h4 class="bs-h-1 title">13.5m x 6.5m  The Grand Lodge</h4>
                            <span class="build-price-badge">FROM £150,260 Turnkey</span>
                            <p class="bs-p-4 disc">
                                The Grand Lodge is one of our larger an more luxurious granny annexes within our collection, offering an exceptional level of space, comfort and practicality for long-term independent living.
                            </p>
                            <h5 class="bs-h-1 number">06</h5>
                        </a>
                    </div>

                    <div class="bs-work-5-card has-ani-up">
                        <a href="{{ route('theGrandHaven') }}">
                            <div class="bg-img wa-img-cover wa-fix">
                                <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-external.png') }}" title="Third Brochures" alt="Third Brochures">
                            </div>
                            <h4 class="bs-h-1 title">10m x 4.7m The Garden Haven</h4>
                            <span class="build-price-badge">FROM g£98,125 Turnkey</span>
                            <p class="bs-p-4 disc">
                                Generously proportioned and thoughtfully designed, The Garden Haven is a spacious one-bedroom granny annexe created for comfortable, independent living within the garden.
                            </p>
                            <h5 class="bs-h-1 number">07</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- work-end -->

        @include('frontend.inc.conabout-banner')
    </main>
@endsection
