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
                    <h1 class="text-white fw-700 mb-5px">{{ $page->title }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start section -->
    <section class="pb-70px">
        <div class="container">
            <div class="col-lg-8 order-1 order-lg-2 md-mb-50px"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h4 class="text-dark-gray fw-700 ls-minus-1px mb-20px d-block">{{ $page->title }}</h4>
                <p>
                    {!! $page->content !!}
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 filter-content">
                    <ul
                        class="portfolio-boxed portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        @foreach ($patners as $patner)
                            <li class="grid-item selected digital web transition-inner-all">
                                <div class="portfolio-box border-radius-4px">
                                    <div class="portfolio-image border-radius-4px" style="padding-top: 10px">
                                        <img src="{{ asset('storage/' . $patner->logo) }}" alt="{{ $patner->name }}"
                                            style="max-height: 40px; max-width: fit-content" />
                                    </div>
                                    <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                        <div class="fs-14 lh-20 text-uppercase">{{ $patner->name }}</div>
                                        <a href="demo-digital-agency-single-project-minimal.html"
                                            class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">{{ $patner->description }}</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- end portfolio item -->

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
