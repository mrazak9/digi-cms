<div class="form-group">
    <label for="name">Category Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $category->name ?? '') }}"
        required>
</div>

<div class="form-group">
    <label for="seo_title">SEO Title</label>
    <input class="form-control" type="text" name="seo_title" id="seo_title"
        value="{{ old('seo_title', $category->seo_title ?? '') }}">
</div>

<div class="form-group">
    <label for="seo_meta_description">SEO Meta Description</label>
    <textarea class="form-control" name="seo_meta_description" id="seo_meta_description">{{ old('seo_meta_description', $category->seo_meta_description ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
