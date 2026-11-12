@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Our Expert Team | ANX Builds">
    <meta name="description" content="Meet the expert architects, designers, and builders behind ANX Builds. Learn about our team's experience in crafting bespoke garden annexes.">
    <meta property="og:title" content="Our Expert Team | ANX Builds">
    <meta property="og:description" content="Meet the expert architects, designers, and builders behind ANX Builds. Learn about our team's experience in crafting bespoke garden annexes.">
    <meta name="twitter:title" content="Our Expert Team | ANX Builds">
    <meta name="twitter:description" content="Meet the expert architects, designers, and builders behind ANX Builds. Learn about our team's experience in crafting bespoke garden annexes.">
@endsection

@section('schema')
    <div class="h-card d-none d-md-none d-lg-none">
        <span class="p-name">Matt Biddle</span>
        <span class="p-job-title">Director</span>
        </div>

        <div class="h-card">
        <span class="p-name">Imokha Graham</span>
        <span class="p-job-title">Technical Designer</span>
        </div>

        <div class="h-card">
        <span class="p-name">Sarah Hawthorn</span>
        <span class="p-job-title">Administrator</span>
        </div>

        <div class="h-card">
        <span class="p-name">Helen Gilmore</span>
        <span class="p-job-title">Business Development</span>
        </div>

        <div class="h-card">
        <span class="p-name">Martin Smith</span>
        <span class="p-job-title">Operations Manager</span>
        </div>

        <div class="h-card">
        <span class="p-name">Michael Phung</span>
        <span class="p-job-title">Digital & Social Media</span>
    </div>
@endsection

@section('title')
Our Expert Team | ANX Builds
@endsection

@section('css')
@endsection

@section('content')

    <!-- team-details-start -->
    <section class="bs-team-details-area py-lg-5 py-4">
        <div class="container bs-container-1">
            <div class="meet-experts-div text-center mb-lg-5 mb-4">
                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize mb-md-3 mb-3" data-cursor="-opaque">Meet The Experts</h2>
                <p class="bs-p-4 disc wa-fadeInUp">
                    Discover the brilliant minds behind our bespoke garden annexes. Our team combines decades of experience in architecture, design, and construction.
                </p>
            </div>
            <!-- Team Member 1 (Image Left) -->
            @foreach ($Teams as $team)
            <div id="team-member-{{ $team->id }}" class="team-member-card wow fadeInUp" data-team-member="{{ $team->id }}">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="team-member-img-wrap">
                            <img src="{{ url('storage/' . $team->image ) }}" alt="{{ $team->name }}">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bs-team-details-person-info ps-lg-4">
                            <h4 class="person-name">{{ $team->name }}</h4>
                            <h5 class="person-bio">{{ $team->designation }}</h5>
                            <p class="person-disc">
                                {!! $team->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <!-- team-details-end -->

    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->
    
    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->

@endsection

@section('js')
<script>
    window.addEventListener('load', function () {
        var memberId = new URLSearchParams(window.location.search).get('member');

        if (!memberId) {
            return;
        }

        var target = document.getElementById('team-member-' + memberId);

        if (!target) {
            return;
        }

        setTimeout(function () {
            var header = document.querySelector('.bs-header-4-area.is-sticky-clone') || document.querySelector('.bs-header-4-area');
            var headerOffset = header ? header.offsetHeight : 0;
            var offset = -headerOffset - 20;

            if (window.lenis && typeof window.lenis.scrollTo === 'function') {
                window.lenis.scrollTo(target, {
                    offset: offset,
                    duration: 1.2
                });
                return;
            }

            var scrollTop = target.getBoundingClientRect().top + window.pageYOffset + offset;
            window.scrollTo(0, Math.max(scrollTop, 0));
        }, 500);
    });
</script>
@endsection