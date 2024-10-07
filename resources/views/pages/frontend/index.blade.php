@extends('layouts.landing.app')

@section('title', 'Beranda')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <!-- start slider -->
    <section class="p-0 top-space-margin full-screen md-h-600px sm-h-650px">
        <div class="swiper h-100 swiper-light-pagination"
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
    {{-- <section class="p-0 bg-base-color">
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
    </section> --}}
    <!-- end section -->
    <!-- start section -->
    {{-- <section>
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
    </section> --}}
    <!-- end section -->

    <!-- start section -->
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
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-walmart-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-netflix-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-invision-dark-blue.svg"
                                    alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-yahoo-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-amazon-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-walmart-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-netflix-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-invision-dark-blue.svg"
                                    alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-yahoo-dark-blue.svg" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="frontend/images/logo-invision-dark-blue.svg"
                                    alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
