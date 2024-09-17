<div class="form-group">
    <label for="name_setting">Nama Pengaturan</label>
    <input class="form-control" type="text" name="name_setting" id="name_setting"
        value="{{ old('name_setting', $setting->name_setting ?? '') }}" required
        {{ $type_setting == 'edit' ? 'disabled' : '' }}>
</div>

<div class="form-group">
    <label for="value">Isi Pengaturan</label>
    @if (isset($setting) && Str::contains($setting->name_setting, 'logo'))
        <!-- Tampilkan input file untuk logo -->
        <div class="form-group col-md-6">
            <div class="custom-file">
                <input type="file" class="form-control" name="value" id="value"
                    value="{{ old('value', $setting->value ?? '') }}">
            </div>
        </div>
        <div class="form-group col-md-6">
            @if (isset($setting))
                <img src="{{ asset('storage/' . $setting->value) }}" alt="" style="max-width: 300px;">
            @endif
        </div>
    @else
        <!-- Tampilkan input teks untuk nilai jika tidak mengandung "logo" -->
        <input class="form-control" type="text" name="value" id="value"
            value="{{ old('value', $setting->value ?? '') }}" required>
    @endif
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
