 @extends('layouts.landing.app-preview')
 {{-- 
 @section('title', $post->seo_title)
 @section('seoTitle', $post->seo_title)
 @section('seoMetaDescription', $post->seo_meta_description) --}}

 @section('main')

     <section class="wrapper bg-light">
         <div class="container py-14 py-md-16">
             <div class="row gx-lg-8 gx-xl-12">
                 <div class="col-lg-8">
                     <div class="blog single">
                         <div class="card">
                             <figure class="card-img-top"><img
                                     src="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}"
                                     alt="{{ $post->title }}" /></figure>
                             <div class="card-body">
                                 <div class="classic-view">
                                     <article class="post">
                                         <div class="post-content mb-5">
                                             <h2 class="h1 mb-4">{{ $post->title }}</h2>
                                             <ul class="post-meta mb-5">
                                                 <li class="post-date">
                                                     <i class="uil uil-calendar-alt"></i>
                                                     <span>{{ $post->updated_at->format('d F Y') }}</span>
                                                 </li>
                                                 <li class="post-author">
                                                     <i class="uil uil-user"></i>
                                                     <span>By {{ $post->user_update->name }}</span>

                                                 </li>
                                                 <li class="post-comments"><i class="uil uil-eye"></i></i>
                                                     {{-- {{ views($post)->collection($post->slug)->count() }} --}}
                                                     {{ $post->visit_count_total }}
                                                     kali
                                                     <span> Dilihat</span>
                                                 </li>
                                             </ul>
                                             <p>{{ $post->content }}</p>

                                             @if ($post->attachment)
                                                 <a href="{{ $post->attachment }}" class="btn btn-leaf rounded-pill"
                                                     target="_blank" rel="noopener noreferrer"><i
                                                         class="uil uil-file-download-alt"></i> Download Lampiran</a>
                                             @endif

                                             @if (count($post->galleries))
                                                 <h3>Galeri :</h3>
                                                 <div class="row g-6 mt-3 mb-10">
                                                     @foreach ($galleries as $item)
                                                         <div class="col-md-6">
                                                             <figure class="hover-scale rounded cursor-dark"><a
                                                                     href="{{ 'storage/' . $item->content }}" data-glightbox
                                                                     data-gallery="post"> <img
                                                                         src="{{ 'storage/' . $item->content }}"
                                                                         alt="{{ $item->alt_text }}" /></a></figure>
                                                         </div>
                                                     @endforeach
                                                 </div>
                                             @endif

                                             @if ($post->agenda)
                                                 <div class="col-lg-6">

                                                     <div class="d-flex flex-row">
                                                         <div>
                                                             <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                                                     class="uil uil-location-pin-alt"></i> </div>
                                                         </div>
                                                         <div>
                                                             <h5 class="mb-1">Lokasi Kegiatan</h5>
                                                             <address>{{ $post->agenda->location }}
                                                             </address>
                                                         </div>
                                                     </div>
                                                     <div class="d-flex flex-row">
                                                         <div>
                                                             <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                                                     class="uil uil-calender"></i> </div>
                                                         </div>
                                                         <div>
                                                             <h5 class="mb-1">Tanggal Kegiatan</h5>
                                                             <p>{{ $post->agenda->date }}</p>
                                                         </div>
                                                     </div>
                                                     <div class="d-flex flex-row">
                                                         <div>
                                                             <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                                                     class="uil uil-notes"></i></div>
                                                         </div>
                                                         <div>
                                                             <h5 class="mb-1">Catatan</h5>
                                                             <p class="mb-0">{{ $post->agenda->notes }}</p>
                                                         </div>
                                                     </div>
                                                 </div>
                                             @endif
                                         </div>
                                         <!-- /.post-content -->
                                         <div
                                             class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                             <div>
                                                 <ul class="list-unstyled tag-list mb-0">
                                                     Kategori :
                                                     @foreach (explode(',', $post->categories) as $category)
                                                         <li><a href="#"
                                                                 class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{ $category }}</a>
                                                         </li>
                                                     @endforeach
                                                 </ul>
                                             </div>
                                         </div>
                                         <!-- /.post-footer -->
                                     </article>
                                     <!-- /.post -->
                                 </div>

                             </div>
                             <!-- /.card-body -->
                         </div>
                         <!-- /.card -->
                     </div>
                     <!-- /.blog -->
                 </div>
                 <!-- /column -->
                 <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
                     <p>Ini Hanya Halaman untuk Preview, Hanya akan muncul di halaman pengunjung jika status postingan telah
                         Publish </p>
                     <p><strong>Status Postingan : </strong>{{ $post->approval->status ?? 'Pending' }} </p>
                 </aside>
                 <!-- /column .sidebar -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container -->
     </section>
 @endsection
