<script src="{{ asset(config('onex.asset_path') . 'master-assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/alte/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/alte/js/adminlte.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/sweet-alert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/toastr/toastr.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/jquery-validate/additional-methods.min.js') }}"></script>
@stack('page_js_link')
<script src="{{ asset(config('onex.asset_path') . 'js/app.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/crm-js/action-functions.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/crm-js/signup-partial.js') }}"></script>
@include('common.toastr-server-script')
@stack('page_js')
</body>
</html>
