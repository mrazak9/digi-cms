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
    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row align-items-center align-items-xl-end justify-content-center mb-70px sm-mb-35px">

                <div class="col-lg-8 order-1 order-lg-2 md-mb-50px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h4 class="text-dark-gray fw-700 ls-minus-1px mb-20px d-block">{{ $page->title }}</h4>
                    <p>
                        {!! $page->content !!}
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center mb-70px md-mb-50px"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                @foreach ($posts as $post)
                    <div class="col mb-30px">
                        <!-- start services box style -->
                        <div
                            class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin">
                            <div class="position-relative">
                                <a href="/{{ $post->slug }}">
                                    <img src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                                        alt="{{ $post->title }}" />
                                </a>
                            </div>
                            <div>
                                <div class="p-30px w-80 xl-w-100 mx-auto text-center">
                                    <a href=" {{ $post->slug }}"
                                        class="d-inline-block fs-20 fw-600 text-dark-gray mb-5px">
                                        {{ $post->title }}
                                    </a>
                                </div>
                                <div
                                    class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                    <a href="/{{ $post->slug }}"
                                        class="btn btn-link btn-hover-animation-switch fw-700 btn-small text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end services box style -->
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <i class="bi bi-patch-check-fill text-base-color icon-very-medium me-10px"></i>
                    <span class="fs-22 fw-500 text-dark-gray">We also focus on providing services and solutions in your
                        business to <span class="text-decoration-line-bottom text-dark-gray fw-700">improve business
                            performance</span>.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
