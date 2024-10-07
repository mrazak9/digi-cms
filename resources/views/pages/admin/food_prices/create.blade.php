@extends('layouts.admin.app')

@section('title', 'Harga Pangan')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Harga Pangan</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ url('/admin/food_prices') }}">List Harga Pangan</a></div>
                    <div class="breadcrumb-item">Tambah Harga Pangan</div>
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
                                <h4>Tambah Harga Pangan</h4>
                            </div>
                            <div class="card-body">
                                <div class="clearfix mb-3"></div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('food_prices.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama Pangan</label>
                                        <input class="form-control" type="text" name="name" id="name"
                                            value="{{ old('name', $foodPrice->name ?? '') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="unit">Satuan</label>
                                        <select class="form-control" name="unit" id="unit">
                                            <option value="">Pilih Satuan</option>
                                            <option value="Kg"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Kg' ? 'selected' : '' }}>Kg
                                            </option>
                                            <option value="Liter"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Liter' ? 'selected' : '' }}>Liter
                                            </option>
                                            <option value="Ikat"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Ikat' ? 'selected' : '' }}>Ikat
                                            </option>
                                            <option value="Kaleng"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Kaleng' ? 'selected' : '' }}>
                                                Kaleng</option>
                                            <option value="Bungkus"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Bungkus' ? 'selected' : '' }}>
                                                Bungkus</option>
                                            <option value="Set"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Set' ? 'selected' : '' }}>Set
                                            </option>
                                            <option value="Dus"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Dus' ? 'selected' : '' }}>Dus
                                            </option>
                                            <option value="Papan"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Papan' ? 'selected' : '' }}>
                                                Papan</option>
                                            <option value="Ekor"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Ekor' ? 'selected' : '' }}>Ekor
                                            </option>
                                            <option value="Buah"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Buah' ? 'selected' : '' }}>Buah
                                            </option>
                                            <option value="Pack"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Pack' ? 'selected' : '' }}>Pack
                                            </option>
                                            <option value="Bervariasi"
                                                {{ old('unit', $foodPrice->unit ?? '') == 'Bervariasi' ? 'selected' : '' }}>
                                                Bervariasi</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="current_price">Harga Saat ini</label>
                                        <input class="form-control" type="text" name="current_price" id="current_price"
                                            value="{{ old('current_price', $foodPrice->current_price ?? '') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Catatan</label>
                                        <input class="form-control" type="text" name="note" id="note"
                                            value="{{ old('note', $foodPrice->note ?? '') }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
