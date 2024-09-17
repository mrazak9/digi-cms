<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; {{ date('Y') }} {{ $gen_setting['footer_copyright'] ?? '' }}
    </div>
    <div class="footer-right">
        {{ env('APP_VERSION', 'Versi Tidak Tersedia') }}
    </div>


    </div>
</footer>
