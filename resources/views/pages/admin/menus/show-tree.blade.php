@extends('layouts.admin.app')

@section('title', 'Menu Setting')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Halaman</h1>
            </div>
        </section>

        <div class="col-12">

            <div class="card ">
                <div class="card-header">
                    <h4 class="mx-auto">Struktur Menu</h4>
                </div>
                <!-- resources/views/menu/show.blade.php -->
                <!-- resources/views/menu/show.blade.php -->
                <div class="col-6 mx-auto">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            @foreach ($menus as $menu)
                                <li>
                                    <a href="#" class="btn btn-primary d-block mb-2">{{ $menu->menu_name }}</a>
                                    @if (count($menu->submenus) > 0)
                                        <ul class="list-unstyled">
                                            @foreach ($menu->submenus as $submenu)
                                                <li>
                                                    <a href="#"
                                                        class="btn btn-light d-block mb-2">{{ $submenu->menu_name }}</a>
                                                    @if (count($submenu->submenus) > 0)
                                                        <!-- Lanjutkan rekursi di sini jika diperlukan -->
                                                    @endif
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
    </div>
@endsection
