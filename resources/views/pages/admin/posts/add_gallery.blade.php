@extends('layouts.admin.app')
@section('title', 'Tambah Galeri')
@push('style')
    <link rel="stylesheet" href="{{ asset('library/chocolat/dist/css/chocolat.css') }}">
@endpush
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Galeri : {{ $post->title ?? 'All' }}</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Galleri</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.admin.alert')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Galeri: {{ $post->title ?? '' }}</h4>
                            </div>
                            <div class="card-body">
                                <article class="article article-style-c">
                                    <div class="article-header">
                                        <div class="article-image"
                                            data-background="{{ asset('storage/' . ($post->image ?? $gen_setting['logo_image_default'])) }}">
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <div class="article-title">
                                            <h2><a href="/{{ $post->slug }}" target="_blank">{{ $post->title }}</a></h2>
                                        </div>
                                        <p>{{ $post->content }}</p>
                                </article>

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Galleri</h4>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#addCategory">Tambah
                                            Galeri</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="gallery gallery-md">
                                            @foreach ($galleries as $key => $gallery)
                                                @if ($key % 5 == 0)
                                                    @if ($key != 0)
                                        </div> <!-- Akhiri baris sebelumnya jika bukan iterasi pertama -->
                                        @endif
                                        <div class="row">
                                            @endif
                                            <div class="col-md-2">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/' . $gallery->content) }}"
                                                    data-title="{{ $gallery->alt_text }}"></div>
                                                <form action="{{ route('galleries.destroy', $gallery->id) }}"
                                                    method="post" class="mt-2"
                                                    onsubmit="return confirm('Anda yakin ingin menghapus?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-danger btn-icon">Delete</button>
                                                </form>

                                            </div>
                                            @if ($loop->last || ($key + 1) % 5 == 0)
                                        </div> <!-- Akhiri baris pada iterasi terakhir atau setelah 5 gambar -->
                                        @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="addCategory">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Silahkan Masukan Data Galeri</p>
                    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="text" name="post_id" id="post_id" value="{{ $post->id }}"
                            class="form-control" hidden>
                        <!-- Type -->
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>
                            @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" name="content" id="content" class="form-control">
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Alt Text -->
                        <div class="form-group">
                            <label for="alt_text">Alt Text</label>
                            <input type="text" name="alt_text" id="alt_text" class="form-control">
                            @error('alt_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tombol Submit -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <script>
        function toggleContentInput() {
            var selectedType = document.getElementById('type').value;

            var contentInput = document.getElementById('content');

            if (selectedType === 'image') {
                contentInput.type = 'file';
            } else if (selectedType === 'video') {
                contentInput.type = 'text';
            }
        }
        document.getElementById('type').addEventListener('change', toggleContentInput);
        toggleContentInput();
    </script>
@endpush
