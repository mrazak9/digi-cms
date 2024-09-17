<div class="form-group">
    <label for="name">Type Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $type->name ?? '') }}"
        required>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>

@push('scripts')
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script>
        function generateSlug() {
            var title = document.getElementById('name').value;
            var slug = title.toLowerCase().replace(/\s+/g, '_');
            document.getElementById('slug').value = slug;
        }
    </script>
@endpush
