<div class="form-group">
    <label for="title">Judul</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $slider->title ?? '') }}"
        required>
</div>

<div class="form-group">
    <label for="text">Caption</label>
    <input type="text" class="form-control" id="text" name="text"
        value="{{ old('text', $slider->text ?? '') }}" required>
</div>
<div class="form-group">
    <label for="button_text">Label Button</label>
    <input type="text" class="form-control" id="button_text" name="button_text"
        value="{{ old('button_text', $slider->button_text ?? '') }}">
</div>

<div class="form-group">
    <label for="button_url">URL</label>
    <input type="text" class="form-control" id="button_url" name="button_url"
        value="{{ old('button_url', $slider->button_url ?? '') }}">
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="slider_photo">Image</label>
        <div class="custom-file">
            <input type="file" class="form-control" name="slider_photo" id="slider_photo"
                value="{{ old('slider_photo', $page->slider_photo ?? '') }}}">
        </div>
    </div>
    <div class="form-group col-md-6">
        @if (isset($page))
            <img src="{{ asset('storage/' . $page->slider_photo) }}" alt="slider_photo {{ $page->slug }}"
                style="max-width: 300px;">
        @endif
    </div>
</div>



<button type="submit" class="btn btn-primary">Simpan</button>
