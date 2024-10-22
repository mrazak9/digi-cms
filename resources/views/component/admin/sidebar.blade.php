<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/admin"><img src="{{ asset('storage/' . $gen_setting['logo'] ?? '') }}" alt="logo"
                    width="100px"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/admin"> <img src="{{ asset('img/logo1.png') }}" alt="logo" width="40"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a class="nav-link" href="/admin"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Settings</li>
            <li class="nav-item dropdown {{ $type_menu === 'General Settings' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-gear"></i> <span>Pengaturan
                        Umum</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/general-settings/footer') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('general-settings.show-type', ['type' => 'footer']) }}">Footer</a>
                    </li>
                    <li class="{{ Request::is('admin/footer*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('footer_columns.index') }}">Footer Link</a>
                    </li>
                    <li class="{{ Request::is('admin/general-settings/contact') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('general-settings.show-type', ['type' => 'contact']) }}">Kontak
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/general-settings/pengaduan') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('general-settings.show-type', ['type' => 'pengaduan']) }}">Kontak -
                            Pengaduan
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/general-settings/dinas_terkait') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('general-settings.show-type', ['type' => 'dinas_terkait']) }}">Home - Dinas
                            Terkait
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/general-settings/company_profil') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('general-settings.show-type', ['type' => 'profil']) }}">Home
                            - Company Profil
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/general-settings/other') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('general-settings.show-type', ['type' => 'other']) }}">Pengaturan
                            Lainnya
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'settings' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fa-solid fa-table"></i></i>
                    <span>Master</span></a>
                <ul class="dropdown-menu">
                    {{-- <li class="{{ Request::is('admin/settings*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('settings.index') }}">General Setting</a>
                    </li> --}}
                    <li class="{{ Request::is('admin/menus') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('menus.index') }}">Pengaturan Menu</a>
                    </li>
                    <li class="{{ Request::is('admin/footer*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('footer_columns.index') }}">Footer Column</a>
                    </li>
                    <li class="{{ Request::is('admin/social_media*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('social_medias.index') }}">Sosial Media</a>
                    </li>
                    <li class="{{ Request::is('admin/sliders*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('sliders.index') }}">Slider</a>
                    </li>
                    {{-- <li class="{{ Request::is('admin/food_prices*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('food_prices.index') }}">Harga Pangan</a>
                    </li> --}}
                    <li class="{{ Request::is('admin/patner*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('patners.index') }}">Data Patners</a>
                    </li>

                </ul>
            </li>
            {{-- <li class="{{ Request::is('faq') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('faqs.index') }}"><i class="far fa-square"></i> <span>FAQ
                        Page</span></a>
            </li> --}}
            <li class="nav-item dropdown {{ $type_menu === 'user_setting' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-users-gear"></i>
                    <span>Pengaturan Pengguna</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">Pengguna</a>
                    </li>
                    <li class="{{ Request::is('admin/permissions*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('permissions.index') }}">Hak Akses</a>
                    </li>
                    <li class="{{ Request::is('admin/roles*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('roles.index') }}">Peran</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'page' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-regular fa-file-lines"></i>
                    <span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('pages.index') }}">Semua Halaman</a>
                    </li>
                    @foreach ($pages as $page)
                        <li class="{{ Request::is('admin/pages/' . $page->id . '/edit') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('pages.edit', $page->id) }}">{{ $page->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="menu-header">Postingan</li>
            <li class="nav-item dropdown {{ $type_menu === 'post_settings' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i>
                    <span>Setting Post</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/posts-approval*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('posts.approval') }}">Konfirmasi Postingan</a>
                    </li>
                    <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('categories.index') }}">Kategori</a>
                    </li>
                    <li class="{{ Request::is('admin/types*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('types.index') }}">Jenis Postingan</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ $type_menu === 'post' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i>
                    <span>Post</span></a>
                <ul class="dropdown-menu">

                    @forelse ($menu_types as $type)
                        @if ($type->pages->isNotEmpty())
                            <li
                                class="{{ Request::is('admin/posts') && request()->input('type_id') == $type->id ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('posts.index', ['type_id' => $type->id]) }}">
                                    {{ $type->name }}
                                </a>
                            </li>
                        @endif
                    @empty
                        <li>Menu Post Kosong</li>
                    @endforelse
                </ul>
            </li>

            <li class="nav-item dropdown {{ $type_menu === 'galeri' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-photo-film"></i>
                    <span>Galeri</span></a>
                <ul class="dropdown-menu">
                    @foreach ($menu_gallery as $galery)
                        @if ($galery->pages->isNotEmpty())
                            <li
                                class="{{ Request::is('admin/posts') && request()->input('type_id') == $galery->id ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('posts.index', ['type_id' => $galery->id]) }}">
                                    {{ $galery->name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
            @if ($menu_agenda)
                <li class="{{ $type_menu === 'agenda' ? 'active' : '' }}">
                    <a class="nav-link"
                        href="{{ route('posts.index', ['type_id' => $menu_agenda->id ? 'active' : '']) }}">
                        <i class="fa-regular fa-calendar"></i><span>Agenda</span></a>
                </li>
            @endif
            {{-- <li class="nav-item dropdown {{ $type_menu === 'agenda' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-regular fa-calendar"></i>
                    <span>Agenda</span></a>
                <ul class="dropdown-menu">
                    @foreach ($menu_agenda as $agenda)
                        @if ($agenda->pages->isNotEmpty())
                            <li
                                class="{{ Request::is('admin/posts') && request()->input('type_id') == $agenda->id ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('posts.index', ['type_id' => $agenda->id]) }}">
                                    {{ $agenda->name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li> --}}


        </ul>
    </aside>
</div>
