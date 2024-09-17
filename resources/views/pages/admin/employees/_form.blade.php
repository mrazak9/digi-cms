    {{-- 'name',
        'unit',
        'position',
        'group',
        'photo', --}}
    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" id="name" name="name"
            value="{{ old('name', $employee->name ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="unit">Unit</label>
        <select class="form-control" name="newUnit" id="unit">
            <option value="">-- Pilih Unit --</option>
            @foreach ($units as $unit)
                <option value="{{ $unit }}">{{ $unit }}</option>
            @endforeach
            <option value="new">+ Tambah Unit Baru</option>
        </select>
    </div>
    <div class="card card-success" id="newUnitContainer" style="display: none;">
        <div class="card-body">
            <div class="form-group">
                <label for="newGroup">Tambah Unit Baru</label>
                <input type="text" class="form-control" name="unit" id="newUnit">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <select class="form-control" name="newPosition" id="jabatan">
            <option value="">-- Pilih Jabatan --</option>
            @foreach ($positions as $position)
                <option value="{{ $position }}">{{ $position }}</option>
            @endforeach
            <option value="new">+ Tambah Jabatan Baru</option>
        </select>
    </div>

    <div class="card card-success" id="newJabatanContainer" style="display: none;">
        <div class="card-body">
            <div class="form-group">
                <label for="newGroup">Tambah Jabatan Baru</label>
                <input type="text" class="form-control" name="position" id="newJabatan">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="group">Group</label>
        <select class="form-control" name="newGroup" id="group">
            <option value="">-- Pilih Group --</option>
            @foreach ($groups as $group)
                <option value="{{ $group }}">{{ $group }}</option>
            @endforeach
            <option value="new">+ Tambah Group Baru</option>
        </select>
    </div>

    <div class="card card-success" id="newGroupContainer" style="display: none;">
        <div class="card-body">
            <div class="form-group">
                <label for="newGroup">Tambah Group Baru</label>
                <input type="text" class="form-control" name="group" id="newGroup">
            </div>
        </div>
    </div>

    {{-- <div class="form-group">
        <label for="photo">Foto</label>
        <input type="text" class="form-control" id="photo" name="photo"
            value="{{ old('photo', $employee->photo ?? '') }}">
    </div> --}}

    <button type="submit" class="btn btn-primary">Simpan</button>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Tambahkan event listener pada dropdown
                $('#group').change(function() {
                    var selectedGroup = $(this).val();

                    // Tampilkan input grup baru jika yang dipilih adalah opsi "Tambah Group Baru"
                    if (selectedGroup === 'new') {
                        $('#newGroupContainer').show();
                    } else {
                        $('#newGroupContainer').hide();
                        $('#newGroup').val(selectedGroup);
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // Tambahkan event listener pada dropdown
                $('#jabatan').change(function() {
                    var selectedPosition = $(this).val();

                    // Tampilkan input grup baru jika yang dipilih adalah opsi "Tambah Posisi Baru"
                    if (selectedPosition === 'new') {
                        $('#newJabatanContainer').show();
                    } else {
                        $('#newJabatanContainer').hide();
                        $('#newJabatan').val(selectedPosition);
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // Tambahkan event listener pada dropdown
                $('#unit').change(function() {
                    var selectedUnit = $(this).val();

                    // Tampilkan input grup baru jika yang dipilih adalah opsi "Tambah Posisi Baru"
                    if (selectedUnit === 'new') {
                        $('#newUnitContainer').show();
                    } else {
                        $('#newUnitContainer').hide();
                        $('#newUnit').val(selectedUnit);
                    }
                });
            });
        </script>
    @endpush
