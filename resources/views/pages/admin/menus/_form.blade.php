<div class="form-group">
    <label for="menu_name">Nama Menu</label>
    <input class="form-control" type="text" name="menu_name" id="menu_name"
        value="{{ old('menu_name', $menu->menu_name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="slug_page">URL Menu</label>
    <select class="form-control" name="newSlugPage" id="slug_page">
        <option value="">Pilih Halaman</option>
        <option value="#">Tidak Ada URL</option>
        @foreach ($pages as $page)
            <option value="{{ $page->slug }}"
                {{ old('slug_page', $menu->slug_page ?? '') == $page->slug ? 'selected' : '' }}>
                {{ $page->title }}
            </option>
        @endforeach
        <option value="new">+ Input URL Custom..</option>
    </select>
</div>
<div class="card card-success" id="newSlugPageContainer" style="display: none;">
    <div class="card-body">
        <div class="form-group">
            <label for="newSlugPage">Input URL</label>
            <input type="text" class="form-control" name="slug_page" id="newSlugPage">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="menu_status">Menu Status</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="menu_status" id="menu_status_active" value="Show Menu"
            {{ old('menu_status', $menu->menu_status ?? '') == 'Show Menu' ? 'checked' : '' }}>
        <label class="form-check-label" for="menu_status_active">Aktif</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="menu_status" id="menu_status_inactive" value="Not Show"
            {{ old('menu_status', $menu->menu_status ?? '') == 'Not Show' ? 'checked' : '' }}>
        <label class="form-check-label" for="menu_status_inactive">Tidak Aktif</label>
    </div>
</div>

<div class="form-group">
    <label for="main_menu">Main Menu</label>
    <select class="form-control" name="main_menu" id="main_menu">
        <option value="">Pilih Menu Induk</option>
        @foreach ($menus as $m)
            <option value="{{ $m->id }}"
                {{ old('main_menu', $menu->main_menu ?? '') == $m->id ? 'selected' : '' }}>
                {{ $m->menu_name }}
            </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>

@push('scripts')
    <script>
        $(document).ready(function() {
            // Tambahkan event listener pada dropdown
            $('#slug_page').change(function() {
                var selectedGroup = $(this).val();

                // Tampilkan input grup baru jika yang dipilih adalah opsi "Tambah Group Baru"
                if (selectedGroup === 'new') {
                    $('#newSlugPageContainer').show();
                } else {
                    $('#newSlugPageContainer').hide();
                    $('#newSlugPage').val(selectedGroup);
                }
            });
        });
    </script>
@endpush
