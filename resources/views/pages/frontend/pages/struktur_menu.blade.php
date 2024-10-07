@extends('layouts.landing.app')

@section('title', $page->seo_title)
@section('seoTitle', $page->seo_title)
@section('seoMetaDescription', $page->seo_meta_description)


@section('main')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white"
        data-image-src="{{ asset('storage/' . $page->banner) }}" style="max-height: 400px">
        <div class="container pt-10 pb-20 pt-md-10 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3 text-white">{{ $page->title }}</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <div class="row mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                    <div class="card ">
                        <div class="card-header">
                            <h2 class="text-center">Struktur Menu</h2>
                        </div>
                        <!-- resources/views/menu/show.blade.php -->
                        <!-- resources/views/menu/show.blade.php -->
                        <div class="col-6 mx-auto">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    @foreach ($menus as $menu)
                                        <li>
                                            <a href="{{ $menu->slug_page ?? '#' }}"
                                                class="btn btn-primary d-block mb-2">{{ $menu->menu_name }}</a>
                                            @if (count($menu->submenus) > 0)
                                                @php
                                                    $sortedSubmenus = collect($menu->submenus)
                                                        ->sortBy('id')
                                                        ->all();
                                                @endphp
                                                <ul class="list-unstyled">
                                                    @foreach ($sortedSubmenus as $submenu)
                                                        <li>
                                                            <a href="{{ $submenu->slug_page }}"
                                                                class="btn
                                                                d-block mb-2">{{ $submenu->menu_name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

@endsection
