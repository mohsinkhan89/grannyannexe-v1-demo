@extends('frontend.layouts.master')

@section('title', '9m x 4m Luxury Pitched Roof Granny Annexe - Client Handover | The Granny Annexe Company')

@section('metas')
    <meta name="description" content="Discover this 36m² one-bedroom luxury granny annexe with a dual-pitched roof, modern kitchen, shower room and practical access ramp.">
@endsection

@section('content')
    <section class="anx-story-detail-hero">
        <img src="{{ url('frontend/assets/testimonials/oxford-aerial.jpg') }}" alt="Aerial view of the 9m x 4m Oxford pitched-roof granny annexe" class="anx-story-detail-hero__image">
        <div class="anx-story-detail-hero__overlay"></div>
        <div class="container bs-container-1 anx-story-detail-hero__content">
            <span class="anx-eyebrow anx-eyebrow--light">Real client experience</span>
            <h1>9m x 4m Luxury Pitched Roof Granny Annexe - Client Handover</h1>
            <p>Discover this beautifully designed 36m² bespoke granny annexe, featuring a traditional dual-pitched steel roof, contemporary composite cladding, French doors, a fitted kitchenette, modern shower room and practical access ramp.</p>
            <button type="button" class="anx-story-detail__play js-anx-story" data-video="https://www.youtube.com/embed/FS25t1QmEtY?autoplay=1&amp;rel=0"><span><i class="fa-solid fa-play"></i></span> Watch the client story</button>
        </div>
    </section>

    <section class="anx-story-detail-main">
        <div class="container bs-container-2"><div class="anx-story-detail-main__grid">
            <div class="anx-story-detail-main__copy">
                <h5 class="bs-subtitle-4"><span class="text">Traditional character</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span></h5>
                <h2 class="bs-sec-title-4">Modern comfort in a beautifully proportioned annexe</h2>
                <p>This attractive 9m x 4m luxury granny annexe demonstrates how traditional styling can be combined with modern construction methods to create comfortable, practical garden accommodation.</p>
                <p>With an external footprint of approximately 36m², it provides thoughtfully designed family accommodation without occupying an unnecessarily large area of the garden.</p>
                <div class="anx-story-detail__snapshot">
                    <article><i class="fa-solid fa-ruler-combined"></i><div><small>Build size</small><strong>9m x 4m</strong><span>Approximately 36m²</span></div></article>
                    <article><i class="fa-solid fa-sterling-sign"></i><div><small>Project value</small><strong>£90,150</strong><span>Bespoke one-bedroom annexe</span></div></article>
                    <article><i class="fa-solid fa-house"></i><div><small>Roof design</small><strong>Dual pitched</strong><span>Traditional steel roof</span></div></article>
                </div>
            </div>
            <aside class="anx-story-detail__quote"><div class="anx-story-detail__quote-mark"><i class="fa-solid fa-quote-left"></i></div><blockquote>Traditional styling and modern finishes combine to create a comfortable, welcoming living space.</blockquote><div class="anx-story-detail__reviewer"><span class="anx-story-detail__stars" aria-label="5 out of 5 stars">★★★★★</span><strong>One-bedroom garden living</strong><small>Client handover</small></div></aside>
        </div></div>
    </section>

    <section class="anx-story-gallery">
        <div class="container bs-container-2">
            <div class="anx-story-gallery__heading"><span class="anx-eyebrow">Inside the completed annexe</span><h2 class="bs-sec-title-4">Bright, modern spaces designed for everyday living</h2></div>
            <div class="anx-story-gallery__grid">
                <figure class="anx-story-gallery__item"><img src="{{ url('frontend/assets/testimonials/oxford-kitchen.jpg') }}" loading="lazy" alt="Modern fitted kitchenette in the Oxford granny annexe"></figure>
                <figure class="anx-story-gallery__item"><img src="{{ url('frontend/assets/testimonials/oxford-shower-room.jpg') }}" loading="lazy" alt="Modern shower room in the Oxford granny annexe"></figure>
                <figure class="anx-story-gallery__item"><img src="{{ url('frontend/assets/testimonials/oxford-interior.jpg') }}" loading="lazy" alt="Bright interior living area with garden access"></figure>
                <figure class="anx-story-gallery__item"><img src="{{ url('frontend/assets/testimonials/oxford-aerial.jpg') }}" loading="lazy" alt="Aerial view showing the Oxford garden annexe"></figure>
            </div>
        </div>
    </section>

    <section class="anx-story-specs">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4"><span class="text">Project specification</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span></h5>
            <div class="anx-story-specs__heading"><h2 class="bs-sec-title-4">Key features of this luxury granny annexe</h2><p class="bs-p-4">A compact one-bedroom home combining residential character, durable materials and complete everyday facilities.</p></div>
            <div class="anx-story-specs__grid">
                <article><span>01</span><div><h3>Dimensions</h3><p>9m x 4m external footprint, with internal dimensions of approximately 8.4m x 3.4m and height up to 2.4m.</p></div></article>
                <article><span>02</span><div><h3>Foundations</h3><p>Ground screw foundation system.</p></div></article>
                <article><span>03</span><div><h3>Roofing</h3><p>Dual-pitched steel roof with matching steel fascias and a 350mm roof overhang.</p></div></article>
                <article><span>04</span><div><h3>External finishes</h3><p>Composite cladding to the front and left elevations, with steel panelling to the rear and right elevations.</p></div></article>
                <article><span>05</span><div><h3>Doors and windows</h3><p>1.5m UPVC French doors, a separate entrance door and four 1.4m x 1.2m UPVC windows.</p></div></article>
                <article><span>06</span><div><h3>Kitchen</h3><p>Fitted kitchenette with a £4,000 specification allowance.</p></div></article>
                <article><span>07</span><div><h3>Bathroom</h3><p>Complete shower room incorporating a shower, toilet and washbasin.</p></div></article>
                <article><span>08</span><div><h3>Interior finishes</h3><p>Plastered and white-decorated walls complemented by practical laminate flooring.</p></div></article>
                <article><span>09</span><div><h3>Heating</h3><p>Smart electric panel heaters for convenient temperature control.</p></div></article>
                <article><span>10</span><div><h3>Electrical and access</h3><p>Eight brushed steel double sockets, four ceiling lights and an external access ramp.</p></div></article>
                <article><span>11</span><div><h3>Standard and warranty</h3><p>Specified for BS 3632 residential park home standards with a 10-year structural warranty.</p></div></article>
            </div>
        </div>
    </section>

    <section class="anx-story-living"><div class="container bs-container-2"><div class="anx-story-living__number">36<span>m²</span></div><div class="anx-story-living__copy"><span class="anx-eyebrow">Traditional roof modern materials</span><h2>Residential character with a low-maintenance finish</h2><p>The dual-pitched roof gives the annexe a familiar residential style, while robust steel roofing, composite cladding and steel panels provide a durable, low-maintenance exterior.</p><p>Generously sized French doors and four windows create a bright, welcoming interior and reinforce the connection between the accommodation and garden.</p></div></div></section>

    <section class="anx-story-detail-main anx-story-detail-main--feature-pair" style="--feature-pair-image: url('{{ url('frontend/assets/testimonials/oxford-interior.jpg') }}');"><div class="container bs-container-2"><div class="anx-story-detail-main__grid">
        <div class="anx-story-detail-main__copy"><span class="anx-eyebrow">Intelligent compact design</span><h2 class="bs-sec-title-4">Comfortable accommodation within a practical footprint</h2><p>The 36m² layout incorporates a fitted kitchenette, private shower room and flexible living areas. Smart heating, plastered walls, white decoration and laminate flooring deliver a clean modern finish.</p><p>An external access ramp also makes entry easier for occupants who may benefit from a more accessible approach.</p></div>
        <div class="anx-story-detail-main__copy"><span class="anx-eyebrow">Additional family accommodation</span><h2 class="bs-sec-title-4">Privacy, comfort and proximity to loved ones</h2><p>A purpose-built garden annexe provides an attractive way to create accommodation for elderly parents or adult family members close to the main family home.</p><p>Bespoke layouts, complete kitchen and bathroom facilities and carefully selected accessibility features help balance independence with family connection.</p></div>
    </div></div></section>

    <section class="anx-story-detail-video"><div class="container bs-container-2"><div class="anx-story-detail-video__heading"><span class="anx-eyebrow">Watch our client handover</span><h2>Explore the completed Oxford garden annexe</h2><p>Join Matt as he hands over this charming garden annexe and shows how traditional styling and modern finishes create a comfortable, welcoming living space.</p></div><button type="button" class="anx-story-detail-video__frame js-anx-story" data-video="https://www.youtube.com/embed/FS25t1QmEtY?autoplay=1&amp;rel=0" aria-label="Play the Oxford client handover"><img src="{{ url('frontend/assets/testimonials/oxford-aerial.jpg') }}" alt="Oxford pitched roof granny annexe client handover"><span><i class="fa-solid fa-play"></i></span></button></div></section>

    <section class="anx-story-detail-cta"><div class="container bs-container-2"><div><span class="anx-eyebrow anx-eyebrow--light">Start your own story</span><h2>Could an annexe transform life for your family?</h2><p>Talk to our friendly team about your garden, your ideas and the people you want to bring closer.</p></div><a href="{{ route('contact') }}" class="bs-btn-1 onhover-border"><span class="text">PLAN YOUR ANNEXE</span><span class="shape"></span></a></div></section>

    <div class="anx-story-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Client experience video"><button class="anx-story-modal__backdrop js-anx-story-close" type="button" aria-label="Close video"></button><div class="anx-story-modal__panel"><button class="anx-story-modal__close js-anx-story-close" type="button" aria-label="Close video"><i class="fa-solid fa-xmark"></i></button><iframe src="about:blank" title="Oxford client experience video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe></div></div>
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
