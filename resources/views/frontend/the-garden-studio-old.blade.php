@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="The Garden Studio - 5.5m x 4m Open-Plan Granny Annexe | Garden Living">
    <meta name="description"
        content="Explore The Garden Studio, our 5.5m x 4m open-plan granny annexe. Fully insulated, turnkey steel frame garden rooms built to BS3632 residential standards with triple glazing included.">
    <meta property="og:title" content="The Garden Studio - 5.5m x 4m Open-Plan Granny Annexe">
    <meta property="og:description"
        content="Discover our luxury turnkey steel-frame granny annexe. Warm, quiet, energy-efficient, and fully fitted.">
    <meta name="twitter:title" content="The Garden Studio - 5.5m x 4m Open-Plan Granny Annexe">
    <meta name="twitter:description"
        content="Discover our luxury turnkey steel-frame granny annexe. Warm, quiet, energy-efficient, and fully fitted.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",

        "@type":"Service",

        "name":"Garden Studio",

        "provider":{
        "@type":"Organization",
        "name":"The Granny Annexe Company"
        },

        "serviceType":"Garden Studio Installation"
        }
    </script>
@endsection

@section('title')
    The Garden Studio - 5.5m x 4m Open-Plan Granny Annexe | Garden Living
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"/> --}}
    <!-- Custom styling fonts & settings for Garden Living page -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
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
                            <span class="gl-badge wa-fadeInUp">COMPACT. LUXURY. INDEPENDENT LIVING</span>
                            <h1 class="bs-hero-4-title wa-split-right wa-capitalize">The Garden Studio</h1>
                            <p class="gl-hero-subtitle wa-fadeInUp">5.5m x 4m Open-Plan Granny Annexe</p>

                            <div class="gl-hero-price-block wa-fadeInUp">
                                <span class="gl-price-label">FROM</span>
                                <span class="gl-price-amount">£66,000</span>
                                <span class="gl-price-turnkey">TURNKEY</span>
                            </div>

                            <p class="gl-hero-desc wa-fadeInUp">
                                Compact, beautifully designed and incredibly versatile, The Garden Studio is the smallest
                                annexe within our range that we would comfortably recommend for full-time living.
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
                                <img src="{{ url('frontend/assets/img/garden-living/hero_annexe_new.png') }}"
                                    alt="The Garden Studio Annexe Exterior Render" class="gl-img-fluid">
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
                        <span class="gl-spec-value">5.5m x 4m</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">LAYOUT</span>
                        <span class="gl-spec-value">Open Plan</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">OCCUPANCY</span>
                        <span class="gl-spec-value">1-2 People</span>
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
                        <span class="gl-spec-value">Approx 22m²</span>
                    </div>
                </div>

                <div class="gl-spec-item wa-fadeInUp">
                    <div class="gl-spec-icon-box">
                        <i class="fa-solid fa-sterling-sign"></i>
                    </div>
                    <div class="gl-spec-info">
                        <span class="gl-spec-label">STARTING FROM</span>
                        <span class="gl-spec-value">£66,000 Turnkey</span>
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
                                        <img src="{{ url('frontend/assets/img/garden-living/floorplan-map.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="img floorplan-details">
                                        <img src="{{ url('frontend/assets/img/garden-living/floorplan-details-new-01.png') }}"
                                            alt="">
                                    </div>
                                    {{-- <div class="gl-floorplan-title-bar">
                                        <span>2D DIMENSIONAL FLOOR PLAN</span>
                                        <span class="gl-badge-sm">SCALE 1:50</span>
                                    </div>
                                    <div class="gl-floorplan-svg-wrap">
                                        <!-- SVG Floor Plan -->
                                        <svg viewBox="0 0 550 400" class="gl-floorplan-svg">
                                            <!-- Outer wall -->
                                            <rect x="20" y="20" width="510" height="360" fill="#fcfbf7"
                                                stroke="#1b4134" stroke-width="4" rx="2" />

                                            <!-- Inside plaster space -->
                                            <rect x="25" y="25" width="500" height="350" fill="none"
                                                stroke="#ddd" stroke-width="1" />

                                            <!-- Shower Room divider wall -->
                                            <line x1="380" y1="20" x2="380" y2="220"
                                                stroke="#1b4134" stroke-width="4" />
                                            <line x1="380" y1="220" x2="480" y2="220"
                                                stroke="#1b4134" stroke-width="4" />

                                            <!-- Dimensions helper lines -->
                                            <!-- 5500 width dimension -->
                                            <line x1="20" y1="10" x2="530" y2="10"
                                                stroke="#a47966" stroke-width="1.5" />
                                            <line x1="20" y1="5" x2="20" y2="15"
                                                stroke="#a47966" stroke-width="1.5" />
                                            <line x1="530" y1="5" x2="530" y2="15"
                                                stroke="#a47966" stroke-width="1.5" />
                                            <text x="275" y="10" font-family="'Outfit', sans-serif" font-size="12"
                                                fill="#a47966" text-anchor="middle" font-weight="600"
                                                bg="#fcfbf7">5500 mm (5.5m)</text>

                                            <!-- 4000 height dimension -->
                                            <line x1="540" y1="20" x2="540" y2="380"
                                                stroke="#a47966" stroke-width="1.5" />
                                            <line x1="535" y1="20" x2="545" y2="20"
                                                stroke="#a47966" stroke-width="1.5" />
                                            <line x1="535" y1="380" x2="545" y2="380"
                                                stroke="#a47966" stroke-width="1.5" />
                                            <text x="548" y="200" font-family="'Outfit', sans-serif" font-size="12"
                                                fill="#a47966" text-anchor="middle" font-weight="600"
                                                transform="rotate(90, 548, 200)">4000 mm
                                                (4.0m)</text>

                                            <!-- Furniture Representation -->
                                            <!-- Sofa in Living Area -->
                                            <rect x="50" y="260" width="140" height="70" fill="#e8e5db"
                                                stroke="#a47966" stroke-width="1.5" rx="3" />
                                            <rect x="60" y="250" width="120" height="15" fill="#dfdaca"
                                                stroke="#a47966" stroke-width="1" rx="2" />
                                            <text x="120" y="300" font-family="'Outfit', sans-serif" font-size="11"
                                                fill="#777" text-anchor="middle">SOFA
                                                BED</text>

                                            <!-- Kitchen Counter -->
                                            <rect x="210" y="320" width="160" height="50" fill="#e8e5db"
                                                stroke="#a47966" stroke-width="1.5" rx="2" />
                                            <!-- Sink -->
                                            <rect x="230" y="330" width="30" height="30" fill="#f3f2ed"
                                                stroke="#777" stroke-width="1" rx="2" />
                                            <circle cx="245" cy="345" r="5" fill="none" stroke="#777"
                                                stroke-width="1" />
                                            <!-- Hob -->
                                            <rect x="300" y="335" width="40" height="20" fill="#1b4134"
                                                stroke="#777" stroke-width="1" rx="1" />
                                            <circle cx="310" cy="345" r="4" fill="#a47966" />
                                            <circle cx="330" cy="345" r="4" fill="#a47966" />
                                            <text x="290" y="305" font-family="'Outfit', sans-serif" font-size="11"
                                                fill="#777" text-anchor="middle">KITCHENETTE</text>

                                            <!-- Double French Doors at front bottom -->
                                            <line x1="120" y1="380" x2="270" y2="380"
                                                stroke="#fcfbf7" stroke-width="6" />
                                            <!-- Door swings -->
                                            <path d="M 120 380 A 75 75 0 0 1 195 455" fill="none" stroke="#a47966"
                                                stroke-dasharray="3,3" stroke-width="1" />
                                            <line x1="120" y1="380" x2="120" y2="455"
                                                stroke="#a47966" stroke-width="1.5" />
                                            <path d="M 270 380 A 75 75 0 0 0 195 455" fill="none" stroke="#a47966"
                                                stroke-dasharray="3,3" stroke-width="1" />
                                            <line x1="270" y1="380" x2="270" y2="455"
                                                stroke="#a47966" stroke-width="1.5" />

                                            <!-- Shower Cabin -->
                                            <rect x="390" y="30" width="80" height="80" fill="#e8e5db"
                                                stroke="#a47966" stroke-width="1.5" rx="2" />
                                            <circle cx="430" cy="70" r="10" fill="none" stroke="#777"
                                                stroke-width="1" />
                                            <!-- WC Toilet -->
                                            <rect x="470" y="160" width="40" height="25" fill="#e8e5db"
                                                stroke="#a47966" stroke-width="1.5" rx="3" />
                                            <rect x="480" y="145" width="20" height="15" fill="#dfdaca"
                                                stroke="#a47966" stroke-width="1.5" rx="1" />
                                            <!-- Wash Basin -->
                                            <ellipse cx="410" cy="180" rx="15" ry="10"
                                                fill="#e8e5db" stroke="#a47966" stroke-width="1.5" />

                                            <!-- Label texts for zones -->
                                            <text x="200" y="150" font-family="'Playfair Display', serif" font-size="16"
                                                fill="#1b4134" font-weight="600" text-anchor="middle">LIVING / KITCHEN
                                                /</text>
                                            <text x="200" y="175" font-family="'Playfair Display', serif" font-size="16"
                                                fill="#1b4134" font-weight="600" text-anchor="middle">SLEEPING
                                                AREA</text>

                                            <text x="445" y="125" font-family="'Playfair Display', serif" font-size="12"
                                                fill="#1b4134" font-weight="600" text-anchor="middle">SHOWER</text>
                                            <text x="445" y="140" font-family="'Playfair Display', serif" font-size="12"
                                                fill="#1b4134" font-weight="600" text-anchor="middle">ROOM</text>
                                        </svg>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-12">
                            <div class="gl-visuals-desc-box">
                                <h3 class="gl-visuals-subtitle">Maximizing Every Millimetre</h3>
                                <p class="gl-visuals-text">
                                    The Garden Studio's layout is engineered with absolute precision. The
                                    <strong>5.5m x 4m footprint</strong> provides a spacious 22m² interior space
                                    that seamlessly integrates your living, cooking, and sleeping quarters, while
                                    keeping a completely private luxury shower room.
                                </p>
                                <ul class="gl-visuals-list">
                                    <li><i class="fa-solid fa-circle-check"></i> <strong>Open-Plan
                                            Freedom:</strong> Adapts effortlessly to a lounge, bedroom studio, or
                                        cozy office.</li>
                                    <li><i class="fa-solid fa-circle-check"></i> <strong>Standard Luxury
                                            Shower:</strong> Features an integrated walk-in shower cabin, modern WC,
                                        and compact vanity basin.</li>
                                    <li><i class="fa-solid fa-circle-check"></i> <strong>Triple Glazed
                                            Entrance:</strong> Massive front double French doors provide outstanding
                                        natural light and ventilation.</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <!-- Tab 3: Living Area (Generated image) -->
                <div class="gl-tab-panel" id="tab-living">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/studio-living.png') }}"
                            alt="Garden Studio Living Area Render" class="gl-panel-img">
                        <div class="gl-panel-caption">Warm, bright, and highly insulated living quarters customized
                            with real wood floors.</div>
                    </div>
                </div>

                <!-- Tab 4: Kitchen (Generated image) -->
                <div class="gl-tab-panel" id="tab-kitchen">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/studio-kitchen.png') }}"
                            alt="Garden Studio Kitchen Render" class="gl-panel-img">
                        <div class="gl-panel-caption">Sleek bespoke kitchenette with induction hob, integrated
                            fridge-freezer, and solid counters.</div>
                    </div>
                </div>

                <!-- Tab 5: Shower Room (Generated image) -->
                <div class="gl-tab-panel" id="tab-shower">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/studio-washroom.png') }}"
                            alt="Garden Studio Shower Room Render" class="gl-panel-img">
                        <div class="gl-panel-caption">Fully fitted shower room with durable Aquapanel finish,
                            instant hot water, and black fixtures.</div>
                    </div>
                </div>

                <!-- Tab 6: Bedroom View (Premium Unsplash image) -->
                <div class="gl-tab-panel" id="tab-bedroom">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/studio-bedroom.png') }}"
                            alt="Garden Studio Bedroom Layout" class="gl-panel-img">
                        <div class="gl-panel-caption">Multi-functional open plan layout that accommodates a full
                            double-bed setup comfortably.</div>
                    </div>
                </div>

                <!-- Tab 7: External View (Generated image) -->
                <div class="gl-tab-panel" id="tab-external">
                    <div class="gl-panel-image-wrap">
                        <img src="{{ url('frontend/assets/img/garden-living/studio-external.png') }}"
                            alt="Garden Studio External Twilight Render" class="gl-panel-img">
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

                <a href="{{ url('frontend/assets/img/garden-living/studio-living.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="Garden Studio Cozy Living Area">
                    <img src="{{ url('frontend/assets/img/garden-living/studio-living.png') }}" alt="Living Room Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/studio-kitchen.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="Fully Customisable Kitchenette">
                    <img src="{{ url('frontend/assets/img/garden-living/studio-kitchen.png') }}" alt="Kitchen Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/studio-washroom.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="Spacious Walk-in Shower Cabin">
                    <img src="{{ url('frontend/assets/img/garden-living/studio-washroom.png') }}" alt="Shower Room Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/studio-bedroom.png') }}"
                    class="gl-gallery-item wa-fadeInUp" data-fancybox="garden-gallery" data-caption="Cozy Double Bedroom Layout">
                    <img src="{{ url('frontend/assets/img/garden-living/studio-bedroom.png') }}"
                        alt="Bedroom Closeup">
                    <div class="gl-gallery-overlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </a>

                <a href="{{ url('frontend/assets/img/garden-living/studio-external.png') }}" class="gl-gallery-item wa-fadeInUp"
                    data-fancybox="garden-gallery" data-caption="The Garden Studio External Twilight View">
                    <img src="{{ url('frontend/assets/img/garden-living/studio-external.png') }}" alt="External Closeup">
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
                    <h3 class="gl-p-card-price">£66,000</h3>
                    <span class="gl-p-card-turnkey">TURNKEY</span>
                    <p class="gl-p-card-desc">
                        The Garden Studio has been designed as a fully self-contained luxury living space finished to a high residential standard. Unlike many basic garden rooms or shell-only structures, our pricing includes the essential elements required to create a comfortable, year-round home ready for everyday living.
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
                                    <li><i class="fa-solid fa-check"></i> 300mm roof overhang with steel fascias</li>
                                    <li><i class="fa-solid fa-check"></i> Composite cladding front, right and left elevations</li>
                                    <li><i class="fa-solid fa-check"></i> Steel panel system (rear)</li>
                                    <li><i class="fa-solid fa-check"></i> Triple glazed windows and doors throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Internal doors throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Composite entrance step</li>
                                </ul>
                            </div>

                            <!-- Spec column 3: Internal finish -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i class="fa-solid fa-couch"></i></span>
                                    INTERNAL FINISH</h4>
                                <ul class="gl-spec-col-list">
                                    <li><i class="fa-solid fa-check"></i> Plastered finish throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Decorative white finish throughout</li>
                                    <li><i class="fa-solid fa-check"></i> Pencil round skirting boards</li>
                                    <li><i class="fa-solid fa-check"></i> Laminate flooring throughout (£22 per sqm
                                        allowance)</li>
                                    <li><i class="fa-solid fa-check"></i> Full kitchen included (£3,500 allowance)</li>
                                    <li><i class="fa-solid fa-check"></i> Fully fitted shower room with Aquapanel system
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> Smart panel heaters</li>
                                    <li><i class="fa-solid fa-check"></i> Internal door</li>
                                    <li><i class="fa-solid fa-check"></i> Mechanical ventilation</li>
                                </ul>
                            </div>

                            <!-- Spec column 4: Electrical -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i class="fa-solid fa-bolt"></i></span>
                                    ELECTRICAL</h4>
                                <ul class="gl-spec-col-list">
                                    <li><i class="fa-solid fa-check"></i> Certified hard wired electrical connection</li>
                                    <li><i class="fa-solid fa-check"></i> 4 internal brushed steel double plug sockets</li>
                                    <li><i class="fa-solid fa-check"></i> 3 internal ceiling rose lights</li>
                                    <li><i class="fa-solid fa-check"></i> Instent hot water heater</li>
                                </ul>
                            </div>

                            <!-- Spec column 5: Included as standard -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i
                                            class="fa-solid fa-check"></i></span> INCLUDED AS STANDARD</h4>
                                <ul class="gl-spec-col-list font-medium">
                                    <li><i class="fa-solid fa-check"></i> Elevation plans</li>
                                    <li><i class="fa-solid fa-check"></i> Certificate of Lawfulness application & management
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> Supply & waste connections</li>
                                    <li><i class="fa-solid fa-check"></i> Ground preparation works</li>
                                    <li><i class="fa-solid fa-check"></i> Waste removal</li>
                                    <li><i class="fa-solid fa-check"></i> On-site welfare</li>
                                    <li><i class="fa-solid fa-check"></i> 10-year structural warranty</li>
                                </ul>
                            </div>
                            <!-- Spec column 5: Included as standard -->
                            <div class="gl-spec-col swiper-slide">
                                <h4 class="gl-spec-col-title"><span class="gl-col-icon"><i
                                            class="fa-solid fa-check"></i></span> WINDOWS & DOORS</h4>
                                <ul class="gl-spec-col-list font-medium">
                                    <li><i class="fa-solid fa-check"></i> 
                                        1 x 1500mm x 2100 Anthracite Triple Glazed UPVC French Door 
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        1x 1300mm x 1000mm Anthracite Grey Triple Glazed uPVC Functional Window 
                                    </li>
                                    <li><i class="fa-solid fa-check"></i> 
                                        1 x 600mm x 500mm Anthracite Grey Triple Glazed uPVC Functional Window 
                                    </li>
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

            <!-- Bottom accent gold box -->
            <div class="d-flex justify-content-center">
                <div class="gl-specs-accent-box wa-fadeInUp">
                    <span class="gl-accent-icon"><i class="fa-solid fa-leaf"></i></span>
                    <p class="gl-accent-text">
                        The Garden Studio offers a carefully balanced combination of affordability, comfort and quality, making it one of the most practical ways to create independent living space within your existing garden.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HIGHLIGHTS & BENEFITS (SMALL FOOTPRINT / PERFECT FOR) -->
    <section class="gl-benefits py-lg-5 py-4 wa-fadeInUp">
        <div class="container-fluid px-lg-5  px-md-4 px-4">
            <div class="row">
                <!-- Left: Description and Key Metrics -->
                <div class="col-lg-6 col-md-12 mb-lg-0 mb-5">
                    <div class="gl-benefits-left wa-fadeInUp">
                        <h2 class="gl-benefits-title wa-split-right wa-capitalize">The Garden Studio</h2>
                        <p class="gl-benefits-text wa-fadeInUp">
                            <b>
                                5.5m x 4m Open-Plan Granny Annexe £66,000 - Turnkey
                            </b>
                        </p>
                        <p class="gl-benefits-text wa-fadeInUp">
                            Compact, beautifully designed and incredibly versatile, The Garden Studio is the smallest
                            annexe within our range that we would comfortably recommend for full-time living. Carefully
                            planned to maximise every square metre, this design proves that smaller spaces can still feel
                            bright, open and luxurious.
                        </p>
                        <p class="gl-benefits-text wa-fadeInUp">
                            The layout combines an open-plan lounge, kitchen and sleeping area with a fully fitted shower
                            room, creating a practical yet welcoming living environment that feels far larger than its footprint
                            suggests. Large glazing helps flood the interior with natural light, while the clean modern design
                            creates a calm and uncluttered atmosphere ideal for day-to-day living.
                        </p>
                        <p class="gl-benefits-text wa-fadeInUp">
                            Built using our advanced light gauge steel frame system and finished to BS3632 residential
                            standard, The Garden Studio offers all the comfort and performance of a modern bungalow in a
                            compact garden footprint. Triple glazing, high-performance insulation and smart electric heating
                            ensure the annexe remains comfortable throughout the year whilst remaining highly energy
                            efficient.
                        </p>
                        <p class="gl-benefits-text wa-fadeInUp">
                            This design is particularly well suited to gardens where space may be more limited, whilst still
                            providing the independence, privacy and dignity that many families are searching for.
                        </p>
                        <!-- Grid of 4 Small Key Indicators -->
                        <div class="gl-indicators-grid wa-fadeInUp">
                            <div class="gl-indicator-item wa-fadeInUp">
                                <div class="gl-indicator-icon"><i class="fa-solid fa-border-all"></i></div>
                                <span><strong>Triple Glazing</strong><br>as Standard</span>
                            </div>
                            <div class="gl-indicator-item border-none wa-fadeInUp">
                                <div class="gl-indicator-icon"><i class="fa-solid fa-house-chimney-crack"></i></div>
                                <span><strong>Highly Insulated</strong><br>Construction</span>
                            </div>
                            <div class="gl-indicator-item wa-fadeInUp">
                                <div class="gl-indicator-icon"><i class="fa-solid fa-arrow-trend-down"></i></div>
                                <span><strong>Lower Running</strong><br>Costs</span>
                            </div>
                            <div class="gl-indicator-item wa-fadeInUp">
                                <div class="gl-indicator-icon"><i class="fa-solid fa-volume-xmark"></i></div>
                                <span><strong>Peaceful Living</strong><br>Environment</span>
                            </div>
                        </div>
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
                                    The Garden Studio is an excellent solution for:
                                </P>
                                <ul class="gl-perfect-list">
                                    <li><i class="fa-solid fa-check"></i> Elderly parents wanting to remain close to family whilst maintaining independence</li>
                                    <li><i class="fa-solid fa-check"></i> Those looking to avoid the emotional and financial cost of assisted living or care homes</li>
                                    <li><i class="fa-solid fa-check"></i> Individuals who would benefit from simple single-level living</li>
                                    <li><i class="fa-solid fa-check"></i> Clients wanting a warm, safe and low-maintenance environment</li>
                                </ul>
                                <P>
                                    Its manageable size also makes it ideal for older occupants who may prefer a simpler, easier-to-maintain home without compromising on comfort.
                                </P>
                            </div>
                            <div class="gl-perfect-block wa-fadeInUp">
                                <div class="gl-perfect-title-box">
                                    <span class="gl-perfect-icon"><i class="fa-solid fa-heart-pulse"></i></span>
                                    <h4>YOUNGER OCCUPANTS</h4>
                                </div>
                                <P>
                                    This annexe is equally popular amongst:
                                </P>
                                <ul class="gl-perfect-list">
                                    <li><i class="fa-solid fa-check"></i> Young adults saving for a first home</li>
                                    <li><i class="fa-solid fa-check"></i> Returning students or graduates</li>
                                    <li><i class="fa-solid fa-check"></i> Independent teenagers wanting more privacy</li>
                                    <li><i class="fa-solid fa-check"></i> Guest accommodation</li>
                                    <li><i class="fa-solid fa-check"></i> Live-in carers</li>
                                    <li><i class="fa-solid fa-check"></i> Homeowners looking for flexible multi-generational living</li>
                                </ul>
                                <P>
                                    The modern open-plan design gives the space a contemporary apartment-style feel, making it attractive to younger occupants as well as older generations.
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
                            The Garden Studio has been designed with a clean contemporary appearance which blends
                            beautifully into both modern and traditional garden settings.
                        </p>

                        <h3 class="gl-glazing-subtitle wa-fadeInUp">INCLUDED GLAZING & DOORS</h3>
                        <ul class="gl-glazing-list wa-fadeInUp">
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <span>
                                    <strong>1 x 3000mm Anthracite Grey Triple Glazed Aluminium Sliding Door</strong>
                                    <p>
                                        Creating a bright open connection into the garden whilst allowing natural light to flood the living space.
                                    </p>
                                </span>
                            </li>
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <span>
                                    <strong>2 x 1200mm x 1000mm Anthracite Grey Triple Glazed uPVC Windows</strong>
                                    <p>
                                        Providing excellent thermal performance and natural ventilation.
                                    </p>
                                </span>
                            </li>
                            <li class="wa-fadeInUp">
                                <span class="gl-gl-bullet"><i class="fa-solid fa-check"></i></span>
                                <span>
                                    <strong>1 x 600mm x 500mm Anthracite Grey Triple Glazed uPVC Functional Window</strong> 
                                    <p>
                                        Ideal for additional ventilation whilst maintaining privacy.
                                    </p>
                                </span>
                            </li>
                        </ul>
                        <p class="gl-glazing-desc wa-fadeInUp">
                            The anthracite grey finish gives the annexe a premium architectural appearance and complements a wide range of external cladding finishes.
                        </p>
                    </div>
                </div>

                <!-- Glazing Middle: Collage/Images showcase -->
                <div class="col-lg-4 col-md-12 my-lg-0 my-4">
                    <div class="gl-glazing-gallery-wrap wa-fadeInRight">
                        <div class="gl-glazing-main-img wa-fadeInUp">
                            <a href="{{ url('frontend/assets/img/garden-living/studio-card-img.png') }}"
                                class="gl-external-fancybox"
                                data-fancybox="external-gallery"
                                data-caption="Garden Studio External Glazing Setup">
                                <img src="{{ url('frontend/assets/img/garden-living/studio-card-img.png') }}"
                                    alt="Garden Studio External Glazing Setup" class="gl-img-fluid glazing-img rounded">
                            </a>
                        </div>

                        <!-- 4 tiny details thumbnails -->
                        <div class="gl-glazing-thumbs">
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Wood cladding closeup">
                                    <img src="{{ url('frontend/assets/img/garden-living//studio-bedroom.png') }}"
                                        alt="Wood cladding closeup">
                                </a>
                            </div>
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Inside glazing view">
                                    <img src="{{ url('frontend/assets/img/garden-living//studio-living.png') }}"
                                        alt="Inside glazing view">
                                </a>
                            </div>
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Steel frame closeup">
                                    <img src="{{ url('frontend/assets/img/garden-living//studio-kitchen.png') }}"
                                        alt="Steel frame closeup">
                                </a>
                            </div>
                            <div class="gl-thumb-item wa-fadeInUp">
                                <a href="#"
                                    class="gl-external-fancybox"
                                    data-caption="Door handle details">
                                    <img src="{{ url('frontend/assets/img/garden-living/studio-washroom.png') }}"
                                        alt="Door handle details">
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
                    <img src="{{ url('frontend/assets/img/garden-living/hero_annexe_clean.png') }}" alt="">
                </div>
                <div class="gl-cta-content wa-fadeInUp">
                    <div class="gl-bottom-tile-para d-flex flex-column wa-fadeInUp">
                        <h2 class="gl-cta-title wa-split-right wa-capitalize">Could The Garden Studio Work In Your Garden?</h2>
                        <p class="gl-cta-desc wa-fadeInUp">Book a free consultation and explore whether this compact annexe design
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
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script> --}}
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
