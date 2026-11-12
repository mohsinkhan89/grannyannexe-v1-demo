@php
    $experienceMode = $mode ?? 'page';
    $stories = [
        [
            'label' => 'Client story 01',
            'title' => '12m x 6m Luxury Granny Annexe Client Handover',
            'text' => 'Discover this stunning 72m² bespoke luxury garden annexe with contemporary finishes and complete modern living facilities.',
            'image' => 'frontend/assets/testimonials/yt-2pixAftz_uU.jpg',
            'video' => 'https://www.youtube.com/embed/2pixAftz_uU?autoplay=1&rel=0',
            'slug' => '12m-x-6m-luxury-granny-annexe-client-handover',
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
            'title' => 'Cardiff Granny Annexe Handover',
            'text' => 'Tour another completed project and see the details ready for the client handover.',
            'image' => 'frontend/assets/testimonials/yt-AIauVVhyAy8.jpg',
            'video' => 'https://www.youtube.com/embed/AIauVVhyAy8?autoplay=1&rel=0',
        ],
        [
            'label' => 'Client story 04',
            'title' => 'Two Bedroom Annexe - Hollywood',
            'text' => 'Watch the full handover and customer testimonial for this two-bedroom Birmingham project.',
            'image' => 'frontend/assets/testimonials/yt-xUhxD-xejOc.jpg',
            'video' => 'https://www.youtube.com/embed/xUhxD-xejOc?autoplay=1&rel=0',
        ],
        [
            'label' => 'Client story 05',
            'title' => 'Granny Annexe Handover - Oxford',
            'text' => 'Step inside this completed Oxford annexe and see the finished space at handover.',
            'image' => 'frontend/assets/testimonials/yt-FS25t1QmEtY.jpg',
            'video' => 'https://www.youtube.com/embed/FS25t1QmEtY?autoplay=1&rel=0',
        ],
        [
            'label' => 'Client story 06',
            'title' => 'Steel Frame Granny Annexe Walkthrough',
            'text' => 'A complete walkthrough of a modern, insulated and turnkey steel-frame granny annexe.',
            'image' => 'frontend/assets/testimonials/yt-16wnYRjph90.jpg',
            'video' => 'https://www.youtube.com/embed/16wnYRjph90?autoplay=1&rel=0',
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
            'title' => 'Steel Frame Granny Annexe Walkthrough',
            'text' => 'Explore a modern, insulated and turnkey steel-frame granny annexe from the inside.',
            'image' => 'frontend/assets/img/client-videos/second-videos-img.png',
            'video' => 'https://www.youtube.com/embed/16wnYRjph90?autoplay=1&rel=0',
        ],
        [
            'label' => 'Featured video 03',
            'title' => 'Cardiff Granny Annexe Handover',
            'text' => 'Tour a completed Cardiff project and see the details ready for the client handover.',
            'image' => 'frontend/assets/img/client-videos/third-videos-img.png',
            'video' => 'https://www.youtube.com/embed/AIauVVhyAy8?autoplay=1&rel=0',
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
                    <button type="button" class="anx-story-card__media js-anx-story" data-video="{{ $story['video'] }}" aria-label="Play {{ $story['title'] }} video">
                        <img src="{{ url($story['image']) }}" loading="lazy" decoding="async" alt="{{ $story['title'] }}">
                        <span class="anx-story-card__tag">{{ $story['label'] }}</span>
                        <span class="anx-story-card__play"><i class="fa-solid fa-play"></i></span>
                    </button>
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
