const defaultSwal = Swal.mixin({
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false,
    showCancelButton: false,
    showConfirmButton: false
});

const swalLoading = function (waitText = null) {
    defaultSwal.fire({
        title: waitText ?? localizationJsDataObj.please_wait ?? 'Please Wait...',
        didOpen: () => {
            Swal.showLoading()
        }
    });
}

const swalClose = function () {
    defaultSwal.close();
}

const validationErrorDisply = function (responseData, displayInHtml = false, formId = '', displayInToastr = true, displayInInput = true, inputMessage = true) {
    let valiErrContent = responseData.body.content.validation_errors; 
    let valiErrMsg = responseData.body.message;
    let valiErrMsgTitle = '';
    let valiErrCount = 0;
    let errContainer = $('#validationErrorContainer');
    if (formId != '') {
        errContainer = $('#' + formId).find('#validationErrorContainer');
    }
    if (valiErrContent.error_messages) {
        let valiErrMsgs = valiErrCount = valiErrContent.error_messages.length;
        valiErrMsgTitle = (localizationJsDataObj.oops_n_invalid_input_found !== undefined && localizationJsDataObj.oops_n_invalid_input_found) ? localizationJsDataObj.oops_n_invalid_input_found.replace('[error_cont]', valiErrCount) : `Oops! - ${valiErrCount} Invalid Input Found`;
        if (valiErrMsgs) {
            let valiErrTxt = valiErrContent.error_messages.map(function (item, index) {
                return (index + 1) + '. ' + item;
            }).join("<br/>");
            if (valiErrTxt != '' && valiErrTxt != null) {
                if (displayInToastr) {
                    toastr.error(valiErrTxt, valiErrMsgTitle);
                }
                if (displayInHtml) {
                    errContainer.show();
                    valiErrMsgTitle = `<h5><strong>${valiErrMsgTitle}</strong></h5>`;
                    if (valiErrMsg != '') {
                        valiErrMsgTitle += `<div class="mt-minus-10 mb-10"><small>${valiErrMsg}</small></div>`;
                    }
                    errContainer.find('.error-messages').html(valiErrMsgTitle + valiErrTxt);
                    $('html, body').animate({
                        scrollTop: errContainer.offset().top - 10
                    }, 1000);
                }
            }
        }
    }
    if (typeof valiErrContent.error_details == 'object' && displayInInput) {
        Object.entries(valiErrContent.error_details).forEach(([key,value]) => {
            var element = $('input[name="' + key + '"]');
            var elementId = element.attr('id');
            element.addClass('is-invalid');
            element.next('.input-group-append').find('.input-group-text').addClass('error-input-group');
            $('label[for=' + elementId + ']').addClass('text-danger');
            if (inputMessage) {
                $('#' + elementId + '-error').remove();
                $('<div id="'+ elementId +'-error" class="validation-error invalid-feedback" style="display: block;">' + value[0] + '</div>').insertAfter(element.parent());
            }
        });
    }
}