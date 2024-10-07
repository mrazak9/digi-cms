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
                    <h1 class="text-white fw-700 mb-5px">About us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="pb-70px">
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
        </div>
    </section>
    <!-- end section -->
@endsection
