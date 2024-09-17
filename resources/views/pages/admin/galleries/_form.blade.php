<form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="post_id" id="post_id" value="{{ $post->id }}" class="form-control" hidden>
    <!-- Type -->
    <div class="form-group">
        <label for="type">Type</label>
        <select name="type" id="type" class="form-control">
            <option value="image">Image</option>
            <option value="video">Video</option>
        </select>
        @error('type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Content -->
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" name="content" id="content" class="form-control">
        @error('content')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Alt Text -->
    <div class="form-group">
        <label for="alt_text">Alt Text</label>
        <input type="text" name="alt_text" id="alt_text" class="form-control">
        @error('alt_text')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <!-- Tombol Submit -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@push('scripts')
    <script>
        function toggleContentInput() {
            var selectedType = document.getElementById('type').value;

            var contentInput = document.getElementById('content');

            if (selectedType === 'image') {
                contentInput.type = 'file';
            } else if (selectedType === 'video') {
                contentInput.type = 'text';
            }
        }

        document.getElementById('type').addEventListener('change', toggleContentInput);
        toggleContentInput();
    </script>
@endpush
