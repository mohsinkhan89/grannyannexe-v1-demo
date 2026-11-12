@extends('frontend.layouts.master')

@section('title', 'Client Testimonials & Annexe Stories | The Granny Annexe Company')

@section('metas')
    <meta name="description" content="Watch real client experiences and discover how The Granny Annexe Company designs and builds bespoke garden annexes across the UK.">
@endsection

@section('content')
    <section class="breadcrumb-area wa-p-relative">
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" loading="lazy" decoding="async"
                src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-gallery-new.webp') }}"
                alt="Client testimonials and completed granny annexes">
        </div>
        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s">Client Testimonials</h1>
                <div class="breadcrumb-list">
                    <a href="{{ route('index') }}">Home</a>
                    <span>Client Testimonials</span>
                </div>
            </div>
        </div>
    </section>

    <div id="client-stories">@include('frontend.inc.client-experiences', ['mode' => 'page'])</div>

    @include('frontend.inc.conabout-banner')
@endsection
