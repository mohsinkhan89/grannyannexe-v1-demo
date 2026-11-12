@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Granny Annexe Builders Birmingham | Bespoke Garden Annexes">
    <meta name="description" content="Looking for granny annexe builders in Birmingham? We design and build bespoke, warm and affordable annexes across the West Midlands. Get your free quote today.">
    <meta property="og:title" content="Granny Annexe Builders Birmingham | Bespoke Garden Annexes">
    <meta property="og:description" content="Looking for granny annexe builders in Birmingham? We design and build bespoke, warm and affordable annexes across the West Midlands. Get your free quote today.">
    <meta name="twitter:title" content="Granny Annexe Builders Birmingham | Bespoke Garden Annexes">
    <meta name="twitter:description" content="Looking for granny annexe builders in Birmingham? We design and build bespoke, warm and affordable annexes across the West Midlands. Get your free quote today.">
@endsection

@section('title')
Granny Annexe Builders Birmingham | Bespoke Garden Annexes
@endsection

@section('css')
<style>
    .birmingham-coverage {
        background: #1f1c1a;
    }
    .birmingham-coverage-card {
        position: relative;
        overflow: hidden;
        padding: clamp(28px, 5vw, 64px);
        border: 1px solid rgba(164, 121, 102, .2);
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 18px 45px rgba(31, 28, 26, .18);
    }
    .birmingham-coverage-card::before {
        content: "";
        position: absolute;
        top: -85px;
        right: -70px;
        width: 230px;
        height: 230px;
        border: 45px solid rgba(164, 121, 102, .2);
        border-radius: 50%;
    }
    .birmingham-coverage-card > * {
        position: relative;
        z-index: 1;
    }
    .birmingham-coverage-copy {
        max-width: 880px;
        margin-inline: auto;
    }
    .birmingham-coverage-copy .bs-p-1 {
        text-align: center;
        color: rgba(29, 29, 29, .72);
    }
    .birmingham-coverage-copy .bs-sec-title-1 {
        color: #1d1d1d;
    }
    .birmingham-area-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin: 28px 0 0;
        padding: 0;
        list-style: none;
    }
    .birmingham-area-list li {
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
    .birmingham-area-list i {
        color: var(--bs-clr-pr-1);
    }
    .birmingham-coverage-help {
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
    .birmingham-coverage-help .icon {
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
        .birmingham-area-list {
            justify-content: flex-start;
        }
        .birmingham-area-list li {
            padding: 9px 13px;
            font-size: 16px;
        }
        .birmingham-coverage-help {
            align-items: flex-start;
            justify-content: flex-start;
            text-align: left;
        }
    }
</style>
@endsection

@section('content')
<div class="london-page birmingham-page">
    <section class="breadcrumb-area wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="Granny annexes Birmingham" loading="lazy" decoding="async"
                src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-about.webp') }}" alt="Granny annexes in Birmingham">
        </div>
        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">Granny Annexes<br>Birmingham</h1>
                <div class="breadcrumb-list">
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825Z" fill="white"/>
                    </svg>
                    <a href="{{ route('index') }}">Home</a>
                    <span>Birmingham</span>
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
                            <h2 class="bs-sec-title-1 wa-split-right wa-capitalize" data-cursor="-opaque">Bespoke Granny Annexes for Birmingham Homes</h2>
                            <p class="bs-p-1 disc mt-3">A granny annexe is a wonderful way to keep family close while still giving everyone their own space and privacy. We design and build bespoke garden annexes for homeowners across Birmingham and the wider West Midlands, creating warm, practical and beautifully finished living spaces right in your own garden.</p>
                            <p class="bs-p-1 disc mb-4">From Solihull to Sutton Coldfield, Edgbaston to Harborne, we have helped families throughout Birmingham add a comfortable annexe for an elderly parent, a returning adult child, or as an extra income opportunity. Every annexe is designed around your family and your garden.</p>
                            <div class="btn-wrap wa-fadeInUp">
                                <a href="{{ route('gallery') }}" aria-label="View Birmingham annexe gallery" class="bs-btn-1 onhover-border">
                                    <span class="text">View Gallery</span><span class="shape"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="london-showcase-media">
                            <div class="london-gallery-img main wa-img-cover">
                                <img title="Garden annexe in Birmingham" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-second-images/11.jpg') }}" alt="Garden annexe in Birmingham">
                            </div>
                            <div class="london-gallery-stack">
                                <div class="london-gallery-img wa-img-cover"><img title="Birmingham annexe living space" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-images/03.jpg') }}" alt="Birmingham annexe living space"></div>
                                <div class="london-gallery-img wa-img-cover"><img title="Modern Birmingham annexe finish" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-second-images/22.jpg') }}" alt="Modern Birmingham annexe finish"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="london-hero overflow-hidden">
        <div class="london-hero-bg">
            <img title="Birmingham granny annexe" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/location/birmingham.webp') }}" alt="Birmingham granny annexe">
        </div>
        <div class="container bs-container-1 d-flex align-items-center">
            <div class="py-lg-5 py-4">
                <h2 class="text-white bs-sec-title-4 title wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Why Birmingham Families Choose Us</h2>
                <p class="london-hero-copy bs-p-1 mb-4">We believe a granny annexe should feel like a real home, not just a garden building. That is why every annexe we build includes triple glazed windows and doors, full insulation throughout, and a robust steel frame structure as standard. This means your loved ones stay warm through the winter, cool in summer, and enjoy a peaceful, quiet space to call their own.</p>
                <div class="london-hero-actions">
                    <div class="london-hero-callout">
                        <strong>Designed to feel like a real home</strong>
                        <span>Warm, quiet and comfortable through every season.</span>
                    </div>
                    <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Get a free Birmingham quote" class="bs-btn-1 onhover-border"><span class="text">Get a Free Quote</span><span class="shape"></span></a>
                </div>
            </div>
            <div class="london-floating-panel">
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-temperature-half"></i></span><p class="bs-p-4 mb-0">Fully insulated walls, floors and roofs for comfort in every season</p></div>
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-shield-halved"></i></span><p class="bs-p-4 mb-0">Strong steel frame construction built to last for years</p></div>
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-pen-ruler"></i></span><p class="bs-p-4 mb-0">Bespoke designs tailored to your garden, style and budget</p></div>
                <div class="feature-item"><span class="icon"><i class="fa-solid fa-people-group"></i></span><p class="bs-p-4 mb-0">A trusted local team with experience of Birmingham planning rules</p></div>
            </div>
        </div>
    </section>

    <section class="london-benefits-section py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="benefits-main-div text-center mb-4">
                <h2 class="bs-sec-title-1 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Our Simple Process</h2>
                <p class="bs-p-4 disc wa-fadeInUp text-center">From your very first enquiry, we manage the whole project for you. Our team will visit your property, discuss your requirements, and put together a design that works for your garden and your family. We then handle planning, groundwork, construction and interior finishing, keeping you informed throughout.</p>
                <p class="bs-p-4 disc wa-fadeInUp text-center">Most projects take between 8 and 16 weeks from initial design to final handover, depending on the size and complexity of the build. We aim to keep things clear, honest and straightforward from start to finish.</p>
            </div>
            <div class="london-benefit-grid">
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">01</span><span class="london-benefit-icon"><i class="fa-solid fa-comments"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Enquiry &amp; Survey</h3><p class="bs-p-1 mb-0">We visit your Birmingham property and discuss your requirements, garden and budget.</p></div>
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">02</span><span class="london-benefit-icon"><i class="fa-solid fa-pen-ruler"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Bespoke Design</h3><p class="bs-p-1 mb-0">We create a design that works for your garden, your family and the way you want to live.</p></div>
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">03</span><span class="london-benefit-icon"><i class="fa-solid fa-file-signature"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Planning &amp; Groundwork</h3><p class="bs-p-1 mb-0">Our experienced team handles planning requirements and prepares the site for construction.</p></div>
                <div class="bs-core-feature-4-item london-benefit-card"><div class="london-benefit-top"><span class="count">04</span><span class="london-benefit-icon"><i class="fa-solid fa-house-circle-check"></i></span></div><h3 class="bs-h-4 item-title text-start mb-2">Build &amp; Handover</h3><p class="bs-p-1 mb-0">We manage construction and interior finishing before the completed annexe is handed over.</p></div>
            </div>
        </div>
    </section>

    <section class="birmingham-coverage py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="birmingham-coverage-card">
                <div class="birmingham-coverage-copy text-center">
                    <h2 class="bs-sec-title-1 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Areas We Cover Near Birmingham</h2>
                    <p class="bs-p-1 mb-0">We build annexes throughout Birmingham and across the West Midlands, including Solihull, Sutton Coldfield, Walsall, Dudley, Wolverhampton, West Bromwich and Coventry.</p>
                </div>
                <ul class="birmingham-area-list" aria-label="Areas covered near Birmingham">
                    <li><i class="fa-solid fa-location-dot"></i> Birmingham</li>
                    <li><i class="fa-solid fa-location-dot"></i> Solihull</li>
                    <li><i class="fa-solid fa-location-dot"></i> Sutton Coldfield</li>
                    <li><i class="fa-solid fa-location-dot"></i> Walsall</li>
                    <li><i class="fa-solid fa-location-dot"></i> Dudley</li>
                    <li><i class="fa-solid fa-location-dot"></i> Wolverhampton</li>
                    <li><i class="fa-solid fa-location-dot"></i> West Bromwich</li>
                    <li><i class="fa-solid fa-location-dot"></i> Coventry</li>
                </ul>
                <div class="birmingham-coverage-help bs-p-1">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <span>If you are based nearby and would like to know more, please get in touch and our team will be glad to help.</span>
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
                            Considering a granny annexe for your Birmingham property? Get in touch with our professional team today for a free, no obligation quote. We will guide you through pricing, design choices and the full process, so you can plan with confidence.
                        </p>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Get a Birmingham quote" class="bs-btn-1 onhover-border">
                            <span class="text">Get a Birmingham quote</span>
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
