<input type="hidden" name="layout_no" id="layoutNo" value="@if (!empty($layout_no)){{ $layout_no }}@endif">
<input type="hidden" name="referrer_url" id="referrerUrl" value="{{ url()->previous() }}">