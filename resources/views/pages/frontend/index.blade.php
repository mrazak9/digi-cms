@extends('layouts.landing.app')

@section('title', 'Beranda')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <!-- start slider -->
    <section class="p-0 top-space-margin full-screen md-h-600px sm-h-650px">
        <div class="swiper h-100 magic-cursor swiper-light-pagination"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('frontend/images/img/003.jpg');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                            <div class="col-xxl-7 col-xl-10 text-white">
                                <h1 class="fw-600">products and services can be used in a wide variety of industries
                                    and
                                    businesses.
                                </h1>
                                <div class="fs-20 opacity-6 mb-40px sm-mb-30px">We can customize our products
                                    according to your needs.</div>
                                <div class="lg-mb-8 md-mb-0">
                                    <a href="about-us.html"
                                        class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Read
                                        More</a>
                                    <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                        class="text-center d-inline-flex sm-mt-20px rounded-circle video-icon-box video-icon-medium popup-vimeo">
                                        <span class="video-icon bg-base-color me-10px">
                                            <i class="fa-solid fa-play text-white"></i>
                                            <span class="video-icon-sonar">
                                                <span
                                                    class="video-icon-sonar-afr border border-2 border-color-base-color"></span>
                                            </span>
                                        </span>
                                        <span class="text-white fs-20">How it work?</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('frontend/images/img/002.jpg');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                            <div class="col-xxl-7 col-xl-10 text-white">
                                <h1 class="fw-600">committed to providing effective, cost-effective, fast services
                                    & products.</h1>
                                <!-- <div class="fs-20 opacity-6 mb-40px sm-mb-30px">Swift and reliable air freight solutions
                                            worldwide.</div> -->
                                <div class="lg-mb-8 md-mb-0">
                                    <a href="about-us.html"
                                        class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Read
                                        More</a>
                                    <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                        class="text-center d-inline-flex sm-mt-20px rounded-circle video-icon-box video-icon-medium popup-vimeo">
                                        <span class="video-icon bg-base-color me-10px">
                                            <i class="fa-solid fa-play text-dark-gray"></i>
                                            <span class="video-icon-sonar">
                                                <span
                                                    class="video-icon-sonar-afr border border-2 border-color-base-color"></span>
                                            </span>
                                        </span>
                                        <span class="text-white fs-20">How it work?</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('frontend/images/img/001.jpg');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                            <div class="col-xxl-7 col-xl-10 text-white">
                                <h1 class="fw-600">dedicated team to ensure all products
                                    and services provided meet your specific needs.</h1>
                                <div class="fs-20 opacity-6 mb-40px sm-mb-30px">Reliable train freight services for
                                    seamless transport.</div>
                                <div class="lg-mb-8 md-mb-0">
                                    <a href="about-us.html"
                                        class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Read
                                        More</a>
                                    <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                                        class="text-center d-inline-flex sm-mt-20px rounded-circle video-icon-box video-icon-medium popup-vimeo">
                                        <span class="video-icon bg-base-color me-10px">
                                            <i class="fa-solid fa-play text-dark-gray"></i>
                                            <span class="video-icon-sonar">
                                                <span
                                                    class="video-icon-sonar-afr border border-2 border-color-base-color"></span>
                                            </span>
                                        </span>
                                        <span class="text-white fs-20">How it work?</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-md-none">
            </div>
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <div
                class="slider-one-slide-prev-1 icon-very-medium text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
                <i class="bi bi-arrow-left-short"></i>
            </div>
            <div
                class="slider-one-slide-next-1 icon-very-medium text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
                <i class="bi bi-arrow-right-short"></i>
            </div>
            <!-- end slider navigation -->
        </div>
    </section>
    <!-- end slider -->
    <!-- start section -->
    <section class="p-0 lg-pt-8 xs-pt-50px">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-5 outside-box-top-205px lg-mt-0 position-relative z-index-1">
                    <div class="border-radius-10px overflow-hidden">
                        <div class="bg-base-color p-50px xs-p-30px position-relative">
                            <span class="text-white opacity-8 fw-500 d-block mb-5px">PT. DIGI TEKNO INDONESIA</span>
                            <h5 class="mb-0 fw-500 text-white">Engineering, Manufacturing & IT Solutions Services</h5>
                            <div class="position-absolute top-0 end-0">
                                <img src="frontend/images/demo-logistics-diagonal-line-01.svg" alt="" height="100"
                                    width="100">
                            </div>
                        </div>
                        <div class="bg-dark-gray ps-50px pe-50px pt-20px pb-20px sm-ps-30px sm-pe-30px">
                            <a href="contact-us.html" class="fs-19 fw-500 text-white d-flex w-100 align-items-center">Get a
                                free quote now<i class="feather icon-feather-plus ms-auto icon-extra-medium"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative">
        <div class="container">
            <img src="frontend/images/demo-logistics-home-bg-01.jpg"
                class="position-absolute bottom-10px right-0px z-index-minus-1"
                data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)"
                alt="" />
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 md-mb-50px"
                    data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <img src="frontend/images/img/004.jpg" class="w-100" data-bottom-top="transform: translateY(-50px)"
                        data-top-bottom="transform: translateY(50px)" alt="">
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">
                        Engineering & IT Solutions Services
                    </h2>
                    <p class="w-90 lg-w-100">
                        We are committed to providing the best service
                        and product quality for you.
                    </p>
                    <div class="icon-with-text-style-08 mb-10px">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                                <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="text-dark-gray fw-500">Customizable Solutions for All Industries
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="icon-with-text-style-08 mb-10px">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                                <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="text-dark-gray fw-500">Efficient, Cost-Effective Services
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="icon-with-text-style-08 mb-10px">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                                <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="text-dark-gray fw-500">Dedicated Team for Optimal Performance
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-35px d-flex flex-wrap">
                        <a href="our-services.html"
                            class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-icon-right me-30px">
                            <span>
                                <span class="btn-text">Our services</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                        <div class="feature-box feature-box-left-icon-middle xs-mt-20px">
                            <div
                                class="feature-box-icon feature-box-icon-rounded bg-base-color w-60px h-60px rounded-circle me-15px">
                                <i class="feather icon-feather-phone-call align-middle icon-extra-medium text-white"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-block fw-500">Get in touch</span>
                                <a href="tel:1800222000" class="d-block text-dark-gray fw-700">1 800 222 000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 clients-style-04 border-top sm-border-top-0"
                data-anime='{"opacity": [0,1], "duration": 400, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div
                    class="col text-center border-end border-color-transparent-dark-very-light sm-border-end-0 sm-border-top transition-inner-all pt-45px pb-45px sm-pt-30px sm-pb-30px">
                    <div class="client-box">
                        <a href="#"><img src="frontend/images/demo-logistics-client-01.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div
                    class="col text-center border-end border-color-transparent-dark-very-light sm-border-end-0 sm-border-top transition-inner-all pt-45px pb-45px sm-pt-30px sm-pb-30px">
                    <div class="client-box">
                        <a href="#"><img src="frontend/images/demo-logistics-client-02.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div
                    class="col text-center border-end border-color-transparent-dark-very-light sm-border-end-0 sm-border-top transition-inner-all pt-45px pb-45px sm-pt-30px sm-pb-30px">
                    <div class="client-box">
                        <a href="#"><img src="frontend/images/demo-logistics-client-03.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div
                    class="col text-center border-end border-color-transparent-dark-very-light sm-border-end-0 md-border-top transition-inner-all pt-45px pb-45px sm-pt-30px sm-pb-30px">
                    <div class="client-box">
                        <a href="#"><img src="frontend/images/demo-logistics-client-04.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div
                    class="col text-center border-end border-color-transparent-dark-very-light sm-border-end-0 md-border-top transition-inner-all pt-45px pb-45px sm-pt-30px sm-pb-30px">
                    <div class="client-box">
                        <a href="#"><img src="frontend/images/demo-logistics-client-05.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div
                    class="col text-center border-end border-color-transparent-dark-very-light sm-border-end-0 md-border-top transition-inner-all pt-45px pb-45px sm-pt-30px sm-pb-30px">
                    <div class="client-box">
                        <a href="#"><img src="frontend/images/demo-logistics-client-06.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
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
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            <div class="services-box-icon">
                                                <i class="line-icon-Gears icon-double-large text-base-color mb-25px"></i>
                                            </div>
                                            <div class="services-box-content">
                                                <a href="our-services.html"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Engineering</a>
                                                <p class="mb-15px">Lorem ipsum consetetur adipicing elit eiusmod tempor
                                                    incididunt.</p>
                                                <a href="our-services.html"
                                                    class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url(frontend/images/img/003.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            <div class="services-box-icon">
                                                <i
                                                    class="line-icon-Engineering icon-double-large text-base-color mb-25px"></i>
                                            </div>
                                            <div class="services-box-content">
                                                <a href="our-services.html"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Manufacturing
                                                    Machine Services</a>
                                                <p class="mb-15px">Lorem ipsum consetetur adipicing.</p>
                                                <a href="our-services.html"
                                                    class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url(frontend/images/img/006.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            <div class="services-box-icon">
                                                <i class="line-icon-Dropbox icon-double-large text-base-color mb-25px"></i>
                                            </div>
                                            <div class="services-box-content">
                                                <a href="our-services.html"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Procurement
                                                    of spare parts and materials</a>
                                                <p class="mb-15px">Lorem ipsum</p>
                                                <a href="our-services.html"
                                                    class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url(frontend/images/img/005.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="row g-0 services-box-style-02">
                                        <div
                                            class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                            <div class="services-box-icon">
                                                <i
                                                    class="line-icon-Computer icon-double-large text-base-color mb-25px"></i>
                                            </div>
                                            <div class="services-box-content">
                                                <a href="our-services.html"
                                                    class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">
                                                    IT consultant.</a>
                                                <p class="mb-15px"> orem ipsum consetetur adipicing elit eiusmod tempor
                                                    incididunt.</p>
                                                <a href="our-services.html"
                                                    class="btn btn-extra-large thin btn-link text-dark-gray p-0">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 services-box-img xs-h-300px">
                                            <div class="h-100 cover-background"
                                                style="background-image: url(frontend/images/img/007.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!-- start section -->
    <section class="p-0 bg-base-color">
        <div class="container">
            <div class="row align-items-center justify-content-center g-0">
                <div class="col-auto d-flex align-items-center"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="frontend/images/img/008.webp" alt="" / class="xs-w-120px">
                    <div class="fs-22 last-paragraph-no-margin fw-500 text-white pt-15px pb-15px">
                        <p>Save your precious time and effort spent for finding a solution. <a href="contact-us.html"
                                class="text-decoration-line-bottom fw-700 text-white">Contact us now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-center mb-8 sm-mb-50px justify-content-md-center">
                <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-16 lh-22 fw-700 mb-10px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Why
                        choose us?</span>
                    <h2 class="text-dark-gray fw-700 mb-20px ls-minus-1px">Powerful features of warehouse.</h2>
                    <div class="row justify-content-center mb-25px">
                        <div class="col-12">
                            <div class="accordion accordion-style-02" id="accordion-style-02"
                                data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start accordion item -->
                                <div class="accordion-item active-accordion">
                                    <div class="accordion-header border-bottom">
                                        <a href="#" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-style-02-01" aria-expanded="true"
                                            data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title text-dark-gray sm-pe-0">
                                                <img src="https://via.placeholder.com/36x36" class="me-10px"
                                                    alt="">
                                                <span class="fw-600 fs-20">Cargo courier insurance</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom sm-pe-0">
                                            <p>Lorem ipsum is simply dummy text the printing industry. Dummy lorem ipsum
                                                has been the industry's standard.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom">
                                        <a href="#" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-style-02-02" aria-expanded="false"
                                            data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title text-dark-gray sm-pe-0">
                                                <img src="https://via.placeholder.com/36x36" class="me-10px"
                                                    alt="">
                                                <span class="fw-600 fs-20">Live online tracking system</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin border-bottom sm-pe-0">
                                            <p>Lorem ipsum is simply dummy text the printing industry. Dummy lorem ipsum
                                                has been the industry's standard.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-style-02-03" aria-expanded="false"
                                            data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title text-dark-gray sm-pe-0">
                                                <img src="https://via.placeholder.com/36x36" class="me-10px"
                                                    alt="">
                                                <span class="fw-600 fs-20">Delivered courier checking</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-03" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-body last-paragraph-no-margin sm-pe-0">
                                            <p>Lorem ipsum is simply dummy text the printing industry. Dummy lorem ipsum
                                                has been the industry's standard.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="our-services.html"
                            class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-15px">
                            <span>
                                <span class="btn-text">Explore more</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                        <a href="contact-us.html"
                            class="btn btn-large btn-transparent-light-gray btn-hover-animation-switch btn-round-edge sm-mb-15px sm-mt-15px">
                            <span>
                                <span class="btn-text">Get a quote</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative">
                    <div class="w-80 ms-auto" data-animation-delay="500" data-shadow-animation="true"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="frontend/images/img/006.jpg" alt="" class="border-radius-10px w-100">
                    </div>
                    <div class="w-60 overflow-hidden position-absolute left-15px bottom-20px" data-shadow-animation="true"
                        data-animation-delay="500" data-bottom-top="transform: translateY(-20px)"
                        data-top-bottom="transform: translateY(50px)">
                        <img src="frontend/images/img/005.jpg" alt=""
                            class="border-radius-10px box-shadow-quadruple-large" />
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center counter-style-07"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start counter item -->
                <div class="col text-center md-mb-50px xs-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                        data-to="4586">
                        <span class="text-highlight position-absolute bottom-13px w-100"><span
                                class="bg-base-color h-10px opacity-7"></span></span>
                    </h2>
                    <span class="d-block fw-600 text-dark-gray">Clients worldwide</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center md-mb-50px xs-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                        data-to="8583">
                        <span class="text-highlight position-absolute bottom-13px w-100"><span
                                class="bg-base-color h-10px opacity-7"></span></span>
                    </h2>
                    <span class="d-block fw-600 text-dark-gray">Delivered goods</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center xs-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                        data-to="9548">
                        <span class="text-highlight position-absolute bottom-13px w-100"><span
                                class="bg-base-color h-10px opacity-7"></span></span>
                    </h2>
                    <span class="d-block fw-600 text-dark-gray">Miles driven</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0"
                        data-to="1236">
                        <span class="text-highlight position-absolute bottom-13px w-100"><span
                                class="bg-base-color h-10px opacity-7"></span></span>
                    </h2>
                    <span class="d-block fw-600 text-dark-gray">Employee working</span>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="cover-background" style="background-image: url(frontend/images/img/002.jpg)">
        <div class="opacity-extra-medium bg-dark-gray d-xl-none d-block"></div>
        <div class="container position-relative z-index-1">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10"
                    data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-16 lh-22 fw-600 mb-15px d-inline-block text-uppercase text-white border-bottom border-2 border-color-base-color xs-border-bottom-0">A
                        few good reasons</span>
                    <h2 class="fw-600 text-white">Here is what our clients have to say.</h2>
                    <div class="swiper position-relative"
                        data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                        <div class="swiper-wrapper mb-40px">
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="text-white opacity-7 w-80 lg-w-100">Love the theme, really neat and super
                                    easy
                                    to use. But the customer support is what makes this an even greater theme! ThemeZaa
                                    solved all the problems. I had with my custom settings.</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src="https://via.placeholder.com/270x245"
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-white fs-20">Alexander harvard</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="text-white opacity-7 w-80 lg-w-100">I've purchased several themes over the
                                    years and this theme, by far is absolutely amazing. It's built extremely well the
                                    back end was well thought out the design options are endless.</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src="https://via.placeholder.com/270x245"
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-white fs-20">Shoko mugikura</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="text-white opacity-7 w-80 lg-w-100">The theme is very valid and offers many
                                    possibilities of customization to adapt it to your needs, but the thing I got the
                                    most out of it was the relationship with the support team.</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src="https://via.placeholder.com/270x245"
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-white fs-20">Leonel mooney</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <div class="d-flex">
                            <!-- start slider navigation -->
                            <div
                                class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white-transparent-extra-light">
                                <i class="bi bi-arrow-left-short text-white icon-very-medium"></i>
                            </div>
                            <div
                                class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white-transparent-extra-light">
                                <i class="bi bi-arrow-right-short text-white icon-very-medium"></i>
                            </div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 md-mb-30px p-0">
                    <div class="h-100 md-h-400px xs-h-300px cover-background background-position-right"
                        style="background-image: url(frontend/images/img/010.png)"></div>
                </div>
                <div class="col-xl-5 col-lg-6 ps-70px lg-ps-15px"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Logistic
                        services features</span>
                    <h2 class="fw-700 text-dark-gray ls-minus-1px mb-20px w-80 xxl-w-100">We are the best service
                        provide in all parts of the worldwide.</h2>
                    <p class="w-75 xxl-w-100 mb-30px">We have more than 20 years of experience in import-export and
                        logistics services. 2020 is the year we are finally in all countries in the all over world!</p>
                    <div>
                        <a href="our-services.html"
                            class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-15px">
                            <span>
                                <span class="btn-text">Explore more</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                        <a href="contact-us.html"
                            class="btn btn-large btn-transparent-light-gray btn-hover-animation-switch btn-round-edge sm-mb-15px sm-mt-15px">
                            <span>
                                <span class="btn-text">Get a quote</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
