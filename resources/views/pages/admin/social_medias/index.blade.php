@extends('layouts.app')

@section('title', 'Sosial Media')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Sosial Media</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Sosial Media</div>
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
                                <h4>All Sosial Media</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('social_medias.create') }}" class="btn btn-primary">Tambah Sosial
                                        Media</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('social_medias.index') }}">
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
                                                <th>Name</th>
                                                <th>Url</th>
                                                <th>Icon</th>
                                                <th>Order</th>
                                                <th>UpdatedBy</th>
                                                <th>UpdatedAt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($socialMedias as $socialMedia)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a
                                                            href="{{ route('social_medias.show', $socialMedia->id) }}">{{ $socialMedia->name }}</a>
                                                    </td>
                                                    <td>{{ $socialMedia->url }}</td>
                                                    <td>{{ $socialMedia->icon }}</td>
                                                    <td>{{ $socialMedia->order }}</td>
                                                    <td>{{ $socialMedia->user_update->name ?? '-' }}</td>
                                                    <td>{{ $socialMedia->updated_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('social_medias.edit', $socialMedia->id) }}"
                                                                class="btn btn-sm btn-info btn-icon">Edit</a>
                                                            <form
                                                                action="{{ route('social_medias.destroy', $socialMedia->id) }}"
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
                                    {{ $socialMedias->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
