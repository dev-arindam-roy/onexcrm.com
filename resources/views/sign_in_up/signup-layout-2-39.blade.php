@extends('sign_in_up.layouts.layout-2')

@section('page_title', '| Create Account')

@push('page_css_link')
<link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'master-assets/select2/css/select2.min.css') }}">
@endpush

@push('page_css')
<style type="text/css">
html, body {
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );
}
.signinup-box-msg {
    color: #007bff !important;
}
.signup-box {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset !important;
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout239">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-4 col-lg-4 p-0 mt-3 mb-2">
                <div class="card card-outline card-primary signup-box">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a href="{{ route('signup.businessAccount') }}" class="h1"><b>ONEX</b>CRM</a>
                            </div>
                            <div class="col-md-6">
                                <p class="signinup-box-msg">Create an Account</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
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
                        <div class="social-auth-links text-center">
                            <p><b>- OR -</b></p>
                        </div>
                        <form action="" method="post" autocomplete="off">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-justified" id="signupTab">
                                        <li class="nav-item">
                                            <a class="nav-link active signup-navlink" href="#personalTab">Personal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link signup-navlink" href="#accountTab">Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link signup-navlink" href="#securityTab">Security</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link signup-navlink" href="#businessTab">Business</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content mb-3">
                                        <div id="personalTab" class="tab-pane active">
                                            <div class="row">
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
                                            </div>
                                        </div>
                                        <div id="accountTab" class="tab-pane fade">
                                            <div class="row">
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
                                            </div>
                                        </div>
                                        <div id="securityTab" class="tab-pane fade">
                                            <div class="row">
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
                                            </div>
                                        </div>
                                        <div id="businessTab" class="tab-pane fade">
                                            <div class="row">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary prev-btn d-none" id="prev_btn">Previous</button>
                            <button type="button" class="btn btn-primary next-btn" id="next_btn">Next</button>
                        </form>
                        <div class="text-center mt-5"><a href="" class="text-center">I already have an Account, Lets SignIn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js_link')
<script src="{{ asset(config('onex.asset_path') . 'master-assets/select2/js/select2.full.min.js') }}"></script>
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
    $(".nav-tabs a").click(function(e){
        e.preventDefault();
    });
    $('body').on('click', '.next-btn', function (e) {
        e.preventDefault();
        var link = $('#signupTab li.nav-item a.active').parent().next().children('a').attr('href');
        $('#signupTab a[href="' + link + '"]').tab('show');
        console.log(link);
    });
    $('body').on('click', '.prev-btn', function (e) {
        e.preventDefault();
        var link = $('#signupTab li.nav-item a.active').parent().prev().children('a').attr('href');
        $('#signupTab a[href="' + link + '"]').tab('show');
        console.log(link);
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event){
        var _activeTab = $(event.target).text(); 
        var _previousTab = $(event.relatedTarget).text();
        if (_activeTab == 'Personal') {
            $('#prev_btn').addClass('d-none');
        } else {
            $('#prev_btn').removeClass('d-none');
        }
        if (_activeTab == 'Business') {
            $('#next_btn').addClass('btn-success').addClass('finish-btn').removeClass('btn-primary').removeClass('next-btn').text('Create Business Account');
        } else {
            $('#next_btn').addClass('btn-primary').addClass('next-btn').removeClass('finish-btn').removeClass('btn-success').text('Next');
        }
    });
});
</script>
@endpush