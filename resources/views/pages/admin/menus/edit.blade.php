@extends('layouts.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Menu</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('menus.update', $menu->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        @include('pages.admin.menus._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
