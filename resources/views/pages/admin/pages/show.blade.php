@extends('layouts.admin.app')

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
                    <h4>Detail: {{ $page->title }}</h4>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>
                                <strong>Title: </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->title }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Slug </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->slug }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Banner </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->banner }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Konten </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {!! $page->content !!}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tipe Page </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->type }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>SEO Title </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->seo_title ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>SEO Mete Description </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->seo_meta_description ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tampilkan Pages ? </strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->is_show ? 'Ya' : 'Tidak' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>ditulis Oleh</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->user_create->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>diupate Oleh</strong>
                            </td>
                            <td>:</td>
                            <td>
                                {{ $page->user_update->name }}
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary mb-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
