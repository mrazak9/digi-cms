@extends('layouts.landing.app')

@section('title', 'About Us')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0"
        style="background-image: url(frontend/images/img/003.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-5 col-sm-8 page-title-double-large text-center"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-white fw-700 mb-5px">About us</h1>
                    <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">Let's see who we are</h2>
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
                    <h4 class="text-dark-gray fw-700 ls-minus-1px mb-20px d-block">ABOUT DIGI</h4>

                    <p>PT Digi Tekno Indonesia was established in 2022 which is located at Summarecon Gedebage
                        Bandung West Java.
                        <br>
                        <br>
                        PT Digi Tekno Indonesia consists of an innovative, dedicated and intelligent team to help
                        businesses
                        make operations easier and faster,thereby increasing profitability.
                        <br>
                        <br>
                        We focus on providing competitive advantages for customers with our technology and can grow
                        businesses with optimal resources. This will result in satisfaction for the community with good
                        and
                        safe services

                    </p>
                    <img src="images/img/002.jpg" class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px"
                        alt="">

                    <div class="row row-cols-1 row-cols-md-2 mb-30px md-mb-15px">

                        <span class="fs-22 text-dark-gray fw-700 mb-10px d-block">LEGALITY</span>
                        <div class="w-90 sm-w-100 " style="display: grid; grid-template-columns: auto auto; gap: 10px;">
                            <div>Akta Notaris</div>
                            <div>: No. 1 Tanggal 27 Juni 2022</div>

                            <div>Kep. Men Hukum & HAM</div>
                            <div>: AHU-00124.AH.02.01 Tahun 2020</div>

                            <div>NPWP</div>
                            <div>: 60.026.440.2-429.000</div>

                            <div>NIB</div>
                            <div>: 0407220023276</div>

                            <div>PKP</div>
                            <div>: S-657/PKP/KPP.090303/2022</div>
                        </div>
                    </div>

                    <div class="cover-background p-7 border-radius-6px mb-60px md-mb-40px d-flex justify-content-end align-items-end sm-h-500px"
                        style="background-image: url(frontend/images/img/004.jpg)">
                        <div
                            class="bg-white box-shadow-quadruple-large border-radius-4px w-50 lg-w-55 sm-w-100 overflow-hidden">
                            <div class="p-40px lg-p-25px last-paragraph-no-margin">
                                <span class="fs-22 text-dark-gray fw-700 mb-10px d-block">We Make Your Business Better
                                    the Other
                                </span>
                                <p>PT Digi Tekno Indonesia is a company engaged in engineering, manufacturing machine
                                    services, procurement of spare parts and materials and IT consultant
                                    <br>
                                    We are committed to providing the best service and product quality for you.
                                </p>
                            </div>
                            <div class="bg-base-color p-15px text-center">
                                <a href="contact-us.html" class="text-white text-dark-gray-hover fw-600"><i
                                        class="feather icon-feather-mail me-10px"></i>Talk with our team</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-dark-gray fw-700 mb-40px lg-mb-30px d-block">
                        VISION & MISSION
                    </h4>
                    <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">
                        <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span
                                class="fw-600 text-dark-gray">VISION : </span>To be an innovative, high-performance,
                            independent, professional, committed and responsible company in technology,
                            industry and engineering.
                        </p>
                        <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span
                                class="fw-600 text-dark-gray">MISSION : </span><br>
                            Provide the best solutions and products as needed;<br>
                            Establishing cooperation and good relations with business and work partners;<br>
                            Develop human resources, facilities and processes to create high quality products; <br>
                            Paying attention to health, safety and environmental protection;<br>
                            Produce products with high quality;
                        </p>

                    </div>
                    <div class="row align-items-center g-0">
                        <div class="col-auto d-block d-sm-flex align-items-center text-center text-sm-start">
                            <img src="images/img/008.webp" alt="" />
                            <div class="fw-500 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                                <p>Save your time and effort spent for finding a solution. <a href="contact-us.html"
                                        class="text-decoration-line-bottom fw-700 text-dark-gray">Contact us now</a></p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4 class="text-dark-gray fw-700 mb-40px lg-mb-30px d-block">
                        Our Division
                    </h4>
                    <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">
                        <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span
                                class="fw-600 text-dark-gray">Engineering Division : </span> <br>
                            We are ready to assist in the procurement, fabrication and mechanical support of industrial
                            components either in the
                            form of finished components or in the form of raw materials or materials. These materials
                            can be materials from within the country and abroad
                        </p>
                        <p class="p-30px border-bottom border-1 border-color-extra-medium-gray mb-0"><span
                                class="fw-600 text-dark-gray">Infromation Technology Division : </span><br>
                            Development of management information system (MIS) software and websites
                            for your business with web-based technology that can provide accurate information.
                            Each software we develop has several advantages and features that can
                            make it easier for you to run your business. The available software can also be
                            customized according to your needs.
                            We are also ready to assist the in the procurement of
                            IT products, network system with the installation
                        </p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <i class="bi bi-patch-check-fill text-base-color icon-very-medium me-10px"></i>
                    <span class="fs-22 fw-500 text-dark-gray">We are committed to providing <span
                            class="text-decoration-line-bottom text-dark-gray fw-700">cost-effective solutions</span> to
                        all of our clients.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="position-relative overflow-hidden overlap-height pb-0">
        <img src="images/demo-logistics-about-04.png" class="position-absolute left-150px top-50px z-index-minus-1"
            alt="" data-bottom-top="transform: translate3d(80px, 0px, 0px);"
            data-top-bottom="transform: translate3d(-380px, 0px, 0px);" />
        <img src="images/demo-logistics-about-03.png" class="position-absolute right-100px top-50px z-index-minus-1"
            alt="" data-bottom-top="transform:scale(1.4, 1.4) translate3d(0px, 0px, 0px);"
            data-top-bottom="transform:scale(1, 1) translate3d(-300px, 0px, 0px);" />
        <div class="container overlap-gap-section">
            <div class="row align-items-center justify-content-lg-start justify-content-center text-lg-start text-center">
                <div class="col-lg-6 col-md-10 md-mb-50px">
                    <figure class="position-relative m-0 md-w-95 xs-w-90">
                        <img src="https://via.placeholder.com/525x590" class="w-90 border-radius-8px" alt="">
                        <figcaption
                            class="position-absolute bg-dark-gray border-radius-10px box-shadow-quadruple-large bottom-100px xs-bottom-minus-10px right-minus-30px w-240px xs-w-200px text-center last-paragraph-no-margin animation-float">
                            <div class="bg-white pt-35px pb-35px xs-p-20px border-radius-8px mb-10px">
                                <h2 class="fw-700 ls-minus-2px text-dark-gray mb-0">4.9</h2>
                                <div class="text-golden-yellow fs-18 ls-2px mb-5px">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <span class="text-dark-gray d-block fw-600 ls-minus-05px">3488 Reviews</span>
                                <div
                                    class="d-inline-block fs-11 text-uppercase bg-jungle-green ps-20px pe-20px lh-30 fw-600 text-white border-radius-100px box-shadow-large">
                                    Excellent score</div>
                            </div>
                            <img src="images/demo-real-estate-trustpilot.svg" class="h-30px mb-15px" alt="" />
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-5 col-md-10 offset-lg-1"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">A
                        few good reasons</span>
                    <h2 class="fw-700 text-dark-gray ls-minus-1px">Here is what our clients have to say.</h2>
                    <div class="swiper position-relative"
                        data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                        <div class="swiper-wrapper mb-40px">
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 lg-w-100">Love the theme, really neat and super easy to use. But the
                                    customer support is what makes this an even greater theme! ThemeZaa solved all the
                                    problems. I had with my custom settings.</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src="https://via.placeholder.com/270x245" alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray fw-600 fs-20">Alexander harvard</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 lg-w-100">I've purchased several themes over the years and this theme, by
                                    far is absolutely amazing. It's built extremely well the back end was well thought
                                    out the design options are endless.</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src="https://via.placeholder.com/270x245"
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray fw-600 fs-20">Shoko mugikura</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 lg-w-100">The theme is very valid and offers many possibilities of
                                    customization to adapt it to your needs, but the thing I got the most out of it was
                                    the relationship with the support team.</p>
                                <div class="mt-20px">
                                    <img class="w-110px me-15px" src="https://via.placeholder.com/270x245"
                                        alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray fw-600 fs-20">Leonel mooney</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <div class="d-flex justify-content-lg-start justify-content-center">
                            <!-- start slider navigation -->
                            <div
                                class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray">
                                <i class="fa-solid fa-arrow-left text-dark-gray icon-small"></i>
                            </div>
                            <div
                                class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray">
                                <i class="fa-solid fa-arrow-right text-dark-gray icon-small"></i>
                            </div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 clients-style-04 justify-content-center"
                data-anime='{"opacity": [0,1], "duration": 400, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col text-center transition-inner-all lg-mb-30px">
                    <div class="client-box">
                        <a href="#"><img src="images/demo-logistics-client-01.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center transition-inner-all lg-mb-30px">
                    <div class="client-box">
                        <a href="#"><img src="images/demo-logistics-client-02.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center transition-inner-all lg-mb-30px">
                    <div class="client-box">
                        <a href="#"><img src="images/demo-logistics-client-03.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center transition-inner-all sm-mb-30px">
                    <div class="client-box">
                        <a href="#"><img src="images/demo-logistics-client-04.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col text-center transition-inner-all">
                    <div class="client-box">
                        <a href="#"><img src="images/demo-logistics-client-05.svg" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
