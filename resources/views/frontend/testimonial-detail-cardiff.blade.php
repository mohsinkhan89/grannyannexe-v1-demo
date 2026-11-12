@extends('frontend.layouts.master')

@section('title', '9m x 6m Accessible Luxury Granny Annexe - Client Handover | The Granny Annexe Company')

@section('metas')
    <meta name="description" content="Discover this 54m² accessible luxury granny annexe with a pitched roof, low-threshold bifold doors, access ramp and accessible wet room.">
@endsection

@section('content')
    <section class="anx-story-detail-hero">
        <img src="{{ url('frontend/assets/testimonials/cardiff-accessible-annexe.jpg') }}" alt="9m x 6m accessible luxury granny annexe in Cardiff" class="anx-story-detail-hero__image">
        <div class="anx-story-detail-hero__overlay"></div>
        <div class="container bs-container-1 anx-story-detail-hero__content">
            <span class="anx-eyebrow anx-eyebrow--light">Real client experience</span>
            <h1>9m x 6m Accessible Luxury Granny Annexe - Client Handover</h1>
            <p>Discover this beautifully designed 54m² bespoke granny annexe, featuring an attractive pitched roof, contemporary finishes, 3m bifold doors and thoughtful accessibility features.</p>
            <button type="button" class="anx-story-detail__play js-anx-story" data-video="https://www.youtube.com/embed/AIauVVhyAy8?autoplay=1&amp;rel=0"><span><i class="fa-solid fa-play"></i></span> Watch the client story</button>
        </div>
    </section>

    <section class="anx-story-detail-main">
        <div class="container bs-container-2">
            <div class="anx-story-detail-main__grid">
                <div class="anx-story-detail-main__copy">
                    <h5 class="bs-subtitle-4"><span class="text">Accessible garden living</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span></h5>
                    <h2 class="bs-sec-title-4">Accessibility, comfort and contemporary style</h2>
                    <p>This impressive 9m x 6m luxury granny annexe demonstrates how bespoke garden accommodation can combine attractive architectural design with thoughtful accessibility features, creating a comfortable and practical living environment.</p>
                    <p>With an external footprint of approximately 54m², the purpose-designed accommodation is particularly well suited to families exploring multi-generational living or additional accommodation for elderly relatives.</p>
                    <div class="anx-story-detail__snapshot">
                        <article><i class="fa-solid fa-ruler-combined"></i><div><small>Build size</small><strong>9m x 6m</strong><span>Approximately 54m²</span></div></article>
                        <article><i class="fa-solid fa-sterling-sign"></i><div><small>Approximate value</small><strong>£126,420</strong><span>Bespoke accessible annexe</span></div></article>
                        <article><i class="fa-solid fa-universal-access"></i><div><small>Project type</small><strong>Accessible living</strong><span>Luxury garden annexe</span></div></article>
                    </div>
                </div>
                <aside class="anx-story-detail__quote">
                    <div class="anx-story-detail__quote-mark"><i class="fa-solid fa-quote-left"></i></div>
                    <blockquote>Bespoke design and practical accessibility features create a comfortable, welcoming living space.</blockquote>
                    <div class="anx-story-detail__reviewer"><span class="anx-story-detail__stars" aria-label="5 out of 5 stars">★★★★★</span><strong>Independent family living</strong><small>Client handover</small></div>
                </aside>
            </div>
        </div>
    </section>

    <section class="anx-story-specs">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4"><span class="text">Project specification</span><span class="icon"><img src="{{ url('frontend/assets/img/illus/subtitle-4-icon-2.svg') }}" alt=""></span></h5>
            <div class="anx-story-specs__heading"><h2 class="bs-sec-title-4">Key features of this luxury granny annexe</h2><p class="bs-p-4">A generous, purpose-designed home balancing independent living, accessibility and a warm residential character.</p></div>
            <div class="anx-story-specs__grid">
                <article><span>01</span><div><h3>Dimensions</h3><p>9m x 6m, providing approximately 54m² of external footprint.</p></div></article>
                <article><span>02</span><div><h3>Foundations</h3><p>Ground screw foundation system.</p></div></article>
                <article><span>03</span><div><h3>Roofing</h3><p>Traditional-style tile-effect pitched roof with black square-profile guttering.</p></div></article>
                <article><span>04</span><div><h3>External finishes</h3><p>London Stock brick slips to the front elevation with durable steel panelling to the remaining elevations.</p></div></article>
                <article><span>05</span><div><h3>Doors and windows</h3><p>3m-wide aluminium low-threshold bifold doors, two high-level windows and additional functional UPVC windows.</p></div></article>
                <article><span>06</span><div><h3>Kitchen</h3><p>Practical fitted kitchenette with a £5,000 specification allowance.</p></div></article>
                <article><span>07</span><div><h3>Accessible wet room</h3><p>Shower, toilet, washbasin, waterproof wall panels, a shower seat and toilet support rails.</p></div></article>
                <article><span>08</span><div><h3>Accessibility</h3><p>External access ramp, low-threshold entrance and internal sliding doors for easier movement.</p></div></article>
                <article><span>09</span><div><h3>Interior and heating</h3><p>Smooth plastered walls, white decoration, laminate flooring, electric underfloor heating and smart panel heaters.</p></div></article>
                <article><span>10</span><div><h3>Lighting and electrical</h3><p>18 internal LED lights, brushed steel double sockets and two external PIR-operated lights.</p></div></article>
                <article><span>11</span><div><h3>Storage and warranty</h3><p>Integrated wardrobe and storage, carefully planned internal access and a 10-year structural warranty.</p></div></article>
            </div>
        </div>
    </section>

    <section class="anx-story-living">
        <div class="container bs-container-2">
            <div class="anx-story-living__number">54<span>m²</span></div>
            <div class="anx-story-living__copy">
                <span class="anx-eyebrow">Thoughtfully accessible</span>
                <h2>Designed for accessible and independent living</h2>
                <p>A low-threshold bifold entrance, external access ramp and internal sliding doors help create an environment that is easier to move through. The accessible wet room includes a dedicated shower seat and toilet support rails.</p>
                <p>These adaptations show how a modern garden annexe can be tailored around the individual requirements of its occupants rather than relying on a standard, one-size-fits-all design.</p>
            </div>
        </div>
    </section>

    <section class="anx-story-detail-main anx-story-detail-main--feature-pair" style="--feature-pair-image: url('{{ url('frontend/assets/testimonials/cardiff-accessible-annexe.jpg') }}');">
        <div class="container bs-container-2">
            <div class="anx-story-detail-main__grid">
                <div class="anx-story-detail-main__copy">
                    <span class="anx-eyebrow">Traditional architectural character</span>
                    <h2 class="bs-sec-title-4">A pitched roof with contemporary finishes</h2>
                    <p>The tile-effect pitched roof gives the annexe a more traditional residential appearance. London Stock brick slips, low-maintenance panelling and large glazed doors balance familiar home styling with contemporary garden architecture.</p>
                    <p>Carefully positioned windows and generous bifold doors create a bright atmosphere, while underfloor heating and smart panel heaters provide convenient temperature control.</p>
                </div>
                <div class="anx-story-detail-main__copy">
                    <span class="anx-eyebrow">Multi-generational families</span>
                    <h2 class="bs-sec-title-4">Privacy, independence and family support</h2>
                    <p>A purpose-designed garden annexe can provide privacy and independence while allowing family members to remain close enough to offer assistance, companionship and support when required.</p>
                    <p>This 54m² project illustrates how accessible bathroom facilities, suitable doors and carefully planned entrances can be incorporated from the initial design stage to support changing mobility requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="anx-story-detail-video">
        <div class="container bs-container-2">
            <div class="anx-story-detail-video__heading"><span class="anx-eyebrow">Watch our client handover</span><h2>Explore the finished accessible garden annexe</h2><p>Join Matt as he hands over this stunning annexe to our clients and explores how bespoke design and practical accessibility features create a comfortable, welcoming living space.</p></div>
            <button type="button" class="anx-story-detail-video__frame js-anx-story" data-video="https://www.youtube.com/embed/AIauVVhyAy8?autoplay=1&amp;rel=0" aria-label="Play the Cardiff client handover"><img src="{{ url('frontend/assets/testimonials/cardiff-accessible-annexe.jpg') }}" alt="Cardiff accessible luxury granny annexe client handover"><span><i class="fa-solid fa-play"></i></span></button>
        </div>
    </section>

    <section class="anx-story-detail-cta">
        <div class="container bs-container-2">
            <div><span class="anx-eyebrow anx-eyebrow--light">Start your own story</span><h2>Could an annexe transform life for your family?</h2><p>Talk to our friendly team about your garden, your accessibility needs and the people you want to bring closer.</p></div>
            <a href="{{ route('contact') }}" class="bs-btn-1 onhover-border"><span class="text">PLAN YOUR ANNEXE</span><span class="shape"></span></a>
        </div>
    </section>

    <div class="anx-story-modal" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Client experience video">
        <button class="anx-story-modal__backdrop js-anx-story-close" type="button" aria-label="Close video"></button>
        <div class="anx-story-modal__panel"><button class="anx-story-modal__close js-anx-story-close" type="button" aria-label="Close video"><i class="fa-solid fa-xmark"></i></button><iframe src="about:blank" title="Cardiff client experience video" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe></div>
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
