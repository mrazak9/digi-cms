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
                    <h1 class="fs-170 sm-fs-150 text-dark-gray fw-700 ls-minus-6px">WOW!</h1>
                    <h4 class="text-dark-gray fw-600 sm-fs-22 mb-10px ls-minus-1px">Thank you for contacting us</h4>
                    <p class="mb-30px lh-28 sm-mb-30px">You are very important to us, all information received will always
                        remain confidential. We will contact you as soon as we review your message.</p>
                    <a href="/"
                        class="btn btn-large left-icon btn-rounded btn-dark-gray btn-box-shadow text-transform-none"><i
                            class="fa-solid fa-arrow-left"></i>Back to homepage</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
