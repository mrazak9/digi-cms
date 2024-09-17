@extends('layouts.app')

@section('title', 'All Post')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Post : {{ $type->name ?? 'All' }}</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Postingan {{ $type->name ?? 'All' }}</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Post - {{ $type->name ?? '' }}</h4>
                                <div class="section-header-button">
                                    <form action="{{ route('posts.create') }}" method="GET">
                                        @csrf
                                        <input type="hidden" name="type_id" id="type_id_input"
                                            value="{{ $type_id ?? '' }}">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Buat
                                            Post</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('posts.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="title">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">

                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Type</th>
                                                <th>UpdatedBy</th>
                                                <th>UpdatedAt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href="{{ route('posts.show', $post->id) }}"
                                                            target="_blank">{{ $post->title }}</a>
                                                    </td>
                                                    <td>{{ $post->categories }}</td>
                                                    <td>{{ $post->type->name }}</td>
                                                    <td>{{ $post->user_update->name ?? '-' }}</td>
                                                    <td>{{ $post->updated_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            @if ($post->type->slug == 'galeri-foto')
                                                                <a href="{{ route('galleries.add', ['post_id' => $post->id]) }}"
                                                                    class="btn btn-sm btn-success btn-icon">Galeri</a>
                                                            @endif
                                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                                class="btn btn-sm btn-info btn-icon">Edit</a>
                                                            <form action="{{ route('posts.destroy', $post->id) }}"
                                                                method="post" style="display: inline-block;"
                                                                onsubmit="return confirm('Anda yakin ingin menghapus?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger btn-icon confirm-delete">Delete</button>
                                                            </form>
                                                        </div>
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
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil nilai type_id dari URL
            const urlParams = new URLSearchParams(window.location.search);
            const typeId = urlParams.get('type_id');

            // Setel nilai type_id ke dalam input text
            document.getElementById('type_id_input').value = typeId;
        });
    </script>
@endpush
