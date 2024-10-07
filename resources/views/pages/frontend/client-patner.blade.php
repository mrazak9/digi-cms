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
                    <h1 class="text-white fw-700 mb-5px">Our Partners</h1>
                    <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">Let's see who we are</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <br>
    <section class="pt-0 ps-6 pe-6 xxl-ps-4 xxl-pe-4 lg-px-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- filter navigation -->
                    <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 fw-500 alt-font pb-5">
                        <li class="nav active"><a data-filter="*" href="#">All</a></li>
                        <li class="nav"><a data-filter=".selected" href="#">Selected</a></li>
                        <li class="nav"><a data-filter=".digital" href="#">Digital</a></li>
                        <li class="nav"><a data-filter=".branding" href="#">Branding</a></li>
                        <li class="nav"><a data-filter=".web" href="#">Web</a></li>
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 filter-content">
                    <ul
                        class="portfolio-boxed portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item selected digital web transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Branding</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Stream stones</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected web branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #636853;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Graphics</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Skoda corporate</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web digital transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #a17e67;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Photography</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Potato islands</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #926b6b;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Brochure</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Daimler financial</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web digital transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #a77e5a;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Packaging</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Pixflow branding</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected web branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #a2816f;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Portfolio</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Visionen book</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected web digital branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #567754;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Typography</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Crop identity</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected digital branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #42667f;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Digital</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Herbal beauty</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web digital transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #af6e6e;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Packaging</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Cortifiel look</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #989494;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Development</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Mass movie</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected digital branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #6c8d9f;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">E-commerce</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Truenorth web</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected digital branding transition-inner-all">
                            <div class="portfolio-box border-radius-4px">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="https://via.placeholder.com/800x635" alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="demo-digital-agency-single-project-minimal.html"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                                <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay bg-dark-gray" style="background-color: #5a6c45;"></div>
                                </div>
                                <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                    <div class="fs-14 lh-20 text-uppercase">Branding</div>
                                    <a href="demo-digital-agency-single-project-minimal.html"
                                        class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">Armchair mojo</a>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
