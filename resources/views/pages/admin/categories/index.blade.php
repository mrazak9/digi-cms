@extends('layouts.admin.app')

@section('title', 'Pages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Halaman</h1>
            </div>
        </section>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Create categories</a>
        <div class="row">
            <div class="col-12">
                @include('layouts.admin.alert')
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>seo_title</th>
                    <th>UpdatedBy</th>
                    <th>UpdatedAt</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->seo_title }}</td>
                        <td>{{ $category->user_update->name }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post"
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
@endsection
