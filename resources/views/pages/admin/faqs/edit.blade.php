@extends('layouts.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Halaman</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('faqs.update', $faq->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.admin.faqs._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
