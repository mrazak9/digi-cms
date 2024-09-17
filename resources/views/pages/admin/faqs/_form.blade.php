<div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title" oninput="generateSlug()"
        value="{{ old('title', $faq->title ?? '') }}" required>
</div>

<div class="form-group">
    <label for="content">Konten</label>
    <textarea class="form-control" name="content" id="content" required>
        {{ old('content', $faq->content ?? '') }}
    </textarea>
</div>

<div class="form-group">
    <label for="order">Order</label>
    <input class="form-control" type="number" name="order" id="order"
        value="{{ old('order', $faq->order ?? '') }}" required>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
