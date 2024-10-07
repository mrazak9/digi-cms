@extends('layouts.admin.app')

@section('title', 'Pages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Pengaturan</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail: {{ $setting->name }}</h4>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>
                                <strong>Nama Pengaturan </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $setting->name_setting }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Isi Pengaturan </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $setting->value }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>ditulis Oleh</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $setting->user_create->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>diupate Oleh</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $setting->user_update->name }}
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-primary mb-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
