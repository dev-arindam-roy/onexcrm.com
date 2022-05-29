@extends('sign_in_up.layouts.layout-2')

@section('page_title', '| Create Account')

@push('page_css_link')
<link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'master-assets/select2/css/select2.min.css') }}">
@endpush

@push('page_css')
<style type="text/css">
.body-bgcolor {
    background-image: linear-gradient( 109.6deg,  rgba(24,138,141,1) 11.2%, rgba(96,221,142,1) 91.1% );
}
#particles-js {
    position : absolute;
    top: 0;
    left: 0;
    padding: 0;
    margin: 0;
    width:100%;
    height:100%;
    z-index:-1;
}
.signinup-box-msg {
    color: #007bff !important;
}
.signup-box {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset !important;
}
.frm-info-section:not(:first-of-type) {
    display: none;
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout216">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-4 col-lg-4 p-0 mt-3 mb-2">
                <div class="card card-outline card-primary signup-box">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a href="{{ route('signup.businessAccount') }}" class="h1"><b>ONEX</b>CRM</a>
                            </div>
                            <div class="col-md-6">
                                <p class="signinup-box-msg" style="color: #3e8f62 !important;">Create an Account</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-block btn-primary">
                                    <i class="fab fa-facebook mr-2"></i>
                                    Sign up by Facebook
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-block btn-danger mt-resp-10">
                                    <i class="fab fa-google-plus mr-2"></i>
                                    Sign up by Google+
                                </a>
                            </div>
                        </div>
                        <div class="social-auth-links text-center">
                            <p><b>- OR -</b></p>
                        </div>
                        <hr/>
                        <form action="" method="post" autocomplete="off">
                            <div class="row frm-info-section">
                                <div class="col-md-12 mb-2">
                                    <h3 class="step-heading text-left text-success"><i class="fas fa-user-check"></i> Personal Information</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountFirstName">First Name: <em>*</em></label>
                                        <div class="input-group">
                                            <input type="text" id="AccountFirstName" class="form-control" placeholder="First Name" autocomplete="off">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountLastName">Last Name: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="text" id="AccountLastName" class="form-control" placeholder="Last Name" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary next-info-btn">Next</button>
                                </div>
                            </div>
                            <div class="row frm-info-section" id="accountInformationSection">
                                <div class="col-md-12 mb-2">
                                    <h3 class="step-heading text-left"><i class="fas fa-user-cog"></i> Account Information</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountEmailId">Email-Id: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="email" id="AccountEmailId" class="form-control" placeholder="Email-Id" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountMobileNo">Mobile Number: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="text" id="AccountMobileNo" class="form-control" placeholder="Mobile Number" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-mobile" style="margin-left: 3px;"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary next-info-btn">Next</button>
                                </div>
                            </div>
                            <div class="row frm-info-section" id="accountSecuritySection">
                                <div class="col-md-12 mb-2">
                                    <h3 class="step-heading text-left"><i class="fas fa-user-lock"></i> Account Security</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountPassword">Password: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="password" id="AccountPassword" class="form-control" placeholder="Password" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountConfirmPassword">Confirm Password: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="password" id="AccountConfirmPassword" class="form-control" placeholder="Confirm Password" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary next-info-btn">Next</button>
                                </div>
                            </div>
                            <div class="row frm-info-section" id="businessInformationSection">
                                <div class="col-md-12 mb-2">
                                    <h3 class="step-heading text-left"><i class="fas fa-user-tie"></i> Business Information</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountBrand">Organization/Brand Name: <em>*</em></label>
                                        <div class="input-group">
                                        <input type="text" id="AccountBrand" class="form-control" placeholder="Organization Name" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            <span class="fas fa-building"></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountOrganizationCategory">Organization Category: <em>*</em></label>
                                        <select class="form-control" id="AccountOrganizationCategory" style="width: 100%;">
                                            <option></option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-lb" for="AccountServiceCategories">Service Categories: <em>*</em></label>
                                        <select class="form-control" id="AccountServiceCategories" multiple="multiple" style="width: 100%;">
                                            <option></option>
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>
                    
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input custom-control-input-success" type="checkbox" id="AccountTerms">
                                        <label for="AccountTerms" class="custom-control-label">I agree to the <a href="#">terms & conditions</a></label>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-block btn-success">Create My Business Account</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-2"><a href="" class="text-center">I already have an Account, Lets SignIn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
@endsection

@push('page_js_link')
<script src="{{ asset(config('onex.asset_path') . 'master-assets/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/particles-js/particles.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/particles-js/particles-config-3.js') }}"></script>
@endpush

@push('page_js')
<script>
$(function() {
    $('#AccountOrganizationCategory').select2({
        placeholder: "Organization Category",
        allowClear: true
    });
    $('#AccountServiceCategories').select2({
        placeholder: "Service Categories",
        maximumSelectionLength: 3
    });
    $('body').on('click', '.next-info-btn', function () {
        $(this).parent().hide();
        $(this).closest('.frm-info-section').next().find('.step-heading').addClass('text-success');
        $(this).closest('.frm-info-section').next().slideDown();
        var infoSectionId = $(this).closest('.frm-info-section').next().attr('id');
        $('html, body').animate({
            scrollTop: eval($('#' + infoSectionId).offset().top - 10)
        }, 800);
    });
});
</script>
@endpush