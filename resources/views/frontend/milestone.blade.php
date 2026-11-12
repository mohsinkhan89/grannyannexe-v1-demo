@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Granny Annexe Payment Milestones UK | Simple Build Stages">
    <meta name="description" content="Granny annexe payment milestones UK explained clearly, from deposit to completion. Understand each stage with confidence and plan your build smoothly. View our process today.">
    <meta property="og:title" content="Granny Annexe Payment Milestones UK | Simple Build Stages">
    <meta property="og:description" content="Granny annexe payment milestones UK explained clearly, from deposit to completion. Understand each stage with confidence and plan your build smoothly. View our process today.">
    <meta name="twitter:title" content="Granny Annexe Payment Milestones UK | Simple Build Stages">
    <meta name="twitter:description" content="Granny annexe payment milestones UK explained clearly, from deposit to completion. Understand each stage with confidence and plan your build smoothly. View our process today.">
@endsection

@section('title')
Granny Annexe Payment Milestones UK | Simple Build Stages
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{url('frontend/assets/img/breadcrumb/breadcrumb-about.webp')}}" title="breadcrumb-about" alt="breadcrumb-about">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Payment Milestone</h1>

                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="{{ route('index') }}">Home</a>
                    <span>Payment Milestone</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- about-start -->
    <section class="bs-about-1-area bs-content-page-main py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-about-1-sec-title mb-30">
                <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">
                    Payment terms that protect you at every stage
                </h2>
            </div>

            <!-- content -->
            <div class="bs-about-1-content">
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    We’ve structured our payment terms to give you peace of mind throughout your build. Every payment is linked to a clear milestone, so you’re only paying when real progress is being made on site or meaningful work is being completed behind the scenes. This approach ensures you are never financially overexposed and always know exactly what’s happening next.
                </p>
                <ul>
                    <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>5% deposit –</b>
                                secure your build slot and start the planning process
                            </span>
                        </div>
                        <p>
                            This deposit secures your build slot and allows us to begin the Certificate of Lawfulness process (where required). We produce your technical drawings, submit and manage the application, and prepare your full design and technical package so everything is ready to move smoothly into fabrication and site work.
                        </p>
                    </li>
                    <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>10% payment –</b>
                                six weeks before start date (fabrication and long-lead items)
                            </span>
                        </div>
                        <p>
                            This payment is due six weeks before your build starts. It allows us to begin fabrication of your steel frame and place orders for longer lead-time items such as doors, windows and kitchens. Ordering early helps protect your programme and ensures the right materials are on site when needed, reducing the risk of delays
                        </p>
                    </li>
                    <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>10% payment –</b>
                                groundworks complete (foundations and services ready)
                            </span>
                        </div>
                        <p>
                            This payment is due once your groundworks are complete. By this stage, supply and waste services will have been installed to the correct location and your ground screw foundations will be in place, ready for the structure to be installed.
                        </p>
                    </li>
                    <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>25% payment –</b>
                                steel frame erected (structure complete, fit-out begins)
                            </span>
                        </div>
                        <p>
                            This payment is due when the steel frame is erected on site and we’re ready to begin fitting out your garden annexe. At this point, the main materials for your project will have been ordered and will either be on site or scheduled for delivery in line with the build programme.
                        </p>
                    </li>
                    <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>20% payment –</b>
                                watertight (roof, doors and windows fitted)
                            </span>
                        </div>
                        <p>
                            This payment is due when your annexe becomes watertight. The roof will be installed and doors and windows fitted, meaning the building is protected from the elements and internal works can move forward reliably.       
                        </p>
                    </li>
                     <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>15% payment –</b>
                                plastering complete (interior taking shape)
                            </span>
                        </div>
                        <p>
                            This payment is due once plastering is completed. At this stage, the internal spaces are fully formed and we move into the final stages of second-fix work and finishing.
                        </p>
                    </li>
                    <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>15% payment (minus £2,000) –</b>
                                kitchen and bathroom installed
                            </span>
                        </div>
                        <p>
                            This payment is due once the kitchen and bathroom have both been installed. Your annexe is now fully functional and we move towards final completion and finishing details. We retain £2,000 until handover for your added reassurance.
                        </p>
                    </li>
                    <li>
                        <div class="content-detail-points mb-lg-3 mb-3">
                            <span>
                                <b>Your final £2,000</b>
                                instalment is due at completion and handover, the moment your new annexe becomes a finished home, ready to enjoy.
                            </span>
                        </div>
                        <p>
                            Before we reach that point, we carry out a full final check, complete any snagging, and make sure everything is working exactly as it should. We’ll then walk you through the annexe in person, show you how everything operates (heating, electrics, ventilation, appliances and any key features), and hand over all the relevant documents, manuals and warranties.
                        </p>
                    </li>
                </ul>
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    This is the exciting part: once handover is complete, the space is ready to be furnished and moved into. Whether it’s for a parent, a family member, or guests, you’ll be stepping into a warm, secure, fully finished garden annexe that’s been built to last - and you can start enjoying it immediately.
                </p>
            </div>

        </div>
    </section>
    <!-- about-end -->

    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->


@endsection

@section('js')
{{-- <script>
        $(document).ready(function() {
            $(".see-more").click(function() {
                var hiddenItems = $(".why-choose-card-hide");
                
                // Toggle display
                if (hiddenItems.css("display") === "none") {
                    hiddenItems.css("display", "flex"); // flex show
                    $(this).find(".text").text("Show Less");
                } else {
                    hiddenItems.css("display", "none"); // hide again
                    $(this).find(".text").text("See More");
                }
            });

            $('.team-item').first().trigger('mouseenter');
        });
    </script>
    <script>
        $(document).ready(function () {

            var $cards = $('.bs-work-5-card');

            // first card active by default
            $cards.first().addClass('active');

            // hover behavior
            $cards.on('mouseenter', function () {
                $cards.removeClass('active');      // first se active remove
                $(this).addClass('active');        // hovered active
            });

        });
    </script> --}}

@endsection