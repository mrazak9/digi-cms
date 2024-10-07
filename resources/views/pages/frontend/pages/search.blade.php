 @extends('layouts.landing.app')

 @section('title', $page->seo_title)
 @section('seoTitle', $page->seo_title)
 @section('seoMetaDescription', $page->seo_meta_description)

 @section('main')
     <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white"
         data-image-src="{{ asset('storage/' . $page->banner) }}" style="max-height: 200px">
         <div class="container pt-10 pb-20 pt-md-10 pb-md-21 text-center">
             <div class="row">
                 <div class="col-lg-8 mx-auto">
                     <h1 class="display-1 mb-3 text-white">Hasil Pencarian</h1>
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

     <section class="wrapper bg-light">
         <div class="container py-14 py-md-16">
             <div class="row gx-lg-8 gx-xl-12">
                 <div class="col-lg-8">
                     <div class="container d-flex flex-row py-6">
                         <form class="search-form w-100 " action="{{ route('search') }}" method="GET">
                             <div class="form-group">
                                 <input type="text" name="query" class="form-control"
                                     placeholder="Ketikan Apa yang ingin anda cari, lalu Enter untuk mencari...">
                                 {{-- <div class="form-group"> --}}
                             </div>
                         </form>
                     </div>
                     <div class="blog classic-view">
                         <h4 class="widget-title mb-3">Post :</h4>
                         <ul class="image-list">
                             @forelse ($posts as $post)
                                 <li>
                                     <figure class="rounded"><a href="{{ $post->slug }}"><img
                                                 src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                                                 alt="" /></a></figure>
                                     <div class="post-content">
                                         <h6 class="mb-2"> <a class="link-dark"
                                                 href="{{ $post->slug }}">{{ $post->title }}</a>
                                         </h6>
                                         <ul class="post-meta">
                                             <li class="post-date"><i
                                                     class="uil uil-calendar-alt"></i><span>{{ $post->updated_at->format('d F Y') }}</span>
                                             </li>
                                         </ul>
                                         <!-- /.post-meta -->
                                     </div>
                                 </li>
                             @empty
                                 <p>Tidak ada data Halaman dengan kata kunci "{{ $query }}" yang ditemukan.</p>
                             @endforelse
                             <!-- /.post -->
                         </ul>
                     </div>
                     <br>
                     <div class="blog classic-view">
                         <h4 class="widget-title mb-3">Halaman :</h4>
                         <ul class="image-list">
                             @forelse ($pages as $page)
                                 <li>
                                     <figure class="rounded"><a href="{{ $page->slug }}"><img
                                                 src="{{ asset('storage/' . ($page->image ?? $gen_setting['logo_image_default'])) }}"
                                                 alt="" /></a></figure>
                                     <div class="post-content">
                                         <h6 class="mb-2"> <a class="link-dark"
                                                 href="{{ $page->slug }}">{{ $page->title }}</a>
                                         </h6>
                                         <ul class="post-meta">
                                             <li class="post-date"><i
                                                     class="uil uil-calendar-alt"></i><span>{{ $page->updated_at->format('d F Y') }}</span>
                                             </li>
                                         </ul>
                                         <!-- /.post-meta -->
                                     </div>
                                 </li>
                             @empty
                                 <p>Tidak ada data Halaman dengan kata kunci "{{ $query }}" yang ditemukan.</p>
                             @endforelse
                             <!-- /.post -->
                         </ul>
                     </div>

                 </div>
                 <!-- /column -->
                 @include('pages.posts._sidebar')
                 <!-- /column .sidebar -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container -->
     </section>
 @endsection
