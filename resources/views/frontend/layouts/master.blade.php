<!doctype html>
<html class="no-js" lang="en-GB">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-54RDC35J');</script>
        <!-- End Google Tag Manager -->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow,max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="{{ ucwords(config('app.name')) }}">
        <meta property="og:locale" content="en_GB">
        <meta property="og:type" content="@yield('og_type', 'website')">
        <meta name="twitter:domain" content="{{ request()->getHost() }}">
        <meta name="google-site-verification" content="7jsJ9BEJBapcGl6N2himlwljiOVnIZBqw5yvxnfudh8">
        @yield('metas')
        <style>.h-card { display: none !important; }</style>

        <title>@yield('title')</title>

        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ setting("site.meta_pixel_code") }}');
        fbq('track', 'PageView');
        </script>
        <!-- End Meta Pixel Code -->
        @yield('pixel-code')


        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtm.js?id=G-4ZHTHG51SF"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
        </script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54RDC35J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <link rel="apple-touch-icon" sizes="57x57" href="{{url('frontend/assets/img/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{url('frontend/assets/img/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('frontend/assets/img/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{url('frontend/assets/img/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('frontend/assets/img/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{url('frontend/assets/img/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{url('frontend/assets/img/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{url('frontend/assets/img/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/assets/img/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{url('frontend/assets/img/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/assets/img/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{url('frontend/assets/img/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/assets/img/favicon/favicon-16x16.png')}}">
        <link rel="icon" href="{{ url('frontend/assets/img/favicon/favicon.ico') }}" type="image/x-icon">
        <link rel="manifest" href="{{ url('frontend/assets/img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#a47966">

        <link rel="preconnect" href="https://www.googletagmanager.com">
        <link rel="preconnect" href="https://connect.facebook.net">
        <link rel="preconnect" href="https://cdn.jsdelivr.net">
        <link rel="preconnect" href="https://cdnjs.cloudflare.com">

		<!-- all-CSS-link-here -->
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/flaticon_barsi.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/main.css')}}?ref={{ setting('site.css') }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/custom.css')}}?ref={{ setting('site.css') }}&amp;v={{ filemtime(public_path('frontend/assets/css/custom.css')) }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/gallery.css')}}?ref={{ setting('site.css') }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/cookie.css')}}?ref={{ setting('site.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
        @include('frontend.inc.whatsapp', ['stylesOnly' => true])
        @yield('css')
    </head>

    <body class="bs-home-4">
        @yield('schema')
        <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id={{ setting("site.meta_pixel_code") }}&ev=PageView&noscript=1"
            alt=""></noscript>
        {{-- wa-fix --}}
        <div class="main-wrapper">

            {{-- <div class="call-now-button">
                <a href="tel:{{ setting('site.web-phone') }}" class="call-now-info phone-ringing"><i class="fa fa-phone"></i></a>
            </div> --}}

            @include('frontend.inc.whatsapp')
            @include('frontend.inc.cookie')

            <!-- start preloader -->
            {{-- <div class="lw-preloader">
                <div class="lw-preloader-content">
                    <div class="bs-preloader-logo">
                        <img src="{{ url('storage') }}/{{ setting('site.logo') }}" title="Preloader Logo" alt="Preloader Logo">
                    </div>
                </div>
            </div> --}}
            <!-- end preloader -->


            @include('frontend.inc.header')
            @yield('content')
            @yield('microformats')
            @include('frontend.inc.footer')

            <!-- offcanvas-start -->
            <div class="wa-offcanvas-area has-home-2  offcanvas_box_active lenis lenis-smooth">
                <div class="wa-offcanvas-wrap ">

                    <!-- top -->
                    <div class="wa-offcanvas-top">

                        <!-- logo -->
                        <a href="{{ route('index') }}" aria-label="name" class="wa-offcanvas-top-logo">
                            <img src="{{url('storage')}}/{{ setting('site.black-logo') }}" alt="">
                        </a>

                        <!-- close-btn -->
                        <button class="wa-offcanvas-close offcanvas_box_close" aria-label="name" >
                            <span></span>
                            <span></span>
                        </button>

                    </div>


                    <!-- mobile-menu-list -->
                    <nav class="mobile-main-navigation mb-3 mb-md-4 d-block d-lg-none">
                        <ul  class="navbar-nav">
                            <li class="@If(Route::currentRouteName() === 'index') active @endif"><a href="{{ route('index') }}">Home</a></li>
                            <li class="@If(Route::currentRouteName() === 'about') active @endif"><a href="{{ route('about') }}">About Us</a></li>
                            <li class="@If(Route::currentRouteName() === 'process') active @endif"><a href="{{ route('process') }}">Our Process</a></li>
                            <li class="dropdown @if(in_array(Route::currentRouteName(), ['service', 'servicedetail', 'accessibleGardenAnnexes'])) active @endif">
                                <a href="{{ route('service') }}">Services</a>
                                <ul class="dropdown-menu">
                                    @foreach ($services as $ser)
                                        <li class="@if(Route::currentRouteName() === 'servicedetail' && request()->route('slug') === $ser->slug) active @endif">
                                            <a href="{{ route('servicedetail', $ser->slug) }}"><span class="service-menu-label">{{ ucwords($ser->title) }}</span></a>
                                        </li>
                                    @endforeach
                                    <li class="@if(Route::currentRouteName() === 'accessibleGardenAnnexes') active @endif">
                                        <a href="{{ route('accessibleGardenAnnexes') }}"><span class="service-menu-label">Accessible Garden Annexes</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="@If(Route::currentRouteName() === 'price') active @endif"><a href="{{ route('price') }}">Prices</a></li>
                            <li class="@If(Route::currentRouteName() === 'gallery') active @endif"><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li class="@If(Route::currentRouteName() === 'testimonials') active @endif"><a href="{{ route('testimonials') }}">Testimonials</a></li>
                        <li class="@If(Route::currentRouteName() === 'blogs') active @endif"><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li class="@If(Route::currentRouteName() === 'faq') active @endif"><a href="{{ route('faq') }}">FAQs</a></li>
                            <li class="@If(Route::currentRouteName() === 'contact') active @endif"><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>


                    <div class="download-btn-wrapper d-lg-none d-md-none mb-4">
                        <a href="{{ url('frontend/assets/img/brochure/thegrannyannexecompany.pdf') }}" target="_blank" download class="download-btn"  aria-label="Download Our Brochure">
                            <!-- Glow Effect -->
                            <div class="glow"></div>

                            <!-- Shine Effect -->
                            <div class="shine"></div>

                            <!-- Particles -->
                            <div class="particles">
                                <div class="particle"></div>
                                <div class="particle"></div>
                                <div class="particle"></div>
                                <div class="particle"></div>
                                <div class="particle"></div>
                            </div>

                            <!-- File Badge -->
                            <span class="file-badge">PDF</span>

                            <!-- Icon -->
                            <div class="icon-wrapper">
                                <svg class="download-icon" viewBox="0 0 24 24">
                                    <!-- Document/Folder Base -->
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" fill="rgba(255,255,255,0.1)"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <!-- Arrow -->
                                    <line class="arrow" x1="12" y1="15" x2="12" y2="21"></line>
                                    <polyline class="arrow" points="8 18 12 22 16 18"></polyline>
                                    <!-- Lines representing text -->
                                    <line x1="8" y1="10" x2="16" y2="10" stroke-width="1.5" opacity="0.6"></line>
                                    <line x1="8" y1="13" x2="13" y2="13" stroke-width="1.5" opacity="0.6"></line>
                                </svg>
                            </div>

                            <!-- Text -->
                            <div class="btn-text">
                                <span class="text">Download Brochure</span>
                            </div>
                        </a>
                    </div>

                    <!-- social -->
                    <div class="wa-offcanvas-social">
                        <div class="wa-offcanvas-social-flex d-flex flex-wrap">
                            @if(setting('site.tiktok'))
                            <a href="{{ setting('site.tiktok') }}" class="wa-offcanvas-social-link " aria-label="name">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                            @endif
                            @if(setting('site.facebook'))
                            <a href="{{ setting('site.facebook') }}" class="wa-offcanvas-social-link " aria-label="name">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            @endif
                            @if(setting('site.instagram'))
                            <a href="{{ setting('site.instagram') }}" class="wa-offcanvas-social-link" aria-label="name">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            @endif
                             @if(setting('site.pinterest'))
                            <a href="{{ setting('site.pinterest') }}" class="wa-offcanvas-social-link" aria-label="name">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                            @endif
                            @if(setting('site.linkedin'))
                            <a href="{{ setting('site.linkedin') }}" class="wa-offcanvas-social-link" aria-label="name">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            @endif
                        </div>
                    </div>

                </div>

            </div>
            <div class="wa-overly"></div>
            <!-- offcanvas-end -->

            <!-- search-popup-start -->
            <div class="wa-search-box search_box_active ">

                <div class="wa-search-container">
                    <div class="wa-search-wrap text-center mb-55">
                        <div class="wa-search-title bs-h-2">Search</div>
                        <form action="#" class="wa-search-form">
                            <input class="wa-search-form-input" type="text" placeholder="What are you looking for?...">
                        </form>
                    </div>

                    <div class="wa-search-tag-wrap text-center">
                        <div class="wa-search-tag-title bs-h-2">People also search for:</div>
                        <div class="wa-search-tag d-inline-flex flex-wrap  ">
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Modern</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Classical</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Sustainable</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Urban</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Landscape</a>
                        </div>
                    </div>
                </div>

                <button aria-label="search-close" type="button" class="wa-search-box-close search_box_close">
                    <i class="fa-solid fa-x"></i>
                </button>

            </div>
            <!-- search-popup-end -->

            <!-- back-to-top-button-start -->
            <div class="wa-back-to-top ">
                <span class="wa-back-to-top-text">Top</span>
            </div>
            <!-- back-to-top-button-end -->

        </div>


		<!-- all-JS-link-here -->
        <script src="{{url('frontend/assets/js/jquery-3.7.1.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/swiper-bundle.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/wow.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/magnific-popup.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/SplitText.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/gsap.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/CustomEase.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/counterup.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/waypoints.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/lenis.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/ScrollTrigger.min.js')}}"></script>
        <script defer src="{{url('frontend/assets/js/main.js')}}?ref={{ setting('site.js') }}"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
        <script src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <script>
            window.addEventListener('load', function() {
                if (typeof Fancybox !== 'undefined') {
                    Fancybox.bind('[data-fancybox="garden-gallery"], [data-fancybox="external-gallery"]', {
                        groupAll : true,
                        animated : false,
                        showClass : false,
                        hideClass : false,
                        caption : function (fancybox, carousel, slide) {
                            return slide.caption;
                        }
                    });
                }
            });

            $(function () {

                $('.mobile-main-navigation > ul > li.dropdown > a').on('click', function (event) {
                    event.preventDefault();
                    event.stopImmediatePropagation();
                    $(this).siblings('.dropdown-btn').trigger('click');
                });
                var $originalHeader = $('.bs-header-4-area');

                // Clone header for sticky
                var $stickyHeader = $originalHeader.clone()
                    .addClass('is-sticky-clone')
                    .appendTo('body');

                $(window).on('scroll', function () {
                    var scrollTop = $(this).scrollTop();

                    if (scrollTop > 0) {
                        $stickyHeader.addClass('is-sticky');
                    } else {
                        $stickyHeader.removeClass('is-sticky');
                    }
                });

            });
            // Add magnetic effect on mouse move
            const btn = document.querySelector('.download-btn');
            const wrapper = document.querySelector('.download-btn-wrapper');

            wrapper.addEventListener('mousemove', (e) => {
                const rect = wrapper.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                btn.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
            });

            wrapper.addEventListener('mouseleave', () => {
                btn.style.transform = 'translate(0, 0)';
            });

            // <!----Whatsapp Js Start---->
            var wa_time_out, wa_time_in;
            $(".wa__btn_popup").on("click", function() {
                if ($(".wa__popup_chat_box").hasClass("wa__active")) {
                    $(".wa__popup_chat_box").removeClass("wa__active");
                    $(".wa__btn_popup").removeClass("wa__active");
                    clearTimeout(wa_time_in);
                    if ($(".wa__popup_chat_box").hasClass("wa__lauch")) {
                        wa_time_out = setTimeout(function() {
                            $(".wa__popup_chat_box").removeClass("wa__pending");
                            $(".wa__popup_chat_box").removeClass("wa__lauch");
                        }, 400);
                    }
                } else {
                    $(".wa__popup_chat_box").addClass("wa__pending");
                    $(".wa__popup_chat_box").addClass("wa__active");
                    $(".wa__btn_popup").addClass("wa__active");
                    clearTimeout(wa_time_out);
                    if (!$(".wa__popup_chat_box").hasClass("wa__lauch")) {
                        wa_time_in = setTimeout(function() {
                            $(".wa__popup_chat_box").addClass("wa__lauch");
                        }, 100);
                    }
                }
            });
            // <!----Whatsapp Js End---->

        </script>
         <!-- Cookie JS-->
        <script>
            setTimeout(() => {
                var checkbox = document.getElementById("customSwitch3");
                if (checkbox) {
                    checkbox.checked = true;
                    checkbox.dispatchEvent(new Event('change'));
                    checkbox.disabled = true;
                }

                $(document).ready(function(){
                    $(".accordion-button.custom-cookie-btn").click(function() {
                        $(this).toggleClass("active");
                    });

                    // check if accepted already
                    if (localStorage.getItem('cookie-consent') === '1') {
                        $('.cookie-popup-container').hide();
                        $('html').removeClass('cookie-blocked');
                    } else {
                        $('.cookie-popup-container').fadeIn(200);
                        $('html').addClass('cookie-blocked');
                    }

                    // accept cookie
                    $('.accept-cookie').click(function () {
                        $('.cookie-popup').slideUp(300);
                        $('.cookie-popup-container').fadeOut(300);
                        $('html').removeClass('cookie-blocked');
                        localStorage.setItem('cookie-consent', '1');
                    });

                    // decline cookie
                    $('.decline-cookie').click(function () {
                        $('.cookie-popup').slideUp(300);
                        $('.cookie-popup-container').fadeOut(300);
                        $('html').removeClass('cookie-blocked');
                        localStorage.setItem('cookie-consent', '0');
                    });
                });
            }, 1000);
        </script>
        <script>
            var partnerSwiper = new Swiper('.AboutImgSwiper', {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    prevEl: '.prev-partner',
                    nextEl: '.next-partner',
                    clickable: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    980: {
                        slidesPerView: 3
                    }
                }
            });

            // Team Slider
            var teamSwiper = new Swiper('.bs-team-4-slider', {
                slidesPerView: 4,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    prevEl: '.prev-team',
                    nextEl: '.next-team',
                    clickable: true
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    980: {
                        slidesPerView: 4
                    }
                }
            });
        </script>
        @yield('js')
        @stack('anxExperienceScripts')
        <script id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/147670011.js"></script>
    </body>
</html>

