@extends('layouts.app')

@section('title', 'Sosial Media')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Slider</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Slider</div>
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
                                <h4>All Slider</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('sliders.create') }}" class="btn btn-primary">Tambah Slider</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('sliders.index') }}">
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
                                                <th>Caption</th>
                                                <th>Label Button</th>
                                                <th>URL</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($sliders as $slider)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a
                                                            href="{{ route('sliders.show', $slider->id) }}">{{ $slider->title }}</a>
                                                    </td>
                                                    <td>{{ $slider->text }}</td>
                                                    <td>{{ $slider->button_text }}</td>
                                                    <td>{{ $slider->button_url }}</td>
                                                    <td><img src="{{ asset('storage/' . $slider->slider_photo) }}"
                                                            alt="{{ $slider->title }}"
                                                            style="max-width: 200px; padding: 10px;"> </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('sliders.edit', $slider->id) }}"
                                                                class="btn btn-sm btn-info btn-icon">Edit</a>
                                                            <form action="{{ route('sliders.destroy', $slider->id) }}"
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
                                    {{ $sliders->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
