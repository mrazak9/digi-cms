@extends('layouts.admin.app')

@section('title', 'General Setting')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Pengaturan Umum</h1>
            </div>
        </section>
        <a href="{{ route('settings.create') }}" class="btn btn-primary mb-2">Buat Pengaturan</a>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('layouts.admin.alert')
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Pengaturan</th>
                        <th>Isi Pengaturan</th>
                        <th style="width: 200px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($settings as $setting)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('settings.show', $setting->id) }}">{{ $setting->name_setting }}</a></td>
                            <td>{{ $setting->value }}</td>
                            <td>
                                <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('settings.destroy', $setting->id) }}" method="post"
                                    style="display: inline-block;"
                                    onsubmit="return confirm('Anda yakin ingin menghapus?');">
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
    </div>
@endsection
