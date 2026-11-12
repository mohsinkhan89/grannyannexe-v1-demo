<!-- services-start -->
<section class="bs-services-4-area py-lg-5 py-md-4 py-5 wa-fix " data-background="{{url('frontend/assets/img/services/s4-bg.webp')}}">
    {{-- <div class="bs-services-4-img wa-fix wa-img-cover wa-slideInLeft">
        <img src="{{url('frontend/assets/img/services/sevice-small-img.png')}}" alt="">
    </div> --}}
    <div class="container bs-container-2">
        <div class="bs-subtitle-4 bs-services-4-subtitle">
            <span class="text">services</span>
            <span class="icon">
                <img loading="lazy" decoding="async" src="{{url('frontend/assets/img/illus/subtitle-4-icon-2.svg')}}" alt="subtitle img">
            </span>
        </div>

        <div class="bs-services-4-wrap">

            <!-- left-content -->
            <div class="bs-services-4-content">

                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                    A Garden Annexe for Every Need 
                </h2>

                <p class="bs-p-4 disc wa-fadeInUp">
                    As part of our turnkey service, <a href="{{ route('process') }}">we manage the entire project journey from planning and utilities to installation and interior completion.</a>
                    @foreach ($services as $service)
                        <a href="{{ route('servicedetail', $ser->slug) }}">Our bespoke annexes</a>
                    @endforeach
                    help families keep loved ones nearby while preserving comfort, privacy, and independence
                </p>
                <div class="btn-wrap wa-fadeInUp">
                    @foreach ($services as $service)
                        <!-- <a href="{{ route('servicedetail', $service->slug) }}" aria-label="name" class="bs-pr-btn-2">
                            <span class="text" data-back="EXPLORE OUR SERVICES" data-front="EXPLORE OUR SERVICES"></span>
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                        </a> -->
                        <a href="{{ route('servicedetail', $service->slug) }}" aria-label="name" class="bs-btn-1 onhover-border">
                            <span class="text">
                                EXPLORE OUR SERVICES
                            </span>
                            <span class="shape" ></span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- right-item -->
            <div class="bs-services-4-item">

                <!-- single-item -->
                @foreach ($services as $service)
                <div class="bs-services-4-item-single wa-bg-default active ">
                    <div class="active-content">
                        <h3 class="bs-h-1 title">
                            <a href="{{ route('servicedetail', $service->slug) }}" aria-label="name" class="wa-line-limit has-line-2">{{ ucwords($service->title) }}</a>
                        </h3>
                        <div class="d-md-none d-block d-lg-block">
                            <div class="main-img wa-fix wa-img-cover">
                                <img loading="lazy" decoding="async" src="{{url('storage/' . $service->card_img)}}" alt="">
                            </div>
                            {{-- <p class="bs-p-4 disc wa-line-limit has-line-3">
                                {{ $service->short_description }}
                            </p> --}}
                        </div>
                        <div class="d-md-flex d-none d-lg-none gap-md-2">
                            <div class="main-img wa-fix wa-img-cover">
                                <img loading="lazy" decoding="async" src="{{url('storage/' . $service->card_img)}}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">
                                {{ $service->short_description }}
                            </p>
                        </div>
                    </div>
                    <div class="default-content">
                        <div class="img-2 wa-fix wa-img-cover">
                            <img loading="lazy" decoding="async" src="{{url('storage/' . $service->card_img)}}" alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- services-end -->
