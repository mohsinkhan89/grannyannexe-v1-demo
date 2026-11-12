<!-- header-start -->
<header class="bs-header-4-area">
    <div class="bs-header-4-row d-flex  justify-content-between align-items-lg-center">

        <div class="header-logo">
            <!-- logo -->
            <a href="{{ route('index') }}" aria-label="name" class="bs-header-4-logo">
                <img src="{{ url('storage') }}/{{ setting('site.logo') }}" alt="">
            </a>
        </div>

        <div class="bs-header-4-right">

            <!-- top-header -->
            <div class="bs-header-4-top">

                <!-- left-contact -->
                <ul class="bs-header-4-top-contact wa-list-style-none">
                    @if(setting('site.web-email'))
                    <li class="bs-p-4">
                        <a href="mailto:{{ setting('site.web-email') }}" aria-label="name">
                            <i class="fa-regular fa-envelope"></i>
                            {{ setting('site.web-email') }}
                        </a>
                    </li>
                    @endif
                    @if(setting('site.web-phone'))
                    <li class="bs-p-4">
                        <a href="tel:{{ setting('site.web-phone') }}" aria-label="name">
                            <i class="fa-solid fa-phone"></i>
                            {{ setting('site.web-phone') }}
                        </a>
                    </li>
                    @endif
                    <li class="bs-p-4">
                        <i class="fa-regular fa-clock"></i>
                        {{-- Mon - Fri 8:30 - 17:30, Sat - Sun off --}}
                        Monday to Friday 8:30 - 17:30
                    </li>
                </ul>

                <div class="download-btn-wrapper d-none d-lg-block">
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

                <!-- right-social -->
                <div class="bs-header-4-top-social">
                    @if(setting('site.tiktok'))
                    <a href="{{ setting('site.tiktok') }}" aria-label="name" class="elm-link">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    @endif
                    @if(setting('site.facebook'))
                    <a href="{{ setting('site.facebook') }}" aria-label="name" class="elm-link">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    @endif
                    @if(setting('site.instagram'))
                    <a href="{{ setting('site.instagram') }}" aria-label="name" class="elm-link">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    @endif
                    @if(setting('site.pinterest'))
                    <a href="{{ setting('site.pinterest') }}" aria-label="name" class="elm-link">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </a>
                    @endif
                    @if(setting('site.linkedin'))
                    <a href="{{ setting('site.linkedin') }}" aria-label="name" class="elm-link">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    @endif
                    @if (setting('site.youtube'))
                        <a href="{{ setting('site.youtube') }}" aria-label="name" class="elm-link bs-p-4">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    @endif
                </div>
            </div>

            <!-- main-header -->
            <div class="bs-header-4-main">

                <!-- menu -->
                <nav class="bs-main-navigation  d-none d-lg-block">
                    <ul id="main-nav" class="nav navbar-nav ">

                        <li class="@if(Route::currentRouteName() === 'index') active @endif"><a href="{{ route('index') }}">Home</a></li>
                        <li class="@if(Route::currentRouteName() === 'about') active @endif"><a href="{{ route('about') }}">About Us</a></li>
                        {{-- <li class="@if(Route::currentRouteName() === 'team') active @endif"><a href="{{ route('teamDetails') }}">Our Team</a></li> --}}
                        <li class="@if(Route::currentRouteName() === 'process') active @endif"><a href="{{ route('process') }}">Our Process</a></li>
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

                <!-- action-link -->
                <div class="bs-header-4-action-link d-flex align-items-center">

                    <!-- pr-btn -->
                    <a href="https://calendly.com/helengilmore-anxbuilds/30min"
                        onclick="Calendly.initPopupWidget({url: 'https://calendly.com/helengilmore-anxbuilds/30min'}); return false;"
                        aria-label="Free consultation"
                        class="bs-pr-btn-2 d-md-none d-lg-block">
                            <span class="text" data-back="Free consultation" data-front="Free consultation"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                    </a>

                    <div class="download-btn-wrapper d-none d-md-block d-lg-none">
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

                    <!-- offcanvas-btn -->
                    <button type="button" aria-label="name" class="bs-offcanvas-btn-3  offcanvas_toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>

                </div>
            </div>

        </div>





    </div>
</header>
<!-- header-end -->
