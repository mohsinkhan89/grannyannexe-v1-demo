@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ ucwords($ContentPageDetails->meta_title) }}">
    <meta name="description" content="{{ $ContentPageDetails->meta_description }}">
    <meta property="og:title" content="{{ ucwords($ContentPageDetails->meta_title) }}">
    <meta property="og:description" content="{{ $ContentPageDetails->meta_description }}">
    <meta name="twitter:title" content="{{ ucwords($ContentPageDetails->meta_title) }}">
    <meta name="twitter:description" content="{{ $ContentPageDetails->meta_description }}">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                "@type": "WebPage",
                "@id": "https://www.grannyannexecompany.co.uk/privacy-policy/#webpage",
                "url": "https://www.grannyannexecompany.co.uk/privacy-policy/",
                "name": "Privacy Policy",
                "headline": "Privacy Policy",
                "description": "Read The Granny Annexe Company's Privacy Policy to learn how we collect, use, store and protect your personal information in accordance with UK GDPR and data protection laws.",
                "inLanguage": "en-GB",
                "isPartOf": {
                    "@id": "https://www.grannyannexecompany.co.uk/#website"
                },
                "about": [
                    {
                    "@type": "Thing",
                    "name": "Privacy Policy"
                    },
                    {
                    "@type": "Thing",
                    "name": "Data Protection"
                    },
                    {
                    "@type": "Thing",
                    "name": "UK GDPR"
                    },
                    {
                    "@type": "Thing",
                    "name": "Personal Data"
                    },
                    {
                    "@type": "Thing",
                    "name": "Cookies"
                    }
                ],
                "breadcrumb": {
                    "@id": "https://www.grannyannexecompany.co.uk/privacy-policy/#breadcrumb"
                },
                "publisher": {
                    "@id": "https://www.grannyannexecompany.co.uk/#organization"
                },
                "primaryImageOfPage": {
                    "@id": "https://www.grannyannexecompany.co.uk/#logo"
                }
                },
                {
                "@type": "BreadcrumbList",
                "@id": "https://www.grannyannexecompany.co.uk/privacy-policy/#breadcrumb",
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
                    "name": "Privacy Policy",
                    "item": "https://www.grannyannexecompany.co.uk/privacy-policy/"
                    }
                ]
                }
            ]
        }
    </script>
@endsection

@section('title')
    {{ ucwords($ContentPageDetails->meta_title) }}
@endsection

@section('content')
    <main class="privacy-policy-page">
        <section class="breadcrumb-area wa-p-relative">
            <div class="breadcrumb-bg-img wa-fix wa-img-cover">
                <img class="wa-parallax-img" src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-about.webp') }}"
                    title="Privacy Policy" alt="ANX Builds privacy policy">
            </div>

            <div class="container bs-container-1">
                <div class="breadcrumb-wrap">
                    <h1 class="breadcrumb-title wa-split-right" data-split-delay="1.1s">{{ ucwords($ContentPageDetails->title) }}</h1>
                    <div class="breadcrumb-list">
                        <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z"
                                fill="white" />
                        </svg>
                        <a href="{{ route('index') }}">Home</a>
                        <span>{{ ucwords($ContentPageDetails->title) }}</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="privacy-policy-content py-lg-5 py-4">
            <div class="container bs-container-1">
                {!! $ContentPageDetails->description !!}
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        (function () {
            const page = document.querySelector('.privacy-policy-page');

            if (!page) {
                return;
            }

            const navItems = Array.from(page.querySelectorAll('.privacy-policy-nav a')).map(function (link) {
                const hash = new URL(link.href, window.location.href).hash;

                if (!hash) {
                    return null;
                }

                const target = document.getElementById(decodeURIComponent(hash.slice(1)));

                return target ? { link: link, target: target } : null;
            }).filter(Boolean);

            let scrollFrame = null;

            function getScrollOffset() {
                const stickyHeader = document.querySelector('.bs-header-4-area.is-sticky-clone');
                const headerHeight = stickyHeader ? stickyHeader.getBoundingClientRect().height : 0;

                return headerHeight + 20;
            }

            function scrollToSection(target, updateHash) {
                const offset = getScrollOffset();

                if (window.lenis) {
                    window.lenis.scrollTo(target, {
                        offset: -offset,
                        duration: 1.2,
                        easing: function (time) {
                            return Math.min(1, 1.001 - Math.pow(2, -10 * time));
                        }
                    });
                } else {
                    const targetTop = target.getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top: targetTop, behavior: 'smooth' });
                }

                if (updateHash) {
                    history.pushState(null, '', '#' + encodeURIComponent(target.id));
                }
            }

            function setActiveState(link, target) {
                navItems.forEach(function (item) {
                    item.link.classList.remove('active');
                    item.link.removeAttribute('aria-current');
                    item.target.classList.remove('active');
                });

                link.classList.add('active');
                link.setAttribute('aria-current', 'true');
                target.classList.add('active');
            }

            function updateActiveSectionOnScroll() {
                scrollFrame = null;

                if (!navItems.length) {
                    return;
                }

                const activationPoint = window.scrollY + getScrollOffset() + 40;
                let activeItem = navItems[0];

                navItems.forEach(function (item) {
                    const sectionTop = item.target.getBoundingClientRect().top + window.scrollY;

                    if (sectionTop <= activationPoint) {
                        activeItem = item;
                    }
                });

                if (!activeItem.link.classList.contains('active')) {
                    setActiveState(activeItem.link, activeItem.target);
                }
            }

            function requestActiveSectionUpdate() {
                if (scrollFrame !== null) {
                    return;
                }

                scrollFrame = window.requestAnimationFrame(updateActiveSectionOnScroll);
            }

            function activateSectionFromHash() {
                if (!window.location.hash) {
                    return null;
                }

                const targetId = decodeURIComponent(window.location.hash.slice(1));
                const item = navItems.find(function (navItem) {
                    return navItem.target.id === targetId;
                });

                if (!item) {
                    return null;
                }

                setActiveState(item.link, item.target);

                return item.target;
            }

            document.addEventListener('click', function (event) {
                const link = event.target.closest('.privacy-policy-nav a');

                if (!link || !page.contains(link)) {
                    return;
                }

                const item = navItems.find(function (navItem) {
                    return navItem.link === link;
                });

                if (!item) {
                    return;
                }

                event.preventDefault();
                event.stopImmediatePropagation();
                setActiveState(item.link, item.target);
                scrollToSection(item.target, true);
            }, true);

            window.addEventListener('load', function () {
                const target = activateSectionFromHash();

                if (target) {
                    scrollToSection(target, false);
                } else {
                    updateActiveSectionOnScroll();
                }
            });

            window.addEventListener('hashchange', activateSectionFromHash);
            window.addEventListener('scroll', requestActiveSectionUpdate, { passive: true });
            window.addEventListener('resize', requestActiveSectionUpdate);
        })();
    </script>
@endsection
