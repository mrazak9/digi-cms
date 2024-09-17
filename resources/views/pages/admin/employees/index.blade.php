@extends('layouts.app')

@section('title', 'Pegawai')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Pegawai</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Pegawai</div>
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
                                <h4>Data Pegawai</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Data
                                        Pegawai</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('employees.index') }}">
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
                                                <th>Unit</th>
                                                <th>Jabatan</th>
                                                <th>Kelompok Unit</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a
                                                            href="{{ route('employees.show', $employee->id) }}">{{ $employee->name }}</a>
                                                    </td>
                                                    <td>{{ $employee->unit }}</td>
                                                    <td>{{ $employee->position }}</td>
                                                    <td>{{ $employee->group }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                                class="btn btn-sm btn-info btn-icon">Edit</a>
                                                            <form action="{{ route('employees.destroy', $employee->id) }}"
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
                                    {{ $employees->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
