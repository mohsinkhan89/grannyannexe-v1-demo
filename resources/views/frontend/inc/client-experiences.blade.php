@php
    $experienceMode = $mode ?? 'page';
    $stories = [
        [
            'label' => 'Client story 01',
            'title' => '12m x 6m Steel Frame Garden Annexe - Bespoke Garden Living with Contemporary Finishes',
            'text' => 'Discover this spacious 72m² bespoke steel-frame garden annexe with contemporary finishes and complete modern living facilities.',
            'image' => 'frontend/assets/testimonials/yt-xUhxD-xejOc.jpg',
            'video' => 'https://www.youtube.com/embed/xUhxD-xejOc?autoplay=1&rel=0',
            'slug' => '12m-x-6m-steel-frame-garden-annexe-bespoke-garden-living',
        ],
        [
            'label' => 'Client story 02',
            'title' => '9.2m x 3.5m Contemporary Granny Annexe - Stylish, Compact Garden Living',
            'text' => 'Explore this beautifully designed 32.2m² bespoke granny annexe, combining contemporary styling with practical, compact garden living.',
            'image' => 'frontend/assets/testimonials/yt-16wnYRjph90.jpg',
            'video' => 'https://www.youtube.com/embed/16wnYRjph90?autoplay=1&rel=0',
            'slug' => '9-2m-x-3-5m-contemporary-granny-annexe-stylish-compact-garden-living',
        ],
        [
            'label' => 'Client story 03',
            'title' => '6m x 6.6m Contemporary Luxury Granny Annexe Client Handover',
            'text' => 'Explore this beautifully finished 39.6m² one-bedroom annexe with charcoal composite cladding and complete modern living facilities.',
            'image' => 'frontend/assets/testimonials/huddersfield-charcoal-annexe.png',
            'video' => 'https://www.youtube.com/embed/xDsx6rpPP8I?autoplay=1&rel=0',
            'slug' => '6m-x-6-6m-contemporary-luxury-granny-annexe-client-handover',
        ],
        [
            'label' => 'Client story 04',
            'title' => '13.5m x 6.5m Luxury Two Bedroom Granny Annexe Client Handover',
            'text' => 'Explore this substantial 87.75m² two-bedroom annexe with premium triple glazing, a spacious living area and complete modern facilities.',
            'image' => 'frontend/assets/testimonials/sidcup-aerial.jpg',
            'video' => null,
            'slug' => '13-5m-x-6-5m-luxury-two-bedroom-granny-annexe-client-handover',
        ],
        [
            'label' => 'Client story 02',
            'title' => 'Stockton Granny Annexe',
            'text' => 'Explore the finish, layout and practical details of this completed Stockton annexe.',
            'image' => 'frontend/assets/testimonials/yt-j-3znarJCCM.jpg',
            'video' => 'https://www.youtube.com/embed/j-3znarJCCM?autoplay=1&rel=0',
        ],
        [
            'label' => 'Client story 03',
            'title' => '9m x 6m Accessible Luxury Granny Annexe Client Handover',
            'text' => 'Explore this 54m² bespoke annexe with a pitched roof, accessible wet room, low-threshold entrance and external access ramp.',
            'image' => 'frontend/assets/testimonials/cardiff-accessible-annexe.jpg',
            'video' => 'https://www.youtube.com/embed/AIauVVhyAy8?autoplay=1&rel=0',
            'slug' => '9m-x-6m-accessible-luxury-granny-annexe-client-handover',
        ],
        [
            'label' => 'Client story 05',
            'title' => '9m x 4m Luxury Pitched Roof Granny Annexe Client Handover',
            'text' => 'Discover this charming 36m² one-bedroom annexe combining a traditional pitched roof with modern finishes and practical access.',
            'image' => 'frontend/assets/testimonials/oxford-aerial.jpg',
            'video' => 'https://www.youtube.com/embed/FS25t1QmEtY?autoplay=1&rel=0',
            'slug' => '9m-x-4m-luxury-pitched-roof-granny-annexe-client-handover',
        ],
    ];
    $homeStories = [
        [
            'label' => 'Featured video 01',
            'title' => 'Granny Annexe Virtual Tour',
            'text' => 'Take a closer look at one of our completed granny annexe projects and its finished living space.',
            'image' => 'frontend/assets/img/client-videos/first-videos-img.png',
            'video' => 'https://www.youtube.com/embed/-8Eud1S0bwk?autoplay=1&rel=0',
        ],
        [
            'label' => 'Featured video 02',
            'title' => '9.2m x 3.5m Contemporary Granny Annexe - Stylish, Compact Garden Living',
            'text' => 'Explore this beautifully designed 32.2m² bespoke granny annexe, combining contemporary styling with practical, compact garden living.',
            'image' => 'frontend/assets/testimonials/yt-16wnYRjph90.jpg',
            'video' => 'https://www.youtube.com/embed/16wnYRjph90?autoplay=1&rel=0',
            'slug' => '9-2m-x-3-5m-contemporary-granny-annexe-stylish-compact-garden-living',
        ],
        [
            'label' => 'Featured video 03',
            'title' => '9m x 6m Accessible Luxury Granny Annexe Client Handover',
            'text' => 'Explore this 54m² bespoke annexe with a pitched roof, accessible wet room, low-threshold entrance and external access ramp.',
            'image' => 'frontend/assets/testimonials/cardiff-accessible-annexe.jpg',
            'video' => 'https://www.youtube.com/embed/AIauVVhyAy8?autoplay=1&rel=0',
            'slug' => '9m-x-6m-accessible-luxury-granny-annexe-client-handover',
        ],
    ];
    $visibleStories = $homeStories;

    if ($experienceMode !== 'home') {
        $visibleVideoUrls = array_column($homeStories, 'video');

        foreach ($stories as $story) {
            if (!in_array($story['video'], $visibleVideoUrls, true)) {
                $visibleStories[] = $story;
                $visibleVideoUrls[] = $story['video'];
            }
        }
    }
@endphp

<section class="anx-experiences {{ $experienceMode === 'home' ? 'anx-experiences--home' : 'anx-experiences--page' }}">
    <div class="container bs-container-2">
        <div class="anx-experiences__heading--home">
            <h5 class="bs-subtitle-4">
                <span class="text">Real client experiences</span>
                <span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span>
            </h5>
            <div class="anx-experiences__title-row">
                <div class="anx-experiences__title-copy">
                    <h2 class="bs-sec-title-4 wa-split-right wa-capitalize" data-cursor="-opaque">See Our Work &amp; Client Experiences</h2>
                    <p class="bs-p-4">Watch completed granny annexe tours, walkthroughs and client handovers from our team.</p>
                </div>
                @if ($experienceMode === 'home')
                    <div class="btn-wrap wa-fadeInUp">
                        <a href="{{ route('testimonials') }}" class="bs-btn-1 onhover-border" aria-label="View all client stories">
                            <span class="text">VIEW ALL CLIENT STORIES</span>
                            <span class="shape"></span>
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <div class="anx-story-grid">
            @foreach ($visibleStories as $story)
                <article class="anx-story-card">
                    <{{ !empty($story['video']) ? 'button type="button"' : 'div' }} class="anx-story-card__media{{ !empty($story['video']) ? ' js-anx-story' : '' }}" @if(!empty($story['video'])) data-video="{{ $story['video'] }}" aria-label="Play {{ $story['title'] }} video" @endif>
                        <img src="{{ url($story['image']) }}" loading="lazy" decoding="async" alt="{{ $story['title'] }}">
                        <span class="anx-story-card__tag">{{ $story['label'] }}</span>
                        @if(!empty($story['video']))<span class="anx-story-card__play"><i class="fa-solid fa-play"></i></span>@endif
                    </{{ !empty($story['video']) ? 'button' : 'div' }}>
                    <div class="anx-story-card__body">
                        <span class="anx-story-card__kicker">Client video</span>
                        <h3>{{ $story['title'] }}</h3>
                        <p>{{ $story['text'] }}</p>
                        @if (!empty($story['slug']))
                            <a href="{{ route('testimonialDetail', ['slug' => $story['slug']]) }}" class="bs-btn-1 onhover-border anx-story-card__button" aria-label="View {{ $story['title'] }} client story">
                                <span class="text">VIEW CLIENT STORY</span>
                                <span class="shape"></span>
                            </a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>

<div class="anx-story-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Client experience video">
    <button class="anx-story-modal__backdrop js-anx-story-close" type="button" aria-label="Close video"></button>
    <div class="anx-story-modal__panel">
        <button class="anx-story-modal__close js-anx-story-close" type="button" aria-label="Close video"><i class="fa-solid fa-xmark"></i></button>
        <iframe src="about:blank" title="Client experience video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

@once
    @push('anxExperienceScripts')
        <script>
            document.addEventListener('click', function (event) {
                const trigger = event.target.closest('.js-anx-story');
                const modal = document.querySelector('.anx-story-modal');
                if (trigger && modal) {
                    modal.querySelector('iframe').src = trigger.dataset.video;
                    modal.classList.add('is-open');
                    modal.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden';
                }
                if (event.target.closest('.js-anx-story-close') && modal) {
                    modal.classList.remove('is-open');
                    modal.setAttribute('aria-hidden', 'true');
                    modal.querySelector('iframe').src = 'about:blank';
                    document.body.style.overflow = '';
                }
            });
            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    const close = document.querySelector('.anx-story-modal.is-open .js-anx-story-close');
                    if (close) close.click();
                }
            });
        </script>
    @endpush
@endonce
