<div class="form-group">
    <label for="name">Judul</label>
    <input type="text" class="form-control" id="name" name="name"
        value="{{ old('name', $socialMedia->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" id="url" name="url"
        value="{{ old('url', $socialMedia->url ?? '') }}" required>
</div>
<div class="form-group">
    <label for="icon">Icon</label>
    <input type="text" class="form-control" id="icon" name="icon"
        value="{{ old('icon', $socialMedia->icon ?? '') }}">
    <div class="text-danger">Example: "facebook"</div>
</div>
<div class="form-group">
    <label for="order">Order</label>
    <input type="number" class="form-control" id="order" name="order"
        value="{{ old('order', $socialMedia->order ?? '') }}" required>
</div>



<button type="submit" class="btn btn-primary">Simpan</button>
