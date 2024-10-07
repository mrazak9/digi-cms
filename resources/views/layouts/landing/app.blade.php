<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>@yield('title', config('app.seo.default_title'))</title>
    <meta name="description" content="@yield('description', config('app.seo.default_meta_description'))">
    <meta name="keywords"
        content="Engineering, Manufacturing machine services, Procurement of spare parts and materials, IT consultant">
    <meta name="author" content="PT Digi Tekno Indonesia">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="frontend/images/favicon.png">
    <link rel="apple-touch-icon" href="frontend/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="frontend/css/vendors.min.css" />
    <link rel="stylesheet" href="frontend/css/icon.min.css" />
    <link rel="stylesheet" href="frontend/css/style.css" />
    <link rel="stylesheet" href="frontend/css/responsive.css" />
    <link rel="stylesheet" href="frontend/css/template.css" />
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    @include('component.landing.header')
    <!-- end header -->

    <!-- start content -->
    @yield('content')
    <!-- end content -->

    <!-- start footer -->
    @include('component.landing.footer')
    <!-- end footer -->

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="frontend/js/jquery.js"></script>
    <script type="text/javascript" src="frontend/js/vendors.min.js"></script>
    <script type="text/javascript" src="frontend/js/main.js"></script>
</body>

</html>
