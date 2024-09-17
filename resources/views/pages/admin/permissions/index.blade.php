@extends('layouts.app')

@section('title', 'Permissions')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Permissions</h1>
            </div>
        </section>
        {{-- <a href="{{ route('permissions.create') }}" class="btn btn-primary mb-2">Create permissions</a> --}}
        <a class="btn btn-primary" data-toggle="modal" data-target="#addPermission">Tambah Permissions</a>
        <div class="row">
            <div class="col-12">
                @include('layouts.alert')
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
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>

                            <button type="button" class="btn btn-warning editPermission" data-toggle="modal"
                                data-target="#editPermission" data-id="{{ $permission->id }}"
                                data-name="{{ $permission->name }}">
                                Edit
                            </button>

                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="post"
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

        <div class="modal fade" tabindex="-1" role="dialog" id="addPermission">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Permission</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Silahkan Masukan Data Permission</p>
                        <form action="{{ route('permissions.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Permission Name</label>
                                <input class="form-control" type="text" name="name" id="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" tabindex="-1" role="dialog" id="editPermission">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Permission</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Silahkan Masukan Data Permission</p>
                        <form action="{{ route('permissions.update') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" id="editPermissionId">
                            <div class="form-group">
                                <label for="name">Permission Name</label>
                                <input class="form-control" type="text" name="name" id="editPermissionName" required>
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
            $('.editPermission').click(function() {
                var permissionId = $(this).data('id');
                var permissionName = $(this).data('name');

                $('#editPermissionId').val(permissionId);
                $('#editPermissionName').val(permissionName);

            });
        });
    </script>
@endpush
