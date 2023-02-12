/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("$(function () {\n  $('[data-toggle=\"tooltip\"]').tooltip(); //Default settings toastr\n\n  toastr.options = {\n    \"closeButton\": true,\n    \"debug\": false,\n    \"newestOnTop\": true,\n    \"progressBar\": true,\n    \"positionClass\": \"custom-toastr-position\",\n    \"preventDuplicates\": true,\n    \"onclick\": null,\n    \"showDuration\": \"300\",\n    \"hideDuration\": \"1000\",\n    \"timeOut\": \"5000\",\n    \"extendedTimeOut\": \"1000\",\n    \"showEasing\": \"swing\",\n    \"hideEasing\": \"linear\",\n    \"showMethod\": \"fadeIn\",\n    \"hideMethod\": \"fadeOut\"\n  }; //Default setting for jQuey validator\n\n  jQuery.validator.setDefaults({\n    debug: false,\n    errorElement: 'div',\n    errorClass: 'validation-error',\n    ignore: '.ignore, :hidden',\n    normalizer: function normalizer(value) {\n      return $.trim(value);\n    },\n    errorPlacement: function errorPlacement(error, element) {\n      error.addClass('invalid-feedback');\n      error.insertAfter(element.parent());\n    },\n    highlight: function highlight(element, errorClass, validClass) {\n      $(element).addClass('is-invalid').removeClass('is-valid');\n      $(element.form).find('label[for=' + element.id + ']').addClass('text-danger').removeClass('text-success');\n      $(element).next('.input-group-append').find('.input-group-text').addClass('error-input-group').removeClass('success-input-group');\n    },\n    unhighlight: function unhighlight(element, errorClass, validClass) {\n      $(element).addClass('is-valid').removeClass('is-invalid');\n      $(element.form).find('label[for=' + element.id + ']').addClass('text-success').removeClass('text-danger');\n      $(element).next('.input-group-append').find('.input-group-text').addClass('success-input-group').removeClass('error-input-group');\n    },\n    invalidHandler: function invalidHandler(event, validator) {\n      var _localizationJsDataOb;\n\n      var errorsCount = validator.numberOfInvalids();\n      toastr.remove();\n      toastr.error((_localizationJsDataOb = localizationJsDataObj.jqvalidator_invalid_handler_toastr) !== null && _localizationJsDataOb !== void 0 ? _localizationJsDataOb : \"Please proceed with valid input data and try again.\", localizationJsDataObj.oops_n_invalid_input_found !== undefined && localizationJsDataObj.oops_n_invalid_input_found ? localizationJsDataObj.oops_n_invalid_input_found.replace('[error_cont]', errorsCount) : 'Oops! ' + errorsCount + \" - Invalid Input Found\");\n      $('html, body').animate({\n        scrollTop: $(validator.errorList[0].element).offset().top - 20\n      }, 600); //console.log(validator);\n    }\n  }); //Form reset\n\n  $('.form-rest-btn').on('click', function () {\n    var formID = $(this).data('formid');\n    $(\"#\" + formID).validate().resetForm();\n    $(\"#\" + formID)[0].reset();\n    $(\"#validationErrorContainer\").hide();\n    $(\".form-control\").removeClass('is-valid');\n    $(\".form-control\").removeClass('is-invalid');\n    $(\".form-lb\").removeClass('text-success').removeClass('text-danger');\n    $(\".custom-checkbox\").find('input[type=\"checkbox\"]').removeClass('is-valid').removeClass('is-invalid');\n    $(\".custom-checkbox\").find('.custom-control-label').removeClass('text-success').removeClass('text-danger');\n    $(\".input-group-text\").removeClass('success-input-group').removeClass('error-input-group');\n    $(\".eye-showHide-password\").addClass('d-none');\n    toastr.remove(); //toastr.clear();\n  }); //textbox only accept numbers or digits\n\n  $('body').on('keypress', '.onlyNumber', function (event) {\n    var charCode = event.which ? event.which : event.keyCode;\n    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;\n    return true;\n  }); //show and hide password fields\n\n  $('body').on('click', '.eye-showHide-password', function () {\n    if ($(this).hasClass('fa-eye')) {\n      $(this).addClass('fa-eye-slash').removeClass('fa-eye');\n      $('.eye-password').attr('type', 'text');\n    } else {\n      $(this).addClass('fa-eye').removeClass('fa-eye-slash');\n      $('.eye-password').attr('type', 'password');\n    }\n  });\n  $('body').on('keyup', '.eye-password', function () {\n    if ($(this).val().length >= 1) {\n      $(this).parents('.form-group').find('.eye-showHide-password').removeClass('d-none');\n    } else {\n      $(this).parents('.form-group').find('.eye-showHide-password').addClass('d-none');\n    }\n  }); //If - app in production environment \n\n  if ($('#envMode').val() != undefined && $('#envMode').val().toLowerCase() == 'production' && $('#isDebug').val() != undefined && !$('#isDebug').val()) {\n    //Disable right-click\n    document.addEventListener('contextmenu', function (event) {\n      return event.preventDefault();\n    });\n\n    document.onkeydown = function (event) {\n      //Disable F12, Ctrl + Shift + I, Ctrl + Shift + C, Ctrl + Shift + J, Ctrl + U,\n      if (event.code == 'F12' || event.key == 'F12' || event.keyCode === 123 || event.which === 123) {\n        return false;\n      }\n\n      if (event.ctrlKey && event.shiftKey && event.keyCode === 'I'.charCodeAt(0)) {\n        return false;\n      }\n\n      if (event.ctrlKey && event.shiftKey && event.keyCode === 'C'.charCodeAt(0)) {\n        return false;\n      }\n\n      if (event.ctrlKey && event.shiftKey && event.keyCode === 'J'.charCodeAt(0)) {\n        return false;\n      }\n\n      if (event.ctrlKey && event.keyCode === 'U'.charCodeAt(0)) {\n        return false;\n      }\n    };\n  }\n\n  $('#changeLocalization').on('change', function () {\n    if ($(this).val() != '') {\n      var _localizationJsDataOb2, _localizationJsDataOb3;\n\n      var lang = $(this).val();\n      Swal.fire({\n        title: (_localizationJsDataOb2 = localizationJsDataObj.switching_language_loading_text) !== null && _localizationJsDataOb2 !== void 0 ? _localizationJsDataOb2 : 'Switching your language',\n        text: (_localizationJsDataOb3 = localizationJsDataObj.please_wait) !== null && _localizationJsDataOb3 !== void 0 ? _localizationJsDataOb3 : 'Please wait...',\n        didOpen: function didOpen() {\n          Swal.showLoading();\n        }\n      });\n      var localeUrl = window.location.protocol + '//' + window.location.host + '/' + 'locale/' + lang;\n      window.location.href = localeUrl;\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwibmFtZXMiOlsiJCIsInRvb2x0aXAiLCJ0b2FzdHIiLCJvcHRpb25zIiwialF1ZXJ5IiwidmFsaWRhdG9yIiwic2V0RGVmYXVsdHMiLCJkZWJ1ZyIsImVycm9yRWxlbWVudCIsImVycm9yQ2xhc3MiLCJpZ25vcmUiLCJub3JtYWxpemVyIiwidmFsdWUiLCJ0cmltIiwiZXJyb3JQbGFjZW1lbnQiLCJlcnJvciIsImVsZW1lbnQiLCJhZGRDbGFzcyIsImluc2VydEFmdGVyIiwicGFyZW50IiwiaGlnaGxpZ2h0IiwidmFsaWRDbGFzcyIsInJlbW92ZUNsYXNzIiwiZm9ybSIsImZpbmQiLCJpZCIsIm5leHQiLCJ1bmhpZ2hsaWdodCIsImludmFsaWRIYW5kbGVyIiwiZXZlbnQiLCJlcnJvcnNDb3VudCIsIm51bWJlck9mSW52YWxpZHMiLCJyZW1vdmUiLCJsb2NhbGl6YXRpb25Kc0RhdGFPYmoiLCJqcXZhbGlkYXRvcl9pbnZhbGlkX2hhbmRsZXJfdG9hc3RyIiwib29wc19uX2ludmFsaWRfaW5wdXRfZm91bmQiLCJ1bmRlZmluZWQiLCJyZXBsYWNlIiwiYW5pbWF0ZSIsInNjcm9sbFRvcCIsImVycm9yTGlzdCIsIm9mZnNldCIsInRvcCIsIm9uIiwiZm9ybUlEIiwiZGF0YSIsInZhbGlkYXRlIiwicmVzZXRGb3JtIiwicmVzZXQiLCJoaWRlIiwiY2hhckNvZGUiLCJ3aGljaCIsImtleUNvZGUiLCJoYXNDbGFzcyIsImF0dHIiLCJ2YWwiLCJsZW5ndGgiLCJwYXJlbnRzIiwidG9Mb3dlckNhc2UiLCJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJwcmV2ZW50RGVmYXVsdCIsIm9ua2V5ZG93biIsImNvZGUiLCJrZXkiLCJjdHJsS2V5Iiwic2hpZnRLZXkiLCJjaGFyQ29kZUF0IiwibGFuZyIsIlN3YWwiLCJmaXJlIiwidGl0bGUiLCJzd2l0Y2hpbmdfbGFuZ3VhZ2VfbG9hZGluZ190ZXh0IiwidGV4dCIsInBsZWFzZV93YWl0IiwiZGlkT3BlbiIsInNob3dMb2FkaW5nIiwibG9jYWxlVXJsIiwid2luZG93IiwibG9jYXRpb24iLCJwcm90b2NvbCIsImhvc3QiLCJocmVmIl0sInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXBwLmpzP2NlZDYiXSwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpIHtcbiAgICBcbiAgICAkKCdbZGF0YS10b2dnbGU9XCJ0b29sdGlwXCJdJykudG9vbHRpcCgpO1xuXG4gICAgLy9EZWZhdWx0IHNldHRpbmdzIHRvYXN0clxuICAgIHRvYXN0ci5vcHRpb25zID0ge1xuICAgICAgICBcImNsb3NlQnV0dG9uXCI6IHRydWUsXG4gICAgICAgIFwiZGVidWdcIjogZmFsc2UsXG4gICAgICAgIFwibmV3ZXN0T25Ub3BcIjogdHJ1ZSxcbiAgICAgICAgXCJwcm9ncmVzc0JhclwiOiB0cnVlLFxuICAgICAgICBcInBvc2l0aW9uQ2xhc3NcIjogXCJjdXN0b20tdG9hc3RyLXBvc2l0aW9uXCIsXG4gICAgICAgIFwicHJldmVudER1cGxpY2F0ZXNcIjogdHJ1ZSxcbiAgICAgICAgXCJvbmNsaWNrXCI6IG51bGwsXG4gICAgICAgIFwic2hvd0R1cmF0aW9uXCI6IFwiMzAwXCIsXG4gICAgICAgIFwiaGlkZUR1cmF0aW9uXCI6IFwiMTAwMFwiLFxuICAgICAgICBcInRpbWVPdXRcIjogXCI1MDAwXCIsXG4gICAgICAgIFwiZXh0ZW5kZWRUaW1lT3V0XCI6IFwiMTAwMFwiLFxuICAgICAgICBcInNob3dFYXNpbmdcIjogXCJzd2luZ1wiLFxuICAgICAgICBcImhpZGVFYXNpbmdcIjogXCJsaW5lYXJcIixcbiAgICAgICAgXCJzaG93TWV0aG9kXCI6IFwiZmFkZUluXCIsXG4gICAgICAgIFwiaGlkZU1ldGhvZFwiOiBcImZhZGVPdXRcIlxuICAgIH1cblxuICAgIC8vRGVmYXVsdCBzZXR0aW5nIGZvciBqUXVleSB2YWxpZGF0b3JcbiAgICBqUXVlcnkudmFsaWRhdG9yLnNldERlZmF1bHRzKHtcbiAgICAgICAgZGVidWc6IGZhbHNlLFxuICAgICAgICBlcnJvckVsZW1lbnQ6ICdkaXYnLFxuICAgICAgICBlcnJvckNsYXNzIDogJ3ZhbGlkYXRpb24tZXJyb3InLFxuICAgICAgICBpZ25vcmU6ICcuaWdub3JlLCA6aGlkZGVuJyxcbiAgICAgICAgbm9ybWFsaXplcjogZnVuY3Rpb24odmFsdWUpIHtcbiAgICAgICAgICAgIHJldHVybiAkLnRyaW0odmFsdWUpO1xuICAgICAgICB9LFxuICAgICAgICBlcnJvclBsYWNlbWVudDogZnVuY3Rpb24gKGVycm9yLCBlbGVtZW50KSB7XG4gICAgICAgICAgICBlcnJvci5hZGRDbGFzcygnaW52YWxpZC1mZWVkYmFjaycpO1xuICAgICAgICAgICAgZXJyb3IuaW5zZXJ0QWZ0ZXIoZWxlbWVudC5wYXJlbnQoKSk7XG4gICAgICAgIH0sXG4gICAgICAgIGhpZ2hsaWdodDogZnVuY3Rpb24gKGVsZW1lbnQsIGVycm9yQ2xhc3MsIHZhbGlkQ2xhc3MpIHtcbiAgICAgICAgICAgICQoZWxlbWVudCkuYWRkQ2xhc3MoJ2lzLWludmFsaWQnKS5yZW1vdmVDbGFzcygnaXMtdmFsaWQnKTtcbiAgICAgICAgICAgICQoZWxlbWVudC5mb3JtKS5maW5kKCdsYWJlbFtmb3I9JyArIGVsZW1lbnQuaWQgKyAnXScpLmFkZENsYXNzKCd0ZXh0LWRhbmdlcicpLnJlbW92ZUNsYXNzKCd0ZXh0LXN1Y2Nlc3MnKTtcbiAgICAgICAgICAgICQoZWxlbWVudCkubmV4dCgnLmlucHV0LWdyb3VwLWFwcGVuZCcpLmZpbmQoJy5pbnB1dC1ncm91cC10ZXh0JykuYWRkQ2xhc3MoJ2Vycm9yLWlucHV0LWdyb3VwJykucmVtb3ZlQ2xhc3MoJ3N1Y2Nlc3MtaW5wdXQtZ3JvdXAnKTtcbiAgICAgICAgfSxcbiAgICAgICAgdW5oaWdobGlnaHQ6IGZ1bmN0aW9uIChlbGVtZW50LCBlcnJvckNsYXNzLCB2YWxpZENsYXNzKSB7XG4gICAgICAgICAgICAkKGVsZW1lbnQpLmFkZENsYXNzKCdpcy12YWxpZCcpLnJlbW92ZUNsYXNzKCdpcy1pbnZhbGlkJyk7XG4gICAgICAgICAgICAkKGVsZW1lbnQuZm9ybSkuZmluZCgnbGFiZWxbZm9yPScgKyBlbGVtZW50LmlkICsgJ10nKS5hZGRDbGFzcygndGV4dC1zdWNjZXNzJykucmVtb3ZlQ2xhc3MoJ3RleHQtZGFuZ2VyJyk7XG4gICAgICAgICAgICAkKGVsZW1lbnQpLm5leHQoJy5pbnB1dC1ncm91cC1hcHBlbmQnKS5maW5kKCcuaW5wdXQtZ3JvdXAtdGV4dCcpLmFkZENsYXNzKCdzdWNjZXNzLWlucHV0LWdyb3VwJykucmVtb3ZlQ2xhc3MoJ2Vycm9yLWlucHV0LWdyb3VwJyk7XG4gICAgICAgIH0sXG4gICAgICAgIGludmFsaWRIYW5kbGVyOiBmdW5jdGlvbihldmVudCwgdmFsaWRhdG9yKSB7XG4gICAgICAgICAgICB2YXIgZXJyb3JzQ291bnQgPSB2YWxpZGF0b3IubnVtYmVyT2ZJbnZhbGlkcygpO1xuICAgICAgICAgICAgdG9hc3RyLnJlbW92ZSgpO1xuICAgICAgICAgICAgdG9hc3RyLmVycm9yKGxvY2FsaXphdGlvbkpzRGF0YU9iai5qcXZhbGlkYXRvcl9pbnZhbGlkX2hhbmRsZXJfdG9hc3RyID8/IFwiUGxlYXNlIHByb2NlZWQgd2l0aCB2YWxpZCBpbnB1dCBkYXRhIGFuZCB0cnkgYWdhaW4uXCIsIChsb2NhbGl6YXRpb25Kc0RhdGFPYmoub29wc19uX2ludmFsaWRfaW5wdXRfZm91bmQgIT09IHVuZGVmaW5lZCAmJiBsb2NhbGl6YXRpb25Kc0RhdGFPYmoub29wc19uX2ludmFsaWRfaW5wdXRfZm91bmQpID8gbG9jYWxpemF0aW9uSnNEYXRhT2JqLm9vcHNfbl9pbnZhbGlkX2lucHV0X2ZvdW5kLnJlcGxhY2UoJ1tlcnJvcl9jb250XScsIGVycm9yc0NvdW50KSA6ICdPb3BzISAnICsgZXJyb3JzQ291bnQgKyBcIiAtIEludmFsaWQgSW5wdXQgRm91bmRcIik7XG4gICAgICAgICAgICAkKCdodG1sLCBib2R5JykuYW5pbWF0ZSh7XG4gICAgICAgICAgICAgICAgc2Nyb2xsVG9wOiAkKHZhbGlkYXRvci5lcnJvckxpc3RbMF0uZWxlbWVudCkub2Zmc2V0KCkudG9wIC0gMjBcbiAgICAgICAgICAgIH0sIDYwMCk7XG4gICAgICAgICAgICAvL2NvbnNvbGUubG9nKHZhbGlkYXRvcik7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgIC8vRm9ybSByZXNldFxuICAgICQoJy5mb3JtLXJlc3QtYnRuJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgZm9ybUlEID0gJCh0aGlzKS5kYXRhKCdmb3JtaWQnKTtcbiAgICAgICAgJChcIiNcIiArIGZvcm1JRCkudmFsaWRhdGUoKS5yZXNldEZvcm0oKTtcbiAgICAgICAgJChcIiNcIiArIGZvcm1JRClbMF0ucmVzZXQoKTtcbiAgICAgICAgJChcIiN2YWxpZGF0aW9uRXJyb3JDb250YWluZXJcIikuaGlkZSgpO1xuICAgICAgICAkKFwiLmZvcm0tY29udHJvbFwiKS5yZW1vdmVDbGFzcygnaXMtdmFsaWQnKTtcbiAgICAgICAgJChcIi5mb3JtLWNvbnRyb2xcIikucmVtb3ZlQ2xhc3MoJ2lzLWludmFsaWQnKTtcbiAgICAgICAgJChcIi5mb3JtLWxiXCIpLnJlbW92ZUNsYXNzKCd0ZXh0LXN1Y2Nlc3MnKS5yZW1vdmVDbGFzcygndGV4dC1kYW5nZXInKTtcbiAgICAgICAgJChcIi5jdXN0b20tY2hlY2tib3hcIikuZmluZCgnaW5wdXRbdHlwZT1cImNoZWNrYm94XCJdJykucmVtb3ZlQ2xhc3MoJ2lzLXZhbGlkJykucmVtb3ZlQ2xhc3MoJ2lzLWludmFsaWQnKTtcbiAgICAgICAgJChcIi5jdXN0b20tY2hlY2tib3hcIikuZmluZCgnLmN1c3RvbS1jb250cm9sLWxhYmVsJykucmVtb3ZlQ2xhc3MoJ3RleHQtc3VjY2VzcycpLnJlbW92ZUNsYXNzKCd0ZXh0LWRhbmdlcicpO1xuICAgICAgICAkKFwiLmlucHV0LWdyb3VwLXRleHRcIikucmVtb3ZlQ2xhc3MoJ3N1Y2Nlc3MtaW5wdXQtZ3JvdXAnKS5yZW1vdmVDbGFzcygnZXJyb3ItaW5wdXQtZ3JvdXAnKTtcbiAgICAgICAgJChcIi5leWUtc2hvd0hpZGUtcGFzc3dvcmRcIikuYWRkQ2xhc3MoJ2Qtbm9uZScpO1xuICAgICAgICB0b2FzdHIucmVtb3ZlKCk7XG4gICAgICAgIC8vdG9hc3RyLmNsZWFyKCk7XG4gICAgfSk7XG5cbiAgICAvL3RleHRib3ggb25seSBhY2NlcHQgbnVtYmVycyBvciBkaWdpdHNcbiAgICAkKCdib2R5Jykub24oJ2tleXByZXNzJywgJy5vbmx5TnVtYmVyJywgZnVuY3Rpb24oZXZlbnQpIHtcbiAgICBcdHZhciBjaGFyQ29kZSA9IChldmVudC53aGljaCkgPyBldmVudC53aGljaCA6IGV2ZW50LmtleUNvZGU7XG4gICAgXHRpZiAoY2hhckNvZGUgPiAzMSAmJiAoY2hhckNvZGUgPCA0OCB8fCBjaGFyQ29kZSA+IDU3KSlcbiAgICAgIFx0XHRyZXR1cm4gZmFsc2U7XG4gICAgXHRyZXR1cm4gdHJ1ZTtcblx0fSk7XG5cbiAgICAvL3Nob3cgYW5kIGhpZGUgcGFzc3dvcmQgZmllbGRzXG4gICAgJCgnYm9keScpLm9uKCdjbGljaycsICcuZXllLXNob3dIaWRlLXBhc3N3b3JkJywgZnVuY3Rpb24oKSB7XG4gICAgICAgIGlmICgkKHRoaXMpLmhhc0NsYXNzKCdmYS1leWUnKSkge1xuICAgICAgICAgICAgJCh0aGlzKS5hZGRDbGFzcygnZmEtZXllLXNsYXNoJykucmVtb3ZlQ2xhc3MoJ2ZhLWV5ZScpO1xuICAgICAgICAgICAgJCgnLmV5ZS1wYXNzd29yZCcpLmF0dHIoJ3R5cGUnLCAndGV4dCcpO1xuICAgICAgICB9IGVsc2UgeyBcbiAgICAgICAgICAgICQodGhpcykuYWRkQ2xhc3MoJ2ZhLWV5ZScpLnJlbW92ZUNsYXNzKCdmYS1leWUtc2xhc2gnKTtcbiAgICAgICAgICAgICQoJy5leWUtcGFzc3dvcmQnKS5hdHRyKCd0eXBlJywgJ3Bhc3N3b3JkJyk7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgICQoJ2JvZHknKS5vbigna2V5dXAnLCAnLmV5ZS1wYXNzd29yZCcsIGZ1bmN0aW9uKCkge1xuICAgICAgICBpZiAoJCh0aGlzKS52YWwoKS5sZW5ndGggPj0gMSkge1xuICAgICAgICAgICAgJCh0aGlzKS5wYXJlbnRzKCcuZm9ybS1ncm91cCcpLmZpbmQoJy5leWUtc2hvd0hpZGUtcGFzc3dvcmQnKS5yZW1vdmVDbGFzcygnZC1ub25lJyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAkKHRoaXMpLnBhcmVudHMoJy5mb3JtLWdyb3VwJykuZmluZCgnLmV5ZS1zaG93SGlkZS1wYXNzd29yZCcpLmFkZENsYXNzKCdkLW5vbmUnKTtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgLy9JZiAtIGFwcCBpbiBwcm9kdWN0aW9uIGVudmlyb25tZW50IFxuICAgIGlmICgkKCcjZW52TW9kZScpLnZhbCgpICE9IHVuZGVmaW5lZCAmJiAkKCcjZW52TW9kZScpLnZhbCgpLnRvTG93ZXJDYXNlKCkgPT0gJ3Byb2R1Y3Rpb24nICYmICQoJyNpc0RlYnVnJykudmFsKCkgIT0gdW5kZWZpbmVkICYmICEkKCcjaXNEZWJ1ZycpLnZhbCgpKSB7XG4gICAgICAgIFxuICAgICAgICAvL0Rpc2FibGUgcmlnaHQtY2xpY2tcbiAgICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY29udGV4dG1lbnUnLCAoZXZlbnQpID0+IGV2ZW50LnByZXZlbnREZWZhdWx0KCkpO1xuXG4gICAgICAgIGRvY3VtZW50Lm9ua2V5ZG93biA9IChldmVudCkgPT4ge1xuICAgICAgICAgICAgLy9EaXNhYmxlIEYxMiwgQ3RybCArIFNoaWZ0ICsgSSwgQ3RybCArIFNoaWZ0ICsgQywgQ3RybCArIFNoaWZ0ICsgSiwgQ3RybCArIFUsXG4gICAgICAgICAgICBpZiAoZXZlbnQuY29kZSA9PSAnRjEyJyB8fCBldmVudC5rZXkgPT0gJ0YxMicgfHwgZXZlbnQua2V5Q29kZSA9PT0gMTIzIHx8IGV2ZW50LndoaWNoID09PSAxMjMpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBpZihldmVudC5jdHJsS2V5ICYmIGV2ZW50LnNoaWZ0S2V5ICYmIGV2ZW50LmtleUNvZGUgPT09ICdJJy5jaGFyQ29kZUF0KDApKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYoZXZlbnQuY3RybEtleSAmJiBldmVudC5zaGlmdEtleSAmJiBldmVudC5rZXlDb2RlID09PSAnQycuY2hhckNvZGVBdCgwKSkge1xuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIGlmKGV2ZW50LmN0cmxLZXkgJiYgZXZlbnQuc2hpZnRLZXkgJiYgZXZlbnQua2V5Q29kZSA9PT0gJ0onLmNoYXJDb2RlQXQoMCkpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBpZihldmVudC5jdHJsS2V5ICYmIGV2ZW50LmtleUNvZGUgPT09ICdVJy5jaGFyQ29kZUF0KDApKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9O1xuICAgIH1cbiAgICBcbiAgICAkKCcjY2hhbmdlTG9jYWxpemF0aW9uJykub24oJ2NoYW5nZScsIGZ1bmN0aW9uKCkge1xuICAgICAgICBpZiAoJCh0aGlzKS52YWwoKSAhPSAnJykge1xuICAgICAgICAgICAgbGV0IGxhbmcgPSAkKHRoaXMpLnZhbCgpO1xuICAgICAgICAgICAgU3dhbC5maXJlKHtcbiAgICAgICAgICAgICAgICB0aXRsZTogbG9jYWxpemF0aW9uSnNEYXRhT2JqLnN3aXRjaGluZ19sYW5ndWFnZV9sb2FkaW5nX3RleHQgPz8gJ1N3aXRjaGluZyB5b3VyIGxhbmd1YWdlJyxcbiAgICAgICAgICAgICAgICB0ZXh0OiBsb2NhbGl6YXRpb25Kc0RhdGFPYmoucGxlYXNlX3dhaXQgPz8gJ1BsZWFzZSB3YWl0Li4uJyxcbiAgICAgICAgICAgICAgICBkaWRPcGVuOiAoKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIFN3YWwuc2hvd0xvYWRpbmcoKVxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgbGV0IGxvY2FsZVVybCA9IHdpbmRvdy5sb2NhdGlvbi5wcm90b2NvbCArICcvLycgKyB3aW5kb3cubG9jYXRpb24uaG9zdCArICcvJyArICdsb2NhbGUvJyArIGxhbmc7XG4gICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGxvY2FsZVVybDtcbiAgICAgICAgfVxuICAgIH0pXG59KTtcblxuIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLFlBQVc7RUFFVEEsQ0FBQyxDQUFDLHlCQUFELENBQUQsQ0FBNkJDLE9BQTdCLEdBRlMsQ0FJVDs7RUFDQUMsTUFBTSxDQUFDQyxPQUFQLEdBQWlCO0lBQ2IsZUFBZSxJQURGO0lBRWIsU0FBUyxLQUZJO0lBR2IsZUFBZSxJQUhGO0lBSWIsZUFBZSxJQUpGO0lBS2IsaUJBQWlCLHdCQUxKO0lBTWIscUJBQXFCLElBTlI7SUFPYixXQUFXLElBUEU7SUFRYixnQkFBZ0IsS0FSSDtJQVNiLGdCQUFnQixNQVRIO0lBVWIsV0FBVyxNQVZFO0lBV2IsbUJBQW1CLE1BWE47SUFZYixjQUFjLE9BWkQ7SUFhYixjQUFjLFFBYkQ7SUFjYixjQUFjLFFBZEQ7SUFlYixjQUFjO0VBZkQsQ0FBakIsQ0FMUyxDQXVCVDs7RUFDQUMsTUFBTSxDQUFDQyxTQUFQLENBQWlCQyxXQUFqQixDQUE2QjtJQUN6QkMsS0FBSyxFQUFFLEtBRGtCO0lBRXpCQyxZQUFZLEVBQUUsS0FGVztJQUd6QkMsVUFBVSxFQUFHLGtCQUhZO0lBSXpCQyxNQUFNLEVBQUUsa0JBSmlCO0lBS3pCQyxVQUFVLEVBQUUsb0JBQVNDLEtBQVQsRUFB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\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/js/validator-regx.js":
/*!****************************************!*\
  !*** ./resources/js/validator-regx.js ***!
  \****************************************/
/***/ (() => {

eval("$.validator.addMethod(\"checklower\", function (value) {\n  return /[a-z]/.test(value);\n});\n$.validator.addMethod(\"checkupper\", function (value) {\n  return /[A-Z]/.test(value);\n});\n$.validator.addMethod(\"checkdigit\", function (value) {\n  return /[0-9]/.test(value);\n});\n$.validator.addMethod(\"checksymbol\", function (value) {\n  return /[!@#$%&*]/.test(value);\n});\n$.validator.addMethod(\"onlytext\", function (value) {\n  return /^[A-Za-z]+$/.test(value);\n});\n$.validator.addMethod(\"textwithspace\", function (value) {\n  return /^[A-Z a-z]+$/.test(value);\n});\nvar disposableEmailDomain = ['mailinator.com', 'yopmail.com', 'falltrack.net', 'tmmbt.com', 'explodemail.com'];\n$.validator.addMethod(\"disposableEmail\", function (value, element, params) {\n  var domain = value.split('@')[1];\n  return !disposableEmailDomain.includes(domain.toLowerCase());\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvdmFsaWRhdG9yLXJlZ3guanMuanMiLCJuYW1lcyI6WyIkIiwidmFsaWRhdG9yIiwiYWRkTWV0aG9kIiwidmFsdWUiLCJ0ZXN0IiwiZGlzcG9zYWJsZUVtYWlsRG9tYWluIiwiZWxlbWVudCIsInBhcmFtcyIsImRvbWFpbiIsInNwbGl0IiwiaW5jbHVkZXMiLCJ0b0xvd2VyQ2FzZSJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3ZhbGlkYXRvci1yZWd4LmpzP2ZhMDEiXSwic291cmNlc0NvbnRlbnQiOlsiJC52YWxpZGF0b3IuYWRkTWV0aG9kKFwiY2hlY2tsb3dlclwiLCBmdW5jdGlvbih2YWx1ZSkge1xuICAgIHJldHVybiAvW2Etel0vLnRlc3QodmFsdWUpO1xufSk7XG4kLnZhbGlkYXRvci5hZGRNZXRob2QoXCJjaGVja3VwcGVyXCIsIGZ1bmN0aW9uKHZhbHVlKSB7XG4gICAgcmV0dXJuIC9bQS1aXS8udGVzdCh2YWx1ZSk7XG59KTtcbiQudmFsaWRhdG9yLmFkZE1ldGhvZChcImNoZWNrZGlnaXRcIiwgZnVuY3Rpb24odmFsdWUpIHtcbiAgICByZXR1cm4gL1swLTldLy50ZXN0KHZhbHVlKTtcbn0pO1xuJC52YWxpZGF0b3IuYWRkTWV0aG9kKFwiY2hlY2tzeW1ib2xcIiwgZnVuY3Rpb24odmFsdWUpIHtcbiAgICByZXR1cm4gL1shQCMkJSYqXS8udGVzdCh2YWx1ZSk7XG59KTtcbiQudmFsaWRhdG9yLmFkZE1ldGhvZChcIm9ubHl0ZXh0XCIsIGZ1bmN0aW9uKHZhbHVlKSB7XG4gICAgcmV0dXJuIC9eW0EtWmEtel0rJC8udGVzdCh2YWx1ZSk7XG59KTtcbiQudmFsaWRhdG9yLmFkZE1ldGhvZChcInRleHR3aXRoc3BhY2VcIiwgZnVuY3Rpb24odmFsdWUpIHtcbiAgICByZXR1cm4gL15bQS1aIGEtel0rJC8udGVzdCh2YWx1ZSk7XG59KTtcbmNvbnN0IGRpc3Bvc2FibGVFbWFpbERvbWFpbiA9IFsnbWFpbGluYXRvci5jb20nLCAneW9wbWFpbC5jb20nLCAnZmFsbHRyYWNrLm5ldCcsICd0bW1idC5jb20nLCAnZXhwbG9kZW1haWwuY29tJ107XG4kLnZhbGlkYXRvci5hZGRNZXRob2QoXCJkaXNwb3NhYmxlRW1haWxcIiwgZnVuY3Rpb24odmFsdWUsIGVsZW1lbnQsIHBhcmFtcykge1xuICAgIHZhciBkb21haW4gPSB2YWx1ZS5zcGxpdCgnQCcpWzFdO1xuICAgIHJldHVybiAhZGlzcG9zYWJsZUVtYWlsRG9tYWluLmluY2x1ZGVzKGRvbWFpbi50b0xvd2VyQ2FzZSgpKTtcbn0pOyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsU0FBRixDQUFZQyxTQUFaLENBQXNCLFlBQXRCLEVBQW9DLFVBQVNDLEtBQVQsRUFBZ0I7RUFDaEQsT0FBTyxRQUFRQyxJQUFSLENBQWFELEtBQWIsQ0FBUDtBQUNILENBRkQ7QUFHQUgsQ0FBQyxDQUFDQyxTQUFGLENBQVlDLFNBQVosQ0FBc0IsWUFBdEIsRUFBb0MsVUFBU0MsS0FBVCxFQUFnQjtFQUNoRCxPQUFPLFFBQVFDLElBQVIsQ0FBYUQsS0FBYixDQUFQO0FBQ0gsQ0FGRDtBQUdBSCxDQUFDLENBQUNDLFNBQUYsQ0FBWUMsU0FBWixDQUFzQixZQUF0QixFQUFvQyxVQUFTQyxLQUFULEVBQWdCO0VBQ2hELE9BQU8sUUFBUUMsSUFBUixDQUFhRCxLQUFiLENBQVA7QUFDSCxDQUZEO0FBR0FILENBQUMsQ0FBQ0MsU0FBRixDQUFZQyxTQUFaLENBQXNCLGFBQXRCLEVBQXFDLFVBQVNDLEtBQVQsRUFBZ0I7RUFDakQsT0FBTyxZQUFZQyxJQUFaLENBQWlCRCxLQUFqQixDQUFQO0FBQ0gsQ0FGRDtBQUdBSCxDQUFDLENBQUNDLFNBQUYsQ0FBWUMsU0FBWixDQUFzQixVQUF0QixFQUFrQyxVQUFTQyxLQUFULEVBQWdCO0VBQzlDLE9BQU8sY0FBY0MsSUFBZCxDQUFtQkQsS0FBbkIsQ0FBUDtBQUNILENBRkQ7QUFHQUgsQ0FBQyxDQUFDQyxTQUFGLENBQVlDLFNBQVosQ0FBc0IsZUFBdEIsRUFBdUMsVUFBU0MsS0FBVCxFQUFnQjtFQUNuRCxPQUFPLGVBQWVDLElBQWYsQ0FBb0JELEtBQXBCLENBQVA7QUFDSCxDQUZEO0FBR0EsSUFBTUUscUJBQXFCLEdBQUcsQ0FBQyxnQkFBRCxFQUFtQixhQUFuQixFQUFrQyxlQUFsQyxFQUFtRCxXQUFuRCxFQUFnRSxpQkFBaEUsQ0FBOUI7QUFDQUwsQ0FBQyxDQUFDQyxTQUFGLENBQVlDLFNBQVosQ0FBc0IsaUJBQXRCLEVBQXlDLFVBQVNDLEtBQVQsRUFBZ0JHLE9BQWhCLEVBQXlCQyxNQUF6QixFQUFpQztFQUN0RSxJQUFJQyxNQUFNLEdBQUdMLEtBQUssQ0FBQ00sS0FBTixDQUFZLEdBQVosRUFBaUIsQ0FBakIsQ0FBYjtFQUNBLE9BQU8sQ0FBQ0oscUJBQXFCLENBQUNLLFFBQXRCLENBQStCRixNQUFNLENBQUNHLFdBQVAsRUFBL0IsQ0FBUjtBQUNILENBSEQifQ==\n//# sourceURL=webpack-internal:///./resources/js/validator-regx.js\n");

/***/ }),

/***/ "./resources/css/signinup.css":
/*!************************************!*\
  !*** ./resources/css/signinup.css ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvY3NzL3NpZ25pbnVwLmNzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvY3NzL3NpZ25pbnVwLmNzcz80ZWZiIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/css/signinup.css\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/signinup.min": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/signinup.min"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/signinup.min"], () => (__webpack_require__("./resources/js/validator-regx.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/signinup.min"], () => (__webpack_require__("./resources/css/signinup.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;