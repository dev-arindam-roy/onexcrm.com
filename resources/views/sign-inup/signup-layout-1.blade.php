@extends('sign-inup.layouts.layout')

@section('page_title', '| Create Account')

@push('page_css')
<style type="text/css">
.body-bgcolor {
    background-color: #A9C9FF;
    background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%);
}
</style>
@endpush

@section('page_content')
    @include('sign-inup.layouts.partials.change-localization', array('style_mode' => 'default'))
    <div class="container-fluid" id="signupLayout1">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-6 col-lg-5 p-0 mt-3 mb-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a href="{{ route('signup.businessAccount') }}">
                                    <img src="{{ asset(config('onex.asset_path') . 'master-assets/images/onex-logo-text.png') }}" alt="{{ env('crm_name', 'onexcrm-logo') }}" title="{{ env('crm_name', 'onexcrm') }}" class="img-fluid crm-signup-header-logo" />
                                </a>
                            </div>
                            <div class="col-md-6">
                                <p class="signinup-box-msg text-primary text-right">{{ __('label.signup.create_account.title') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form name="signupFrm" id="signupFrm" action="{{ route('signup.businessAccount.process') }}" method="POST" autocomplete="off">
                            @csrf
                            @include('sign-inup.layouts.partials.signup-hidden-fields')
                            @include('common.validation-summary')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb @if ($errors->signupErrorBag->has('first_name')) text-danger @endif" for="AccountFirstName">{{ __('label.form.field.first_name') }}: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="2" maxlength="30" required="required" -->
                                            <input type="text" name="first_name" id="AccountFirstName" class="partial-signup form-control @if ($errors->signupErrorBag->has('first_name')) is-invalid @endif" placeholder="{{ __('label.form.field.placeholder.enter_first_name') }}" autocomplete="off" value="{{old('first_name')}}" />
                                            <div class="input-group-append">
                                                <div class="input-group-text @if ($errors->signupErrorBag->has('first_name')) error-input-group @endif">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->signupErrorBag->has('first_name'))
                                            <div class="validation-error">{{ $errors->signupErrorBag->first('first_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb @if ($errors->signupErrorBag->has('last_name')) text-danger @endif" for="AccountLastName">{{ __('label.form.field.last_name') }}: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="2" maxlength="30" required="required" -->
                                            <input type="text" name="last_name" id="AccountLastName" class="partial-signup form-control @if ($errors->signupErrorBag->has('last_name')) is-invalid @endif" placeholder="{{ __('label.form.field.placeholder.enter_last_name') }}" autocomplete="off" value="{{old('last_name')}}" />
                                            <div class="input-group-append">
                                                <div class="input-group-text @if ($errors->signupErrorBag->has('last_name')) error-input-group @endif">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->signupErrorBag->has('last_name'))
                                            <div class="validation-error">{{ $errors->signupErrorBag->first('last_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb @if ($errors->signupErrorBag->has('email_id')) text-danger @endif" for="AccountEmailId">{{ __('label.form.field.email_id') }}: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- maxlength="60" required="required" -->
                                            <input type="email" name="email_id" id="AccountEmailId" class="partial-signup form-control @if ($errors->signupErrorBag->has('email_id')) is-invalid @endif" placeholder="{{ __('label.form.field.placeholder.enter_email_id') }}" autocomplete="off" value="{{old('email_id')}}" />
                                            <div class="input-group-append">
                                                <div class="input-group-text @if ($errors->signupErrorBag->has('email_id')) error-input-group @endif">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->signupErrorBag->has('email_id'))
                                            <div class="validation-error">{{ $errors->signupErrorBag->first('email_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb @if ($errors->signupErrorBag->has('mobile_number')) text-danger @endif" for="AccountMobileNo">{{ __('label.form.field.mobile_number') }}: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="10" maxlength="12" required="required" -->
                                            <input type="text" name="mobile_number" id="AccountMobileNo" class="partial-signup form-control onlyNumber @if ($errors->signupErrorBag->has('mobile_number')) is-invalid @endif" placeholder="{{ __('label.form.field.placeholder.enter_mobile_number') }}" autocomplete="off" value="{{old('mobile_number')}}" />
                                            <div class="input-group-append">
                                                <div class="input-group-text @if ($errors->signupErrorBag->has('mobile_number')) error-input-group @endif">
                                                    <span class="fas fa-mobile" style="margin-left: 3px;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->signupErrorBag->has('mobile_number'))
                                            <div class="validation-error">{{ $errors->signupErrorBag->first('mobile_number') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb @if ($errors->signupErrorBag->has('password')) text-danger @endif" for="AccountPassword">{{ __('label.form.field.password') }}: <em>*</em></label> 
                                        <a data-toggle="tooltip" data-placement="bottom" data-html="true" title="<div class='text-left'>{{ __('label.password_info_uppercase') }}<br/>{{ __('label.password_info_lowercase') }}<br/>{{ __('label.password_info_number') }}<br/>{{ __('label.password_info_special_char') }}<br/>{{ __('label.password_info_minimum_length') }}</div>"><i class="fas fa-info-circle"></i></a>
                                        <span class="float-right mr-2"><i class="far fa-eye eye-showHide-password d-none"></i></span>
                                        <div class="input-group">
                                            <!-- minlength="8" maxlength="20" required="required" -->
                                            <input type="password" name="password" id="AccountPassword" class="form-control eye-password @if ($errors->signupErrorBag->has('password')) is-invalid @endif" placeholder="{{ __('label.form.field.placeholder.enter_password') }} (Ex:Test#1234)" autocomplete="off" />
                                            <div class="input-group-append">
                                                <div class="input-group-text @if ($errors->signupErrorBag->has('password')) error-input-group @endif">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->signupErrorBag->has('password'))
                                            <div class="validation-error">{{ $errors->signupErrorBag->first('password') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb @if ($errors->signupErrorBag->has('password_confirmation')) text-danger @endif" for="AccountConfirmPassword">{{ __('label.form.field.confirm_password') }}: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="8" maxlength="20" required="required" -->
                                            <input type="password" name="password_confirmation" id="AccountConfirmPassword" class="form-control eye-password @if ($errors->signupErrorBag->has('password_confirmation')) is-invalid @endif" placeholder="{{ __('label.form.field.placeholder.enter_confirm_password') }}" autocomplete="off" />
                                            <div class="input-group-append">
                                                <div class="input-group-text @if ($errors->signupErrorBag->has('password_confirmation')) error-input-group @endif">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->signupErrorBag->has('password_confirmation'))
                                            <div class="validation-error">{{ $errors->signupErrorBag->first('password_confirmation') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb @if ($errors->signupErrorBag->has('business_name')) text-danger @endif" for="AccountBrand">{{ __('label.form.field.business_name') }}: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="2" maxlength="60" required="required" -->
                                            <input type="text" name="business_name" id="AccountBrand" class="partial-signup form-control @if ($errors->signupErrorBag->has('business_name')) is-invalid @endif" placeholder="{{ __('label.form.field.placeholder.enter_businessname') }}" autocomplete="off" value="{{old('business_name')}}" />
                                            <div class="input-group-append">
                                                <div class="input-group-text @if ($errors->signupErrorBag->has('business_name')) error-input-group @endif">
                                                    <span class="fas fa-building"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->signupErrorBag->has('business_name'))
                                            <div class="validation-error">{{ $errors->signupErrorBag->first('business_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <!-- required="required" -->
                                        <input name="signup_terms" class="custom-control-input custom-control-input-primary @if ($errors->signupErrorBag->has('signup_terms')) is-invalid @endif" type="checkbox" id="AccountTerms" value="1" @if (old('signup_terms') == 1) checked="checked" @endif />
                                        <label for="AccountTerms" class="custom-control-label @if ($errors->signupErrorBag->has('signup_terms')) text-danger @endif">{{ __('label.i_agree_to_the') }} <a href="#">{{ __('label.terms_and_conditions') }}</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" id="signupBtn" class="btn btn-block btn-success">{{ __('label.button.create_my_business_account') }}</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="reset" class="form-rest-btn btn btn-block btn-secondary" data-formid="signupFrm">{{ __('label.button.reset_try_again') }}</button>
                                </div>
                            </div>
                        </form>
                        <div class="social-auth-links text-center">
                            <p><b>- {{ __('label.or') }} -</b></p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('social.signinup.redirect', array('provider_name' => 'facebook')) }}" class="btn btn-block btn-primary">
                                    <i class="fab fa-facebook mr-2"></i>
                                    {{ __('label.button.facebook_signup') }}
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('social.signinup.redirect', array('provider_name' => 'google')) }}" class="btn btn-block btn-danger mt-resp-10">
                                    <i class="fab fa-google-plus mr-2"></i>
                                    {{ __('label.button.google_signup') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center mt-2"><a href="" class="text-center">{{ __('label.signup.create_account.link.already_have_account') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js')
<script>
$(function() {
    
    /** NEED TO REMOVE :: test the validation in ajax response back */
    /*
    $('#signupBtn').on('click', function() {
        $.ajax({
            type: $('#signupFrm').attr('method'),
            url: $('#signupFrm').attr('action'),
            data: $('#signupFrm').serialize() + '&layout=1&signup_time=40',
            headers: {
                'request-key':"{{ env('REQUEST_KEY') }}",
                'request-crm':"{{ env('REQUEST_END') }}",
            },
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                //toastr.clear();
                toastr.remove();
                swalLoading();
            },
            success: function(responseData) {
                swalClose();
                if (responseData.status == 203 || responseData.body.type == 'VALIDATION_ERROR') {
                    validationErrorDisply(responseData, true);
                }
            },
            error: function (xhr, status, error) {
            }
        })
    });
    */
    /*
    var signupTime = 0;
    var formId = $('#signupFrm');
    formId.validate({
        rules: {
            first_name: {
                required: true,
                nowhitespace: true,
                onlytext: true,
                minlength: 2,
                maxlength: 30
            },
            last_name: {
                required: true,
                nowhitespace: true,
                onlytext: true,
                minlength: 2,
                maxlength: 30
            },
            email_id: {
                required: true,
                email: true,
                disposableEmail: true,
                maxlength: 60,
                remote: {
                    url: "{{ route('signup.businessAccount.emailChecking') }}",
                    type: "post",
                    data: {
                        email_id: function() {
                            return $('#AccountEmailId').val();
                        },
                        _token: function() {
                            return formId.find($('input[name="_token"]')).val();
                        }
                    }
                }
            },
            mobile_number: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 12
            },
            password: {
                required: true,
                checklower: true,
                checkupper: true,
                checkdigit: true,
                checksymbol: true,
                minlength: 8,
                maxlength: 20
            },
            password_confirmation: {
                required: true,
                equalTo: "#AccountPassword"
            },
            business_name: {
                required: true,
                minlength: 2,
                maxlength: 60
            },
            signup_terms: {
                required: true
            }
        },
        messages: {
            first_name: {
                required: "{{ __('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.first_name'))]) }}",
                nowhitespace: "{{ __('validation.form.field.no_space') }}",
                onlytext: "{{ __('validation.form.field.only_text') }}",
                minlength: "{{ __('validation.form.field.min_length', ['field_length' => 2]) }}",
                maxlength: "{{ __('validation.form.field.max_length', ['field_length' => 30]) }}"
            },
            last_name: {
                required: "{{ __('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.last_name'))]) }}",
                nowhitespace: "{{ __('validation.form.field.no_space') }}",
                onlytext: "{{ __('validation.form.field.only_text') }}",
                minlength: "{{ __('validation.form.field.min_length', ['field_length' => 2]) }}",
                maxlength: "{{ __('validation.form.field.max_length', ['field_length' => 30]) }}"
            },
            email_id: {
                required: "{{ __('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.email_id'))]) }}",
                email: "{{ __('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.email_id'))]) }}",
                disposableEmail: "{{ __('validation.form.email.not_accept') }}",
                maxlength: "{{ __('validation.form.field.max_length', ['field_length' => 60]) }}",
                remote: "{{ __('validation.form.email.exist') }}"
            },
            mobile_number: {
                required: "{{ __('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.mobile_number'))]) }}",
                digits: "{{ __('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.mobile_number'))]) }}",
                minlength: "{{ __('validation.form.field.min_length', ['field_length' => 10]) }}",
                maxlength: "{{ __('validation.form.field.max_length', ['field_length' => 12]) }}"
            },
            password: {
                required: "{{ __('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.password'))]) }}",
                minlength: "{{ __('validation.form.field.min_length', ['field_length' => 8]) }}",
                maxlength: "{{ __('validation.form.field.max_length', ['field_length' => 20]) }}",
                checklower: "{{ __('validation.form.password.lowercase') }}",
                checkupper: "{{ __('validation.form.password.uppercase') }}",
                checkdigit: "{{ __('validation.form.password.digit') }}",
                checksymbol: "{{ __('validation.form.password.symbol') }}"
            },
            password_confirmation: {
                required: "{{ __('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.confirm_password'))]) }}",
                equalTo: "{{ __('validation.form.confirm_password.notmatch') }}"
            },
            business_name: {
                required: "{{ __('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.business_name'))]) }}",
                minlength: "{{ __('validation.form.field.min_length', ['field_length' => 2]) }}",
                maxlength: "{{ __('validation.form.field.max_length', ['field_length' => 60]) }}"
            },
            signup_terms: {
                required: "{{ __('validation.form.field.checkbox.required', ['field_name' => strtolower(trans('label.terms_and_conditions'))]) }}"
            }
        },
        submitHandler : function(form) { 
            $.ajax({
                type: form.method,
                url: form.action,
                data: $(form).serialize() + '&layout=1&signup_time=' + signupTime,
                headers: {
                    'request-key':"{{ env('REQUEST_KEY') }}",
                    'request-end':"{{ env('REQUEST_END') }}",
                },
                dataType: 'json',
                cache: false,
                beforeSend: function() {
                    toastr.remove();
                    swalLoading();
                },
                success: function(responseData) {
                    swalClose();
                    if (responseData.status == 203 || responseData.body.type == 'VALIDATION_ERROR') {
                        validationErrorDisply(responseData, true);
                    }
                },
                error: function (xhr, status, error) {
                }
            });
            //return false;
        }
    });
    setInterval(signupDuration, 1000);
    function signupDuration() {
        signupTime = signupTime + 1;
    }
    */
});
</script>
@endpush