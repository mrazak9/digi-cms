@extends('layouts.landing.app')

@section('title', $page->seo_title)
@section('seoTitle', $page->seo_title)
@section('seoMetaDescription', $page->seo_meta_description)

@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0"
        style="background-image: url({{ asset('storage/' . $page->banner) }})">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-5 col-sm-8 page-title-double-large text-center"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-white fw-700 mb-5px">{{ $post->title }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start section -->
    <section>
        <div class="container">
            <div class="row">
                <!-- start sidebar list services -->
                <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="bg-very-light-gray border-radius-6px p-45px lg-p-25px mb-25px">
                        <span class="fs-22 text-dark-gray fw-600 mb-20px d-inline-block">Our Services</span>
                        <ul class="p-0 m-0 list-style-02 fw-500">
                            @foreach ($allpost as $item)
                                @php
                                    // Cek apakah slug dari item sama dengan URL saat ini
                                    $isActive = Request::path() == $item->slug;
                                @endphp

                                <li
                                    class="pb-5px mb-10px border-bottom border-color-transparent-dark {{ $isActive ? 'text-dark-gray' : '' }}">
                                    <a href="/{{ $item->slug }}"
                                        class="{{ $isActive ? 'text-dark-gray text-dark-gray-hover' : '' }}">
                                        {{ $item->title }}
                                    </a>
                                    <i class="feather icon-feather-arrow-right ms-auto icon-small"></i>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="bg-base-color border-radius-6px ps-35px pb-25px pt-25px lg-ps-25px mb-25px">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-65px h-65px me-20px lg-me-15px rounded-circle bg-white">
                                <i class="bi bi-telephone-outbound icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block text-white">Customer care?</span>
                                <a href="tel:1800222000" class="text-white fs-20 fw-700">1 800 222 000</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  end sidebar list services -->
                <div class="col-lg-8 order-1 order-lg-2 md-mb-50px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h4 class="text-dark-gray fw-700 ls-minus-1px mb-20px d-block">Engineering services</h4>
                    <img src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                        class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px" alt="">
                    <p>{!! $post->content !!}
                    </p>
                    <div class="row align-items-center g-0">
                        <div class="col-auto d-block d-sm-flex align-items-center text-center text-sm-start">
                            <img src="https://via.placeholder.com/152x68" alt="" />
                            <div class="fw-500 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                                <p>Save your time and effort spent for finding a solution. <a href="contact-us.html"
                                        class="text-decoration-line-bottom fw-700 text-dark-gray">Contact us now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
