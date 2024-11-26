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
                    <h1 class="text-white fw-700 mb-5px">Contact</h1>
                    {{-- <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">let's working together</h2> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start section -->
    <section>
        <div class="container overlap-section overlap-section-three-fourth"
            data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <div class="row row-cols-md-1 justify-content-center">
                <div class="col-xl-10">
                    <div class="bg-very-light-gray p-8 border-radius-10px">
                        <div class="row">
                            <div class="col-12 text-center mb-6">
                                <span
                                    class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Get
                                    in touch with us</span>
                                <h2 class="text-dark-gray mb-0 fw-700 ls-minus-1px">How we can help you?</h2>
                            </div>
                        </div>
                        <!-- start contact form -->
                        <form action="{{ route('contact.store') }}" method="POST" class="row contact-form-style-01">
                            @csrf
                            <!-- Nama -->
                            <div class="col-md-6 mb-20px">
                                <div class="position-relative form-group">
                                    <span class="form-icon"><i class="bi bi-person"></i></span>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        name="name" placeholder="Your name*" value="{{ old('name') }}" />
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Perusahaan -->
                            <div class="col-md-6 mb-20px">
                                <div class="position-relative form-group">
                                    <span class="form-icon"><i class="bi bi-building"></i></span>
                                    <input class="form-control @error('company') is-invalid @enderror" type="text"
                                        name="company" placeholder="Your company*" value="{{ old('company') }}" />
                                    @error('company')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Nomor Telepon -->
                            <div class="col-md-6 mb-20px">
                                <div class="position-relative form-group">
                                    <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="tel"
                                        name="phone" placeholder="Your phone*" value="{{ old('phone') }}" />
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-20px">
                                <div class="position-relative form-group">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        name="email" placeholder="Your email address*" value="{{ old('email') }}" />
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Subjek -->
                            <div class="col-md-12 mb-20px">
                                <div class="position-relative form-group">
                                    <span class="form-icon"><i class="bi bi-journals"></i></span>
                                    <input class="form-control @error('subject') is-invalid @enderror" type="text"
                                        name="subject" placeholder="Your subject" value="{{ old('subject') }}" />
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Pesan -->
                            <div class="col-md-12 mb-30px">
                                <div class="position-relative form-group form-textarea">
                                    <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                    <textarea class="form-control @error('message') is-invalid @enderror" cols="40" rows="4" name="message"
                                        placeholder="Your message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Captcha -->
                            <div class="col-md-6 mb-20px">
                                <div class="position-relative form-group">
                                    {{-- <span class="form-icon"><i class="bi bi-shield-check"></i></span> --}}
                                    <div class="mt-6">
                                        <img src="{{ captcha_src() }}" alt="Captcha"
                                            onclick="this.src='{{ captcha_src() }}?'+Math.random()" class="captcha-img" />
                                        <small class="text-muted d-block mt-1">Click the image to refresh</small>
                                    </div>
                                    <input class="form-control @error('captcha') is-invalid @enderror" type="text"
                                        name="captcha" id="captcha" placeholder="Enter the captcha*" />
                                    @error('captcha')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        <br>
                                    @enderror

                                </div>
                            </div>

                            <!-- Honeypot -->
                            <input type="text" name="position" style="display: none;" value="">

                            <!-- Tombol Submit -->


                            <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                                <p class="text-center text-md-start fs-16 lh-24">We are committed to protecting your
                                    privacy. We will never collect information about you without your explicit consent.</p>
                            </div>
                            <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                                <button
                                    class="btn btn-large btn-dark-gray btn-box-shadow btn-round-edge btn-switch-text left-icon"
                                    type="submit">
                                    <span>
                                        <span><i class="feather icon-feather-mail"></i></span>
                                        <span class="btn-double-text" data-text="Send message">Send message</span>
                                    </span>
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="form-results mt-20px d-none"></div>
                            </div>

                            <!-- Pesan Hasil -->
                            @if (session('success'))
                                <div class="col-12 mt-20px">
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                </div>
                            @endif
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
