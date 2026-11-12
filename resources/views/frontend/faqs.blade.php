@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK FAQs | ANX Builds Answers">
    <meta name="description"
        content="Garden granny annexe UK FAQs answered by ANX Builds. Learn about costs, planning rules and build timelines. Get clear answers and book a free consultation today.">
    <meta property="og:title" content="Garden Granny Annexe UK FAQs | ANX Builds Answers">
    <meta property="og:description"
        content="Garden granny annexe UK FAQs answered by ANX Builds. Learn about costs, planning rules and build timelines. Get clear answers and book a free consultation today.">
    <meta name="twitter:title" content="Garden Granny Annexe UK FAQs | ANX Builds Answers">
    <meta name="twitter:description"
        content="Garden granny annexe UK FAQs answered by ANX Builds. Learn about costs, planning rules and build timelines. Get clear answers and book a free consultation today.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",

        "@type":"FAQPage",

        "mainEntity":[

            {
            "@type":"Question",
            "name":"How much does a granny annexe cost?",

            "acceptedAnswer":{
            "@type":"Answer",
            "text":"Cost depends on design, size and specification."
            }
            },

            {
            "@type":"Question",
            "name":"Do I need planning permission?",

            "acceptedAnswer":{
            "@type":"Answer",
            "text":"Requirements vary depending on project type and regulations."
            }
            }

            ]
        }
    </script>
@endsection

@section('title')
    Garden Granny Annexe UK FAQs | ANX Builds Answers
@endsection

@section('css')
@endsection

@section('content')
    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="breadcrumb-faqs"
                src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-faqs.webp') }}" alt="breadcrumb-faqs">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">FAQs</h1>

                <div class="breadcrumb-list ">
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z"
                            fill="white" />
                    </svg>

                    <a href="{{ route('index') }}">Home</a>
                    <span>FAQs</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->


    <!-- faqs-start -->
    <section class="bs-faqs-6-area py-lg-5 py-4">
        <div class="container bs-container-1">
            <div class="bs-faqs-6-wrap">

                <!-- left-content -->
                <div class="bs-faqs-6-content">

                    <!-- section-title -->
                    <div class="title-img">
                        <div class="bs-faqs-6-sec-title mb-lg-3 mb-md-3 mb-2">
                            <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">Frequently Asked
                                Questions</h2>
                        </div>

                        <div class="bs-faqs-6-img">
                            <i class="fa-solid fa-building"></i>
                            <img title="faq-img" src="{{ url('frontend/assets/img/faq/faq-img.webp') }}" alt="faq-img">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                    </div>
                </div>

                <!-- right-faqs -->
                <div class="bs-accordion has-details-page" id="accordionExample_31">

                    <!-- single-team -->
                    @foreach ($faqs as $faq)
                        <div class="bs-accordion-item wa-fadeInUp {{ $loop->first ? 'active' : '' }}">

                            <div class="item-header" id="heading{{ $loop->index }}">
                                <button class="item-title bs-h-1 {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}"
                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $loop->index }}">
                                    <span class="dot"></span>
                                    {{ $faq->question }}
                                </button>
                            </div>

                            <div id="collapse{{ $loop->index }}"
                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionExample_31">
                                <div class="item-body">
                                    <p class="bs-p-1">
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- faqs-end -->

    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->

    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->
@endsection

@section('js')
@endsection
