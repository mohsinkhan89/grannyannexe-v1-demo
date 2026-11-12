@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK Gallery | ANX Builds Projects">
    <meta name="description" content="Garden granny annexe UK gallery by ANX Builds showcasing real completed projects. View designs, layouts and finishes. Get inspired and request your free quote today.">
    <meta property="og:title" content="Garden Granny Annexe UK Gallery | ANX Builds Projects">
    <meta property="og:description" content="Garden granny annexe UK gallery by ANX Builds showcasing real completed projects. View designs, layouts and finishes. Get inspired and request your free quote today.">
    <meta name="twitter:title" content="Garden Granny Annexe UK Gallery | ANX Builds Projects">
    <meta name="twitter:description" content="Garden granny annexe UK gallery by ANX Builds showcasing real completed projects. View designs, layouts and finishes. Get inspired and request your free quote today.">
@endsection

@section('title')
Garden Granny Annexe UK Gallery | ANX Builds Projects
@endsection

@section('css')
<style>
    .gallery-filter-tabs {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        max-width: 1120px;
        margin: 0 auto;
        padding: 64px 16px 0;
    }

    .gallery-filter-tab {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        min-height: 48px;
        border: 1px solid rgba(164, 121, 102, 0.38);
        background: rgba(255, 255, 255, 0.94);
        color: var(--bs-clr-h-4);
        cursor: pointer;
        font-family: var(--bs-font-1);
        font-size: 14px;
        font-weight: 700;
        line-height: 1.2;
        padding: 13px 22px;
        box-shadow: 0 14px 30px rgba(0, 0, 0, 0.18);
        transition: all 0.3s ease;
    }

    .gallery-filter-tab i {
        color: var(--bs-clr-pr-1);
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .gallery-filter-tab:hover,
    .gallery-filter-tab.active {
        background: var(--bs-clr-pr-1);
        border-color: var(--bs-clr-pr-1);
        color: var(--bs-clr-white-1);
        transform: translateY(-2px);
    }

    .gallery-filter-tab:hover i,
    .gallery-filter-tab.active i {
        color: var(--bs-clr-white-1);
    }

    .gallery-main-section .masonry-container {
        padding-top: 42px;
    }

    .gallery-main-section .gallery-box {
        contain: layout paint;
        transform: translateZ(0);
    }

    .gallery-main-section .masonry-container:hover .gallery-box {
        filter: none;
    }

    .gallery-main-section .masonry-container .gallery-box:hover {
        filter: none !important;
        transform: translateY(-4px) scale(1.02);
    }

    .gallery-lazy-image {
        background: #211b18;
    }

    .gallery-lazy-image.gallery-lazy-loaded {
        background: transparent;
    }

    .gallery-box.is-hidden {
        display: none;
    }

    @media (max-width: 575px) {
        .gallery-filter-tabs {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px;
            overflow-x: visible;
            padding: 42px 16px 0;
        }

        .gallery-filter-tab {
            width: 100%;
            min-width: 0;
            font-size: 12px;
            min-height: 44px;
            padding: 10px 8px;
        }

        .gallery-filter-tab:first-child {
            grid-column: 1 / -1;
        }

        .gallery-filter-tab i {
            font-size: 13px;
        }

        .gallery-main-section .masonry-container {
            padding-top: 28px;
        }
    }
</style>
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area gallery-main wa-p-relative" >
        <div class="breadcrumb-bg-img gallery wa-fix wa-img-cover">
            <img loading="lazy" decoding="async" class="wa-parallax-img" title="breadcrumb-gallery" src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-gallery-new.webp') }}" alt="breadcrumb-gallery">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Our Gallery</h1>

                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="{{ route('index') }}">Home</a>
                    <span>Gallery</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- project-start -->
    {{-- <section class="bs-project-4-area pt-125 wa-fix">
        <div class="container bs-container-2">

            <div class="bs-project-4-height">

                <div class="bs-project-4-content wa-fix ">
                    <h3 class="bs-h-4 big-title title " >Our</h3>
                    <h3 class="bs-h-4 title title-2">
                        <span class="left-text">Gall</span>
                        <span class="right-text">ery</span>
                    </h3>
                </div>

                <div class="bs-project-4-card-pin">
                    <div class="bs-project-4-card ">

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-1">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img loading="lazy" decoding="async" title="first gallery" src="{{ url('frontend/assets/img/gallery/01.webp') }}" alt="first gallery">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Internal Images</a>
                                </h5>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-2">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img loading="lazy" decoding="async" title="second gallery"  src="{{ url('frontend/assets/img/gallery/02.webp') }}" alt="second gallery">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">External Images</a>
                                </h5>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-3">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img loading="lazy" decoding="async" title="third gallery" src="{{ url('frontend/assets/img/gallery/03.webp') }}" alt="third gallery">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Steel Frame</a>
                                </h5>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-4">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img loading="lazy" decoding="async" title="fourth gallery" src="{{ url('frontend/assets/img/gallery/04.webp') }}" alt="fourth gallery">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Builds In Progress</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section> --}}
    <section class="gallery-main-section">
        <div class="gallery-filter-tabs" role="tablist" aria-label="Gallery design filters">
            <button type="button" class="gallery-filter-tab active" data-gallery-filter="all" role="tab" aria-selected="true"><i class="fa-solid fa-border-all" aria-hidden="true"></i><span>All Designs</span></button>
            <button type="button" class="gallery-filter-tab" data-gallery-filter="Exterior Design" role="tab" aria-selected="false"><i class="fa-solid fa-house-chimney" aria-hidden="true"></i><span>Exterior Design</span></button>
            <button type="button" class="gallery-filter-tab" data-gallery-filter="Interior Design" role="tab" aria-selected="false"><i class="fa-solid fa-couch" aria-hidden="true"></i><span>Interior Design</span></button>
            <button type="button" class="gallery-filter-tab" data-gallery-filter="Kitchen Area" role="tab" aria-selected="false"><i class="fa-solid fa-utensils" aria-hidden="true"></i><span>Kitchen Area</span></button>
            <button type="button" class="gallery-filter-tab" data-gallery-filter="Washroom Design" role="tab" aria-selected="false"><i class="fa-solid fa-bath" aria-hidden="true"></i><span>Washroom Design</span></button>
        </div>

        <div class="masonry-container">
            <div class="gallery-box">
                <img fetchpriority="high" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/01.webp') }}" alt="Bespoke granny annexe exterior with modern garden setting in the UK">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/03.webp') }}" alt="Luxury garden annexe with contemporary cladding and large glazed entrance">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/02.webp') }}" alt="Custom built granny annexe with landscaped outdoor space and patio doors">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/15.webp') }}" alt="Modern steel frame granny annexe designed for comfortable independent living">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/04.webp') }}" alt="Detached garden annexe with premium exterior finish and private access">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/14.webp') }}" alt="Contemporary granny annexe home with bright windows and compact layout">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/06.webp') }}" alt="Turnkey garden annexe installation with stylish exterior and garden views">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/07.webp') }}" alt="Bespoke modular granny annexe with durable cladding and house style finish">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/09.webp') }}" alt="Luxury granny annexe garden home with modern architecture and outdoor space">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Design" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/10.webp') }}" alt="Fully fitted garden annexe exterior showing high quality UK build design">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Bedroom Space" title="Bedroom Space" src="{{ url('frontend/assets/img/gallery/12.webp') }}" alt="Modern granny annexe with private entrance and low maintenance garden setting">
                <div class="gallery-caption">Bedroom Space</div>
            </div>

            <div class="gallery-box">
                <img width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Living Area" title="Exterior Design" src="{{ url('frontend/assets/img/gallery/13.webp') }}" alt="Premium garden annexe with clean exterior lines and residential finish">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Structure" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/16.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/16.jpg') }}" alt="Completed granny annexe project with modern garden building design UK">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Garden Annexe" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/01.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/01.jpg') }}" alt="Open plan granny annexe interior with living area and natural light">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Kitchen Installation" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/02.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/02.jpg') }}" alt="Modern garden annexe kitchen with fitted cabinets and compact layout">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Interior Details" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/03.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/03.jpg') }}" alt="Luxury granny annexe living room with contemporary furniture and bright finish">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setup" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/04.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/04.jpg') }}" alt="Bespoke annexe bedroom design with comfortable layout for independent living">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Living Space" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/05.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/05.jpg') }}" alt="Garden annexe bathroom with modern fixtures and space saving design">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Modern Washroom" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/06.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/06.jpg') }}" alt="Compact granny annexe kitchen and dining space for everyday living">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Bedroom View" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/07.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/07.jpg') }}" alt="Premium granny annexe interior with open plan lounge and kitchen area">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Kitchen Space" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/08.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/08.jpg') }}" alt="Modern annexe bedroom with soft lighting and practical storage space">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Washroom Setup" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/09.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/09.jpg') }}" alt="Contemporary garden annexe living space with sofa and stylish decor">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Interior Flow" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/10.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/10.jpg') }}" alt="Fully furnished granny annexe interior designed as a complete small home">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/11.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/11.jpg') }}" alt="Bespoke garden annexe kitchen with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-01.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-01.jpg') }}" alt="Bespoke garden annexe kitchen with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-02.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-02.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-03.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-03.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-04.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-04.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-05.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-05.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-06.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-06.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-07.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-07.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-08.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-08.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-09.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-09.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-10.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-10.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-11.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-11.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-12.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-12.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-13.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-13.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-14.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-14.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-15.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-15.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-16.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-16.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-17.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-17.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-18.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-18.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-19.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-19.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-20.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-20.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-21.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-21.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-22.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-22.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-23.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-23.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-24.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-24.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-25.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-25.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-26.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-26.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-27.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-27.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-28.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-28.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-29.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-29.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-30.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-30.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-31.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-31.jpg') }}" alt="Bespoke garden annexe kitchen with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-32.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-32.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-33.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-33.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-34.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-34.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-35.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-35.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-36.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-36.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-37.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-37.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-38.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-38.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-39.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-39.jpg') }}" alt="Bespoke garden annexe Exterior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Exterior Design</div>
            </div>




            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-01.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-01.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-02.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-02.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-04.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-04.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-05.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-05.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-06.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-06.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-07.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-07.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-08.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-08.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-09.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-09.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-10.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-10.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-11.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-11.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-12.jpeg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-12.jpeg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-13.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-13.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-14.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-14.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-15.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-15.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-16.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-16.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-17.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-17.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-18.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-18.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-19.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-19.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-20.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-20.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-21.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-21.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-22.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-22.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-23.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-23.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-24.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-24.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-25.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-25.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-26.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-26.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-27.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/inner/inner-27.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Interior Design</div>
            </div>


            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Interior Design" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/12.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/12.jpg') }}" alt="Luxury annexe bathroom with walk in shower and premium tiled finish">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Detail" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/13.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/13.jpg') }}" alt="Open plan garden annexe home interior with kitchen lounge and dining area">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Interior Design" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/14.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/14.jpg') }}" alt="Modern granny annexe interior with neutral colours and high quality finish">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Bedroom Interior" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/15.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/15.jpg') }}" alt="Compact annexe living room designed for comfort privacy and independence">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Outdoor View" title="Interior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/16.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/16.jpg') }}" alt="Turnkey granny annexe interior showing fitted kitchen and practical layout">
                <div class="gallery-caption">Interior Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Kitchen Area" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/23.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/23.jpg') }}" alt="Garden annexe bedroom with natural daylight and modern home styling">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Washroom Style" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/29.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/29.jpg') }}" alt="Steel frame garden annexe build showing strong modular construction system">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Interior Aesthetics" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/25.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/25.jpg') }}" alt="Granny annexe construction with durable steel frame and insulated structure">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Modern Kitchen" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/26.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/26.jpg') }}" alt="Modular garden annexe installation showing efficient UK build process">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Washroom Design" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/27.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/27.jpg') }}" alt="High quality annexe frame system designed for long lasting garden homes">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-images/05.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-images/05.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>



            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-01.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-01.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-02.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-02.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-03.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-03.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-04.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-04.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-05.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-05.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-06.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-06.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-07.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-07.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-08.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-08.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-09.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-09.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-10.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-10.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-11.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-11.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-12.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-12.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-13.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-13.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-14.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-14.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Setting" title="Kitchen Area" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-15.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-15.jpg') }}" alt="Garden annexe build in progress with precision steel frame construction">
                <div class="gallery-caption">Kitchen Area</div>
            </div>



            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Living Space" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-images/01.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-images/01.jpg') }}" alt="Bespoke granny annexe design with engineered structure and premium materials">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Approach" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-images/02.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-images/02.jpg') }}" alt="Completed modular garden annexe with house level specification and insulation">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Outdoor Patio" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-images/03.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-images/03.jpg') }}" alt="Custom garden annexe project showing exterior finish and structural quality">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Garden Annexe" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-images/06.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-images/06.jpg') }}" alt="Garden annexe installation with modern building method and durable framework">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Interior Finishing" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/18.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/18.jpg') }}" alt="Premium granny annexe construction detail for energy efficient independent living">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Deck" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/19.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/19.jpg') }}" alt="Two bedroom granny annexe layout designed for family accommodation in the UK">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Spacious Layout" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/20.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/20.jpg') }}" alt="Garden annexe home with practical layout for elderly relatives and guests">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Kitchen Setup" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/21.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/21.jpg') }}" alt="Bespoke UK granny annexe with modern finish and accessible living space">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Exterior Entrance" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/new-second-images/22.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/new-second-images/22.jpg') }}" alt="Luxury garden annexe project designed for flexible independent accommodation">
                <div class="gallery-caption">Washroom Design</div>
            </div>



            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Exterior Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-01.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-01.jpg') }}" alt="Bespoke garden annexe Interior Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-02.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-02.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-04.jpeg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-04.jpeg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-05.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-05.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-06.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-06.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-07.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-07.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-08.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-08.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-09.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-09.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-10.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-10.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-11.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-11.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

            <div class="gallery-box">
                <img class="gallery-lazy-image" width="390" height="260" loading="lazy" decoding="async" data-fancybox="gallery" data-caption="Open Kitchen" title="Washroom Design" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" data-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-12.jpg') }}" data-gallery-src="{{ url('frontend/assets/img/gallery/gallery-v2/washroom/washroom-12.jpg') }}" alt="Bespoke garden annexe Washroom Design with modern appliances and clean worktops">
                <div class="gallery-caption">Washroom Design</div>
            </div>

        </div>
    </section>
         
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->
    
    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->

@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Fancybox.bind("[data-fancybox='gallery']");

        const filterTabs = document.querySelectorAll(".gallery-filter-tab");
        const galleryBoxes = document.querySelectorAll(".gallery-box");
        const lazyLoadQueue = [];
        let lazyImageObserver = null;
        let lazyQueueRunning = false;
        let layoutRefreshTimer = null;

        const refreshGalleryLayout = function () {
            clearTimeout(layoutRefreshTimer);

            layoutRefreshTimer = setTimeout(function () {
                if (window.ScrollTrigger && typeof window.ScrollTrigger.refresh === "function") {
                    window.ScrollTrigger.refresh();
                }

                window.dispatchEvent(new Event("resize"));
            }, 180);
        };

        const loadGalleryImage = function (image) {
            if (!image || !image.dataset.gallerySrc) {
                return;
            }

            image.addEventListener("load", function () {
                image.classList.add("gallery-lazy-loaded");
                refreshGalleryLayout();
            }, { once: true });

            image.src = image.dataset.gallerySrc;
            image.dataset.galleryLoaded = "true";
            image.removeAttribute("data-gallery-src");
            image.removeAttribute("data-gallery-queued");

            if (image.complete) {
                image.classList.add("gallery-lazy-loaded");
                refreshGalleryLayout();
            }
        };

        const runLazyLoadQueue = function () {
            if (lazyQueueRunning) {
                return;
            }

            lazyQueueRunning = true;

            const loadNextImage = function () {
                const image = lazyLoadQueue.shift();

                if (!image) {
                    lazyQueueRunning = false;
                    return;
                }

                if (lazyImageObserver) {
                    lazyImageObserver.unobserve(image);
                }

                loadGalleryImage(image);

                if ("requestIdleCallback" in window) {
                    requestIdleCallback(loadNextImage, { timeout: 350 });
                } else {
                    setTimeout(loadNextImage, 90);
                }
            };

            requestAnimationFrame(loadNextImage);
        };

        const queueGalleryImage = function (image) {
            if (!image || !image.dataset.gallerySrc || image.dataset.galleryQueued === "true") {
                return;
            }

            image.dataset.galleryQueued = "true";
            lazyLoadQueue.push(image);
            runLazyLoadQueue();
        };

        const clearLazyLoadQueue = function () {
            lazyLoadQueue.forEach(function (image) {
                image.removeAttribute("data-gallery-queued");
            });

            lazyLoadQueue.length = 0;
        };

        const loadCurrentTabImages = function () {
            let immediateLoads = 0;

            document.querySelectorAll(".gallery-box:not(.is-hidden) img[data-gallery-src]").forEach(function (image) {
                const imageRect = image.getBoundingClientRect();
                const isNearScreen = imageRect.top < window.innerHeight + 260;

                if (isNearScreen && immediateLoads < 8) {
                    immediateLoads += 1;
                    loadGalleryImage(image);
                    return;
                }

                if (isNearScreen) {
                    queueGalleryImage(image);
                    return;
                }

                if (lazyImageObserver) {
                    lazyImageObserver.observe(image);
                }
            });
        };

        const setupLazyImages = function () {
            const lazyImages = document.querySelectorAll(".gallery-box img[data-gallery-src]");

            if (!("IntersectionObserver" in window)) {
                lazyImages.forEach(queueGalleryImage);
                return;
            }

            lazyImageObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        queueGalleryImage(entry.target);
                    }
                });
            }, {
                rootMargin: "180px 0px",
                threshold: 0.01
            });

            lazyImages.forEach(function (image) {
                lazyImageObserver.observe(image);
            });
        };

        const loadVisibleLazyImages = function () {
            document.querySelectorAll(".gallery-box:not(.is-hidden) img[data-gallery-src]").forEach(function (image) {
                const imageRect = image.getBoundingClientRect();

                if (imageRect.top < window.innerHeight + 180) {
                    queueGalleryImage(image);
                }
            });
        };

        filterTabs.forEach(function (tab) {
            tab.addEventListener("click", function () {
                const selectedFilter = tab.getAttribute("data-gallery-filter");

                filterTabs.forEach(function (item) {
                    item.classList.toggle("active", item === tab);
                    item.setAttribute("aria-selected", item === tab ? "true" : "false");
                });

                galleryBoxes.forEach(function (box) {
                    const caption = box.querySelector(".gallery-caption");
                    const image = box.querySelector("img");
                    const category = caption ? caption.textContent.trim() : "";
                    const shouldShow = selectedFilter === "all" || category === selectedFilter;

                    box.classList.toggle("is-hidden", !shouldShow);

                    if (image) {
                        image.setAttribute("data-fancybox", shouldShow ? "gallery" : "");
                    }
                });

                clearLazyLoadQueue();
                requestAnimationFrame(loadCurrentTabImages);
                refreshGalleryLayout();
            });
        });

        setupLazyImages();
        loadVisibleLazyImages();
    });
</script>
@endsection
