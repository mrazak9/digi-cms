<footer class="fs-17 footer-dark p-0 bg-dark-gray">
    <div class="container">
        <div class="row justify-content-center pt-6 sm-pt-40px text-sm-start text-center">
            <!-- start footer column -->
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 md-mb-30px">
                <a href="index.html" class="footer-logo mb-20px d-inline-block">
                    <img src="{{ asset('storage/' . $gen_setting['logo_footer'] ?? '') }}" alt="">
                </a>
                <p class="fs-17 mx-auto xs-w-90">{{ $gen_setting['text_footer_slogan'] }}</p>

            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-lg-4 col-md-3 col-sm-5 offset-xl-1 offset-md-0 offset-sm-1 md-mb-30px">
                <span class="fs-18 d-block text-white fw-500 mb-10px">{{ $gen_setting['text_footer_column_1'] }}</span>
                <ul>
                    @foreach ($service_links as $service)
                        <li><a href="{{ $service->slug }}">{{ $service->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-lg-4 col-md-4 col-sm-5 offset-md-0 offset-sm-1 order-5 order-md-3 xs-mb-30px">
                <span class="fs-18 d-block text-white fw-500 mb-10px">{{ $gen_setting['text_footer_column_2'] }}</span>
                <span class="d-block">Call us directly?</span>
                <a href="tel:{{ $gen_setting['contact_wa'] }}"
                    class="mb-15px d-inline-block">{{ $gen_setting['contact_wa'] }}</a>
                <span class="d-block">Need live support?</span>
                <a href="mailto:{{ $gen_setting['contact_email'] }}"
                    class="d-sm-inline-block d-block">{{ $gen_setting['contact_email'] }}</a>

            </div>
            <!-- end footer column -->

        </div>
        <div class="row justify-content-center align-items-center pt-5 md-pt-30px">
            <div class="col-12">
                <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
            </div>
            <div class="col-lg-9 pt-25px pb-25px fs-15 last-paragraph-no-margin text-center order-2 order-sm-1">
                <p style="text-align: center; font-size: 14px; color: #666;">
                    &copy; {{ date('Y') }} {{ $gen_setting['profil_company_name'] }} All rights reserved.
                </p>

            </div>
        </div>
    </div>
</footer>
