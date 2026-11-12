<footer class="bs-footer-4-area wa-p-relative wa-fix pt-md-5 pt-4">
    <div class="bs-footer-4-bg wa-fix">
        <img src="{{ url('frontend/assets/img/footer/f4-bg-1.webp') }}" alt="footer img">
    </div>

    <div class="container-fluid mx-auto">
        <div class="bs-footer-4-wrap d-lg-grid d-md-none mb-lg-5 mb-md-4 mb-3">


            <!-- left-side -->
            <div class="bs-footer-4-left">

                <div class="footer-logo">
                    <a href="{{ route('index') }}" aria-label="name" class="bs-footer-4-logo">
                        <img src="{{ url('storage') }}/{{ setting('site.footer-logo') }}" alt="">
                    </a>
                </div>
                <p class="bs-p-1 text-white disc wa-fadeInUp mb-lg-3 mb-md-3 mb-2 pe-lg-5 pe-md-3 pe-2">
                    <a href="https://share.google/QTJFrEh0lyQMqTVw5">
                        The Granny Annexe Company provides premium, bespoke annexes nationwide.
                    </a>
                    <a href="{{ route('process') }}">
                        Our all-inclusive service handles everything from design to installation
                    </a>
                    , offering a practical way to add living space and
                    increase property value.
                </p>
            </div>

            <!-- right -->
            <div class="bs-footer-4-contact">
                <h3 class="bs-h-1 title wa-split-up wa-capitalize wa-fix">Navigations</h3>
                <div class="d-flex flex-column flex-md-column justify-content-between gap-4">
                    <div class="bs-footer-4-widget">

                        <!-- single-widget -->
                        <div class="bs-footer-4-widget-single">
                            <ul class="bs-footer-4-menu wa-list-style-none">
                                <li class="@if (Route::currentRouteName() === 'index') active @endif">
                                    <a href="{{ route('index') }}" aria-label="name">home</a>
                                </li>
                                <li class="@if (Route::currentRouteName() === 'about') active @endif">
                                    <a href="{{ route('about') }}" aria-label="name">about us</a>s
                                </li>
                                <li class="@if (Route::currentRouteName() === 'teamDetails') active @endif">
                                    <a href="{{ route('teamDetails') }}" aria-label="name">Our Team</a>
                                </li>
                                <li class="@if (in_array(Route::currentRouteName(), ['theStudio', 'theGardenStudio', 'theGardenStudioBadroom9x', 'theGardenStudioBadroom8x', 'theGardenStudioBadroomGardenRetreat', 'theForeverLodge'])) active @endif">
                                    <a href="{{ route('theStudio') }}" aria-label="name">The Studio</a>
                                </li>
                                <li class="@if (Route::currentRouteName() === 'process') active @endif">
                                    <a href="{{ route('process') }}" aria-label="name">Our Process</a>
                                </li>
                                @foreach ($services as $ser)
                                    <li class="footer-service-link @if (Route::currentRouteName() === 'servicedetail' && request()->route('slug') === $ser->slug) active @endif"><a
                                            href="{{ route('servicedetail', $ser->slug) }}"><span class="service-menu-label">{{ ucwords(\Illuminate\Support\Str::words($ser->title, 3, '')) }}</span></a></li>
                                @endforeach
                                <li class="footer-service-link @if (Route::currentRouteName() === 'accessibleGardenAnnexes') active @endif">
                                    <a href="{{ route('accessibleGardenAnnexes') }}" aria-label="Accessible Garden Annexes"><span class="service-menu-label">Accessible Garden Annexes</span></a>
                                </li>
                                <li class="@if (Route::currentRouteName() === 'price') active @endif">
                                    <a href="{{ route('price') }}" aria-label="Prices">Prices</a>
                                </li>
                            </ul>
                        </div>

                        <!-- single-widget -->
                        <div class="bs-footer-4-widget-single">
                            <ul class="bs-footer-4-menu wa-list-style-none">
                                <li class="@if (Route::currentRouteName() === 'gallery') active @endif">
                                    <a href="{{ route('gallery') }}" aria-label="name">Gallery</a>
                                </li>
                                <li class="@if (Route::currentRouteName() === 'faq') active @endif">
                                    <a href="{{ route('faq') }}" aria-label="name">FAQs</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}" aria-label="name">Blog</a>
                                </li>
                                <li class="@if (Route::currentRouteName() === 'contact') active @endif">
                                    <a href="{{ route('contact') }}" aria-label="name">Contact</a>
                                </li>
                                <li class="@if (Route::currentRouteName() === 'paymentmilestone') active @endif">
                                    <a href="{{ route('paymentmilestone') }}" aria-label="name">Payment Milestone</a>
                                </li>
                                @foreach ($contentpages as $page)
                                    <li class="@if (Route::currentRouteName() === 'ContentPages') active @endif"><a
                                            href="{{ route('ContentPages', $page->slug) }}">{{ ucwords($page->title) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="bs-footer-4-copyright-social">
                        @if (setting('site.tiktok'))
                            <a href="{{ setting('site.tiktok') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        @endif
                        @if (setting('site.facebook'))
                            <a href="{{ setting('site.facebook') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        @endif
                        @if (setting('site.instagram'))
                            <a href="{{ setting('site.instagram') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        @endif
                        @if (setting('site.pinterest'))
                            <a href="{{ setting('site.pinterest') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        @endif
                        @if (setting('site.linkedin'))
                            <a href="{{ setting('site.linkedin') }}" aria-label="name" class="elm-link bs-p-4">
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
            </div>

            <!-- right -->
            <div class="bs-footer-4-contact">
                <h3 class="bs-h-1 title wa-split-up wa-capitalize wa-fix">Get In Touch</h3>
                <div class="bs-footer-4-contact-link">
                    @if (setting('site.web-email'))
                        <p class="bs-p-4 link-title">Email</p>
                        <a href="mailto:{{ setting('site.web-email') }}" class="link-elm bs-p-4 wa-clip-left-right">
                            {{ setting('site.web-email') }}
                        </a>
                    @endif
                    @if (setting('site.web-phone'))
                        <p class="bs-p-4 link-title">phone</p>
                        <a href="tel:{{ setting('site.web-phone') }}" class="link-elm bs-p-4 wa-clip-left-right">
                            {{ setting('site.web-phone') }}
                        </a>
                    @endif
                    @if (setting('site.web-address'))
                        <p class="bs-p-4 link-title">Address</p>
                        <a href="https://maps.app.goo.gl/EraVkiNMkZP7mLnT8" class="link-elm bs-p-4 wa-clip-left-right">
                            {{ setting('site.web-address') }}
                        </a>
                    @endif
                </div>
            </div>

        </div>
        <div class="bs-footer-4-wrap d-md-block d-lg-none d-none mb-lg-5 mb-md-4 mb-3">


            <!-- left-side -->
            <div class="bs-footer-4-left mb-md-5">

                <div class="footer-logo">
                    <a href="{{ route('index') }}" aria-label="name" class="bs-footer-4-logo">
                        <img src="{{ url('storage') }}/{{ setting('site.footer-logo') }}" alt="">
                    </a>
                </div>
                <p class="bs-p-1 text-white disc wa-fadeInUp mb-lg-3 mb-md-3 mb-2 pe-lg-5 pe-md-3 pe-2">
                    <a href="https://share.google/QTJFrEh0lyQMqTVw5">
                        The Granny Annexe Company provides premium, bespoke annexes nationwide.
                    </a>
                    <a href="{{ route('process') }}">
                        Our all-inclusive service handles everything from design to installation
                    </a>, offering an affordable way to add living space and
                    property value.
                </p>
            </div>

            <div class="d-md-flex tablet-screen">
                <!-- right -->
                <div class="bs-footer-4-contact links">
                    <h3 class="bs-h-1 title wa-split-up wa-capitalize wa-fix">Navigations</h3>
                    <div class="d-flex flex-column flex-md-column justify-content-between gap-4">
                        <div class="bs-footer-4-widget">

                            <!-- single-widget -->
                            <div class="bs-footer-4-widget-single">
                                <ul class="bs-footer-4-menu wa-list-style-none">
                                    <li class="@if (Route::currentRouteName() === 'index') active @endif">
                                        <a href="{{ route('index') }}" aria-label="name">home</a>
                                    </li>
                                    <li class="@if (Route::currentRouteName() === 'about') active @endif">
                                        <a href="{{ route('about') }}" aria-label="name">about us</a>s
                                    </li>
                                    <li class="@if (in_array(Route::currentRouteName(), ['theStudio', 'theGardenStudio', 'theGardenStudioBadroom9x', 'theGardenStudioBadroom8x', 'theGardenStudioBadroomGardenRetreat', 'theForeverLodge'])) active @endif">
                                        <a href="{{ route('theStudio') }}" aria-label="name">The Studio</a>
                                    </li>
                                    <li class="@if (Route::currentRouteName() === 'process') active @endif">
                                        <a href="{{ route('process') }}" aria-label="name">Our Process</a>
                                    </li>
                                @foreach ($services as $ser)
                                    <li class="footer-service-link @if (Route::currentRouteName() === 'servicedetail' && request()->route('slug') === $ser->slug) active @endif"><a
                                            href="{{ route('servicedetail', $ser->slug) }}"><span class="service-menu-label">{{ ucwords(\Illuminate\Support\Str::words($ser->title, 3, '')) }}</span></a></li>
                                @endforeach
                                <li class="footer-service-link @if (Route::currentRouteName() === 'accessibleGardenAnnexes') active @endif">
                                    <a href="{{ route('accessibleGardenAnnexes') }}" aria-label="Accessible Garden Annexes"><span class="service-menu-label">Accessible Garden Annexes</span></a>
                                </li>
                                <li class="@if (Route::currentRouteName() === 'price') active @endif">
                                    <a href="{{ route('price') }}" aria-label="Prices">Prices</a>
                                </li>
                                </ul>
                            </div>

                            <!-- single-widget -->
                            <div class="bs-footer-4-widget-single">
                                <ul class="bs-footer-4-menu wa-list-style-none">
                                    <li class="@if (Route::currentRouteName() === 'gallery') active @endif">
                                        <a href="{{ route('gallery') }}" aria-label="name">Gallery</a>
                                    </li>
                                    <li class="@if (Route::currentRouteName() === 'faq') active @endif">
                                        <a href="{{ route('faq') }}" aria-label="name">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blogs') }}" aria-label="name">Blog</a>
                                    </li>
                                    <li class="@if (Route::currentRouteName() === 'contact') active @endif">
                                        <a href="{{ route('contact') }}" aria-label="name">Contact</a>
                                    </li>
                                    <li class="@if (Route::currentRouteName() === 'paymentmilestone') active @endif">
                                        <a href="{{ route('paymentmilestone') }}" aria-label="name">Payment
                                            Milestone</a>
                                    </li>
                                    @foreach ($contentpages as $page)
                                        <li class="@if (Route::currentRouteName() === 'ContentPages') active @endif"><a
                                                href="{{ route('ContentPages', $page->slug) }}">{{ ucwords($page->title) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- right -->
                <div class="bs-footer-4-contact getintouch">
                    <h3 class="bs-h-1 title wa-split-up wa-capitalize wa-fix">Get In Touch</h3>
                    <div class="bs-footer-4-contact-link">
                        @if (setting('site.web-email'))
                            <p class="bs-p-4 link-title">Email</p>
                            <a href="mailto:{{ setting('site.web-email') }}"
                                class="link-elm bs-p-4 wa-clip-left-right">
                                {{ setting('site.web-email') }}
                            </a>
                        @endif
                        @if (setting('site.web-phone'))
                            <p class="bs-p-4 link-title">phone</p>
                            <a href="tel:{{ setting('site.web-phone') }}" class="link-elm bs-p-4 wa-clip-left-right">
                                {{ setting('site.web-phone') }}
                            </a>
                        @endif
                        @if (setting('site.web-address'))
                            <p class="bs-p-4 link-title">Address</p>
                            <a href="https://maps.app.goo.gl/EraVkiNMkZP7mLnT8"
                                class="link-elm bs-p-4 wa-clip-left-right">
                                {{ setting('site.web-address') }}
                            </a>
                        @endif
                    </div>
                    <div class="bs-footer-4-copyright-social mt-md-5">
                        @if (setting('site.tiktok'))
                            <a href="{{ setting('site.tiktok') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        @endif
                        @if (setting('site.facebook'))
                            <a href="{{ setting('site.facebook') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        @endif
                        @if (setting('site.instagram'))
                            <a href="{{ setting('site.instagram') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        @endif
                        @if (setting('site.pinterest'))
                            <a href="{{ setting('site.pinterest') }}" aria-label="name" class="elm-link bs-p-4">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        @endif
                        @if (setting('site.linkedin'))
                            <a href="{{ setting('site.linkedin') }}" aria-label="name" class="elm-link bs-p-4">
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
            </div>

        </div>
        <div class="bs-footer-4-copyright">
            <div class="bs-footer-4-copyright-flex">
                <p class="bs-p-4 bs-footer-4-copyright-text">
                    ©<span class="copyright-year"></span> <a href="#">ANX Builds</a> All Rights Reserved.
                </p>

                <div class="bs-p-4 bs-footer-4-copyright-text">
                    Designed by
                    <a href="https://www.ssftech.co.uk/" target="_blank">
                        SSF Tech
                    </a>
                    - Under the Provision of SSF Group
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer-end -->
