@extends('layouts.admin.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Sosial Media</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('social_medias.update', $socialMedia->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.admin.social_medias._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
