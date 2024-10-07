@extends('layouts.admin.app')

@section('title', 'Jenis Halaman')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Jenis Halaman</h1>
            </div>
        </section>
        <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#addType">Buat Jenis Halaman</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama</th>
                    <th>Slug</th>
                    <th>Penulis</th>
                    <th>Tgl Update</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('types.show', $type->id) }}">{{ $type->name }}</a></td>
                        <td>{{ $type->slug }}</td>
                        <td>{{ $type->user_update->name }}</td>
                        <td>{{ $type->updated_at }}</td>
                        <td>
                            <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('types.destroy', $type->id) }}" method="post"
                                style="display: inline-block;" onsubmit="return confirm('Anda yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="addType">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Silahkan Masukan Data untuk Kategori</p>
                    <form action="{{ route('types.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Jenis Halaman</label>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
