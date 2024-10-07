    {{-- 'name',
        'description',
        'url',
        'photo', --}}
    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" id="name" name="name"
            value="{{ old('name', $patner->name ?? '') }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description"
            value="{{ old('description', $patner->description ?? '') }}">
    </div>
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url"
            value="{{ old('url', $patner->name ?? '') }}">
    </div>

    {{-- <div class="form-group">
        <label for="photo">Foto</label>
        <input type="text" class="form-control" id="photo" name="photo"
            value="{{ old('photo', $patner->photo ?? '') }}">
    </div> --}}

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="logo">Logo</label>
            <div class="custom-file">
                <input type="file" class="form-control" name="logo" id="logo"
                    value="{{ old('logo', $patner->logo ?? '') }}">
            </div>
        </div>
        <div class="form-group col-md-6">
            @if (isset($patner))
                <img src="{{ asset('storage/' . $patner->logo) }}" alt="Gambar {{ $patner->name }}"
                    style="max-width: 300px;">
            @endif
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
