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
    <div class="container-fluid" id="signupLayout1">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-6 col-lg-5 p-0 mt-3 mb-2">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a href="{{ route('signup.businessAccount') }}" class="h1"><b>ONEX</b>CRM</a>
                            </div>
                            <div class="col-md-6">
                                <p class="signinup-box-msg text-primary text-right">Create an Account</p>
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
                                        <label class="form-lb @if ($errors->signupErrorBag->has('first_name')) text-danger @endif" for="AccountFirstName">First Name: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="2" maxlength="30" required="required" -->
                                            <input type="text" name="first_name" id="AccountFirstName" class="partial-signup form-control @if ($errors->signupErrorBag->has('first_name')) is-invalid @endif" placeholder="First Name" autocomplete="off" value="{{old('first_name')}}" />
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
                                        <label class="form-lb @if ($errors->signupErrorBag->has('last_name')) text-danger @endif" for="AccountLastName">Last Name: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="2" maxlength="30" required="required" -->
                                            <input type="text" name="last_name" id="AccountLastName" class="partial-signup form-control @if ($errors->signupErrorBag->has('last_name')) is-invalid @endif" placeholder="Last Name" autocomplete="off" value="{{old('last_name')}}" />
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
                                        <label class="form-lb @if ($errors->signupErrorBag->has('email_id')) text-danger @endif" for="AccountEmailId">Email-Id: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- maxlength="60" required="required" -->
                                            <input type="email" name="email_id" id="AccountEmailId" class="partial-signup form-control @if ($errors->signupErrorBag->has('email_id')) is-invalid @endif" placeholder="Email-Id" autocomplete="off" value="{{old('email_id')}}" />
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
                                        <label class="form-lb @if ($errors->signupErrorBag->has('mobile_number')) text-danger @endif" for="AccountMobileNo">Mobile Number: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="10" maxlength="12" required="required" -->
                                            <input type="text" name="mobile_number" id="AccountMobileNo" class="partial-signup form-control onlyNumber @if ($errors->signupErrorBag->has('mobile_number')) is-invalid @endif" placeholder="Mobile Number" autocomplete="off" value="{{old('mobile_number')}}" />
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
                                        <label class="form-lb @if ($errors->signupErrorBag->has('password')) text-danger @endif" for="AccountPassword">Password: <em>*</em></label> 
                                        <a data-toggle="tooltip" data-placement="bottom" data-html="true" title="<div class='text-left'>1 Uppercase<br/>1 Lowercase<br/>1 Number<br/>1 Special char<br/>Minimum lenght 6</div>"><i class="fas fa-info-circle"></i></a>
                                        <span class="float-right mr-2"><i class="far fa-eye eye-showHide-password d-none"></i></span>
                                        <div class="input-group">
                                            <!-- minlength="8" maxlength="20" required="required" -->
                                            <input type="password" name="password" id="AccountPassword" class="form-control eye-password @if ($errors->signupErrorBag->has('password')) is-invalid @endif" placeholder="Password (Ex:Test#1234)" autocomplete="off" />
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
                                        <label class="form-lb @if ($errors->signupErrorBag->has('password_confirmation')) text-danger @endif" for="AccountConfirmPassword">Confirm Password: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="8" maxlength="20" required="required" -->
                                            <input type="password" name="password_confirmation" id="AccountConfirmPassword" class="form-control eye-password @if ($errors->signupErrorBag->has('password_confirmation')) is-invalid @endif" placeholder="Confirm Password" autocomplete="off" />
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
                                        <label class="form-lb @if ($errors->signupErrorBag->has('business_name')) text-danger @endif" for="AccountBrand">Business/Brand Name: <em>*</em></label>
                                        <div class="input-group">
                                            <!-- minlength="2" maxlength="60" required="required" -->
                                            <input type="text" name="business_name" id="AccountBrand" class="partial-signup form-control @if ($errors->signupErrorBag->has('business_name')) is-invalid @endif" placeholder="Organization Name" autocomplete="off" value="{{old('business_name')}}" />
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
                                        <label for="AccountTerms" class="custom-control-label @if ($errors->signupErrorBag->has('signup_terms')) text-danger @endif">I agree to the <a href="#">terms & conditions</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" id="signupBtn" class="btn btn-block btn-success">Create My Business Account</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="reset" class="form-rest-btn btn btn-block btn-secondary" data-formid="signupFrm">Reset & Try Again</button>
                                </div>
                            </div>
                        </form>
                        <div class="social-auth-links text-center">
                            <p><b>- OR -</b></p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-block btn-primary">
                                    <i class="fab fa-facebook mr-2"></i>
                                    Sign up using Facebook
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-block btn-danger mt-resp-10">
                                    <i class="fab fa-google-plus mr-2"></i>
                                    Sign up using Google+
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center mt-2"><a href="" class="text-center">I already have an Account, Lets SignIn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js')
<script>
$(function() {
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
                required: 'Please enter first name.',
                nowhitespace: 'Space not allowed.',
                onlytext: 'Only text characters are allowed.',
                minlength: 'Minimum 2 characters are required.',
                maxlength: 'Maximum 30 characters are allowed.'
            },
            last_name: {
                required: 'Please enter last name.',
                nowhitespace: 'Space not allowed',
                onlytext: 'Only text characters are allowed.',
                minlength: 'Minimum 2 characters are required.',
                maxlength: 'Maximum 30 characters are allowed.'
            },
            email_id: {
                required: 'Please enter email address.',
                email: 'Please enter valid email address.',
                disposableEmail: 'This email not acceptable.',
                maxlength: 'Maximum 60 characters are allowed.',
                remote: 'This email address already exist.'
            },
            mobile_number: {
                required: 'Please enter mobile number.',
                digits: 'Please enter numbers or digits.',
                minlength: 'Minimum 10 characters are required.',
                maxlength: 'Maximum 12 characters are allowed.'
            },
            password: {
                required: 'Please enter password.',
                minlength: 'Minimum 8 characters are required.',
                maxlength: 'Maximum 20 characters are allowed.',
                checklower: 'Password must needs one lowercase alphabet.',
                checkupper: 'Password must needs one uppercase alphabet.',
                checkdigit: 'Password must needs one digit.',
                checksymbol: 'Password must needs one symbol.'
            },
            password_confirmation: {
                required: 'Please enter confirm password.',
                equalTo: 'Confirm password not match with password.'
            },
            business_name: {
                required: 'Please enter your business or brand name.',
                minlength: 'Minimum 2 characters are required.',
                maxlength: 'Maximum 60 characters are allowed.'
            },
            signup_terms: {
                required: 'Please check the terms & conditions.'
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
        }
    });
    setInterval(signupDuration, 1000);
    function signupDuration() {
        signupTime = signupTime + 1;
    }
});
</script>
@endpush