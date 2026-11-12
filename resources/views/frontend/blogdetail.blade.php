@extends('frontend/layouts/master')

@section('og_type', 'article')

@section('metas')
    @php
        $socialImage = url('storage/' . str_replace('\\', '/', $blogDetail->blog_img ?: $blogDetail->detail_banner));
    @endphp
    <meta name="title" content="{{ ucwords($blogDetail->meta_title) }}">
    <meta name="description" content="{{ $blogDetail->meta_description }}">
    <meta property="og:title" content="{{ ucwords($blogDetail->meta_title) }}">
    <meta property="og:description" content="{{ $blogDetail->meta_description }}">
    <meta property="og:image" content="{{ $socialImage }}">
    <meta property="og:image:secure_url" content="{{ $socialImage }}">
    <meta property="og:image:alt" content="{{ $blogDetail->title }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ ucwords($blogDetail->meta_title) }}">
    <meta name="twitter:description" content="{{ $blogDetail->meta_description }}">
    <meta name="twitter:image" content="{{ $socialImage }}">
    <meta name="twitter:image:alt" content="{{ $blogDetail->title }}">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                "@type": "WebPage",
                "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#webpage",
                "url": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth",
                "name": "Could a Granny Annexe Help Preserve Your Family's Wealth?",
                "description": "Discover how a granny annexe can help preserve your family's wealth by reducing care costs, protecting assets, increasing property value, and supporting independent living.",
                "inLanguage": "en-GB",
                "isPartOf": {
                    "@id": "https://www.grannyannexecompany.co.uk/#website"
                },
                "breadcrumb": {
                    "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#breadcrumb"
                },
                "primaryImageOfPage": {
                    "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#primaryimage"
                }
                },
                {
                "@type": "BlogPosting",
                "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#article",
                "mainEntityOfPage": {
                    "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#webpage"
                },
                "headline": "Could a Granny Annexe Help Preserve Your Family's Wealth?",
                "description": "Discover how a granny annexe can help preserve your family's wealth by reducing care costs, protecting assets, increasing property value, and supporting independent living.",
                "articleSection": "Granny Annexe Advice",
                "inLanguage": "en-GB",
                "url": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth",
                "datePublished": "2026-07-03",
                "dateModified": "2026-07-03",
                "author": {
                    "@id": "https://www.grannyannexecompany.co.uk/#organization"
                },
                "publisher": {
                    "@id": "https://www.grannyannexecompany.co.uk/#organization"
                },
                "image": {
                    "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#primaryimage"
                },
                "about": [
                    {
                    "@type": "Thing",
                    "name": "Granny Annexe"
                    },
                    {
                    "@type": "Thing",
                    "name": "Family Wealth Preservation"
                    },
                    {
                    "@type": "Thing",
                    "name": "Independent Living"
                    },
                    {
                    "@type": "Thing",
                    "name": "Care Costs"
                    },
                    {
                    "@type": "Thing",
                    "name": "Property Value"
                    },
                    {
                    "@type": "Thing",
                    "name": "Multi-Generational Living"
                    }
                ],
                "keywords": [
                    "granny annexe",
                    "granny annex",
                    "family wealth",
                    "wealth preservation",
                    "care costs",
                    "property value",
                    "garden annexe",
                    "elderly care",
                    "independent living",
                    "care home alternative",
                    "multi-generational living",
                    "annexe planning"
                ]
                },
                {
                "@type": "ImageObject",
                "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#primaryimage",
                "url": "https://www.grannyannexecompany.co.uk/wp-content/uploads/2026/07/could-a-granny-annexe-help-preserve-your-familys-wealth.jpg",
                "contentUrl": "https://www.grannyannexecompany.co.uk/wp-content/uploads/2026/07/could-a-granny-annexe-help-preserve-your-familys-wealth.jpg",
                "caption": "Could a Granny Annexe Help Preserve Your Family's Wealth?"
                },
                {
                "@type": "BreadcrumbList",
                "@id": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth/#breadcrumb",
                "itemListElement": [
                    {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://www.grannyannexecompany.co.uk/"
                    },
                    {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Blog",
                    "item": "https://www.grannyannexecompany.co.uk/blog/"
                    },
                    {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Could a Granny Annexe Help Preserve Your Family's Wealth?",
                    "item": "https://www.grannyannexecompany.co.uk/blog/could-a-granny-annexe-help-preserve-your-familys-wealth"
                    }
                ]
                }
            ]
        }
    </script>
@endsection

@section('title')
    {{ ucwords($blogDetail->meta_title) }}
@endsection

@section('css')
@endsection

@section('content')
    <!-- breadcrumb-start -->
    <section class="breadcrumb-area has-blog-details wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="breadcrumb-blog-detail"
                src="{{ url('storage') }}/{{ $blogDetail->detail_banner }}" alt="breadcrumb-blog-detail">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">
                    {{ ucwords($blogDetail->title) }}</h1>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- blog-page-start -->
    <section class="bs-blog-page-2-area py-lg-5 py-3">
        <div class="container">
            <div class="bs-blog-page-2-wrap">
                <div class="row">

                    <div class="col-lg-8">
                        <!-- left-item -->
                        <div class="bs-blog-page-2-left">
                            {!! $blogDetail->description !!}


                            @if ($blogDetail->faqs->count())
                                <div class="bs-blog-details-content">
                                    <div class="blog-detail-points-para">
                                        <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize"
                                            data-cursor="-opaque">
                                            Frequently Asked Questions
                                        </h2>
                                    </div>
                                </div>
                                <div class="bs-accordion {{ $blogDetail->slug }} has-details-page"
                                    id="accordionExample_31">
                                    @foreach ($blogDetail->faqs as $index => $faq)
                                        @php
                                            $faqNumber = $index + 1;
                                            $headingId = 'heading' . $faqNumber;
                                            $collapseId = 'collapse' . $faqNumber;
                                        @endphp
                                        <div class="bs-accordion-item wa-fadeInUp {{ $index == 0 ? 'active' : '' }}">
                                            <div class="item-header" id="{{ $headingId }}">
                                                <button class="item-title bs-h-1 {{ $index == 0 ? '' : 'collapsed' }}" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                                    aria-controls="{{ $collapseId }}">
                                                    <span class="dot"></span>
                                                    {{ $faq->question }}
                                                </button>
                                            </div>
                                            <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample_31">
                                                <div class="item-body ">
                                                    <p class="bs-p-1">
                                                        {!! $faq->answer !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- right-sidebar -->
                        <div class="bs-blog-page-sidebar ">

                            <!-- single-widget -->
                            <div class="bs-blog-page-sidebar-widget">
                                <h5 class="widget-title bs-h-4">recent posts</h5>

                                <div class="bs-sidebar-blog">

                                    <!-- single-blog -->
                                    @foreach ($popularblogs as $popular)
                                        <div class="bs-sidebar-blog-single">
                                            <div class="item-img wa-img-cover wa-fix">
                                                <img src="{{ url('storage/' . str_replace('\\', '/', $popular->home_card_img)) }}"
                                                    title="{{ $popular->title }}" alt="{{ $popular->title }}">
                                                {{-- <img title="{{ ucwords($popular->title) }}" src="{{ url('storage/' . $popular->home_card_img) }}" alt="{{ $popular->title }}"> --}}
                                            </div>
                                            <div class="content">
                                                <h4 class="bs-h-4 title text-ellipsis-2">
                                                    <a href="{{ route('blogDeails', $popular->slug) }}"
                                                        aria-label="name">{{ ucwords($popular->title) }}</a>
                                                </h4>
                                                <h6 class="bs-p-4 item-meta">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    {{-- <span class="date">{{ $popular->created_at }}</span> --}}
                                                    <span class="date">
                                                        {{ \Carbon\Carbon::parse($popular->created_at)->format('F Y') }}
                                                    </span>
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- single-widget -->
                            <div class="bs-blog-page-sidebar-widget">
                                <h5 class="widget-title bs-h-4">Share Page</h5>

                                <div class="bs-sidebar-blog share-icons">
                                    <div class="tags-list">
                                        @php
                                            $shareUrl = route('blogDeails', $blogDetail->slug);
                                            $shareTitle = $blogDetail->title;
                                            $encodedShareUrl = rawurlencode($shareUrl);
                                            $encodedShareTitle = rawurlencode($shareTitle);
                                        @endphp

                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $encodedShareUrl }}"
                                            target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook"
                                            title="Share on Facebook">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>

                                        <a href="https://twitter.com/intent/tweet?url={{ $encodedShareUrl }}&amp;text={{ $encodedShareTitle }}"
                                            target="_blank" rel="noopener noreferrer" aria-label="Share on X"
                                            title="Share on X">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>

                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $encodedShareUrl }}"
                                            target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn"
                                            title="Share on LinkedIn">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>

                                        <a href="https://wa.me/?text={{ $encodedShareTitle }}%20{{ $encodedShareUrl }}"
                                            target="_blank" rel="noopener noreferrer" aria-label="Share on WhatsApp"
                                            title="Share on WhatsApp">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>

                                        <a href="mailto:?subject={{ $encodedShareTitle }}&amp;body={{ $encodedShareUrl }}"
                                            aria-label="Share by email" title="Share by email">
                                            <i class="fa-solid fa-envelope"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog-page-end -->
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var copyLink = document.querySelector('.js-copy-blog-link');
            var nativeShare = document.querySelector('.js-native-blog-share');

            function copyToClipboard(url) {
                if (navigator.clipboard && window.isSecureContext) {
                    return navigator.clipboard.writeText(url);
                }

                var textarea = document.createElement('textarea');
                textarea.value = url;
                textarea.style.position = 'fixed';
                textarea.style.opacity = '0';
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                return Promise.resolve();
            }

            if (copyLink) {
                copyLink.addEventListener('click', function (event) {
                    event.preventDefault();
                    copyToClipboard(this.dataset.url).then(function () {
                        copyLink.setAttribute('title', 'Link copied!');
                        copyLink.setAttribute('aria-label', 'Link copied');
                    });
                });
            }

            if (nativeShare) {
                if (!navigator.share) {
                    nativeShare.style.display = 'none';
                } else {
                    nativeShare.addEventListener('click', function (event) {
                        event.preventDefault();
                        navigator.share({
                            title: this.dataset.title,
                            text: this.dataset.title,
                            url: this.dataset.url
                        }).catch(function (error) {
                            if (error.name !== 'AbortError') {
                                copyToClipboard(nativeShare.dataset.url);
                            }
                        });
                    });
                }
            }
        });
    </script>
@endsection





