<script type="text/javascript">
let localizationJsDataObj = {};
let localizationJsData = '{!! !empty($localization_js_messages) ? $localization_js_messages : "" !!}';  
if (localizationJsData && localizationJsData != '') {
    localizationJsDataObj = JSON.parse(localizationJsData);
}
</script>