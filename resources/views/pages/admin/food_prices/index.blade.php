@extends('layouts.app')

@section('title', 'Harga Pangan')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Harga Pangan</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">List Harga Pangan</div>
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
                                <h4>Semua Harga Pangan</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('food_prices.create') }}" class="btn btn-primary">Tambah Harga
                                        Pangan</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('food_prices.index') }}">
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
                                                <th>Satuan</th>
                                                <th>Harga Saat ini</th>
                                                <th>Harga Sebelumnya</th>
                                                <th>Tanggal Update</th>
                                                <th>Catatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($foodPrices as $foodPrice)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $foodPrice->name }} </td>
                                                    <td>{{ $foodPrice->unit }}</td>
                                                    <td>
                                                        {{ $foodPrice->current_price ?? '-' }}
                                                        @if (isset($foodPrice->previous_price) && isset($foodPrice->current_price))
                                                            @if ($foodPrice->current_price > $foodPrice->previous_price)
                                                                <span class="arrow-up text-danger">&#8593;</span>
                                                            @elseif($foodPrice->current_price < $foodPrice->previous_price)
                                                                <span class="arrow-down text-primary">&#8595;</span>
                                                            @else
                                                                <span class="arrow-no-change text-success">&#8596;</span>
                                                            @endif
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $foodPrice->previous_price ?? '-' }}
                                                    </td>


                                                    <td>{{ $foodPrice->updated_at->format('d-m-Y') }}</td>
                                                    <td>{{ $foodPrice->note }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <button type="button" class="btn btn-sm btn-info btn-icon"
                                                                data-toggle="modal" data-target="#exampleModal">Edit
                                                            </button>
                                                            <form
                                                                action="{{ route('food_prices.destroy', $foodPrice->id) }}"
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
                                    {{ $foodPrices->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('food_prices.update', $foodPrice->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                <label for="new_price">Harga Saat ini</label>
                                <input class="form-control" type="text" name="new_price" id="new_price"
                                    value="{{ old('new_price', $foodPrice->current_price ?? '') }}">
                            </div>
                            <div class="form-group">
                                <label for="note">Catatan</label>
                                <input class="form-control" type="text" name="note" id="note"
                                    value="{{ old('note', $foodPrice->note ?? '') }}">
                            </div>

                            <div class="modal-footer bg-whitesmoke br">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
