@extends('sign_in_up.layouts.layout-2')

@section('page_title', '| Create Account')

@push('page_css_link')
<link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'master-assets/select2/css/select2.min.css') }}">
@endpush

@push('page_css')
<style type="text/css">
.signup-box {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
.modify-card-header {
    margin-left: -22px;
    margin-right: -22px;
}
.modify-alert-container {
    margin-bottom: -30px;
}
.alert.alert-primary {
    border-radius: 0px;
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout26">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 p-0 mt-3 mb-2">
                <div class="card card-outline card-primary signup-box">
                    <div class="card-header modify-card-header">
                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                                <a href="{{ route('signup.businessAccount') }}" class="h1"><b>ONEX</b>CRM</a>
                            </div>
                            <div class="col-md-12 mt-3 modify-alert-container">
                                <div class="alert alert-primary">
                                    <h5 style="color: #e9e9e9;"><i class="fas fa-user-tie fa-2x"></i> <small>Hi, I'm <strong>Alex</strong>, Your CRM Manager.</small></h5>
                                    <div id="signupText"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form name="signupFrm" id="msform" action="" method="post" autocomplete="off">
                            <ul id="signup-progressbar" class="signup-step-primary">
                                <li class="active" id="pb-personal"><strong>Personal</strong></li>
                                <li id="pb-account"><strong>Account</strong></li>
                                <li id="pb-security"><strong>Security</strong></li>
                                <li id="pb-business"><strong>Business</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>

                            <fieldset class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="step-heading">Personal Information</h3>
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
                                    <div class="col-md-12 mt-0">
                                        <button type="button" id="step1Submit" class="next-btn btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="step-heading">Account Information</h3>
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
                                    <div class="col-md-12 mt-0">
                                        <button type="button" id="step2Back" class="back-btn btn btn-secondary">Back</button>
                                        <button type="button" id="step2Submit" class="next-btn btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="step-heading">Account Security</h3>
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
                                    <div class="col-md-12 mt-0">
                                        <button type="button" id="step3Back" class="back-btn btn btn-secondary">Back</button>
                                        <button type="button" id="step3Submit" class="next-btn btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="step-heading">Organization Information</h3>
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
                                    <div class="col-md-12 mt-0">
                                        <button type="button" id="step4Back" class="back-btn btn btn-secondary">Back</button>
                                        <button type="submit" id="stepFinalSubmit" class="finish-btn btn btn-primary">Create My Account</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <div class="text-center mt-2"><a href="" class="text-center">I already have an Account, Lets SignIn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js_link')
<script src="{{ asset(config('onex.asset_path') . 'master-assets/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/typewriterjs/core.js') }}"></script>
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

    const instance = new Typewriter('#signupText', {
      strings: ['Hey bro,', 'Welcome to ONEX', 'Lets create a business account', 'Its Free', 'Manage your business with only 1 CRM - <b>ONEX CRM</b>', 'We are always ready to help you to grow your business', 'Thanks, see you again buddy.'],
      autoStart: true,
      loop: true
    });

    var current_fs, next_fs, previous_fs;
    var current = 1;
    var steps = $("fieldset").length;
    setProgressBar(current);

    $(".next-btn").click(function() {
      //console.log("frm -- " + form.valid());
      //if (form.valid()) {
        current_fs = $(this).closest("fieldset");
        next_fs = $(this).closest("fieldset").next();
        $("#signup-progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        console.log("CFS" + current_fs);
        console.log("NFS" + next_fs);
        console.log($("fieldset").index(next_fs));

        current_fs.hide(300, function () {
            next_fs.fadeIn();
        });
        setProgressBar(++current);
      //}
    });

    $(".back-btn").click(function() {
      current_fs = $(this).closest("fieldset");
      previous_fs = $(this).closest("fieldset").prev();
      $("#signup-progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
      current_fs.hide(300, function () {
        previous_fs.fadeIn();
      });
      setProgressBar(--current);
    });

    function setProgressBar(curStep) {
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      console.log(percent);
      $(".progress-bar").css("width", percent + "%")
    }
});
</script>
@endpush