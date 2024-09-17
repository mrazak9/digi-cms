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
                                <h4>All FAQ</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('faqs.create') }}" class="btn btn-primary">Tambah FAQ</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('faqs.index') }}">
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
                                                <th>Konten</th>
                                                <th>Urutan</th>
                                                <th>UpdatedBy</th>
                                                <th>UpdatedAt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($faqs as $faq)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href="{{ route('faqs.show', $faq->id) }}">{{ $faq->title }}</a>
                                                    </td>
                                                    <td>{{ $faq->content }}</td>
                                                    <td>{{ $faq->order }}</td>
                                                    <td>{{ $faq->user_update->name ?? '-' }}</td>
                                                    <td>{{ $faq->updated_at }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('faqs.edit', $faq->id) }}"
                                                                class="btn btn-sm btn-info btn-icon">Edit</a>
                                                            <form action="{{ route('faqs.destroy', $faq->id) }}"
                                                                method="post" style="display: inline-block;">
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
                                    {{ $faqs->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
