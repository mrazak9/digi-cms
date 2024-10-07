@extends('layouts.admin.app')

@section('title', 'Roles')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Role</h1>
            </div>
        </section>
        {{-- <a href="{{ route('roles.create') }}" class="btn btn-primary mb-2">Create roles</a> --}}
        <a class="btn btn-primary" data-toggle="modal" data-target="#addRole">Tambah Role</a>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="{{ route('roles.addPermission', ['role' => $role->id]) }}" class="btn btn-info ">Add
                                Permission</a>
                            <button type="button" class="btn btn-warning editRole" data-toggle="modal"
                                data-target="#editRole" data-id="{{ $role->id }}" data-name="{{ $role->name }}">
                                Edit
                            </button>

                            <form action="{{ route('roles.destroy', $role->id) }}" method="post"
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

        <div class="modal fade" tabindex="-1" role="dialog" id="addRole">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Permission</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Silahkan Masukan Data Role</p>
                        <form action="{{ route('roles.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input class="form-control" type="text" name="name" id="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" tabindex="-1" role="dialog" id="editRole">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Silahkan Masukan Data Role</p>
                        <form action="{{ route('roles.update') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" id="editRoleId">
                            <div class="form-group">
                                <label for="name">Role Name</label>
                                <input class="form-control" type="text" name="name" id="editRoleName" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.editRole').click(function() {
                var roleId = $(this).data('id');
                var rolenName = $(this).data('name');

                $('#editRoleId').val(roleId);
                $('#editRoleName').val(rolenName);

            });
        });
    </script>
@endpush
