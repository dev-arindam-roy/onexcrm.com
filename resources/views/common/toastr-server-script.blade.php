@php
    $toastrType = $toastrMessage = $toastrTitle = '';
    if (Session::has('toastMessageType')) {
        $toastrType = Session::get('toastMessageType');
    }
    if (Session::has('toastMessage')) {
        $toastrMessage = Session::get('toastMessage');
    }
    if (Session::has('toastMessageTitle')) {
        $toastrTitle = Session::get('toastMessageTitle');
    }
@endphp

@if (!empty($toastrMessage) && $toastrType == 'error')
<script>
$(document).ready(function() {
    toastr.error('{{ $toastrMessage }}', '{{ $toastrTitle }}');
});
</script>
@endif

@if (!empty($toastrMessage) && $toastrType == 'success')
<script>
$(document).ready(function() {
    toastr.success('{{ $toastrMessage }}', '{{ $toastrTitle }}');
});
</script>
@endif

@if (!empty($toastrMessage) && $toastrType == 'warning')
<script>
$(document).ready(function() {
    toastr.warning('{{ $toastrMessage }}', '{{ $toastrTitle }}');
});
</script>
@endif