   <header class="header-with-topbar">
       <div class="header-top-bar top-bar-dark bg-dark">
           <div class="container-fluid">
               <div class="row h-45px align-items-center m-0">
                   <div class="col-12 col-lg-7 fw-500 justify-content-lg-start justify-content-center">
                       <span class="me-25px fs-15 md-m-0">
                           <i class="feather icon-feather-phone-call text-base-color me-10px"></i><span
                               class="text-light-gray">Phone: {{ $gen_setting['contact_wa'] }} - Any time 24/7</span>
                       </span>
                       <span class="d-xl-inline-block d-none fs-15"><i
                               class="feather icon-feather-mail text-base-color me-10px"></i><a
                               href="mailto:{{ $gen_setting['contact_email'] }}"
                               class="widget text-light-gray text-white-hover">{{ $gen_setting['contact_email'] }}</a></span>
                   </div>
                   <div class="col-md-5 text-end d-none d-lg-flex fs-15">
                       @foreach ($socialMedia as $media)
                           <a href="{{ $media->url }}" target="_blank"
                               class="me-25px lg-me-15px">{{ $media->name }}</a>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
       <!-- start navigation -->
       <nav class="navbar navbar-expand-lg header-light bg-white header-reverse" data-header-hover="light">
           <div class="container-fluid">
               <div class="col-auto">
                   <a class="navbar-brand" href="index.html">
                       <img src="{{ asset('storage/' . $gen_setting['profil_company_logo'] ?? '') }}" alt=""
                           class="default-logo">
                       <img src="{{ asset('storage/' . $gen_setting['profil_company_logo'] ?? '') }}" alt=""
                           class="alt-logo">
                       <img src="{{ asset('storage/' . $gen_setting['profil_company_logo'] ?? '') }}" alt=""
                           class="mobile-logo">
                   </a>
               </div>
               <div class="col-auto menu-order left-nav">
                   <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                       data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                       <span class="navbar-toggler-line"></span>
                       <span class="navbar-toggler-line"></span>
                       <span class="navbar-toggler-line"></span>
                       <span class="navbar-toggler-line"></span>
                   </button>
                   <div class="collapse navbar-collapse justify-content-center" id="navbarNav">


                       <ul class="navbar-nav">
                           @foreach ($menu_setting as $menu_set)
                               @if ($menu_set->submenus->count())
                                   <li class="nav-item dropdown dropdown-with-icon-style02">
                                       <a href="/{{ $menu_set->slug_page }}" class="nav-link">
                                           {{ $menu_set->menu_name }}
                                       </a>
                                       <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                           role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                       <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                           @if ($menu_set->posts->isNotEmpty())
                                               <ul class="submenu">
                                                   @foreach ($menu_set->posts as $post)
                                                       <li><a href="/{{ $post->slug }}">
                                                               {{ $post->title }}
                                                           </a></li>
                                                   @endforeach
                                               </ul>
                                           @else
                                               @foreach ($menu_set->submenus as $submenu)
                                                   @if (Str::contains($submenu->slug_page, 'http'))
                                                       <li class="nav-item"><a class="dropdown-item"
                                                               href="{{ $submenu->slug_page }}"
                                                               target="blank">{{ $submenu->menu_name }}</a>
                                                       </li>
                                                   @else
                                                       <li class="nav-item"><a class="dropdown-item"
                                                               href="/{{ $submenu->slug_page }}">{{ $submenu->menu_name }}</a>
                                                       </li>
                                                   @endif
                                               @endforeach
                                           @endif

                                       </ul>
                                   </li>
                               @else
                                   <li class="nav-item">
                                       <a href="/{{ $menu_set->slug_page }}"
                                           class="nav-link">{{ $menu_set->menu_name }}</a>
                                   </li>
                               @endif
                           @endforeach
                       </ul>
                   </div>
               </div>
               <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
                   <div class="header-icon">
                       <div class="d-none d-xl-inline-block">
                           <div class="fw-600"><a href="tel:{{ $gen_setting['contact_wa'] }}" class="widget-text"><i
                                       class="feather icon-feather-phone-call me-10px"></i>{{ $gen_setting['contact_wa'] }}</a>
                           </div>
                       </div>
                       {{-- <div class="header-button ms-25px">
                           <a href="contact-us.html"
                               class="btn btn-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left">
                               <span>
                                   <span class="btn-text">{{ $gen_setting['contact_wa'] }}</span>
                                   <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                   <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                               </span>
                           </a>
                       </div> --}}
                   </div>
               </div>
           </div>
       </nav>
       <!-- end navigation -->
   </header>
