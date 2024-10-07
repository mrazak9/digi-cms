@extends('layouts.admin.app')

@section('title', 'Posts')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <!-- Tambahkan ini di bagian head -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Konfirmasi Konten</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Posts</a></div>
                    <div class="breadcrumb-item">Konfirmasi Postingan</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Posts</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>

                <div id="output-status"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <ul class="nav nav-pills" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="post-tab" data-toggle="tab" href="#home3"
                                            role="tab" aria-controls="home" aria-selected="true">Post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="page-tab" data-toggle="tab" href="#profile3" role="tab"
                                            aria-controls="profile" aria-selected="false">Page</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="home3" role="tabpanel"
                                        aria-labelledby="post-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>All Posts</h4>
                                                <form action="{{ route('posts.approval') }}" method="GET"
                                                    class="float-right">
                                                    <select name="status" class="form-control selectric"
                                                        onchange="this.form.submit()">
                                                        <option value="">Pilih Status</option>
                                                        <option value="pending"
                                                            {{ request('status') == 'pending' ? 'selected' : '' }}>Pending
                                                        </option>
                                                        <option value="publish"
                                                            {{ request('status') == 'publish' ? 'selected' : '' }}>Publish
                                                        </option>
                                                    </select>
                                                </form>

                                            </div>
                                            <div class="card-body">

                                                <div class="clearfix mb-3"></div>

                                                <div class="table-responsive">
                                                    <table class="table-striped table">
                                                        <thead>
                                                            <tr>
                                                                <th>Judul</th>
                                                                <th>Tipe post</th>
                                                                <th>Penulis</th>
                                                                <th>Tgl Buat</th>
                                                                <th>Status</th>
                                                                <th>Konfirmasi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($posts as $post)
                                                                <tr>
                                                                    <td>{{ $post->title }}
                                                                        <div class="table-links">
                                                                            <a
                                                                                href="{{ route('posts.preview', $post->id) }}">View</a>
                                                                            <div class="bullet"></div>
                                                                            <a
                                                                                href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        {{ $post->type->name }}
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#">
                                                                            <img alt="image"
                                                                                src="{{ asset($post->user_update->photo ? 'storage/' . $post->user_update->photo : 'img/avatar/avatar-5.png') }}"
                                                                                class="rounded-circle" width="20"
                                                                                data-toggle="title" title="">
                                                                            <div class="d-inline-block ml-1">
                                                                                {{ $post->user_update->name }}
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ $post->updated_at }}</td>
                                                                    <td>
                                                                        @if ($post->approval && $post->approval->status == 'publish')
                                                                            <div class="badge badge-success">
                                                                                Publish
                                                                            </div>
                                                                        @else
                                                                            <div class="badge badge-warning">
                                                                                {{ $post->approval ? $post->approval->status : 'Pending' }}
                                                                            </div>
                                                                        @endif
                                                                    </td>
                                                                    <td><!-- Tambahkan di blade file -->
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-info btn-icon"
                                                                            data-toggle="modal" data-target="#approvalModal"
                                                                            data-title="{{ $post->title }}"
                                                                            data-content="{{ $post->content }}"
                                                                            data-slug="{{ $post->slug }}"
                                                                            data-id="{{ $post->id }}"
                                                                            data-image="{{ asset('storage/' . $post->image) }}">
                                                                            Konfirmasi
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>

                                                    </table>
                                                </div>
                                                <div class="float-right">
                                                    {{ $posts->withQueryString()->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="page-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="float-left">
                                                    <h4>All Page</h4>
                                                </div>
                                                <form action="{{ route('posts.approval') }}" method="GET"
                                                    class="float-right">
                                                    <select name="status" class="form-control selectric"
                                                        onchange="this.form.submit()">
                                                        <option value="">Pilih Status</option>
                                                        <option value="pending"
                                                            {{ request('status') == 'pending' ? 'selected' : '' }}>Pending
                                                        </option>
                                                        <option value="publish"
                                                            {{ request('status') == 'publish' ? 'selected' : '' }}>Publish
                                                        </option>
                                                    </select>
                                                </form>

                                            </div>
                                            <div class="card-body">

                                                <div class="clearfix mb-3"></div>

                                                <div class="table-responsive">
                                                    <table class="table-striped table">
                                                        <thead>
                                                            <tr>
                                                                <th>Judul</th>
                                                                <th>Jenis Halaman</th>
                                                                <th>Penulis</th>
                                                                <th>Tgl Buat</th>
                                                                <th>Status</th>
                                                                <th>Konfirmasi</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($pages as $page)
                                                                <tr>
                                                                    <td>{{ $page->title }}
                                                                        <div class="table-links">
                                                                            <a
                                                                                href="{{ route('pages.show', $page->id) }}">View</a>
                                                                            <div class="bullet"></div>
                                                                            <a
                                                                                href="{{ route('pages.edit', $page->id) }}">Edit</a>

                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        {{ $page->type }}
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a href="#">
                                                                            <img alt="image"
                                                                                src="{{ asset($page->user_update->photo ? 'storage/' . $page->user_update->photo : 'img/avatar/avatar-5.png') }}"
                                                                                class="rounded-circle" width="20"
                                                                                data-toggle="title" title="">
                                                                            <div class="d-inline-block ml-1">
                                                                                {{ $page->user_update->name }}
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ $page->updated_at }}</td>
                                                                    <td>
                                                                        @if ($page->approval && $page->approval->status == 'publish')
                                                                            <div class="badge badge-success">
                                                                                Publish
                                                                            </div>
                                                                        @else
                                                                            <div class="badge badge-warning">
                                                                                {{ $page->approval ? $page->approval->status : 'Pending' }}
                                                                            </div>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-info btn-icon"
                                                                            data-toggle="modal"
                                                                            data-target="#approvalModal"
                                                                            data-title="{{ $page->title }}"
                                                                            data-content="{{ $page->content }}"
                                                                            data-slug="{{ $page->slug }}"
                                                                            data-id="{{ $page->id }}"
                                                                            data-image="{{ asset('storage/' . $page->image) }}">
                                                                            Konfirmasi
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-between w-100">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Post</h5>

                        <div class="btn-group">

                            <a id="previewBtn" class="btn btn-sm btn-outline-secondary"> Buka Preview</a>

                            <a id="whatsappBtn" class="btn btn-sm btn-outline-success">
                                <i class="fab fa-whatsapp"></i> Kirim ke WhatsApp
                            </a>

                        </div>
                    </div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <img id="postImage" src="" alt="test" width="200px">
                    <h4><span id="postTitle"></span></h4>
                    <p id="postContent"></p>
                    <br>
                    <form action="{{ route('set.approval') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" id="postId">

                        <input type="hidden" name="post_slug" id="postSlugInput">

                        <div class="form-group">
                            <label for="type">Pilih Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="publish">publish</option>
                                <option value="pending">pending</option>
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Menambahkan event listener untuk perubahan dropdown
            $('.selectric').change(function() {
                var selectedStatus = $(this).val();
                $.ajax({
                    url: '/filter-approvals',
                    type: 'GET',
                    data: {
                        status: selectedStatus
                    },
                    success: function(data) {
                        // Lakukan sesuatu dengan data yang diterima dari server
                        console.log(data);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

    <script>
        var whatsappMessage = '';
        var previewUrl = '';
        $('#approvalModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Tombol yang memunculkan modal
            var post_id = button.data('id');
            var title = button.data('title');
            var slug = button.data('slug');
            var imageUrl = button.data('image');
            var content = button.data('content');
            var status = button.data('status');

            // Isi data ke dalam elemen di dalam modal
            $('#postId').val(post_id);
            $('#postTitle').text(title);
            $('#postSlugInput').val(slug);
            $('#postImage').attr('src', imageUrl);
            $('#postContent').text(content);
            $('#postStatus').text(status);

            previewUrl = "{{ route('posts.preview', '') }}" + "/" + post_id;
            whatsappMessage = "Berikut adalah Postingan terbaru yang perlu direview.\nJudul \"*" +
                title + "*\"\nDapat dilihat di: " + "{{ route('posts.preview', '') }}" + "/" + post_id;
        });

        $('#whatsappBtn').on('click', function() {
            // Buka link WhatsApp dengan menggunakan pesan WhatsApp dari variabel global
            window.open("https://wa.me/?text=" + encodeURIComponent(whatsappMessage), '_blank');
        });
        $('#previewBtn').on('click', function() {
            window.open(previewUrl, '_blank');
        });
    </script>
@endpush
