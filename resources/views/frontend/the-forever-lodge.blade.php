@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="The Forever Lodge - 12m x 6.3m Two Bedroom Granny Annexe">
    <meta name="description"
        content="Explore The Forever Lodge, a spacious 12m x 6.3m two-bedroom granny annexe designed for comfortable, full-time independent living.">
    <meta property="og:title" content="The Forever Lodge - Two Bedroom Granny Annexe">
    <meta property="og:description"
        content="Discover The Forever Lodge, a luxury turnkey steel-frame granny annexe designed for year-round independent living.">
    <meta name="twitter:title" content="The Forever Lodge - Two Bedroom Granny Annexe">
    <meta name="twitter:description"
        content="Discover our luxury turnkey steel-frame granny annexe. Warm, quiet, energy-efficient, and fully fitted.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",

        "@type":"Service",

        "name":"The Forever Lodge",

        "provider":{
        "@type":"Organization",
        "name":"The Granny Annexe Company"
        },

        "serviceType":"Two Bedroom Granny Annexe Installation"
        }
    </script>
@endsection

@section('title')
    The Forever Lodge - 12m x 6.3m Two Bedroom Granny Annexe
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
                        <h1 class="bs-hero-4-title wa-split-right wa-capitalize">The Forever Lodge</h1>
                        <p class="gl-hero-subtitle wa-fadeInUp">12m x 6.3m Two Bedroom Granny Annexe</p>

                        <div class="gl-hero-price-block wa-fadeInUp">
                            <span class="gl-price-label">FROM</span>
                            <span class="gl-price-amount">£148,000</span>
                            <span class="gl-price-turnkey">TURNKEY</span>
                        </div>

                        <p class="gl-hero-desc wa-fadeInUp">
                            The Forever Lodge has been designed to deliver exceptional space, comfort and practicality for full-time independent living. This design combines expansive internal living areas with premium finishes throughout, creating a beautiful self-contained home within your existing garden.
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
                            <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/hero-section-img-new.png') }}"
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
                        <span class="gl-spec-value">12m x 6.3m</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">LAYOUT</span>
                        <span class="gl-spec-value">Open-Plan Luxury Layout</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">BEDROOMS</span>
                        <span class="gl-spec-value">2 People</span>
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
                        <span class="gl-spec-value">Approx. 75m²</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-sterling-sign"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">STARTING FROM</span>
                        <span class="gl-spec-value">£149,202 Turnkey</span>
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

            <div class="fl-visuals-intro wa-fadeInUp">
                <div class="fl-visuals-intro-main">
                    <span class="fl-visuals-kicker">Designed Around Everyday Life</span>
                    <h3 class="fl-visuals-intro-title">Spacious Luxury Granny Annexe Living</h3>
                    <p>
                        The Forever Lodge has been carefully designed to provide generous internal accommodation whilst maintaining a bright, contemporary and highly practical living environment.
                    </p>
                </div>
                <div class="fl-visuals-points">
                    <div class="fl-visuals-point wa-fadeInUp">
                        <span class="fl-visuals-point-icon"><i class="fa-solid fa-maximize"></i></span>
                        <p>
                            Unlike many smaller granny annexes or garden rooms, this design provides clearly defined living zones whilst still retaining an open and spacious feel throughout. The larger footprint allows for a more comfortable day-to-day living experience, making it ideal for long-term independent accommodation.
                        </p>
                    </div>
                    <div class="fl-visuals-point wa-fadeInUp">
                        <span class="fl-visuals-point-icon"><i class="fa-solid fa-sun"></i></span>
                        <p>
                            The spacious open-plan living area combines lounge, kitchen and sleeping accommodation in a way that feels modern, uncluttered and highly functional. Large glazing creates a strong connection to the surrounding garden whilst helping maximise natural daylight throughout the annexe.
                        </p>
                    </div>
                    <div class="fl-visuals-point wa-fadeInUp">
                        <span class="fl-visuals-point-icon"><i class="fa-solid fa-shield-halved"></i></span>
                        <p>
                            Built using our advanced steel frame construction system and finished to BS3632 residential standard, The Forever Lodge delivers exceptional thermal efficiency, structural durability and year-round comfort.
                        </p>
                    </div>
                </div>
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
                                        <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/floorplan-map.png') }}"
                                            alt="floorplan-map">
                                    </div>
                                    <div class="img floorplan-details">
                                        <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/floorplan-details-new-01.png') }}"
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
                        <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-living.png') }}"
                            alt="The Forever Lodge living area render" class="gl-panel-img">
                        <div class="gl-panel-caption">Warm, bright, and highly insulated living quarters customized
                            with real wood floors.</div>
                    </div>
                </div>

                <!-- Tab 4: Kitchen (Generated image) -->
                <div class="gl-tab-panel" id="tab-kitchen">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-kitchen.png') }}"
                            alt="The Forever Lodge kitchen render" class="gl-panel-img">
                        <div class="gl-panel-caption">Sleek bespoke kitchenette with induction hob, integrated
                            fridge-freezer, and solid counters.</div>
                    </div>
                </div>

                <!-- Tab 5: Shower Room (Generated image) -->
                <div class="gl-tab-panel" id="tab-shower">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-washroom.png') }}"
                            alt="The Forever Lodge shower room render" class="gl-panel-img">
                        <div class="gl-panel-caption">Fully fitted shower room with durable Aquapanel finish,
                            instant hot water, and black fixtures.</div>
                    </div>
                </div>

                <!-- Tab 6: Bedroom View (Premium Unsplash image) -->
                <div class="gl-tab-panel" id="tab-bedroom">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-bedroom.png') }}"
                            alt="The Forever Lodge bedroom layout" class="gl-panel-img">
                        <div class="gl-panel-caption">Multi-functional open plan layout that accommodates a full
                            double-bed setup comfortably.</div>
                    </div>
                </div>

                <!-- Tab 7: External View (Generated image) -->
                <div class="gl-tab-panel" id="tab-external">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-external.png') }}"
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

                <a href="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-living.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="The Forever Lodge cosy living area">
                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-living.png') }}" alt="Living Room Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-kitchen.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="Fully Customisable Kitchenette">
                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-kitchen.png') }}" alt="Kitchen Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-washroom.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="Spacious Walk-in Shower Cabin">
                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-washroom.png') }}" alt="Shower Room Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-bedroom.png') }}"
                    class="gl-gallery-item wa-fadeInUp" data-fancybox="garden-gallery" data-caption="Cozy Double Bedroom Layout">
                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-bedroom.png') }}"
                        alt="Bedroom Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-external.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="The Forever Lodge external twilight view">
                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-external.png') }}" alt="External Closeup">
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
                    <h3 class="gl-p-card-price">£148,000</h3>
                    <span class="gl-p-card-turnkey">TURNKEY</span>
                    <p class="gl-p-card-desc">
                        The Forever Lodge has been designed as a fully self-contained luxury granny annexe finished to a high residential standard throughout. Our turnkey pricing includes the essential elements required to create a comfortable, energy-efficient and fully liveable home ready for year-round use and you to move into 
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
                                    <li><i class="fa-solid fa-check"></i> Standard 350mm roof overhang with steel fascias</li>
                                    <li><i class="fa-solid fa-check"></i> Composite wood-effect external cladding</li>
                                    <li><i class="fa-solid fa-check"></i> Insulated steel roof system</li>
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
                                        2500mm x 2100mm triple glazed Aluminium Bifold door
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        900mm x 2100mm triple glazed uPVC entrance door
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        1200mm x 1200mm triple glazed  functional uPVC windows (3)
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        1500mm x 1200mm triple glazed functional uPVC windows (1)
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        600mm x 1200mm triple glazed functional bathroom windows (2)
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        Anthracite grey external finish throughout
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        The expansive glazing helps flood the granny annexe with natural light whilst creating a strong connection between the interior and surrounding garden.
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
                                    <li><i class="fa-solid fa-check"></i> Laminate flooring throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Full kitchen included (£5,500 allowance)</li>
                                    <li><i class="fa-solid fa-check"></i> Fully fitted shower rooms with Aquapanel system</li>
                                    <li><i class="fa-solid fa-check"></i> Smart panel heaters</li>
                                    <li><i class="fa-solid fa-check"></i> Water heater included</li>
                                </ul>
                            </div>

                            <!-- Spec column 4: Electrical -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i class="fa-solid fa-bolt"></i></span>
                                    ELECTRICAL</h4>
                                <ul class="gl-spec-col-list">
                                    <li><i class="fa-solid fa-check"></i> Certified hard wired electrical connection</li>
                                    <li><i class="fa-solid fa-check"></i> 15 internal brushed steel double plug sockets</li>
                                    <li><i class="fa-solid fa-check"></i> 24 internal LED lights with standard light switches</li>
                                    <li><i class="fa-solid fa-check"></i> 4 external PIR lights</li>
                                    <li><i class="fa-solid fa-check"></i> 1 external socket</li>
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
                                    <li><i class="fa-solid fa-check"></i> High-definition professional 3D renders</li>
                                    <li><i class="fa-solid fa-check"></i> Full project management</li>
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

    <!-- DESIGNED FOR REAL LIVING / PERFECT FOR -->
    <section class="gl-benefits py-lg-5 py-4 wa-fadeInUp">
        <div class="container-fluid px-lg-5  px-md-4 px-4">
            <div class="row align-items-center">
                <!-- Left: Description and Key Metrics -->
                <div class="col-lg-6 col-md-12 mb-lg-0 mb-5">
                    <div class="gl-benefits-left wa-fadeInUp">
                        <h2 class="gl-benefits-title wa-split-right wa-capitalize">DESIGNED FOR REAL LIVING</h2>
                        <p class="gl-benefits-text wa-fadeInUp">
                            The Executive Lodge has been designed as a genuine full-time residential living space complete with:
                        </p>
                        <ul class="gl-perfect-list wa-fadeInUp">
                            <li><i class="fa-solid fa-check"></i> Full kitchen</li>
                            <li><i class="fa-solid fa-check"></i> Fully fitted shower room</li>
                            <li><i class="fa-solid fa-check"></i> Triple glazing throughout</li>
                            <li><i class="fa-solid fa-check"></i> Insulated beyond what is required for new build houses</li>
                            <li><i class="fa-solid fa-check"></i> Smart electric heating</li>
                            <li><i class="fa-solid fa-check"></i> Mechanical ventilation</li>
                            <li><i class="fa-solid fa-check"></i> Durable low-maintenance finishes</li>
                            <li><i class="fa-solid fa-check"></i> Plastered and decorated internal finish</li>
                            <li><i class="fa-solid fa-check"></i> Fully integrated electrical system</li>
                        </ul>
                        <p class="gl-benefits-text wa-fadeInUp">
                            The result is a luxury granny annexe that feels secure, spacious and genuinely comfortable for everyday living throughout the year.
                        </p>
                    </div>
                </div>

                <!-- Right: Perfect For sections -->
                <div class="col-lg-6 col-md-12">
                    <div class="gl-benefits-right wa-fadeInRight">
                        <h2 class="gl-benefits-title text-center wa-split-right wa-capitalize">PERFECT FOR</h2>
                        <div class="d-flex flex-lg-row flex-md-row flex-column justify-content-between gap-md-1 gap-lg-2">
                            <div class="gl-perfect-block wa-fadeInUp">
                                <div class="gl-perfect-title-box">
                                    <span class="gl-perfect-icon"><i class="fa-solid fa-users"></i></span>
                                    <h4>OLDER FAMILY MEMBERS</h4>
                                </div>
                                <P>
                                    The Forever Lodge is an excellent granny annexe solution for:
                                </P>
                                <ul class="gl-perfect-list">
                                    <li><i class="fa-solid fa-check"></i> Elderly parents wanting to remain close to family whilst maintaining independence</li>
                                    <li><i class="fa-solid fa-check"></i> Avoiding the financial and emotional cost of care homes</li>
                                    <li><i class="fa-solid fa-check"></i> Comfortable single-level living</li>
                                    <li><i class="fa-solid fa-check"></i> Long-term accessible accommodation</li>
                                    <li><i class="fa-solid fa-check"></i> Warm, secure and low-maintenance living</li>
                                    <li><i class="fa-solid fa-check"></i> Families wanting multi-generational living solutions</li>
                                </ul>
                                <P>
                                    Its generous internal space makes this luxury granny annexe particularly well suited to full-time living for older occupants who may require additional comfort and practicality.
                                </P>
                            </div>
                            <div class="gl-perfect-block wa-fadeInUp">
                                <div class="gl-perfect-title-box">
                                    <span class="gl-perfect-icon"><i class="fa-solid fa-heart-pulse"></i></span>
                                    <h4>YOUNGER OCCUPANTS</h4>
                                </div>
                                <P>
                                    This annexe is equally well suited for:
                                </P>
                                <ul class="gl-perfect-list">
                                    <li><i class="fa-solid fa-check"></i> Young adults saving for their first home</li>
                                    <li><i class="fa-solid fa-check"></i> Returning university students or graduates</li>
                                    <li><i class="fa-solid fa-check"></i> Independent guest accommodation</li>
                                    <li><i class="fa-solid fa-check"></i> Live-in carers</li>
                                    <li><i class="fa-solid fa-check"></i> Flexible multi-generational living</li>
                                    <li><i class="fa-solid fa-check"></i> Luxury garden accommodation</li>
                                </ul>
                                <P>
                                    The contemporary open-plan design gives the annexe a premium apartment-style feel, making it attractive for occupants of all ages.
                                </P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- EXTERNAL APPEARANCE & GLAZING SECTION -->
    <section class="gl-glazing py-lg-5 py-4 wa-fadeInUp">
        <div class="container-fluid px-lg-5  px-md-4 px-4">
            <div class="row align-items-center">

                <!-- Glazing Left: Detailed specifications -->
                <div class="col-lg-5 col-md-12">
                    <div class="gl-glazing-details wa-fadeInUp">
                        <h2 class="gl-glazing-title wa-split-right wa-capitalize">EXTERNAL APPEARANCE & GLAZING</h2>
                        <p class="gl-glazing-desc wa-fadeInUp">
                            The Forever Lodge has been designed with a clean contemporary appearance which blends beautifully into both modern and traditional garden settings.
                        </p>
                        <p class="gl-glazing-desc wa-fadeInUp">
                            The combination of premium composite cladding, anthracite glazing and contemporary detailing creates a luxury architectural appearance whilst remaining highly durable and low maintenance.
                        </p>
                        <p class="gl-glazing-desc wa-fadeInUp">
                            Large glazed openings maximise natural light internally whilst helping create a strong visual connection between the granny annexe and the surrounding outdoor space.
                        </p>

                        <h3 class="gl-glazing-subtitle wa-fadeInUp">EXTERNAL FINISHES</h3>
                        <p class="gl-glazing-desc wa-fadeInUp">
                            The standard specification includes a carefully selected combination of premium low-maintenance materials designed to create a modern residential appearance whilst ensuring long-term durability.
                        </p>
                        <ul class="gl-glazing-list wa-fadeInUp">
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <p class="mb-0">
                                    Composite wood-effect cladding throughout
                                </p>
                            </li>
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <p class="mb-0">
                                    Anthracite grey windows and doors
                                </p>
                            </li>
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <span>
                                    <p class="mb-0">
                                        Steel fascia roof detailing
                                    </p>
                                </span>
                            </li>
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <span>
                                    <p class="mb-0">
                                        Low-maintenance external materials
                                    </p>
                                </span>
                            </li>
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <span>
                                    <p class="mb-0">
                                        Contemporary architectural appearance
                                    </p>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Glazing Middle: Collage/Images showcase -->
                <div class="col-lg-4 col-md-12 my-lg-0 my-4">
                    <div class="gl-glazing-gallery-wrap wa-fadeInRight">
                        <div class="gl-glazing-main-img wa-fadeInUp">
                            <a href="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-card-img.png') }}"
                                class="gl-external-fancybox"
                                data-fancybox="external-gallery"
                                data-caption="The Forever Lodge external glazing setup">
                                <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-card-img.png') }}"
                                    alt="studio-card-img" class="gl-img-fluid glazing-img rounded">
                            </a>
                        </div>

                        <!-- 4 tiny details thumbnails -->
                        <div class="gl-glazing-thumbs">
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Wood cladding closeup">
                                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-bedroom.png') }}"
                                        alt="studio-bedroom">
                                </a>
                            </div>
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Inside glazing view">
                                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-living.png') }}"
                                        alt="studio-living">
                                </a>
                            </div>
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Steel frame closeup">
                                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-kitchen.png') }}"
                                        alt="studio-kitchen">
                                </a>
                            </div>
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Door handle details">
                                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-washroom.png') }}"
                                        alt="studio-washroom">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Glazing Right: Make It Yours card -->
                <div class="col-lg-3 col-md-12">
                    <div class="gl-make-it-yours-card wa-fadeInUp">
                        <h4 class="gl-miy-title">MAKE IT YOURS</h4>
                        <p class="gl-miy-text">A range of optional upgrades are available to tailor your annexe to your
                            lifestyle and needs.</p>
                        <div class="btn-wrap wa-fadeInRight">
                            <a href="#" aria-label="View full gallery"
                                class="bs-btn-1 transperent-btn">
                                <span class="text">EXPLORE UPGRADES</span>
                                <span class="shape"></span>
                            </a>
                        </div>
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
                    <img src="{{ url('frontend/assets/img/garden-living/badroom-forever/studio-external.png') }}" alt="">
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
