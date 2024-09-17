@extends('layouts.app')

@section('title', 'Pages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Pegawai</h1>
            </div>
        </section>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Pegawai: {{ $employee->name }}</h4>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>
                                <strong>Nama </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $employee->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Unit </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $employee->unit }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Jabatan </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $employee->position }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Grup Bagian</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $employee->group }}
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary mb-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
