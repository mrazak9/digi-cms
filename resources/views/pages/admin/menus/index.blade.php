@extends('layouts.admin.app')

@section('title', 'Menu Setting')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Menu</h1>
            </div>
        </section>
        <a href="{{ route('menus.create') }}" class="btn btn-primary mb-2">Create Menu</a>
        <a href="{{ route('menus.generate') }}" class="btn btn-primary mb-2">Generate Menu</a>

        <table class="table">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Menu</th>
                    <th>Link Halaman</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('menus.show', $menu->id) }}">{{ $menu->menu_name }}</a></td>
                        <td>
                            @if (Str::contains($menu->slug_page, 'http'))
                                <a href="{{ $menu->slug_page }}" target="blank">{{ $menu->slug_page }}</a>
                            @else
                                <a href="/{{ $menu->slug_page }}" target="blank">{{ $menu->slug_page ?? '-' }}</a>
                            @endif
                        </td>

                        <td>{{ $menu->menu_status }}</td>
                        <td>
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="post"
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
