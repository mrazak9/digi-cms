  <section class="p-0 top-space-margin full-screen md-h-600px sm-h-650px">
      <div class="swiper h-100 swiper-light-pagination"
          data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
          <div class="swiper-wrapper">
              <!-- start slider item -->
              @foreach ($sliders as $slider)
                  <div class="swiper-slide cover-background"
                      style="background-image:url('{{ asset('storage/' . $slider->slider_photo ?? '') }}');">
                      <div class="container h-100">
                          <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                              <div class="col-xxl-7 col-xl-10 text-white">
                                  <h1 class="fw-600">{{ $slider->text }}
                                  </h1>
                                  <div class="lg-mb-8 md-mb-0">
                                      <a href="/{{ $slider->button_url }}"
                                          class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">{{ $slider->button_text }}</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
              <!-- end slider item -->
          </div>
          <!-- start slider pagination -->
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-md-none">
          </div>
          <!-- end slider pagination -->
          <!-- start slider navigation -->
          <div
              class="slider-one-slide-prev-1 icon-very-medium text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
              <i class="bi bi-arrow-left-short"></i>
          </div>
          <div
              class="slider-one-slide-next-1 icon-very-medium text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
              <i class="bi bi-arrow-right-short"></i>
          </div>
          <!-- end slider navigation -->
      </div>
  </section>
