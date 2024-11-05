@extends('layouts.landing.app')

@section('title', 'Home Page')
@section('seoTitle', 'Digi Tekno Indonesia')

@section('content')
    <!-- start page title -->
    @include('pages.frontend.pages._slider')
    <!-- end page title -->
    <!-- start section -->
    <section class="position-relative">
        <div class="container">
            <img src="frontend/images/demo-logistics-home-bg-01.jpg"
                class="position-absolute bottom-10px right-0px z-index-minus-1" data-bottom-top="transform: translateY(150px)"
                data-top-bottom="transform: translateY(-150px)" alt="" />
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 md-mb-50px"
                    data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <img src="{{ asset('storage/' . $page->image ?? '') }}" class="w-100"
                        data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                        alt="">
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <P>
                        {!! $page->content !!}
                    </P>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="overflow-hidden bg-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-3 xs-mb-2">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [0, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>
                    <span
                        class="fs-16 lh-22 fw-700 mb-10px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Professional
                        services</span>
                    <h2 class="text-dark-gray fw-700 mb-0 ls-minus-1px">Our services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="outside-box-right-50 md-outside-box-right-70 sm-outside-box-right-0"
                        data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor ps-30px pe-30px sm-ps-0 sm-pe-0"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "autoplay": { "delay": 300000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2, "spaceBetween": 50 }, "768": { "slidesPerView": 2, "spaceBetween": 40 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper pt-30px pb-30px">
                                <!-- start slider item -->
                                @foreach ($services as $service)
                                    <div class="swiper-slide">
                                        <div class="row g-0 services-box-style-02">
                                            <div class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large"
                                                style="min-height: 300px; display: flex; flex-direction: column; justify-content: space-between;">
                                                <div class="services-box-icon">
                                                    @php
                                                        $iconClass = '';

                                                        if ($service->title == 'Engineering') {
                                                            $iconClass = 'line-icon-Gears';
                                                        } elseif ($service->title == 'Manufacturing Machine Services') {
                                                            $iconClass = 'line-icon-Engineering';
                                                        } elseif (
                                                            $service->title == 'Procurement of Spare Parts & Materials'
                                                        ) {
                                                            $iconClass = 'line-icon-Dropbox';
                                                        } elseif ($service->title == 'IT Consultant') {
                                                            $iconClass = 'line-icon-Computer';
                                                        } else {
                                                            $iconClass = 'line-icon-DefaultIcon'; // Jika ingin menggunakan default icon
                                                        }
                                                    @endphp

                                                    <i
                                                        class="{{ $iconClass }} icon-double-large text-base-color mb-25px"></i>
                                                </div>
                                                <div class="services-box-content">
                                                    <a href="our-services.html"
                                                        class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">{{ $service->title }}</a>
                                                    <p
                                                        style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                        {{ $service->content_short }}
                                                    </p>
                                                    <a href="{{ $service->slug }}"
                                                        class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 services-box-img xs-h-300px">
                                                <div class="h-100 cover-background"
                                                    style="background-image: url({{ asset('storage/' . $service->image ?? '') }}); background-size: cover; background-position: center; height: 300px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section patners -->
    <section class="pt-0">
        <div class="container">
            <br>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 text-center mb-1"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="text-dark-gray fw-700 fs-15 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">
                        Our Client</span>
                </div>
            </div>
            <div class="row position-relative clients-style-08 mt-25px"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 800, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        @foreach ($patners as $patner)
                            <div class="swiper-slide client-slide">
                                <a href="{{ $patner->url }}"><img src="{{ asset('storage/' . $patner->logo ?? '') }}"
                                        alt="Digi Patner .{{ $patner->name }}" /></a>
                            </div>
                        @endforeach
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
