<div class="form-group">
    <label for="categories">Kategori</label>
    <div class="selectgroup selectgroup-pills">
        @foreach ($categories as $category)
            <label class="selectgroup-item">
                <input type="checkbox" name="categories[]" id="categories" value="{{ $category->name }}"
                    class="selectgroup-input" @if (isset($post) && in_array($category->name, explode(',', $post->categories))) checked @endif>
                <span class="selectgroup-button">{{ $category->name }}</span>
            </label>
        @endforeach
    </div>
    <a class="btn btn-primary" data-toggle="modal" data-target="#addCategory">Tambah Kategori</a>
    <br>
    <br>
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="type_id" value="{{ $type->id }}" hidden>
        <input type="text" class="form-control" id="title" name="title" oninput="generateSlug()"
            value="{{ old('title', $post->title ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="content">Konten</label>
        <textarea class="form-control" id="content" name="content" style="height: 250px;" required>{{ old('content', $post->content ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="content_short">Konten Pendek</label>
        <textarea class="form-control" id="content_short" name="content_short" style="height: 100px;" required>{{ old('content_short', $post->content_short ?? '') }}</textarea>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="image">Image</label>
            <div class="custom-file">
                <input type="file" class="form-control" name="image" id="image"
                    value="{{ old('image', $post->image ?? '') }}">
                <small class="form-text text-muted">Hanya file jpg, jpeg, png dan webp yang diizinkan, dengan maksimal
                    ukuran 2MB.</small>
            </div>
        </div>
        <div class="form-group col-md-6">
            @if (isset($post->image))
                <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar {{ $post->slug }}"
                    style="max-width: 300px;">
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Input Lampiran (opsional)</h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nameFile">Nama Lampiran</label>
                    <input type="text" class="form-control" id="nameFile" name="nameFile"
                        value="{{ old('nameFile', isset($post) ? pathinfo($post->attachment)['filename'] : '') }}">
                    <small class="form-text text-muted">Jika kosong, nama file akan sama dengan judul postingan.</small>
                </div>

                <div class="form-group col-md-4">
                    <label for="attachment">File Lampiran</label>
                    <div class="custom-file">
                        <input type="file" class="form-control" name="attachment" id="attachment" accept=".pdf"
                            value="{{ old('attachment', $post->attachment ?? '') }}">
                        <small class="form-text text-muted">Hanya file PDF yang diizinkan.</small>
                    </div>
                </div>
                <div class="form-group col-md-2 align-items-center d-flex">
                    @if (isset($post->attachment))
                        <a href="{{ asset('storage/' . $post->attachment) }}" target="_blank"
                            class="d-flex align-items-center">
                            <i class="fas fa-file-pdf mr-2"></i> <!-- Ikon PDF dari FontAwesome -->
                            {{ basename($post->attachment) }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if ($type->name === 'Agenda')
        <div class="card">
            <div class="card-header">
                <h4>Data Agenda</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="location">Lokasi Kegiatan</label>
                    <input type="text" class="form-control" id="location" name="location"
                        value="{{ old('location', $post->agenda->location ?? '') }}">
                </div>


                <div class="form-group">
                    <label for="date">Tanggal Pelaksanaan</label>
                    <input type="text" class="form-control" id="date" name="date"
                        value="{{ old('date', $post->agenda->date ?? '') }}">
                </div>

                <div class="form-group">
                    <label for="notes">Catatan</label>
                    <input type="text" class="form-control" id="notes" name="notes"
                        value="{{ old('notes', $post->agenda->notes ?? '') }}">
                </div>
            </div>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h4>Setting SEO</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="seo_title">Judul SEO</label>
                <input type="text" class="form-control" id="seo_title" name="seo_title"
                    value="{{ old('seo_title', $post->seo_title ?? '') }}">
            </div>

            <div class="form-group">
                <label for="seo_meta_description">SEO Meta Description</label>
                <textarea class="form-control" name="seo_meta_description" id="seo_meta_description" style="height: 100px;">{{ old('seo_meta_description', $post->seo_meta_description ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>

    @push('scripts')
        <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
    @endpush
