@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Accessible Garden Annexes | Turnkey Accessible Living">
    <meta name="description" content="Accessible garden annexes designed around the person who will live there, supporting accessible living, greater independence and family close by.">
    <meta property="og:title" content="Accessible Garden Annexes">
    <meta property="og:description" content="Accessible living. Greater independence. Family close by.">
    <meta name="twitter:title" content="Accessible Garden Annexes">
    <meta name="twitter:description" content="Accessible living. Greater independence. Family close by.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "name": "Accessible Garden Annexes",
            "provider": {
                "@type": "Organization",
                "name": "The Granny Annexe Company"
            },
            "serviceType": "Accessible Garden Annexe Design and Installation"
        }
    </script>
@endsection

@section('title')
    Accessible Garden Annexes | Turnkey Accessible Living
@endsection

@section('css')
    <link rel="stylesheet" href="{{ url('frontend/assets/main/css/accessible-garden-annexes.css') }}?ref={{ setting('site.css') }}">
@endsection

@section('content')
    @php
        $assetBase = 'frontend/assets/main/img/';
        $accessibilityImages = [
            ['title' => 'Smart Options', 'image' => 'smart-options.png'],
            ['title' => 'Zero Threshold', 'image' => 'zero-threshold.png'],
            ['title' => 'Wide Door Frames', 'image' => 'wide-door-frames.png'],
            ['title' => 'Wet Rooms', 'image' => 'wet-rooms.png'],
            ['title' => 'Hoists', 'image' => 'hoists.png'],
            ['title' => 'Grab Rails', 'image' => 'grab-rails.png'],
            ['title' => 'Anti Slip Flooring', 'image' => 'anti-slip-flooring.png'],
            ['title' => 'Access Ramps', 'image' => 'access-ramps.png'],
        ];
        $buildGalleryImages = [
            ['title' => 'Completed Annexe Exterior', 'image' => 'frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-01.jpg'],
            ['title' => 'Completed Annexe Living Space', 'image' => 'frontend/assets/img/gallery/gallery-v2/inner/inner-01.jpg'],
            ['title' => 'Completed Annexe Kitchen', 'image' => 'frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-01.jpg'],
            ['title' => 'Completed Annexe Bathroom', 'image' => 'frontend/assets/img/gallery/gallery-v2/washroom/washroom-01.jpg'],
            ['title' => 'Completed Annexe Exterior', 'image' => 'frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-05.jpg'],
            ['title' => 'Completed Annexe Interior', 'image' => 'frontend/assets/img/gallery/gallery-v2/inner/inner-08.jpg'],
            ['title' => 'Completed Annexe Kitchen', 'image' => 'frontend/assets/img/gallery/gallery-v2/kitchen/kitchen-06.jpg'],
            ['title' => 'Completed Annexe Exterior', 'image' => 'frontend/assets/img/gallery/gallery-v2/outdoor/outdoor-14.jpg'],
        ];
    @endphp

    <main class="aga-page">
        <section class="aga-hero" style="background-image: url('{{ url($assetBase . 'top-of-page-imagery.png') }}');">
            <div class="aga-hero__shade"></div>
            <div class="container bs-container-1">
                <div class="aga-hero__inner">
                    <div class="aga-hero__layout">
                        <div class="aga-hero__content wa-fadeInUp">
                        <div class="aga-hero__heading wa-fadeInUp">
                            <span class="aga-kicker">Accessible &amp; Supported Living</span>
                            <h1>Accessible Garden Annexes</h1>
                        </div>
                        <h2>A Home Designed Around the Person. Built Around Their Life.</h2>
                        <h3>Accessible living. Greater independence. Family close by.</h3>
                        <p>A purpose-designed garden annexe can provide safe, comfortable and accessible accommodation just a few steps from the family home.</p>
                        <p>Whether you're exploring options for a disabled child or adult, an older relative, someone with reduced mobility, an overnight carer, or a family with additional accommodation needs, our fully turnkey garden annexes can be designed around the individual.</p>
                        </div>

                        <div class="aga-hero__form-card wa-fadeInUp">
                            <div class="anx-contact-intro">
                                <span class="anx-contact-eyebrow">LET'S TALK ABOUT YOUR PROJECT</span>
                                <h2 class="bs-sec-title-1">Get in touch<span>.</span></h2>
                                <p>Tell us what you have in mind. We'd love to help.</p>
                            </div>
                            <form action="{{ route('accessibleContactSubmit', [], false) }}" method="POST" class="anx-contact-form" data-csrf-url="{{ route('contactToken', [], false) }}">
                                <p class="anx-contact-required">Fields marked <span aria-hidden="true">*</span> are required.</p>
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert"><p>Please check your details.</p><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                                @endif
                                <div class="anx-contact-grid">
                                    @foreach (['first_name' => ['First Name', 'given-name'], 'last_name' => ['Last Name', 'family-name'], 'email' => ['Email', 'email'], 'phone' => ['Phone Number', 'tel']] as $field => $details)
                                        <div class="anx-contact-field">
                                            <label for="accessible-contact-{{ $field }}">{{ $details[0] }} <span aria-hidden="true">*</span></label>
                                            <input id="accessible-contact-{{ $field }}" name="{{ $field }}" type="{{ $field === 'email' ? 'email' : ($field === 'phone' ? 'tel' : 'text') }}" autocomplete="{{ $details[1] }}" value="{{ old($field) }}" maxlength="{{ $field === 'phone' ? 24 : ($field === 'email' ? 255 : 120) }}" placeholder="{{ $field === 'phone' ? '07700 900123' : $details[0] }}" @if ($field === 'phone') inputmode="tel" @endif required @error($field) aria-invalid="true" aria-describedby="error-{{ $field }}" @enderror>
                                            @error($field)<span id="error-{{ $field }}" class="anx-contact-error">{{ $message }}</span>@enderror
                                        </div>
                                    @endforeach
                                </div>
                                <input type="hidden" name="postcode" value="{{ old('postcode') }}">
                                <div class="anx-contact-field">
                                    <label for="accessible-contact-message">Message</label>
                                    <textarea id="accessible-contact-message" name="message" rows="3" maxlength="10000" placeholder="Tell us about your project or questions...">{{ old('message') }}</textarea>
                                    @error('message')<span id="error-message" class="anx-contact-error">{{ $message }}</span>@enderror
                                </div>
                                <div class="anx-contact-captcha">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                    @error('g-recaptcha-response')<span id="error-g-recaptcha-response" class="anx-contact-error">{{ $message }}</span>@enderror
                                    <span id="captcha-client-error" class="anx-contact-error" role="alert" aria-live="polite"></span>
                                </div>
                                <div class="anx-contact-actions">
                                    <!-- <p><i class="fa-solid fa-lock" aria-hidden="true"></i> Your details are only used to respond to your enquiry.</p> -->
                                    <button class="bs-btn-1" type="submit"><span class="text">Send your enquiry</span><span class="shape"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aga-build-gallery bs-blog-4-area py-lg-5 py-md-4 py-4 overflow-hidden" aria-label="Sliding gallery of our builds">
            {{-- <div class="container bs-container-2 aga-build-gallery__container"> --}}
            <div class="container bs-container-2">
                <div class="bs-blog-4-content aga-build-gallery__content">
                    <div class="bs-subtitle-4 ">
                        <span class="text">build gallery</span>
                        <span class="icon">
                            <img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third" alt="subtitle third">
                        </span>
                    </div>
                    <div class="inner-div">
                        <div class="d-flex flex-column">
                            <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize mb-md-3 mb-3" data-cursor="-opaque">
                                Completed Annexe Gallery</h2>
                            <p class="bs-p-4 disc wa-fadeInUp">
                                A closer look at a variety of completed annexes, from exteriors to finished interiors.
                            </p>
                        </div>
                        <div class="btn-wrap wa-fadeInRight">
                            <a href="{{ route('gallery') }}" aria-label="View full gallery" class="bs-btn-1 onhover-border">
                                <span class="text">
                                    View Gallery
                                </span>
                                <span class="shape"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="aga-build-gallery__stage">
                    <div class="aga-build-gallery__slider swiper">
                        <div class="swiper-wrapper">
                            @foreach ($buildGalleryImages as $galleryImage)
                                <div class="swiper-slide">
                                    <a class="aga-build-gallery__item" href="{{ url($galleryImage['image']) }}" data-fancybox="accessible-build-gallery" data-caption="{{ $galleryImage['title'] }}">
                                        <img src="{{ url($galleryImage['image']) }}" alt="{{ $galleryImage['title'] }}" loading="lazy" decoding="async">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button class="aga-build-gallery__nav aga-build-gallery__nav--prev" type="button" aria-label="Previous build image">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="aga-build-gallery__nav aga-build-gallery__nav--next" type="button" aria-label="Next build image">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>
        <section class="aga-designed bs-about-4-area py-lg-5 py-5 wa-fix">
            <div class="container-fluid aga-designed__container">
                <div class="aga-designed__inner wa-fadeInUp">
                    <div class="bs-subtitle-4 aga-designed__eyebrow">
                        <span class="text">Designed Around You</span>
                        <span class="icon">
                            <img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third" alt="subtitle third">
                        </span>
                    </div>
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">A Home Designed Around the Person. Built Around Their Life.</h2>
                    <p>
                        No two people's requirements are exactly the same. That's why our annexes aren't simply
                        standard buildings with accessibility features added afterwards.
                    </p>

                    <div class="aga-designed__images">
                        @foreach ($accessibilityImages as $option)
                            <article class="aga-designed__card wa-fadeInUp">
                                <a class="aga-designed__media" href="{{ url($assetBase . $option['image']) }}" data-fancybox="accessible-options" data-caption="{{ $option['title'] }}">
                                    <img src="{{ url($assetBase . $option['image']) }}" alt="{{ $option['title'] }}" loading="lazy" decoding="async">
                                    <span class="aga-designed__zoom" aria-hidden="true"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></span>
                                </a>
                                <h3>
                                    <span>{{ $option['title'] }}</span>
                                    <button type="button" class="aga-designed__view" aria-label="View {{ $option['title'] }} image">View</button>
                                </h3>
                            </article>
                        @endforeach
                    </div>

                    <p class="aga-designed__note">
                        Where specialist adaptations are required, the design can be developed around recommendations
                        provided by your Occupational Therapist or other relevant healthcare professional.
                    </p>
                </div>
            </div>
        </section>


        <section class="aga-help bs-about-4-area py-lg-5 py-5 wa-fix">
            <div class="container bs-container-2">
                <div class="aga-help__heading wa-fadeInUp">
                    <div class="bs-subtitle-4 aga-section-kicker"><span class="text">Who Could An Accessible Annexe Help?</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third" alt="subtitle third"></span></div>
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">One solution. Different circumstances.</h2>
                    <p>Our annexes can be tailored around very different family, mobility and care needs.</p>
                </div>

                <div class="aga-help__grid">
                    <article class="aga-help__card wa-fadeInUp">
                        <span class="aga-help__dot"></span>
                        <h3>Disabled Adults</h3>
                        <p>Accessible accommodation that supports greater independence while keeping the individual close to their existing family and support network.</p>
                    </article>
                    <article class="aga-help__card wa-fadeInUp">
                        <span class="aga-help__dot"></span>
                        <h3>Disabled Children &amp; Young Adults</h3>
                        <p>Additional space for mobility equipment, specialist bathing, carers and a valuable step towards independent living.</p>
                    </article>
                    <article class="aga-help__card wa-fadeInUp">
                        <span class="aga-help__dot"></span>
                        <h3>Overnight Care</h3>
                        <p>Larger designs can incorporate additional accommodation for carers while maintaining privacy and independence.</p>
                    </article>
                    <article class="aga-help__card wa-fadeInUp">
                        <span class="aga-help__dot"></span>
                        <h3>Council &amp; Housing-Association Tenants</h3>
                        <p>You don't necessarily need to own your property. Major adaptations or additional accommodation may be considered in some circumstances.</p>
                    </article>
                    <article class="aga-help__card wa-fadeInUp">
                        <span class="aga-help__dot"></span>
                        <h3>Foster &amp; Kinship Care Families</h3>
                        <p>Additional ancillary accommodation may provide another option where suitable bedroom space within the main family home is limited.</p>
                    </article>
                    <article class="aga-help__card wa-fadeInUp">
                        <span class="aga-help__dot"></span>
                        <h3>Older Relatives</h3>
                        <p>Single-storey accommodation can be designed around reduced mobility while keeping an older relative close to family.</p>
                    </article>
                </div>

                <div class="aga-help__panel wa-fadeInUp">
                    <div>
                        <span>Council &amp; Housing-Association Tenants</span>
                        <h3>You may still have options.</h3>
                        <p>
                            We can work alongside local authorities, housing associations, Occupational Therapists,
                            Adult Social Care, Children's Services and adaptations teams to explore whether a
                            purpose-designed annexe could provide an appropriate solution.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="aga-turnkey bs-about-4-area py-lg-5 py-5 wa-fix">
            <div class="container-fluid aga-turnkey__container">
                <div class="aga-turnkey__heading wa-fadeInUp">
                    <div class="bs-subtitle-4"><span class="text">Our process</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third" alt="subtitle third"></span></div>
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Our Fully Turnkey Process</h2>
                    <h3 class="bs-h-4">From Concept To Completion</h3>
                    <p class="bs-p-4 disc">We manage every stage of your accessible garden annexe project, so you can relax knowing everything is in expert hands.</p>
                </div>

                <div class="aga-turnkey__timeline" aria-hidden="true">
                    @for ($i = 1; $i <= 7; $i++)
                        <span>{{ $i }}</span>
                    @endfor
                </div>

                <div class="aga-turnkey__cards">
                    <article class="aga-turnkey__card wa-fadeInUp">
                        <div class="aga-turnkey__icon"><i class="fa-regular fa-pen-to-square"></i></div>
                        <h4>Design &amp;<br>Planning</h4>
                        <img src="{{ url('frontend/assets/img/turnkey/design-planning.webp') }}" alt="Design and planning">
                        <ul>
                            <li>Initial consultation and ideas</li>
                            <li>Site survey &amp; feasibility</li>
                            <li>Bespoke design tailored to your needs</li>
                            <li>Planning &amp; legal approvals handled</li>
                        </ul>
                    </article>
                    <article class="aga-turnkey__card wa-fadeInUp">
                        <div class="aga-turnkey__icon"><i class="fa-solid fa-truck-pickup"></i></div>
                        <h4>Site<br>Preparation</h4>
                        <img src="{{ url('frontend/assets/img/turnkey/site-preperation.webp') }}" alt="Site preparation">
                        <ul>
                            <li>Removal of existing structures</li>
                            <li>Garden clearance and levelling</li>
                            <li>Safe, clean site ready for build</li>
                        </ul>
                    </article>
                    <article class="aga-turnkey__card wa-fadeInUp">
                        <div class="aga-turnkey__icon"><i class="fa-solid fa-faucet-drip"></i></div>
                        <h4>Groundworks<br>&amp; Services</h4>
                        <img src="{{ url('frontend/assets/img/turnkey/services.webp') }}" alt="Groundworks and services">
                        <ul>
                            <li>Foundations (ground screws or alternatives)</li>
                            <li>Drainage &amp; waste connections</li>
                            <li>Water, electrical and data services installed</li>
                        </ul>
                    </article>
                    <article class="aga-turnkey__card wa-fadeInUp">
                        <div class="aga-turnkey__icon"><i class="fa-solid fa-house-chimney-window"></i></div>
                        <h4>Construction</h4>
                        <img src="{{ url('frontend/assets/img/turnkey/construction.webp') }}" alt="Construction">
                        <ul>
                            <li>High quality construction to the highest standards</li>
                            <li>Weatherproof and secure</li>
                            <li>Regular updates throughout</li>
                        </ul>
                    </article>
                    <article class="aga-turnkey__card wa-fadeInUp">
                        <div class="aga-turnkey__icon"><i class="fa-solid fa-couch"></i></div>
                        <h4>Internal<br>Fit-Out</h4>
                        <img src="{{ url('frontend/assets/img/turnkey/internal-fitout.webp') }}" alt="Internal fit-out">
                        <ul>
                            <li>Plumbing, heating &amp; electrical</li>
                            <li>Kitchens &amp; bathrooms installed</li>
                            <li>Flooring, doors &amp; joinery</li>
                            <li>Accessibility features fitted</li>
                        </ul>
                    </article>
                    <article class="aga-turnkey__card wa-fadeInUp">
                        <div class="aga-turnkey__icon"><i class="fa-solid fa-paint-roller"></i></div>
                        <h4>Decoration</h4>
                        <img src="{{ url('frontend/assets/img/turnkey/decoration.webp') }}" alt="Decoration">
                        <ul>
                            <li>Internal plastering &amp; decoration</li>
                            <li>Painting &amp; finishing touches</li>
                            <li>Quality control inspection</li>
                        </ul>
                    </article>
                    <article class="aga-turnkey__card wa-fadeInUp">
                        <div class="aga-turnkey__icon"><i class="fa-regular fa-heart"></i></div>
                        <h4>Ready To<br>Move In</h4>
                        <img src="{{ url('frontend/assets/img/turnkey/ready-move.webp') }}" alt="Ready to move in">
                        <ul>
                            <li>Final checks &amp; handover</li>
                            <li>We can even move in and assemble furniture</li>
                            <li>Your annexe, ready to enjoy</li>
                        </ul>
                    </article>
                </div>

                <div class="aga-turnkey__footer wa-fadeInUp">
                    <span><i class="fa-solid fa-check"></i></span>
                    <div>
                        <h4>One Company. One Point Of Contact. One Complete Project.</h4>
                        <p>We take care of everything, removing the stress and uncertainty so you can focus on what matters most.</p>
                    </div>
                    <i class="fa-solid fa-people-group"></i>
                </div>
            </div>
        </section>
        <section class="aga-funding bs-about-4-area py-lg-5 py-5 wa-fix">
            <div class="container bs-container-2">
                <div class="aga-funding__content wa-fadeInUp">
                    <div class="bs-subtitle-4 aga-section-kicker"><span class="text">Funding &amp; Approval</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third" alt="subtitle third"></span></div>
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Could Funding Be Available?</h2>
                    <h3>In some circumstances, possibly.</h3>
                    <p>
                        Disabled Facilities Grants and other local-authority funding mechanisms exist to help eligible
                        disabled people make changes to their accommodation so they can live safely and independently.
                    </p>
                    <p>
                        Major adaptations can, in appropriate circumstances, include the creation of additional bedroom
                        or bathroom accommodation. Council and housing-association tenants can also have adaptations
                        provided through their landlord or local authority.
                    </p>

                    <div class="aga-funding__box">
                        <h4>What Will Usually Be Considered?</h4>
                        <div class="aga-funding__list">
                            <div><span></span>Individual's assessed needs</div>
                            <div><span></span>Occupational Therapist recommendations</div>
                            <div><span></span>Existing property &amp; alternative options</div>
                            <div><span></span>Necessary, appropriate &amp; practicable works</div>
                            <div><span></span>Housing tenure &amp; landlord approval</div>
                            <div><span></span>Local-authority policies &amp; available funding</div>
                        </div>
                    </div>
                </div>
                <div class="aga-funding-notice__panel wa-fadeInUp">
                    <div class="aga-funding-notice__icon" aria-hidden="true">
                        <span class="aga-funding-notice__home"><i class="fa-solid fa-house-chimney"></i></span>
                        <span class="aga-funding-notice__pound">&pound;</span>
                    </div>

                    <div class="aga-funding-notice__divider"></div>

                    <div class="aga-funding-notice__content">
                        <span>Important</span>
                        <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">An annexe will not automatically qualify for funding.</h2>
                        <p>Funding and approvals depend on individual circumstances.</p>
                        <div class="aga-funding-notice__advice">
                            <i class="fa-regular fa-user"></i>
                            <p>
                                We recommend speaking to your <strong>local council</strong> or
                                <strong>occupational therapist</strong> to find out if you may qualify
                                for any available funding.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="aga-professionals bs-blog-4-area py-lg-5 py-md-4 py-4 overflow-hidden">
            <div class="container bs-container-2">
                <div class="aga-professionals__heading wa-fadeInUp">
                    <div class="bs-subtitle-4 aga-section-kicker"><span class="text">For Professionals</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third" alt="subtitle third"></span></div>
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Occupational Therapists,<br>Local Authorities &amp; Housing Professionals</h2>
                    <p>
                        Our modular annexe system provides another option to consider where an individual's existing
                        accommodation cannot easily meet their assessed requirements.
                    </p>
                </div>

                <div class="aga-professionals__grid wa-fadeInUp">
                    <div class="aga-professionals__item"><span></span>Bespoke accessible layouts</div>
                    <div class="aga-professionals__item"><span></span>Detailed floor plans</div>
                    <div class="aga-professionals__item"><span></span>Full project specifications</div>
                    <div class="aga-professionals__item"><span></span>Fixed project quotations</div>
                    <div class="aga-professionals__item"><span></span>Accessibility-led designs</div>
                    <div class="aga-professionals__item"><span></span>Turnkey groundworks</div>
                    <div class="aga-professionals__item"><span></span>Service connections</div>
                    <div class="aga-professionals__item"><span></span>Complete internal fit-out</div>
                    <div class="aga-professionals__item"><span></span>Project management</div>
                    <div class="aga-professionals__item"><span></span>Structural warranty</div>
                    <div class="aga-professionals__item"><span></span>Site feasibility assessments</div>
                </div>
            </div>
        </section>

    </main>
@endsection
@section('js')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('frontend/assets/js/contact-validation.js') }}?v={{ filemtime(public_path('frontend/assets/js/contact-validation.js')) }}"></script>
    <script>
        window.addEventListener('load', function () {
            if (typeof Fancybox !== 'undefined') {
                Fancybox.bind('[data-fancybox="accessible-options"]', {
                    groupAll: true,
                    animated: true,
                    caption: function (fancybox, carousel, slide) {
                        return slide.caption;
                    }
                });
                Fancybox.bind('[data-fancybox="accessible-build-gallery"]', {
                    groupAll: true,
                    animated: true,
                    caption: function (fancybox, carousel, slide) {
                        return slide.caption;
                    }
                });
            }
            if (typeof Swiper !== 'undefined') {
                new Swiper('.aga-build-gallery__slider', {
                    slidesPerView: 1,
                    spaceBetween: 16,
                    loop: true,
                    speed: 800,
                    autoplay: {
                        delay: 2600,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        prevEl: '.aga-build-gallery__nav--prev',
                        nextEl: '.aga-build-gallery__nav--next',
                    },
                    breakpoints: {
                        576: {
                            slidesPerView: 1,
                            spaceBetween: 16,
                        },
                        768: {
                            slidesPerView: 2.3,
                            spaceBetween: 20,
                        },
                        1200: {
                            slidesPerView: 3.4,
                            spaceBetween: 22,
                        },
                        1500: {
                            slidesPerView: 4.1,
                            spaceBetween: 24,
                        }
                    }
                });
            }
            document.querySelectorAll('.aga-designed__view').forEach(function (button) {
                button.addEventListener('click', function () {
                    var mediaLink = button.closest('.aga-designed__card').querySelector('.aga-designed__media');
                    if (mediaLink) {
                        mediaLink.click();
                    }
                });
            });
        });
    </script>
@endsection
