@extends('layouts.admin.app')

@section('title', 'Pages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Patners</h1>
            </div>
        </section>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Patners: {{ $patner->name }}</h4>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>
                                <strong>Nama </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $patner->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Unit </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $patner->unit }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Jabatan </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $patner->position }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Grup Bagian</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $patner->group }}
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('patners.edit', $patner->id) }}" class="btn btn-primary mb-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
