@push('style')
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
@endpush

<div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title" oninput="generateSlug()"
        value="{{ old('title', $page->title ?? '') }}" required>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="banner">Banner</label>
        <div class="custom-file">
            <input type="file" class="form-control" name="banner" id="banner"
                value="{{ old('banner', $page->banner ?? '') }}">
        </div>
    </div>
    <div class="form-group col-md-6">
        @if (isset($page))
            <img src="{{ asset('storage/' . $page->banner) }}" alt="Banner {{ $page->slug }}"
                style="max-width: 300px;">
        @endif
    </div>
</div>


<div class="form-group">
    <label for="content">Content</label>
    <div>
        <textarea class="summernote" name="content" id="content">{{ old('content', $page->content ?? '') }}</textarea>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="image">Image</label>
        <div class="custom-file">
            <input type="file" class="form-control" name="image" id="image"
                value="{{ old('image', $page->image ?? '') }}">
        </div>
    </div>
    <div class="form-group col-md-6">
        @if (isset($page))
            <img src="{{ asset('storage/' . $page->image) }}" alt="Gambar {{ $page->slug }}"
                style="max-width: 300px;">
        @endif
    </div>
</div>

<br>
<div class="form-group col-md-6">
    <label class="form-label">Tampilkan Halaman?</label>
    <div class="selectgroup w-100">
        <label class="selectgroup-item">
            <input type="radio" name="is_show" value="true" id="is_show" class="selectgroup-input"
                {{ old('is_show', isset($page) ? $page->is_show : false) == true ? 'checked' : '' }}>
            <span class="selectgroup-button">Yes</span>
        </label>
        <label class="selectgroup-item">
            <input type="radio" name="is_show" id="is_show" value='false' class="selectgroup-input"
                {{ old('is_show', isset($page) ? $page->is_show : false) == false ? 'checked' : '' }}>
            <span class="selectgroup-button">NO</span>
        </label>
    </div>
</div>



<div class="form-group">
    <label for="type">Type</label>
    <select class="form-control" name="type" id="type" required>
        <option value="default" {{ old('type', $page->type ?? '') == 'default' ? 'selected' : '' }}>Default</option>
        <option value="homepage" {{ old('type', $page->type ?? '') == 'homepage' ? 'selected' : '' }}>Home Page
        <option value="contact" {{ old('type', $page->type ?? '') == 'contact' ? 'selected' : '' }}>Contact
        </option>
        <option value="service_list" {{ old('type', $page->type ?? '') == 'service_list' ? 'selected' : '' }}>Services
            List
        <option value="service_detail" {{ old('type', $page->type ?? '') == 'service_detail' ? 'selected' : '' }}>
            Services Detail
        </option>
        <option value="service_gallery" {{ old('type', $page->type ?? '') == 'service_gallery' ? 'selected' : '' }}>
            Services
            &
            Gallery</option>
        <option value="patners" {{ old('type', $page->type ?? '') == 'patners' ? 'selected' : '' }}>Patners</option>
    </select>
</div>

<div class="form-group">
    <label for="seo_title">SEO Title</label>
    <input class="form-control" type="text" name="seo_title" id="seo_title"
        value="{{ old('seo_title', $page->seo_title ?? '') }}">
</div>

<div class="form-group">
    <label for="seo_meta_description">SEO Meta Description</label>
    <textarea class="form-control" name="seo_meta_description" id="seo_meta_description">{{ old('seo_meta_description', $page->seo_meta_description ?? '') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>

@push('scripts')
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
@endpush
