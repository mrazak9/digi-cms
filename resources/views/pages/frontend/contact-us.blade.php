@extends('layouts.landing.app')

@section('title', 'Contact Us')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0"
        style="background-image: url(frontend/images/img/006.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-5 col-sm-8 page-title-double-large text-center"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-white fw-700 mb-5px">Contact us</h1>
                    <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">let's working together</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 md-mb-40px"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                    <div class="position-sticky top-120px md-top-0px md-position-relative">
                        <span
                            class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Get
                            to know us</span>
                        <h2 class="text-dark-gray mb-20px fw-700 ls-minus-1px">Contact us.
                        </h2>
                        <p class="mb-35px w-90 lg-w-100 sm-mb-25px">We are committed to providing the best service
                            and product quality for you.
                        </p>
                        {{-- <a href="#"
                            class="btn btn-large btn-switch-text btn-dark-gray left-icon btn-box-shadow btn-round-edge">
                            <span>
                                <span><i class="bi bi-telephone-outbound"></i></span>
                                <span class="btn-double-text" data-text="Schedule a call">Schedule a call</span>
                            </span>
                        </a> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1">
                    <div class="row row-cols-1 justify-content-center"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start services box item -->
                        <div class="col services-box-style-02 mb-30px">
                            <div class="row g-0 box-shadow-quadruple-large border-radius-6px overflow-hidden">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="h-100 cover-background xs-h-300px"
                                        style="background-image: url({{ 'storage/' . $gen_setting['contact_image'] }})">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 bg-white box-shadow-extra-large p-30px">
                                    <div class="services-box-content last-paragraph-no-margin">
                                        <span class="d-block text-dark-gray fw-700 fs-19 mb-10px">Office Address</span>
                                        <p>{{ $gen_setting['contact_alamat'] }}</p>
                                        <a href="{{ $gen_setting['contact_map'] }}"
                                            class="fs-17 lh-22 fw-500 text-dark-gray text-decoration-line-bottom d-inline-block mb-25px">View
                                            on map</a>
                                        <div class="text-dark-gray fw-600"><i
                                                class="feather icon-feather-phone-call icon-small me-10px text-dark-gray"></i><a
                                                href="tel:{{ $gen_setting['contact_wa'] }}">{{ $gen_setting['contact_wa'] }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end services box item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0 justify-content-center">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.439885644722!2d107.68603877577287!3d-6.9573242681177225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c3bfb83e9291%3A0xed8f150d943fe83d!2sPT%20Digi%20Tekno%20Indonesia!5e0!3m2!1sid!2sid!4v1724989633735!5m2!1sid!2sid"
                        width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
