@extends('frontend.layouts.master')

@section('title', '6m x 6.6m Contemporary Luxury Granny Annexe - Client Handover | The Granny Annexe Company')

@section('metas')
    <meta name="description" content="Explore this 39.6m² contemporary one-bedroom granny annexe with charcoal composite cladding, a fitted kitchen and modern shower room.">
@endsection

@section('content')
    <section class="anx-story-detail-hero">
        <img src="{{ url('frontend/assets/testimonials/huddersfield-charcoal-annexe.png') }}" alt="6m x 6.6m contemporary charcoal-clad granny annexe in Huddersfield" class="anx-story-detail-hero__image">
        <div class="anx-story-detail-hero__overlay"></div>
        <div class="container bs-container-1 anx-story-detail-hero__content">
            <span class="anx-eyebrow anx-eyebrow--light">Real client experience</span>
            <h1>6m x 6.6m Contemporary Luxury Granny Annexe - Client Handover</h1>
            <p>Explore this beautifully finished 39.6m² steel frame granny annexe, featuring contemporary composite cladding, anthracite triple-glazed French doors, a fitted kitchen, modern shower room and stylish interior finishes.</p>
            <button type="button" class="anx-story-detail__play js-anx-story" data-video="https://www.youtube.com/embed/xDsx6rpPP8I?autoplay=1&amp;rel=0"><span><i class="fa-solid fa-play"></i></span> Watch the client story</button>
        </div>
    </section>

    <section class="anx-story-detail-main">
        <div class="container bs-container-2">
            <div class="anx-story-detail-main__grid">
                <div class="anx-story-detail-main__copy">
                    <h5 class="bs-subtitle-4"><span class="text">Contemporary compact living</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span></h5>
                    <h2 class="bs-sec-title-4">Modern style, comfort and everyday practicality</h2>
                    <p>This beautifully designed 6m x 6.6m steel frame granny annexe demonstrates how a thoughtfully planned garden building can provide comfortable, modern accommodation within a relatively compact footprint.</p>
                    <p>Offering approximately 39.6m² of external floor area, it combines contemporary architectural styling with practical interior features for homeowners looking to create additional living accommodation within their garden.</p>
                    <div class="anx-story-detail__snapshot">
                        <article><i class="fa-solid fa-ruler-combined"></i><div><small>Build size</small><strong>6m x 6.6m</strong><span>Approximately 39.6m²</span></div></article>
                        <article><i class="fa-solid fa-sterling-sign"></i><div><small>Project value</small><strong>£82,550</strong><span>Bespoke garden annexe</span></div></article>
                        <article><i class="fa-solid fa-house"></i><div><small>Project type</small><strong>One bedroom</strong><span>Steel frame annexe</span></div></article>
                    </div>
                </div>
                <aside class="anx-story-detail__quote">
                    <div class="anx-story-detail__quote-mark"><i class="fa-solid fa-quote-left"></i></div>
                    <blockquote>Thoughtful design and quality finishes create a comfortable, practical living space within a compact footprint.</blockquote>
                    <div class="anx-story-detail__reviewer"><span class="anx-story-detail__stars" aria-label="5 out of 5 stars">★★★★★</span><strong>Contemporary garden living</strong><small>Client handover</small></div>
                </aside>
            </div>
        </div>
    </section>

    <section class="anx-story-specs">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4"><span class="text">Project specification</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span></h5>
            <div class="anx-story-specs__heading"><h2 class="bs-sec-title-4">Key features of this luxury garden annexe</h2><p class="bs-p-4">A complete one-bedroom home with durable finishes and the essential comforts needed for everyday living.</p></div>
            <div class="anx-story-specs__grid">
                <article><span>01</span><div><h3>Dimensions</h3><p>6m x 6.6m, providing approximately 39.6m² of external footprint.</p></div></article>
                <article><span>02</span><div><h3>Foundations</h3><p>Ground screw foundation system, providing an efficient alternative to traditional concrete foundations.</p></div></article>
                <article><span>03</span><div><h3>External finishes</h3><p>Contemporary composite cladding across the front and side elevations, with durable steel panelling to the rear.</p></div></article>
                <article><span>04</span><div><h3>Doors</h3><p>1.5m-wide anthracite triple-glazed UPVC French doors.</p></div></article>
                <article><span>05</span><div><h3>Windows</h3><p>Multiple functional UPVC windows with an additional high-level window for natural daylight.</p></div></article>
                <article><span>06</span><div><h3>Kitchen</h3><p>Fitted kitchen with a £3,500 specification allowance.</p></div></article>
                <article><span>07</span><div><h3>Bathroom</h3><p>Complete shower room with toilet, shower, washbasin and practical waterproof wall panels.</p></div></article>
                <article><span>08</span><div><h3>Interior finishes</h3><p>Smooth plastered walls, white decoration throughout and laminate flooring.</p></div></article>
                <article><span>09</span><div><h3>Heating and ventilation</h3><p>Smart electric panel heaters with mechanical ventilation incorporated where required.</p></div></article>
                <article><span>10</span><div><h3>Lighting and electrical</h3><p>Four internal ceiling rose lighting points and six brushed steel double sockets.</p></div></article>
                <article><span>11</span><div><h3>Utilities and warranty</h3><p>Water and waste connections, a dedicated water heater and a 10-year structural warranty.</p></div></article>
            </div>
        </div>
    </section>

    <section class="anx-story-living">
        <div class="container bs-container-2">
            <div class="anx-story-living__number">39.6<span>m²</span></div>
            <div class="anx-story-living__copy">
                <span class="anx-eyebrow">Low-maintenance exterior</span>
                <h2>Contemporary finishes with strong architectural character</h2>
                <p>Wood-effect composite cladding provides the attractive appearance of traditional timber while reducing regular maintenance. Durable steel panelling to the rear balances aesthetics with practical performance.</p>
                <p>Anthracite French doors create a striking contrast against the charcoal exterior and strengthen the connection between the accommodation and surrounding garden.</p>
            </div>
        </div>
    </section>

    <section class="anx-story-detail-main anx-story-detail-main--feature-pair" style="--feature-pair-image: url('{{ url('frontend/assets/testimonials/huddersfield-charcoal-annexe.png') }}');">
        <div class="container bs-container-2">
            <div class="anx-story-detail-main__grid">
                <div class="anx-story-detail-main__copy">
                    <span class="anx-eyebrow">Comfortable accommodation</span>
                    <h2 class="bs-sec-title-4">Everything needed for practical everyday living</h2>
                    <p>Despite its compact dimensions, this approximately 40m² annexe includes a fitted kitchen, private shower room, freshly decorated walls, laminate flooring and carefully positioned windows that encourage natural daylight.</p>
                    <p>Smart electric panel heaters provide convenient temperature control, while the bespoke layout balances comfort, privacy and functionality.</p>
                </div>
                <div class="anx-story-detail-main__copy">
                    <span class="anx-eyebrow">Additional family accommodation</span>
                    <h2 class="bs-sec-title-4">A practical alternative to extending the main home</h2>
                    <p>A thoughtfully designed garden annexe allows elderly parents or adult relatives to enjoy their own comfortable living environment while remaining conveniently close to the main property.</p>
                    <p>This project shows how an annexe occupying approximately 40m² can incorporate kitchen facilities, a private shower room and flexible living accommodation without requiring an exceptionally large garden.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="anx-story-detail-video">
        <div class="container bs-container-2">
            <div class="anx-story-detail-video__heading"><span class="anx-eyebrow">Client handover</span><h2>Discover the finished contemporary annexe</h2><p>Join Matt as he hands over this stunning garden annexe and explores how thoughtful design and quality finishes create a comfortable, practical living space within a compact footprint.</p></div>
            <button type="button" class="anx-story-detail-video__frame js-anx-story" data-video="https://www.youtube.com/embed/xDsx6rpPP8I?autoplay=1&amp;rel=0" aria-label="Play the Huddersfield client handover"><img src="{{ url('frontend/assets/testimonials/huddersfield-charcoal-annexe.png') }}" alt="Huddersfield contemporary luxury granny annexe client handover"><span><i class="fa-solid fa-play"></i></span></button>
        </div>
    </section>

    <section class="anx-story-detail-cta">
        <div class="container bs-container-2">
            <div><span class="anx-eyebrow anx-eyebrow--light">Start your own story</span><h2>Could an annexe transform life for your family?</h2><p>Talk to our friendly team about your garden, your ideas and the people you want to bring closer.</p></div>
            <a href="{{ route('contact') }}" class="bs-btn-1 onhover-border"><span class="text">PLAN YOUR ANNEXE</span><span class="shape"></span></a>
        </div>
    </section>

    <div class="anx-story-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Client experience video"><button class="anx-story-modal__backdrop js-anx-story-close" type="button" aria-label="Close video"></button><div class="anx-story-modal__panel"><button class="anx-story-modal__close js-anx-story-close" type="button" aria-label="Close video"><i class="fa-solid fa-xmark"></i></button><iframe src="about:blank" title="Huddersfield client handover video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe></div></div>
@endsection

@push('anxExperienceScripts')
<script>
document.addEventListener('click', function (event) {
    const modal = document.querySelector('.anx-story-modal'); const trigger = event.target.closest('.js-anx-story');
    if (trigger && modal) { modal.querySelector('iframe').src = trigger.dataset.video; modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false'); document.body.style.overflow = 'hidden'; }
    if (event.target.closest('.js-anx-story-close') && modal) { modal.classList.remove('is-open'); modal.setAttribute('aria-hidden', 'true'); modal.querySelector('iframe').src = 'about:blank'; document.body.style.overflow = ''; }
});
document.addEventListener('keydown', function (event) { if (event.key === 'Escape') { const close = document.querySelector('.anx-story-modal.is-open .js-anx-story-close'); if (close) close.click(); } });
</script>
@endpush
