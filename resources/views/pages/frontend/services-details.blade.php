@extends('layouts.landing.app')

@section('title', 'Service Detail')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0"
        style="background-image: url(https://via.placeholder.com/1920x410)">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-5 col-sm-8 page-title-double-large text-center"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-base-color fw-700 mb-5px">Engineering</h1>
                    <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">Engineering Services</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="bg-very-light-gray border-radius-6px p-45px lg-p-25px mb-25px">
                        <span class="fs-22 text-dark-gray fw-600 mb-20px d-inline-block">Professional services</span>
                        <ul class="p-0 m-0 list-style-02 fw-500">
                            <li class="pb-5px mb-10px border-bottom border-color-transparent-dark"><a
                                    href="services-details.html">Engineering</a><i
                                    class="feather icon-feather-arrow-right ms-auto icon-small"></i></li>
                            <li class="pb-5px mb-10px border-bottom border-color-transparent-dark text-dark-gray"><a
                                    href="services-details.html" class="text-dark-gray text-dark-gray-hover">Manufacturing
                                    machine services</a><i class="feather icon-feather-arrow-right ms-auto icon-small"></i>
                            </li>
                            <li class="pb-5px mb-10px border-bottom border-color-transparent-dark"><a
                                    href="services-details.html">Procurement of spare parts and materials</a><i
                                    class="feather icon-feather-arrow-right ms-auto icon-small"></i></li>
                            <li class="pb-5px mb-10px border-bottom border-color-transparent-dark"><a
                                    href="services-details.html">IT consultant</a><i
                                    class="feather icon-feather-arrow-right ms-auto icon-small"></i></li>

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
                    <div class="bg-very-light-gray border-radius-6px p-40px lg-p-25px md-p-35px">
                        <span class="fs-20 text-white fw-600 mb-25px d-inline-block">Get a free consultation?</span>
                        <div class="contact-form-style-01 mt-0">
                            <!-- start contact form -->
                            <form action="email-templates/contact-form.php" method="post">
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                    <input type="text" name="name"
                                        class="form-control border-white box-shadow-large required"
                                        placeholder="Your name*" />
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email"
                                        class="form-control border-white box-shadow-large required"
                                        placeholder="Your email address*" />
                                </div>
                                <div class="position-relative form-group form-textarea">
                                    <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                    <textarea placeholder="Your message" name="comment" class="form-control border-white box-shadow-large" rows="3"></textarea>
                                    <input type="hidden" name="redirect" value="">
                                    <button
                                        class="btn btn-large btn-round-edge btn-dark-gray btn-box-shadow mt-20px submit w-100"
                                        type="submit">Send message</button>
                                    <div class="mt-20px form-results d-none"></div>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2 md-mb-50px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h4 class="text-dark-gray fw-700 ls-minus-1px mb-20px d-block">Engineering services</h4>
                    <p>PT Digi Tekno Indonesia's products and services can be used in a wide variety of industries and
                        businesses. We can
                        customize our products according to your needs.
                        .</p>
                    <img src="https://via.placeholder.com/785x435"
                        class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px" alt="">
                    <div class="row row-cols-1 row-cols-md-2 mb-30px md-mb-15px">
                        <div class="col">
                            <span class="fs-22 text-dark-gray fw-700 mb-10px d-block">Full container load
                                shipping</span>
                            <p class="w-90 sm-w-100">Lorem ipsum dolor amet consectetur adipiscing elit sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="col">
                            <span class="fs-22 text-dark-gray fw-700 mb-10px d-block">Less than container load
                                shipping</span>
                            <p class="w-90 sm-w-100">Lorem ipsum dolor amet consectetur adipiscing elit sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                    <div class="cover-background p-7 border-radius-6px mb-60px md-mb-40px d-flex justify-content-end align-items-end sm-h-500px"
                        style="background-image: url(https://via.placeholder.com/785x412)">
                        <div
                            class="bg-white box-shadow-quadruple-large border-radius-4px w-50 lg-w-55 sm-w-100 overflow-hidden">
                            <div class="p-40px lg-p-25px last-paragraph-no-margin">
                                <span class="fs-22 text-dark-gray fw-700 mb-10px d-block">Customs clearance</span>
                                <p>Lorem ipsum dolor sit amet conseetur adipiscing elit sed do eiusmod tempor incididunt
                                    ut labore magna aliqua.</p>
                            </div>
                            <div class="bg-base-color p-15px text-center">
                                <a href="contact-us.html" class="text-white text-white-hover fw-600"><i
                                        class="feather icon-feather-mail me-10px"></i>Talk with our team</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-dark-gray fw-700 mb-40px lg-mb-30px d-block">Benefits of working with us</h4>
                    <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">
                        <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span
                                class="fw-600 text-dark-gray">Great client service: </span>For reliable ocean freight
                            services that you can trust, partner with us for all your shipping needs.</p>
                        <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span
                                class="fw-600 text-dark-gray">Warehousing & distribution: </span>At our logistics
                            business, we prioritize customer satisfaction and strive to deliver your cargo on time and
                            within budget.</p>
                        <p class="p-30px mb-0"><span class="fw-600 text-dark-gray">Internal expertise: </span>Our team
                            of experienced professionals ensures that your shipments are handled with precision and
                            efficiency.</p>
                    </div>
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
