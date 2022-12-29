$(function() {
    $('body').on('blur', '.partial-signup', function () {

        let _namePrefix = _fname = _mname = _lname = _email = _phno = _busiName = _sex = '';

        let _csrfToken = $('meta[name="csrf-token"]').attr('content');

        if ($('select[name="salutation"]').val() != undefined && $('select[name="salutation"]').val() != '') {
            _namePrefix = $('select[name="salutation"]').val();
        }
        if ($('input[name="first_name"]').val() != undefined && $('input[name="first_name"]').val() != '') {
            _fname = $('input[name="first_name"]').val();
        } 
        if ($('input[name="middle_name"]').val() != undefined && $('input[name="middle_name"]').val() != '') {
            _mname = $('input[name="middle_name"]').val();
        }
        if ($('input[name="last_name"]').val() != undefined && $('input[name="last_name"]').val() != '') {
            _lname = $('input[name="last_name"]').val();
        }
        if ($('input[name="email_id"]').val() != undefined && $('input[name="email_id"]').val() != '') {
            _email = $('input[name="email_id"]').val();
        }
        if ($('input[name="mobile_number"]').val() != undefined && $('input[name="mobile_number"]').val() != '') {
            _phno = $('input[name="mobile_number"]').val();
        }
        if ($('input[name="business_name"]').val() != undefined && $('input[name="business_name"]').val() != '') {
            _busiName = $('input[name="business_name"]').val();
        }
        if ($('input[name="sex"]').val() != undefined && $('input[name="sex"]').val() != '') {
            _sex = $('input[name="sex"]').val();
        }

        if (_fname != '' && _email != '') {
        
            let _referUrl = '';
            if ($('input[name="referrer_url"]').val() != undefined && $('input[name="referrer_url"]').val() != '') {
                _referUrl = $('input[name="referrer_url"]').val();
            }

            let _postUrl = window.location.protocol + '//' + window.location.host + '/create-business-account/signup-partial';
            let _pathUrl = window.location.pathname;
            let _qstrUrl = window.location.search;
            let _hashUrl = window.location.hash;
            let _fullUrl = window.location.href;

            let urlObj = new URL(_fullUrl);
            let _params = urlObj.searchParams;

            let _tempLayout = 'default';
            if (_params.has('layout')) {
                _tempLayout = search_params.get('layout');
            }

            $.ajax({
                type: 'POST',
                url: _postUrl,
                data: {
                    _token: _csrfToken,
                    salutation: _namePrefix,
                    first_name: _fname,
                    middle_name: _mname,
                    last_name: _lname,
                    email: _email,
                    mobile_number: _phno,
                    business_name: _busiName,
                    gender: _sex,
                    layout: _tempLayout,
                    url_qstr: _qstrUrl,
                    url_hash: _hashUrl,
                    url_full: _fullUrl,
                    url_refer: _referUrl
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