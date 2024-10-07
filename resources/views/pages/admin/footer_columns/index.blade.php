@extends('layouts.admin.app')

@section('title', 'Pages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Footer Column</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Halaman</div>
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
                                <h4>All Footer Column</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('footer_columns.create') }}" class="btn btn-primary">Tambah Footer
                                        Column</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('footer_columns.index') }}">
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
                                                <th>Text</th>
                                                <th>Url</th>
                                                <th>Order</th>
                                                <th>Column Name</th>
                                                <th>UpdatedBy</th>
                                                <th>UpdatedAt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($footerColumns as $footer_column)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a
                                                            href="{{ route('footer_columns.show', $footer_column->id) }}">{{ $footer_column->text }}</a>
                                                    </td>
                                                    <td>{{ $footer_column->url }}</td>
                                                    <td>{{ $footer_column->order }}</td>
                                                    <td>{{ $footer_column->column_name }}</td>
                                                    <td>{{ $footer_column->user_update->name ?? '-' }}</td>
                                                    <td>{{ $footer_column->updated_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('footer_columns.edit', $footer_column->id) }}"
                                                                class="btn btn-sm btn-info btn-icon">Edit</a>
                                                            <form
                                                                action="{{ route('footer_columns.destroy', $footer_column->id) }}"
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
                                    {{ $footerColumns->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
