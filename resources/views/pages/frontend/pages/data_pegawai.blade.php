@extends('layouts.landing.app')

@section('title', 'Data Kepegawaian - Dispangtan Cimahi')
@section('seoTitle', $page->title . '- Dispangtan Cimahi')
{{-- @section('seoMetaDescription', $post->seo_meta_description) --}}

@section('main')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white"
        data-image-src="{{ asset('storage/' . $page->banner) }}" style="max-height: 400px">
        <div class="container pt-10 pb-20 pt-md-10 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3 text-white">{{ $page->title }}</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <div class="row mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                    <div class="card">
                        @foreach ($groupedEmployees as $group => $employees)
                            <div class="card-body">
                                <div class="section-title mt-0">
                                    <h2>{{ $loop->iteration }}. {{ $group }}</h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table-hover table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Satuan/Unit Kerja</th>
                                                <th scope="col">Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $employee->name }}</td>
                                                    <td>{{ $employee->unit }}</td>
                                                    <td>{{ $employee->position }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

@endsection
