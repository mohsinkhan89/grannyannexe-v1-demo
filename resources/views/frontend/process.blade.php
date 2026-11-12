@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK Process | ANX Builds Build Journey">
    <meta name="description" content="Garden granny annexe UK process made simple by ANX Builds, from design to handover. Clear steps, fixed timelines and quality builds. Start your free consultation today.">
    <meta property="og:title" content="Garden Granny Annexe UK Process | ANX Builds Build Journey">
    <meta property="og:description" content="Garden granny annexe UK process made simple by ANX Builds, from design to handover. Clear steps, fixed timelines and quality builds. Start your free consultation today.">
    <meta name="twitter:title" content="Garden Granny Annexe UK Process | ANX Builds Build Journey">
    <meta name="twitter:description" content="Garden granny annexe UK process made simple by ANX Builds, from design to handover. Clear steps, fixed timelines and quality builds. Start your free consultation today.">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
        "@context":"https://schema.org",

        "@type":"HowTo",

        "name":"Our Granny Annexe Process",

            "step":[

            {"@type":"HowToStep","name":"Consultation"},
            {"@type":"HowToStep","name":"Design"},
            {"@type":"HowToStep","name":"Planning"},
            {"@type":"HowToStep","name":"Groundworks"},
            {"@type":"HowToStep","name":"Installation"},
            {"@type":"HowToStep","name":"Handover"}

            ]
        }
    </script>
@endsection

@section('title')
Garden Granny Annexe UK Process | ANX Builds Build Journey
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-process.webp') }}" title="breadcrumb-process" alt="breadcrumb-process">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Our Process</h1>
                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="{{ route('index') }}">Home</a>
                    <span>Our Process</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- work-process-start -->
    <section class="bs-work-process-area py-lg-5 py-5">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="work-process-first-sec pb-lg-5 pb-md-3 pb-2">
                <div class="bs-work-process-sec-title mb-lg-5 mb-md-3 mb-2">
                    <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">A detailed process for exceptional results.</h2>
                </div>
    
                <div class="bs-work-process-img wa-fix wa-img-cover mb-lg-3 mb-md-2 mb-2">
                    <img src="{{ url('frontend/assets/img/work/banner.webp') }}" title="Work banner" alt="Work banner">
                </div>
    
                <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                    Discover our comprehensive and seamless 8-step customer order process, designed to guide you effortlessly from the initial inquiry to the realization of your dream Granny Annexe. Our process ensures that every aspect of your project is thoroughly taken care of, giving you peace of mind and a hassle-free experience from start to finish.
                </p>
                <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                    At first glance, the process may seem extensive, but rest assured that each step has been carefully crafted to guarantee the perfect outcome. We understand the importance of ensuring that our product not only meets, but exceeds your expectations. That's why we've created this in-depth customer journey - to ensure that the final product is precisely what you need, expertly installed within the agreed timeframe, and engineered to the pinnacle of excellence. 
                </p>
            </div>

            <div class="bs-work-process-item">
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover first">
                        <img src="{{ url('frontend/assets/img/process/01.webp') }}" title="First Process" alt="First Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">01</h4>
                        <h5 class="bs-h-4 title">Enquiry</h5>
                        <p class="bs-p-4 disc wa-split-y">
                            To start your exciting Granny Annexes journey, be sure to enquire via one of our methods below:
                        </p>
                        <ul class="wa-split-y">
                            <li>
                                <p>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                 Email - <a href="mailto:{{ setting('site.web-email') }}">{{ setting('site.web-email') }}</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                Phone - <a href="tel:{{ setting('site.web-phone') }}">{{ setting('site.web-phone') }}</a> 
                                </p>
                            </li>
                            {{-- <li>
                                <p>
                                Social media  - <a href="{{ setting('site.facebook') }}">Facebook</a> & <a href="{{ setting('site.instagram') }}">Instagram</a>
                                </p>
                            </li> --}}
                        </ul>
                        <p class="bs-p-4 disc wa-split-y">
                            Your inquiry, no matter how detailed or vague, is always welcome. If you're uncertain about what you want, don't worry, we've got you covered. Our team of talented designers and eager to assist you in bringing your dream Steel Frame Garden Annexe to life. 
                        </p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover second">
                        <img src="{{ url('frontend/assets/img/process/02.webp') }}" title="First Process" alt="First Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content direction-left">
                        <h4 class="bs-h-4 number">02</h4>
                        <h5 class="bs-h-4 title">Consultation</h5>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            After receiving your inquiry, a dedicated member of the Granny Annexes Company team will reach out to you and get the ball rolling. Whether you prefer a personalised phone call, a virtual video chat, or a hands-on site visit, we'll work with you to find the best approach that suits your unique needs and preferences
                        </p>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            The consultation is a crucial opportunity for you to gain a comprehensive understanding of the Granny Annexes Company philosophy and for us to fully grasp your specific needs and requirements. Together, we'll work towards creating a bespoke Steel Frame Garden Annexe that is tailored to your exact specifications and exceeds your expectations. 
                        </p>
                        <p class="bs-p-4 disc wa-split-y">
                            Take comfort in the knowledge that Granny Annexes Company offers a comprehensive, one-stop turnkey solution that covers every aspect of the project, from planning applications to demolition work if necessary. Our aim is to make the process as seamless and convenient as possible for you, and we understand that many of our clients appreciate the convenience of keeping everything under one roof
                        </p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover third">
                        <img src="{{ url('frontend/assets/img/process/03.webp') }}" title="Second Process" alt="Second Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">03</h4>
                        <h5 class="bs-h-4 title">Initial Quote</h5>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            After the consultation, it's time for us to get to work, generating your bespoke quote using the details gathered from our recent discussions. 
                        </p>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            The initial quote will detail a full breakdown of what's included and the Payment Terms to ensure full transparency right from the start.
                        </p>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            Amongst many other things, we pride ourselves on efficiency. Buying an Granny Annexe is an exciting time, and we don't like to keep our customers waiting around. As long as there is nothing too technical about your build you will have your price within 48 hours!
                        </p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover fourth">
                        <img src="{{ url('frontend/assets/img/process/04.webp') }}" title="Third Process" alt="Third Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content direction-left">
                        <h4 class="bs-h-4 number">04</h4>
                        <h5 class="bs-h-4 title">Site Survey</h5>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            The site survey is a vital stage of the process, as it allows us to fully understand the build conditions, such as the foundation requirements, electrical installations,  site access, any hazards or obstruction.  
                        </p>
                        <p class="bs-p-4 disc wa-split-y">
                            By completing a site survey we ensure there aren't any unwanted surprises that will slow down the building of your.  What we really love about site surveys is the chance to meet our future clients and build lasting relationships. We cant wait to meet you!
                        </p>
                    </div>
                </div>

                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover five">
                        <img src="{{ url('frontend/assets/img/process/05.webp') }}" title="Fourth Process" alt="Fourth Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">05</h4>
                        <h5 class="bs-h-4 title">Final Quote</h5>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            Following the site visit, we will amend and finalise the quote if need be. Now it's time for you to decide if we are the right people for the job..... we hope we have made a good impression!  
                        </p>
                        <p class="bs-p-4 disc wa-split-y">
                            If you are completely happy with the quote and would like to secure your we will require a 5% deposit. We can then give you an installation date and begin work on your certificate of lawfulness application! 
                        </p>
                    </div>
                </div>

                <!-- single-item -->
                <div class="bs-work-process-item-single custom-ltr">
                    <div class="item-img wa-fix wa-img-cover six">
                        <img src="{{ url('frontend/assets/img/process/06.webp') }}" title="Five Process" alt="Five Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">06</h4>
                        <h5 class="bs-h-4 title">Finalising details</h5>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            While we’re waiting for your Certificate of Lawfulness to be issued, the work doesn’t stop.
                        </p>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            During this period, we work closely with you to finalise your design and specification package, locking in every detail well before your project begins - from plug socket and lighting positions, to window and door locations, flooring finishes, and fixtures, as well are you build package which includes the below
                        </p>
                        <ul class="wa-split-y">
                            <li>
                                Scope of works
                            </li>
                            <li>
                                An introduction to our installation team 
                            </li>
                            <li>
                                Final specification and order summary
                            </li>
                        </ul>
                        <p class="bs-p-4 disc wa-split-y">
                            This process means everything is agreed and signed off in advance - no unwanted surprises, no last-minute decisions, and complete clarity on exactly what you’re getting, down to the smallest detail.
                        </p>
                    </div>
                </div>

                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover five">
                        <img src="{{ url('frontend/assets/img/process/07.webp') }}" title="Six Process" alt="Six Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">07</h4>
                        <h5 class="bs-h-4 title">Installing your annexe</h5>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            We start by setting out the annexe and protecting the site location, then move straight into groundworks followed by the installation of the steel-frame structure and weatherproof shell. From there, we progress through insulation, windows and doors, first-fix electrics/plumbing, internal finishes and final details - all managed by our team to keep the programme smooth and the site tidy.
                        </p>
                        <p class="bs-p-4 disc wa-split-y">
                            You’ll have a clear schedule, regular updates, and a single point of contact throughout, so you always know what’s happening and what comes next.
                        </p>
                    </div>
                </div>

                <!-- single-item -->
                <div class="bs-work-process-item-single custom-ltr">
                    <div class="item-img wa-fix wa-img-cover six">
                        <img src="{{ url('frontend/assets/img/process/08.webp') }}" title="Seven Process" alt="Seven Process">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">08</h4>
                        <h5 class="bs-h-4 title">Completion & Handover</h5>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            Once your Annexe is complete, we carry out final checks and a full walkthrough with you to make sure everything is finished exactly as agreed. We’ll then officially hand over your new garden annexe, ready to enjoy.
                        </p>
                        <p class="bs-p-4 disc wa-split-y mb-lg-3 mb-md-2 mb-2">
                            At handover, you’ll receive your documentation pack, including your 10-year guarantee and all other relevant paperwork for your annexe (such as certificates, manuals, and key product information where applicable).
                            And it doesn’t end there - after completion we remain on hand to help with any questions or support you may need, so you feel looked after long after you’ve moved in.
                        </p>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- work-process-end -->

    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->
    
    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->

@endsection

@section('js')
@endsection