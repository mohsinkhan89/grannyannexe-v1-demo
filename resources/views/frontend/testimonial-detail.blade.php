@extends('frontend.layouts.master')

@section('title', 'Granny Annexe Client Story | The Granny Annexe Company')

@section('metas')
    <meta name="description" content="Discover a real client story and see how a bespoke granny annexe created a comfortable, independent family home.">
@endsection

@section('content')
    <section class="anx-story-detail-hero">
        <img src="{{ url('frontend/assets/testimonials/yt-2pixAftz_uU.jpg') }}" alt="Completed granny annexe client story" class="anx-story-detail-hero__image">
        <div class="anx-story-detail-hero__overlay"></div>
        <div class="container bs-container-1 anx-story-detail-hero__content">
            <div class="anx-story-detail__crumbs">
                <a href="{{ route('index') }}">Home</a><i class="fa-solid fa-angle-right"></i>
                <a href="{{ route('testimonials') }}">Client testimonials</a><i class="fa-solid fa-angle-right"></i>
                <span>Staines client story</span>
            </div>
            <span class="anx-eyebrow anx-eyebrow--light">Real client experience</span>
            <h1>Granny Annexe Handover - Staines</h1>
            <p>Step inside this bespoke Staines annexe at client handover and explore a finished home designed around everyday comfort.</p>
            <button type="button" class="anx-story-detail__play js-anx-story" data-video="https://www.youtube.com/embed/2pixAftz_uU?autoplay=1&rel=0">
                <span><i class="fa-solid fa-play"></i></span> Watch the client story
            </button>
        </div>
    </section>

    <section class="anx-story-detail-main">
        <div class="container bs-container-2">
            <div class="anx-story-detail-main__grid">
                <div class="anx-story-detail-main__copy">
                    <h5 class="bs-subtitle-4"><span class="text">A home designed around family</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span></h5>
                    <h2 class="bs-sec-title-4">From first ideas to a finished, independent home</h2>
                    <p>Step inside this bespoke Staines annexe at client handover and explore a finished home designed around everyday comfort.</p>
                    <p>Every annexe is shaped around the people who will live there. Our team manages the journey from design and planning through to construction, interiors and final handover, creating one clear and carefully coordinated experience.</p>
                    <div class="anx-story-detail__features">
                        <div><i class="fa-solid fa-house"></i><span><strong>Bespoke design</strong>Planned around the family, garden and lifestyle.</span></div>
                        <div><i class="fa-solid fa-key"></i><span><strong>Turnkey delivery</strong>A complete home, ready to move into.</span></div>
                        <div><i class="fa-solid fa-leaf"></i><span><strong>Year-round comfort</strong>Built for efficient, permanent living.</span></div>
                    </div>
                </div>
                <aside class="anx-story-detail__quote">
                    <i class="fa-solid fa-quote-left"></i>
                    <blockquote>&ldquo;The annexe is even better than we imagined. It feels spacious, private and completely part of our family home.&rdquo;</blockquote>
                    <div><span class="anx-story-detail__stars">★★★★★</span><strong>Annexe homeowner</strong><small>Staines</small></div>
                </aside>
            </div>
        </div>
    </section>

    <section class="anx-story-detail-video">
        <div class="container bs-container-2">
            <button type="button" class="anx-story-detail-video__frame js-anx-story" data-video="https://www.youtube.com/embed/2pixAftz_uU?autoplay=1&rel=0" aria-label="Play the Staines client story">
                <img src="{{ url('frontend/assets/testimonials/yt-2pixAftz_uU.jpg') }}" alt="Staines granny annexe client video">
                <span><i class="fa-solid fa-play"></i></span>
            </button>
        </div>
    </section>

    <section class="anx-story-detail-cta">
        <div class="container bs-container-2">
            <div><span class="anx-eyebrow anx-eyebrow--light">Start your own story</span><h2>Could an annexe transform life for your family?</h2><p>Talk to our friendly team about your garden, your ideas and the people you want to bring closer.</p></div>
            <a href="{{ route('contact') }}" class="bs-btn-1 onhover-border"><span class="text">PLAN YOUR ANNEXE</span><span class="shape"></span></a>
        </div>
    </section>

    <div class="anx-story-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Client experience video">
        <button class="anx-story-modal__backdrop js-anx-story-close" type="button" aria-label="Close video"></button>
        <div class="anx-story-modal__panel"><button class="anx-story-modal__close js-anx-story-close" type="button" aria-label="Close video"><i class="fa-solid fa-xmark"></i></button><iframe src="about:blank" title="Client experience video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe></div>
    </div>
@endsection

@push('anxExperienceScripts')
<script>
document.addEventListener('click', function (event) {
    const modal = document.querySelector('.anx-story-modal');
    const trigger = event.target.closest('.js-anx-story');
    if (trigger && modal) { modal.querySelector('iframe').src = trigger.dataset.video; modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false'); document.body.style.overflow = 'hidden'; }
    if (event.target.closest('.js-anx-story-close') && modal) { modal.classList.remove('is-open'); modal.setAttribute('aria-hidden', 'true'); modal.querySelector('iframe').src = 'about:blank'; document.body.style.overflow = ''; }
});
document.addEventListener('keydown', function (event) { if (event.key === 'Escape') { const close = document.querySelector('.anx-story-modal.is-open .js-anx-story-close'); if (close) close.click(); } });
</script>
@endpush
