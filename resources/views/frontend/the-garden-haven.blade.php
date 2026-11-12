@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="The Garden Haven - 12m x 6.3m Two Bedroom Granny Annexe">
    <meta name="description"
        content="Explore The Garden Haven, a spacious 12m x 6.3m two-bedroom granny annexe designed for comfortable, full-time independent living.">
    <meta property="og:title" content="The Garden Haven - Two Bedroom Granny Annexe">
    <meta property="og:description"
        content="Discover The Garden Haven, a luxury turnkey steel-frame granny annexe designed for year-round independent living.">
    <meta name="twitter:title" content="The Garden Haven - Two Bedroom Granny Annexe">
    <meta name="twitter:description"
        content="Discover our luxury turnkey steel-frame granny annexe. Warm, quiet, energy-efficient, and fully fitted.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",

        "@type":"Service",

        "name":"The Garden Haven",

        "provider":{
        "@type":"Organization",
        "name":"The Garden Haven"
        },

        "serviceType":"Two Bedroom Granny Annexe Installation"
        }
    </script>
@endsection

@section('title')
    The Garden Haven - 12m x 6.3m Two Bedroom Granny Annexe
@endsection

@section('css')

@endsection

@section('content')
    <div class="gl-page">

    <!-- HERO SECTION -->
    <section class="gl-hero wa-fadeInUp">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Hero Left: Text Content -->
                <div class="col-lg-5 col-md-12">
                    <div class="gl-hero-content wa-fadeInUp">
                        <span class="gl-badge wa-fadeInUp">SPACIOUS. LUXURY. INDEPENDENT LIVING</span>
                        <h1 class="bs-hero-4-title wa-split-right wa-capitalize">The Garden Haven</h1>
                        <p class="gl-hero-subtitle wa-fadeInUp">10m x 4.7m One Bedroom Granny Annexe</p>

                        <div class="gl-hero-price-block wa-fadeInUp">
                            <span class="gl-price-label">FROM</span>
                            <span class="gl-price-amount">£98,125</span>
                            <span class="gl-price-turnkey">TURNKEY</span>
                        </div>

                        <p class="gl-hero-desc wa-fadeInUp">
                            Generously proportioned and thoughtfully designed, The Garden Haven is a spacious one-bedroom granny annexe created for comfortable, independent living within the garden.
                        </p>

                        <div class="gl-hero-actions">
                            <div class="btn-wrap wa-fadeInUp">
                                <a href="#" aria-label="name" class="bs-btn-1">
                                    <span class="text">
                                        BOOK A SITE SURVEY
                                    </span>
                                    <span class="shape"></span>
                                </a>
                            </div>

                            <div class="btn-wrap wa-fadeInRight">
                                <a href="{{ url('frontend/assets/img/brochure/thegrannyannexecompany.pdf') }}"
                                    target="_blank" download aria-label="name" class="bs-btn-1 white-btn">
                                    <span class="gl-btn-icon"><i class="fa-solid fa-circle-down"></i></span>
                                    <span class="text">
                                        DOWNLOAD BROCHURE
                                    </span>
                                    <span class="shape"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Right: Image Render -->
                <div class="col-lg-7 col-md-12">
                    <div class="gl-hero-image-container wa-fadeInRight">
                        <div class="gl-hero-image-wrapper wa-fadeInUp">
                            <img src="{{ url('frontend/assets/img/garden-living/garden-haven/hero-section-img.png') }}"
                            alt="The Forever Lodge exterior render" class="gl-img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SPECIFICATIONS BAR -->
    <section class="gl-specs-bar wa-fadeInUp">
        <div class="container-fluid">
            <div class="gl-specs-grid">
                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-maximize"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">SIZE</span>
                        <span class="gl-spec-value">10m x 4.7m (External)</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">LAYOUT</span>
                        <span class="gl-spec-value">One Bedroom Layout</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">BEDROOMS</span>
                        <span class="gl-spec-value">1 Bedroom</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-trowel-bricks"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">BUILD TYPE</span>
                        <span class="gl-spec-value">Steel Frame</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">FLOOR AREA</span>
                        <span class="gl-spec-value">Approx. 47m²</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-sterling-sign"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">STARTING FROM</span>
                        <span class="gl-spec-value">£98,125 Turnkey</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOOR PLAN & VISUALS INTERACTIVE COMPONENT -->
    <section class="gl-visuals-section py-lg-5 py-4 wa-fadeInUp">
        <div class="container bs-container-1">

            <div class="gl-section-header text-center bs-about-4-content wa-fadeInUp">
                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize">FLOOR PLAN & VISUALS</h2>
            </div>


            <!-- Tab Buttons Navigation -->
            <div class="gl-tabs-nav wa-fadeInUp">
                <button class="gl-tab-btn active" data-target="tab-floorplan">Floor Plan</button>
                <button class="gl-tab-btn" data-target="tab-living">Living Area</button>
                <button class="gl-tab-btn" data-target="tab-kitchen">Kitchen</button>
                <button class="gl-tab-btn" data-target="tab-shower">Shower Room</button>
                <button class="gl-tab-btn" data-target="tab-bedroom">Bedroom View</button>
                <button class="gl-tab-btn" data-target="tab-external">External View</button>
            </div>

            <!-- Tab Panels Content -->
            <div class="gl-tabs-content wa-fadeInUp">
                <!-- Tab 1: Floor Plan (Beautiful Responsive Vector Layout) -->
                <div class="gl-tab-panel active" id="tab-floorplan">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="gl-floorplan-vector-container">
                                <div class="gl-floorplan-card">
                                    <div class="img">
                                        <img src="{{ url('frontend/assets/img/garden-living/garden-haven/floorplan-map.png') }}"
                                            alt="floorplan-map">
                                    </div>
                                    <div class="img floorplan-details">
                                        <img src="{{ url('frontend/assets/img/garden-living/garden-haven/floorplan-details.png') }}"
                                            alt="floorplan-details">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 3: Living Area (Generated image) -->
                <div class="gl-tab-panel" id="tab-living">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-living.png') }}"
                            alt="The Forever Lodge living area render" class="gl-panel-img">
                        <div class="gl-panel-caption">Warm, bright, and highly insulated living quarters customized
                            with real wood floors.</div>
                    </div>
                </div>

                <!-- Tab 4: Kitchen (Generated image) -->
                <div class="gl-tab-panel" id="tab-kitchen">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-kitchen.png') }}"
                            alt="The Forever Lodge kitchen render" class="gl-panel-img">
                        <div class="gl-panel-caption">Sleek bespoke kitchenette with induction hob, integrated
                            fridge-freezer, and solid counters.</div>
                    </div>
                </div>

                <!-- Tab 5: Shower Room (Generated image) -->
                <div class="gl-tab-panel" id="tab-shower">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-washroom.png') }}"
                            alt="The Forever Lodge shower room render" class="gl-panel-img">
                        <div class="gl-panel-caption">Fully fitted shower room with durable Aquapanel finish,
                            instant hot water, and black fixtures.</div>
                    </div>
                </div>

                <!-- Tab 6: Bedroom View (Premium Unsplash image) -->
                <div class="gl-tab-panel" id="tab-bedroom">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-bedroom.png') }}"
                            alt="The Forever Lodge bedroom layout" class="gl-panel-img">
                        <div class="gl-panel-caption">Multi-functional open plan layout that accommodates a full
                            double-bed setup comfortably.</div>
                    </div>
                </div>

                <!-- Tab 7: External View (Generated image) -->
                <div class="gl-tab-panel" id="tab-external">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-external.png') }}"
                            alt="The Forever Lodge external twilight render" class="gl-panel-img">
                        <div class="gl-panel-caption">Contemporary external appearance with vertical cladding and
                            matching anthracite double doors.</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- INTERIOR & EXTERIOR GALLERY ROW (Using Fancybox for lightboxes) -->
    <section class="gl-gallery-row-section pb-lg-5 pb-4 pt-lg-0 pt-0 wa-fadeInUp">
        <div class="container bs-container-1">
            <div class="gl-gallery-grid wa-fadeInUp">

                <a href="{{ url('frontend/assets/img/garden-living/garden-haven/studio-living.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="The Forever Lodge cosy living area">
                    <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-living.png') }}" alt="Living Room Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/garden-haven/studio-kitchen.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="Fully Customisable Kitchenette">
                    <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-kitchen.png') }}" alt="Kitchen Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/garden-haven/studio-washroom.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="Spacious Walk-in Shower Cabin">
                    <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-washroom.png') }}" alt="Shower Room Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/garden-haven/studio-bedroom.png') }}"
                    class="gl-gallery-item wa-fadeInUp" data-fancybox="garden-gallery" data-caption="Cozy Double Bedroom Layout">
                    <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-bedroom.png') }}"
                        alt="Bedroom Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/garden-haven/studio-external.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="The Forever Lodge external twilight view">
                    <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-external.png') }}" alt="External Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

            </div>
        </div>
    </section>

    <!-- PRICE & SPECIFICATION LISTS -->
    <section class="gl-pricing-spec py-lg-5 py-4 wa-fadeInUp">
        <div class="container-fluid px-lg-5  px-md-4 px-4">
            <div class="gl-section-header text-center bs-about-4-content wa-fadeInUp">
                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize">PRICE & SPECIFICATION</h2>
            </div>

            <div class="gl-pricing-grid wa-fadeInUp">

                <!-- Card 1: Turnkey Pricing highlight -->
                <div class="gl-pricing-card wa-fadeInUp">
                    <span class="gl-p-card-label">FROM</span>
                    <h3 class="gl-p-card-price">£98,125</h3>
                    <span class="gl-p-card-turnkey">TURNKEY</span>
                    <p class="gl-p-card-desc">
                        The Garden Haven is supplied as a complete turnkey granny annexe, providing the essential elements required to create a comfortable and practical home ready for everyday use.
                    </p>
                    <p class="gl-p-card-desc">
                        Rather than supplying a basic shell or garden room, the specification includes the structure, foundations, internal finishes, kitchen, shower room, WC, heating and key service connections required to deliver a high-quality residential annexe.
                    </p>
                </div>

                <div class="gl-spec-slider-wrap wa-fadeInUp">
                    <div class="gl-spec-slider swiper">
                        <div class="swiper-wrapper">
                            <!-- Spec column 2: Structural -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i
                                class="fa-solid fa-trowel-bricks"></i></span> STRUCTURAL & CONSTRUCTION</h4>
                                <ul class="gl-spec-col-list">
                                    <li><i class="fa-solid fa-check"></i> Light gauge steel frame construction</li>
                                    <li><i class="fa-solid fa-check"></i> Ground screw foundations</li>
                                    <li><i class="fa-solid fa-check"></i> 135mm roof overhang with steel fascias</li>
                                    <li><i class="fa-solid fa-check"></i> Composite cladding to front, left and right elevations</li>
                                    <li><i class="fa-solid fa-check"></i> Steel panel system to rear elevation</li>
                                    <li><i class="fa-solid fa-check"></i> Triple glazed windows & doors throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Pencil round skirting boards</li>
                                    <li><i class="fa-solid fa-check"></i> Internal doors throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Composite entrance step</li>
                                </ul>
                            </div>

                             <!-- Spec column 5: Included as standard -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i
                                            class="fa-solid fa-check"></i></span> WINDOWS & DOORS</h4>
                                <ul class="gl-spec-col-list font-medium">
                                    <li><i class="fa-solid fa-check"></i>
                                        1 x 1500mm x 2100mm Anthracite Grey Triple Glazed uPVC French Door
                                    </li>
                                    <li><i class="fa-solid fa-check"></i>
                                        4 x 1300mm x 1200mm Anthracite Grey Triple Glazed uPVC Functional Windows
                                    </li>
                                    <li><i class="fa-solid fa-check"></i>
                                        1 x 600mm x 500mm Anthracite Grey Triple Glazed uPVC Functional Window
                                    </li>
                                    <li><i class="fa-solid fa-check"></i>
                                        The combination of French doors and generously sized windows helps create a bright and welcoming interior while providing excellent insulation, ventilation and views across the surrounding garden.
                                    </li>
                                </ul>
                            </div>

                            <!-- Spec column 3: Internal finish -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i class="fa-solid fa-couch"></i></span>
                                    INTERNAL FINISH</h4>
                                <ul class="gl-spec-col-list">
                                    <li><i class="fa-solid fa-check"></i> Plastered finish throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Decorated white finish throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Laminate flooring throughout (£22 per sqm allowance)</li>
                                    <li><i class="fa-solid fa-check"></i> Full kitchen included (£4,000 allowance)</li>
                                    <li><i class="fa-solid fa-check"></i> Fully fitted shower room with Aquapanel system</li>
                                    <li><i class="fa-solid fa-check"></i> Fully fitted WC</li>
                                    <li><i class="fa-solid fa-check"></i> Smart panel heaters</li>
                                    <li><i class="fa-solid fa-check"></i> Internal doors throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Mechanical ventilation</li>
                                </ul>
                            </div>

                            <!-- Spec column 4: Electrical -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i class="fa-solid fa-bolt"></i></span>
                                    ELECTRICAL</h4>
                                <ul class="gl-spec-col-list">
                                    <li><i class="fa-solid fa-check"></i> Certified hard-wired electrical connection</li>
                                    <li><i class="fa-solid fa-check"></i> 6 internal brushed steel double plug sockets</li>
                                    <li><i class="fa-solid fa-check"></i> 4 internal LED ceiling lights</li>
                                </ul>
                            </div>

                            <!-- Spec column 5: Included as standard -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i
                                            class="fa-solid fa-check"></i></span> GROUNDWORKS & CONNECTIONS</h4>
                                <ul class="gl-spec-col-list font-medium">
                                    <li><i class="fa-solid fa-check"></i> Supply & waste connections</li>
                                    <li><i class="fa-solid fa-check"></i> Ground preparation works</li>
                                    <li><i class="fa-solid fa-check"></i> Waste removal</li>
                                    <li><i class="fa-solid fa-check"></i> On-site welfare facilities</li>
                                </ul>
                            </div>

                            <!-- Spec column 5: Included as standard -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i
                                            class="fa-solid fa-check"></i></span> PLANNING & PEACE OF MIND</h4>
                                <ul class="gl-spec-col-list font-medium">
                                    <li><i class="fa-solid fa-check"></i> Elevation plans included</li>
                                    <li><i class="fa-solid fa-check"></i> Certificate of Lawfulness application & management</li>
                                    <li><i class="fa-solid fa-check"></i> 10-year structural warranty</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="gl-spec-slider-controls">
                        <button type="button" class="gl-spec-slider-btn gl-spec-slider-prev" aria-label="Previous specification">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <div class="gl-spec-slider-pagination"></div>
                        <button type="button" class="gl-spec-slider-btn gl-spec-slider-next" aria-label="Next specification">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- POPULAR UPGRADES SHOWCASE -->
    <section class="gl-upgrades pt-lg-5 pt-4 pb-lg-0 pb-0 wa-fadeInUp">
        <div class="container-fluid px-lg-5  px-md-4 px-4">
            <div class="gl-section-header text-center bs-about-4-content wa-fadeInUp">
                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize">POPULAR UPGRADES</h2>
            </div>
            <div class="gl-para-upgrades">
                <div class="gl-upgrades-grid wa-fadeInUp">
                    <div class="gl-upgrade-item wa-fadeInUp">
                        <div class="gl-upgrade-icon"><i class="fa-solid fa-tree"></i></div>
                        <span class="gl-upgrade-name">Decking & Steps</span>
                    </div>
                    <div class="gl-upgrade-item wa-fadeInUp">
                        <div class="gl-upgrade-icon"><i class="fa-solid fa-kitchen-set"></i></div>
                        <span class="gl-upgrade-name">Upgraded Kitchen Packages</span>
                    </div>
                    <div class="gl-upgrade-item wa-fadeInUp">
                        <div class="gl-upgrade-icon"><i class="fa-solid fa-snowflake"></i></div>
                        <span class="gl-upgrade-name">Air Conditioning</span>
                    </div>
                    <div class="gl-upgrade-item wa-fadeInUp">
                        <div class="gl-upgrade-icon"><i class="fa-solid fa-brush"></i></div>
                        <span class="gl-upgrade-name">Cladding Upgrade</span>
                    </div>
                    <div class="gl-upgrade-item wa-fadeInUp">
                        <div class="gl-upgrade-icon"><i class="fa-solid fa-couch"></i></div>
                        <span class="gl-upgrade-name">Glazing Upgrades</span>
                    </div>
                    <div class="gl-upgrade-item wa-fadeInUp">
                        <div class="gl-upgrade-icon"><i class="fa-solid fa-wheelchair"></i></div>
                        <span class="gl-upgrade-name">Accessibility Adaptations</span>
                    </div>
                </div>
                <p class="gl-upgrades-disclaimer text-lg-start text-md-center text-center wa-fadeInUp">
                    The standard specification includes a combination of contemporary and low-maintenance materials.
                    Discover more of our upgrades here
                </p>
            </div>
        </div>
    </section>

    <!-- BOTTOM CONVERSION CTA BANNER -->
    <section class="gl-bottom-cta-section wa-fadeInUp">
        <div class="container-fluid px-0">
            <div class="gl-bottom-cta-wrap shadow-2xl wa-fadeInUp">
                <div class="gl-cta-inner-bg wa-fadeInUp">
                    <img src="{{ url('frontend/assets/img/garden-living/garden-haven/studio-external.png') }}" alt="">
                </div>
                <div class="gl-cta-content wa-fadeInUp">
                    <div class="gl-bottom-tile-para d-flex flex-column wa-fadeInUp">
                        <h2 class="gl-cta-title wa-split-right wa-capitalize">Could The Forever Lodge Work In Your Garden?</h2>
                        <p class="gl-cta-desc wa-fadeInUp">Book a free consultation and explore whether this spacious annexe design
                            could work for your family and lifestyle.</p>
                    </div>

                    <div class="gl-cta-buttons">
                        <div class="btn-wrap wa-fadeInUp">
                            <a href="#" aria-label="name" class="bs-btn-1 onhover-border">
                                <span class="text">
                                    BOOK A SITE SURVEY
                                </span>
                                <span class="shape" ></span>
                            </a>
                        </div>
                        <div class="btn-wrap wa-fadeInRight">
                            <a href="#" aria-label="View full gallery"
                                class="bs-btn-1 transperent-btn">
                                <span class="text">DOWNLOAD FLOOR PLAN</span>
                                <span class="shape"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM GUARANTEE ICON BAR -->
    <section class="gl-guarantee-bar-section py-lg-5 py-4 wa-fadeInUp">
        <div class="container-fluid mx-auto px-lg-5 px-auto">
            <div class="gl-guarantee-grid wa-fadeInUp">

                <div class="gl-guarantee-item wa-fadeInUp">
                    <div class="gl-g-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="gl-g-info">
                        <span class="gl-g-title">BUILT TO LAST</span>
                        <span class="gl-g-desc">10-Year Structural Warranty</span>
                    </div>
                </div>

                <div class="gl-guarantee-item wa-fadeInUp">
                    <div class="gl-g-icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="gl-g-info">
                        <span class="gl-g-title">ENERGY EFFICIENT</span>
                        <span class="gl-g-desc">Lower Running Costs</span>
                    </div>
                </div>

                <div class="gl-guarantee-item wa-fadeInUp">
                    <div class="gl-g-icon"><i class="fa-solid fa-temperature-empty"></i></div>
                    <div class="gl-g-info">
                        <span class="gl-g-title">YEAR-ROUND COMFORT</span>
                        <span class="gl-g-desc">Warm in Winter, Cool in Summer</span>
                    </div>
                </div>

                <div class="gl-guarantee-item wa-fadeInUp">
                    <div class="gl-g-icon"><i class="fa-solid fa-drafting-compass"></i></div>
                    <div class="gl-g-info">
                        <span class="gl-g-title">EXPERTLY DESIGNED</span>
                        <span class="gl-g-desc">For Real Independent Living</span>
                    </div>
                </div>

                <div class="gl-guarantee-item wa-fadeInUp">
                    <div class="gl-g-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    <div class="gl-g-info">
                        <span class="gl-g-title">PEACE OF MIND</span>
                        <span class="gl-g-desc">Complete Turnkey Service</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching logic for the Floor Plan & Visuals component
            const tabBtns = document.querySelectorAll('.gl-tab-btn');
            const tabPanels = document.querySelectorAll('.gl-tab-panel');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    tabBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    // Get target panel id
                    const targetId = this.getAttribute('data-target');

                    // Hide all panels with opacity transition support
                    tabPanels.forEach(panel => {
                        panel.classList.remove('active');
                    });

                    // Show targeted panel
                    const targetPanel = document.getElementById(targetId);
                    if (targetPanel) {
                        targetPanel.classList.add('active');
                    }
                });
            });

            if (document.querySelector('.gl-spec-slider') && typeof Swiper !== 'undefined') {
                new Swiper('.gl-spec-slider', {
                    loop: true,
                    speed: 700,
                    spaceBetween: 10,
                    grabCursor: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.gl-spec-slider-next',
                        prevEl: '.gl-spec-slider-prev',
                    },
                    pagination: {
                        el: '.gl-spec-slider-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1200: {
                            slidesPerView: 3,
                        },
                    },
                });
            }
        });
    </script>
@endsection
