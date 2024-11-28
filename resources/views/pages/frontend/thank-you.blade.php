@extends('layouts.landing.app')

@section('title', 'Contact Us')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <!-- start section -->
    <section class="cover-background full-screen ipad-top-space-margin md-h-550px" {{-- style="background-image: url(images/404-bg.jpg);" --}}>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 col-xl-6 col-lg-7 col-md-9 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="fs-170 sm-fs-150 text-dark-gray fw-700 ls-minus-6px">{{ $gen_setting['thank_text_1'] }}</h1>
                    <h4 class="text-dark-gray fw-600 sm-fs-22 mb-10px ls-minus-1px">{{ $gen_setting['thank_text_2'] }}</h4>
                    <p class="mb-30px lh-28 sm-mb-30px">{{ $gen_setting['thank_text_3'] }}</p>
                    <a href="/"
                        class="btn btn-large left-icon btn-rounded btn-dark-gray btn-box-shadow text-transform-none"><i
                            class="fa-solid fa-arrow-left"></i>Back to homepage</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
