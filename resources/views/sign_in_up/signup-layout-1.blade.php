@extends('sign_in_up.layouts.layout')

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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountFirstName">First Name: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="text" name="first_name" id="AccountFirstName" class="form-control" minlength="2" maxlength="30" placeholder="First Name" autocomplete="off" required="required">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountLastName">Last Name: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="text" name="last_name" id="AccountLastName" class="form-control" minlength="2" maxlength="30" placeholder="Last Name" autocomplete="off" required="required">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountEmailId">Email-Id: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="email" name="email_id" id="AccountEmailId" class="form-control" maxlength="60" placeholder="Email-Id" autocomplete="off" required="required">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountMobileNo">Mobile Number: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="text" name="mobile_number" id="AccountMobileNo" class="form-control onlyNumber" minlength="10" maxlength="12" placeholder="Mobile Number" autocomplete="off" required="required">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-mobile" style="margin-left: 3px;"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountPassword">Password: <em>*</em></label> 
                                        <a data-toggle="tooltip" data-placement="bottom" data-html="true" title="<div class='text-left'>1 Uppercase<br/>1 Lowercase<br/>1 Number<br/>1 Special char<br/>Minimum lenght 6</div>"><i class="fas fa-info-circle"></i></a>
                                        <span class="float-right mr-2"><i class="far fa-eye eye-showHide-password d-none"></i></span>
                                        <div class="input-group">
                                        <input type="password" name="password" id="AccountPassword" class="form-control eye-password" minlength="8" maxlength="20" placeholder="Password (Ex:Test#1234)" autocomplete="off" required="required">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountConfirmPassword">Confirm Password: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="password" name="confirm_password" id="AccountConfirmPassword" minlength="8" maxlength="20" class="form-control eye-password" placeholder="Confirm Password" autocomplete="off" required="required">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountBrand">Organization/Brand Name: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="text" name="organization_name" id="AccountBrand" class="form-control" minlength="2" maxlength="90" placeholder="Organization Name" autocomplete="off" required="required">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-building"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input name="signup_terms" class="custom-control-input custom-control-input-primary" type="checkbox" id="AccountTerms" required="required">
                                        <label for="AccountTerms" class="custom-control-label">I agree to the <a href="#">terms & conditions</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block btn-success">Create My Business Account</button>
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
            confirm_password: {
                required: true,
                equalTo: "#AccountPassword"
            },
            organization_name: {
                required: true,
                minlength: 2,
                maxlength: 90
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
            confirm_password: {
                required: 'Please enter confirm password.',
                equalTo: 'Confirm password not match with password.'
            },
            organization_name: {
                required: 'Please enter your organization or brand name.',
                minlength: 'Minimum 2 characters are required.',
                maxlength: 'Maximum 90 characters are allowed.'
            },
            signup_terms: {
                required: 'Please check the terms & conditions.'
            }
        },
        submitHandler : function(form) { 
            console.log('xxxx');
            //toastr.clear();
            toastr.remove();
            toastr.success('xxx', '111');
        }
    });
});
</script>
@endpush