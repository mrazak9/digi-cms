    {{-- 'text',
        'url',
        'order',
        'column_name', --}}


    <div class="form-group">
        <label for="text">Judul</label>
        <input type="text" class="form-control" id="text" name="text"
            value="{{ old('text', $footerColumn->text ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url"
            value="{{ old('url', $footerColumn->url ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="order">Order</label>
        <input type="number" class="form-control" id="order" name="order"
            value="{{ old('order', $footerColumn->order ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="column_name">Nama Kolom</label>
        <input type="text" class="form-control" id="column_name" name="column_name"
            value="{{ old('column_name', $footerColumn->column_name ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
