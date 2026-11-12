@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ $locationPage['meta_title'] }}">
    <meta name="description" content="{{ $locationPage['meta_description'] }}">
    <meta property="og:title" content="{{ $locationPage['meta_title'] }}">
    <meta property="og:description" content="{{ $locationPage['meta_description'] }}">
    <meta name="twitter:title" content="{{ $locationPage['meta_title'] }}">
    <meta name="twitter:description" content="{{ $locationPage['meta_description'] }}">
@endsection

@section('title')
{{ $locationPage['meta_title'] }}
@endsection

@section('css')
<style>
    .location-detail-coverage {
        background: #1f1c1a;
    }
    .location-detail-coverage-card {
        position: relative;
        overflow: hidden;
        padding: clamp(28px, 5vw, 64px);
        border: 1px solid rgba(164, 121, 102, .2);
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 18px 45px rgba(31, 28, 26, .18);
    }
    .location-detail-coverage-card::before {
        content: "";
        position: absolute;
        top: -85px;
        right: -70px;
        width: 230px;
        height: 230px;
        border: 45px solid rgba(164, 121, 102, .2);
        border-radius: 50%;
    }
    .location-detail-coverage-card > * {
        position: relative;
        z-index: 1;
    }
    .location-detail-coverage-copy {
        max-width: 880px;
        margin-inline: auto;
    }
    .location-detail-coverage-copy .bs-p-1 {
        text-align: center;
        color: rgba(29, 29, 29, .72);
    }
    .location-detail-coverage-copy .bs-sec-title-1 {
        color: #1d1d1d;
    }
    .location-detail-chip-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin: 28px 0 0;
        padding: 0;
        list-style: none;
    }
    .location-detail-chip-list li {
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
    .location-detail-chip-list i {
        color: var(--bs-clr-pr-1);
    }
    .location-detail-help {
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
    .location-detail-help .icon {
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
        .location-detail-chip-list {
            justify-content: flex-start;
        }
        .location-detail-chip-list li {
            padding: 9px 13px;
            font-size: 16px;
        }
        .location-detail-help {
            align-items: flex-start;
            justify-content: flex-start;
            text-align: left;
        }
    }
</style>
@endsection

@section('content')
@php
    $city = $locationPage['city'];
    $accordionId = 'accordion' . preg_replace('/[^A-Za-z0-9]/', '', $city);
    $sectionIcons = ['fa-people-roof', 'fa-layer-group', 'fa-temperature-half', 'fa-file-signature', 'fa-house-circle-check'];
    $chips = ['Bedroom', 'Bathroom', 'Kitchen', 'Living Area', 'Storage', 'Accessible Layouts', 'Planning Support', 'Groundwork', 'Installation', 'Final Completion'];
@endphp
<div class="london-page location-detail-page">
    <section class="breadcrumb-area wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="Granny annexe {{ $city }}" loading="lazy" decoding="async"
                src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-about.webp') }}" alt="Granny annexe in {{ $city }}">
        </div>
        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">Granny Annexe<br>{{ $city }}</h1>
                <div class="breadcrumb-list">
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825Z" fill="white"/>
                    </svg>
                    <a href="{{ route('index') }}">Home</a>
                    <span>{{ $city }}</span>
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
                            <h2 class="bs-sec-title-1 wa-split-right wa-capitalize" data-cursor="-opaque">Granny Annexe {{ $city }}</h2>
                            @foreach ($locationPage['intro'] as $intro)
                                <p class="bs-p-1 disc {{ $loop->first ? 'mt-3' : '' }} {{ $loop->last ? 'mb-4' : '' }}">{{ $intro }}</p>
                            @endforeach
                            <div class="btn-wrap wa-fadeInUp">
                                <a href="{{ route('gallery') }}" aria-label="View {{ $city }} annexe gallery" class="bs-btn-1 onhover-border">
                                    <span class="text">View Gallery</span><span class="shape"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="london-showcase-media">
                            <div class="london-gallery-img main wa-img-cover">
                                <img title="Garden annexe in {{ $city }}" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-second-images/11.jpg') }}" alt="Garden annexe in {{ $city }}">
                            </div>
                            <div class="london-gallery-stack">
                                <div class="london-gallery-img wa-img-cover"><img title="{{ $city }} annexe living space" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-images/03.jpg') }}" alt="{{ $city }} annexe living space"></div>
                                <div class="london-gallery-img wa-img-cover"><img title="Modern {{ $city }} annexe finish" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/new-second-images/22.jpg') }}" alt="Modern {{ $city }} annexe finish"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="london-hero overflow-hidden">
        <div class="london-hero-bg">
            <img title="{{ $city }} granny annexe" loading="lazy" decoding="async" src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-01.jpg') }}" alt="{{ $city }} granny annexe exterior">
        </div>
        <div class="container bs-container-1 d-flex align-items-center">
            <div class="py-lg-5 py-4">
                <h2 class="text-white bs-sec-title-4 title wa-split-right wa-capitalize mb-3" data-cursor="-opaque">{{ $locationPage['hero_title'] }}</h2>
                @foreach ($locationPage['hero_copy'] as $copy)
                    <p class="london-hero-copy bs-p-1 {{ $loop->last ? 'mb-4' : 'mb-3' }}">{{ $copy }}</p>
                @endforeach
                <div class="london-hero-actions">
                    <div class="london-hero-callout"><strong>Built for independent living</strong><span>Bespoke design, comfort and practical support for {{ $city }} homes.</span></div>
                    <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Get a free {{ $city }} quote" class="bs-btn-1 onhover-border"><span class="text">Get a Free Quote</span><span class="shape"></span></a>
                </div>
            </div>
            <div class="london-floating-panel">
                @foreach ($locationPage['features'] as $feature)
                    <div class="feature-item"><span class="icon"><i class="fa-solid {{ $feature['icon'] }}"></i></span><p class="bs-p-4 mb-0">{{ $feature['text'] }}</p></div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="london-benefits-section py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="benefits-main-div text-center mb-4">
                <h2 class="bs-sec-title-1 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Bespoke Garden Annexes in {{ $city }}</h2>
                <p class="bs-p-4 disc wa-fadeInUp text-center">Every annexe is planned around the property, the available garden space and the needs of the people who will use it every day.</p>
            </div>
            <div class="london-benefit-grid">
                @foreach ($locationPage['sections'] as $section)
                    <div class="bs-core-feature-4-item london-benefit-card">
                        <div class="london-benefit-top"><span class="count">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><span class="london-benefit-icon"><i class="fa-solid {{ $sectionIcons[($loop->iteration - 1) % count($sectionIcons)] }}"></i></span></div>
                        <h3 class="bs-h-4 item-title text-start mb-2">{{ $section['title'] }}</h3>
                        <p class="bs-p-1 mb-0">{{ $section['copy'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="location-detail-coverage py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="location-detail-coverage-card">
                <div class="location-detail-coverage-copy text-center">
                    <h2 class="bs-sec-title-1 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">What Your {{ $city }} Annexe Can Include</h2>
                    <p class="bs-p-1 mb-0">The right layout can give your family a practical, comfortable and self-contained living space close to the main home.</p>
                </div>
                <ul class="location-detail-chip-list" aria-label="Features for {{ $city }} granny annexes">
                    @foreach ($chips as $chip)
                        <li><i class="fa-solid fa-check"></i> {{ $chip }}</li>
                    @endforeach
                </ul>
                <div class="location-detail-help bs-p-1">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <span>Speak to our team to explore the design, planning and build options available for your {{ $city }} property.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="london-banner-content py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">
            <div class="london-cta">
                <div class="row align-items-center g-4">
                    <div class="col-lg-12">
                        <h2 class="bs-sec-title-1 text-white wa-split-right wa-capitalize mb-3" data-cursor="-opaque">{{ $locationPage['cta_title'] }}</h2>
                        <p class="bs-p-1 text-white mb-0 text-center">{{ $locationPage['cta_copy'] }}</p>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="javascript:void(0);" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;" aria-label="Get a {{ $city }} quote" class="bs-btn-1 onhover-border">
                            <span class="text">Get a {{ $city }} quote</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bs-faqs-6-area py-lg-5 py-4">
        <div class="container bs-container-1">
            <div class="bs-team-3-sec-title wa-p-relative text-center mb-35">
                <h2 class="bs-sec-title-3 wa-split-right wa-capitalize" data-cursor="-opaque">Frequently Asked Questions</h2>
            </div>
            <div class="faq-sidebar-main">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="faq-sidebar d-lg-flex d-md-none bs-testimonial-3-slider wa-fix">
                            <div class="bs-testimonial-3-item">
                                <div class="icon"><i class="flaticon-quote flaticon"></i></div>
                                <p class="bs-p-3 comment"><span class="wa-fadeInUp">The Granny Annexe Company designs and builds bespoke garden annexes with practical layouts, planning support and year-round comfort.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="bs-accordion has-details-page" id="{{ $accordionId }}">
                            @foreach ($locationPage['faq'] as $faqItem)
                                @php
                                    $headingId = 'heading' . $city . $loop->index;
                                    $collapseId = 'collapse' . $city . $loop->index;
                                @endphp
                                <div class="bs-accordion-item wa-fadeInUp {{ $loop->first ? 'active' : '' }}">
                                    <div class="item-header" id="{{ $headingId }}">
                                        <button class="item-title bs-h-1 {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="{{ $collapseId }}">
                                            <span class="dot"></span>
                                            {{ $faqItem['question'] }}
                                        </button>
                                    </div>
                                    <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="{{ $headingId }}" data-bs-parent="#{{ $accordionId }}">
                                        <div class="item-body"><p class="bs-p-1">{{ $faqItem['answer'] }}</p></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
@endsection