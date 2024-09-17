@extends('layouts.app')

@section('title', 'Pages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Halaman</h1>
            </div>
        </section>



        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail: {{ $category->Name }}</h4>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>
                                <strong>Nama: </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $category->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Slug </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $category->slug }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>SEO Title </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $category->seo_title ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>SEO Mete Description </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $category->seo_meta_description ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tampilkan Pages ? </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $category->is_show ? 'Ya' : 'Tidak' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>ditulis Oleh</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $category->user_create->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>diupate Oleh</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $category->user_update->name }}
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary mb-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
