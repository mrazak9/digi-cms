@extends('layouts.admin.app')
@section('main')
    <div class="main-content">
        <div class="card">
            <form action="{{ route('roleHasPermission') }}" method="post">
                <div class="card-header">
                    <h4>New Role</h4>
                    <div class="section-header-button">
                        <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">
                                <input type="checkbox" id="select-all-user-permissions" class="selectgroup-input">
                                <span class="selectgroup-button">Select Semua Permissions</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="role" value="{{ $role->id }}">
                        <div class="selectgroup selectgroup-pills">
                            @foreach ($groupedPermissions as $groupName => $groupPermissions)
                                <div class="form-group">
                                    <label class="form-label">{{ ucfirst($groupName) }} Permissions</label>
                                    <div class="selectgroup selectgroup-pills">
                                        @foreach ($groupPermissions as $permission)
                                            <label class="selectgroup-item">
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                                    class="selectgroup-input"
                                                    {{ old('permissions') && in_array($permission->name, old('permissions')) ? 'checked' : ($role->hasPermissionTo($permission->name) ? 'checked' : '') }}>
                                                <span class="selectgroup-button">{{ ucfirst($permission->name) }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Assign Permissions</button>
            </form>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Checkbox "Select All" logic
        document.getElementById('select-all-user-permissions').addEventListener('change', function() {
            var checkboxes = document.querySelectorAll('.selectgroup-pills input[type="checkbox"]');

            checkboxes.forEach(function(checkbox) {
                checkbox.checked = this.checked;
            }, this);
        });
    </script>
@endpush
