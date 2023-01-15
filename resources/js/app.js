$(function() {
    
    $('[data-toggle="tooltip"]').tooltip();

    //Default settings toastr
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "custom-toastr-position",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    //Default setting for jQuey validator
    jQuery.validator.setDefaults({
        debug: false,
        errorElement: 'div',
        errorClass : 'validation-error',
        ignore: '.ignore, :hidden',
        normalizer: function(value) {
            return $.trim(value);
        },
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            error.insertAfter(element.parent());
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid').removeClass('is-valid');
            $(element.form).find('label[for=' + element.id + ']').addClass('text-danger').removeClass('text-success');
            $(element).next('.input-group-append').find('.input-group-text').addClass('error-input-group').removeClass('success-input-group');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass('is-valid').removeClass('is-invalid');
            $(element.form).find('label[for=' + element.id + ']').addClass('text-success').removeClass('text-danger');
            $(element).next('.input-group-append').find('.input-group-text').addClass('success-input-group').removeClass('error-input-group');
        },
        invalidHandler: function(event, validator) {
            var errorsCount = validator.numberOfInvalids();
            toastr.remove();
            toastr.error("Please proceed with valid input data and try again.", 'Oops! ' + errorsCount + " - Invalid Input Found");
            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top - 20
            }, 600);
            //console.log(validator);
        }
    });

    //Form reset
    $('.form-rest-btn').on('click', function () {
        var formID = $(this).data('formid');
        $("#" + formID).validate().resetForm();
        $("#" + formID)[0].reset();
        $("#validationErrorContainer").hide();
        $(".form-control").removeClass('is-valid');
        $(".form-control").removeClass('is-invalid');
        $(".form-lb").removeClass('text-success').removeClass('text-danger');
        $(".custom-checkbox").find('input[type="checkbox"]').removeClass('is-valid').removeClass('is-invalid');
        $(".custom-checkbox").find('.custom-control-label').removeClass('text-success').removeClass('text-danger');
        $(".input-group-text").removeClass('success-input-group').removeClass('error-input-group');
        $(".eye-showHide-password").addClass('d-none');
        toastr.remove();
        //toastr.clear();
    });

    //textbox only accept numbers or digits
    $('body').on('keypress', '.onlyNumber', function(event) {
    	var charCode = (event.which) ? event.which : event.keyCode;
    	if (charCode > 31 && (charCode < 48 || charCode > 57))
      		return false;
    	return true;
	});

    //show and hide password fields
    $('body').on('click', '.eye-showHide-password', function() {
        if ($(this).hasClass('fa-eye')) {
            $(this).addClass('fa-eye-slash').removeClass('fa-eye');
            $('.eye-password').attr('type', 'text');
        } else { 
            $(this).addClass('fa-eye').removeClass('fa-eye-slash');
            $('.eye-password').attr('type', 'password');
        }
    });

    $('body').on('keyup', '.eye-password', function() {
        if ($(this).val().length >= 1) {
            $(this).parents('.form-group').find('.eye-showHide-password').removeClass('d-none');
        } else {
            $(this).parents('.form-group').find('.eye-showHide-password').addClass('d-none');
        }
    });

    //If - app in production environment 
    if ($('#envMode').val() != undefined && $('#envMode').val().toLowerCase() == 'production' && $('#isDebug').val() != undefined && !$('#isDebug').val()) {
        
        //Disable right-click
        document.addEventListener('contextmenu', (event) => event.preventDefault());

        document.onkeydown = (event) => {
            //Disable F12, Ctrl + Shift + I, Ctrl + Shift + C, Ctrl + Shift + J, Ctrl + U,
            if (event.code == 'F12' || event.key == 'F12' || event.keyCode === 123 || event.which === 123) {
                return false;
            }
            if(event.ctrlKey && event.shiftKey && event.keyCode === 'I'.charCodeAt(0)) {
                return false;
            }
            if(event.ctrlKey && event.shiftKey && event.keyCode === 'C'.charCodeAt(0)) {
                return false;
            }
            if(event.ctrlKey && event.shiftKey && event.keyCode === 'J'.charCodeAt(0)) {
                return false;
            }
            if(event.ctrlKey && event.keyCode === 'U'.charCodeAt(0)) {
                return false;
            }
        };
    }

    $('#changeLocalization').on('change', function() {
        if ($(this).val() != '') {
            let lang = $(this).val();
            Swal.fire({
                title: 'Switching your language',
                text: 'Please wait...',
                didOpen: () => {
                    Swal.showLoading()
                }
            });
            let localeUrl = window.location.protocol + '//' + window.location.host + '/' + 'locale/' + lang;
            window.location.href = localeUrl;
        }
    })
});

