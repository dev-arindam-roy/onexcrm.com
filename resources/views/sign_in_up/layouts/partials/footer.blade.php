<script src="{{ asset(config('onex.asset_path') . 'master-assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/js/adminlte.min.js') }}"></script>
@stack('page_js_link')
<script src="{{ asset(config('onex.asset_path') . 'js/app.js') }}"></script>
@stack('page_js')
</body>
</html>
