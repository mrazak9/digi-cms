@extends('layouts.admin.app')

@section('title', 'Patner')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List patners</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List patners</div>
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
                                <h4>Data Patner</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('patners.create') }}" class="btn btn-primary">Tambah Data
                                        Patner</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('patners.index') }}">
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
                                                <th>Nama</th>
                                                <th>Description</th>
                                                <th>URL</th>
                                                <th>Logo</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($patners as $patner)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a
                                                            href="{{ route('patners.show', $patner->id) }}">{{ $patner->name }}</a>
                                                    </td>
                                                    <td>{{ $patner->description }}</td>
                                                    <td>{{ $patner->url }}</td>
                                                    <td>{{ $patner->logo }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('patners.edit', $patner->id) }}"
                                                                class="btn btn-sm btn-info btn-icon">Edit</a>
                                                            <form action="{{ route('patners.destroy', $patner->id) }}"
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
                                    {{ $patners->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
