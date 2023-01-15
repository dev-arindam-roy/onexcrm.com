$(function() {
    $('body').on('blur', '.partial-signup', function () {

        let _partialNamePrefix = '';
        let _partialFirstName = '';
        let _partialMiddleName = '';
        let _partialLastName = '';
        let _partialEmail = '';
        let _partialMobileNo = '';
        let _partialBusinessName = '';
        let _partialSex = '';

        let _referrerUrl = '';

        let _csrfToken = $('meta[name="csrf-token"]').attr('content');

        if ($('select[name="salutation"]').val() != undefined && $('select[name="salutation"]').val() != '') {
            _partialNamePrefix = $('select[name="salutation"]').val();
        }
        if ($('input[name="first_name"]').val() != undefined && $('input[name="first_name"]').val() != '') {
            _partialFirstName = $('input[name="first_name"]').val();
        } 
        if ($('input[name="middle_name"]').val() != undefined && $('input[name="middle_name"]').val() != '') {
            _partialMiddleName = $('input[name="middle_name"]').val();
        }
        if ($('input[name="last_name"]').val() != undefined && $('input[name="last_name"]').val() != '') {
            _partialLastName = $('input[name="last_name"]').val();
        }
        if ($('input[name="email_id"]').val() != undefined && $('input[name="email_id"]').val() != '') {
            _partialEmail = $('input[name="email_id"]').val();
        }
        if ($('input[name="mobile_number"]').val() != undefined && $('input[name="mobile_number"]').val() != '') {
            _partialMobileNo = $('input[name="mobile_number"]').val();
        }
        if ($('input[name="business_name"]').val() != undefined && $('input[name="business_name"]').val() != '') {
            _partialBusinessName = $('input[name="business_name"]').val();
        }
        if ($('input[name="sex"]').val() != undefined && $('input[name="sex"]').val() != '') {
            _partialSex = $('input[name="sex"]').val();
        }
        if ($('input[name="referrer_url"]').val() != undefined && $('input[name="referrer_url"]').val() != '') {
            _referrerUrl = $('input[name="referrer_url"]').val();
        }

        if (_partialFirstName != '' && (_partialEmail != '' || _partialMobileNo != '')) {
        
            let _urlProtocol = window.location.protocol;
            let _urlHost = window.location.host;
            let _urlPath = window.location.pathname;
            let _urlQstr = window.location.search;
            let _urlHash = window.location.hash;
            let _urlFull = window.location.href;

            let _urlObj = new URL(_urlFull);
            let _params = _urlObj.searchParams;

            let _tempLayout = 'default';
            if (_params.has('layout')) {
                _tempLayout = search_params.get('layout');
            }

            let _partialSignupRoute = 'create-business-account/signup-partial';
            let _partialSignupUrl = _urlProtocol + '//' + _urlHost + '/' + _partialSignupRoute;

            $.ajax({
                type: 'POST',
                url: _partialSignupUrl,
                data: {
                    _token: _csrfToken,
                    salutation: _partialNamePrefix,
                    first_name: _partialFirstName,
                    middle_name: _partialMiddleName,
                    last_name: _partialLastName,
                    email: _partialEmail,
                    mobile_number: _partialMobileNo,
                    business_name: _partialBusinessName,
                    gender: _partialSex,
                    layout: _tempLayout,
                    url_qstr: _urlQstr,
                    url_hash: _urlHash,
                    url_full: _urlFull,
                    url_refer: _referrerUrl
                },
                dataType: 'json',
                cache: false,
                beforeSend: function() {
                    
                },
                success: function(responseData) {
                    
                },
                error: function (xhr, status, error) {
                }
            });
        }
    });
});