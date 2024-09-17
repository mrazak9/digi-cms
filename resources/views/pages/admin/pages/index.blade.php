@extends('layouts.app')

@section('title', 'Pages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Halaman</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Halaman</div>
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
                                <h4>All Pages</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('pages.create') }}" class="btn btn-primary">Tambah Halaman</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('pages.index') }}">
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
                                                <th>Type</th>
                                                <th>Tampilkan</th>
                                                <th>Author</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($pages as $page)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a
                                                            href="{{ route('pages.show', $page->id) }}">{{ $page->title }}</a>
                                                    </td>
                                                    <td>{{ $page->type }}</td>
                                                    <td>{{ $page->is_show == 1 ? 'Ya' : 'Tidak' }}</td>
                                                    <td>
                                                        <small>{{ $page->user_update->name ?? '-' }}</small>
                                                        <br>
                                                        <small>{{ $page->updated_at ?? '-' }}</small>
                                                    </td>
                                                    <td>

                                                        <a href="{{ route('pages.edit', $page->id) }}"
                                                            class="btn btn-sm btn-info btn-icon">Edit</a>
                                                        <form action="{{ route('pages.destroy', $page->id) }}"
                                                            method="post" style="display: inline-block;"
                                                            onsubmit="return confirm('Anda yakin ingin menghapus?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger btn-icon confirm-delete">Delete</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $pages->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
