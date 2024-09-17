@extends('layouts.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Footer</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('footer_columns.update', $footerColumn->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.admin.footer_columns._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
