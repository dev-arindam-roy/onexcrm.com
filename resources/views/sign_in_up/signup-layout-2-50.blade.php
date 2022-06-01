@extends('sign_in_up.layouts.layout-2')

@section('page_title', '| Create Account')

@push('page_css_link')
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'master-assets/pace-progress/minimal.css') }}">
<link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'master-assets/owl-carousel/owl.carousel.min.css') }}">
@endpush

@push('page_css')
<style type="text/css">
.body-bgcolor {
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout250">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 p-0 mt-3 mb-2">
                <div class="text-center">
                    <p><a href="{{ route('signup.businessAccount') }}" class="h1"><b>ONEX</b>CRM</a></p>
                    <h1 class="oswald-create-account-title">Create Your Business Account</h1>
                </div>
                <div class="owl-init-block-ui"></div>
                <div class="owl-frm-container mt-3" id="owlContainer" style="visibility: hidden;">
                    <form action="" method="post" autocomplete="off">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="card card-outline card-primary signup-owl-item">
                                    <div class="card-header">
                                        <h4 class="owl-item-title"><i class="fas fa-user-check"></i> Personal Information</h4>
                                    </div>
                                    <div class="card-body owl-card-body">
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
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-outline card-primary signup-owl-item">
                                    <div class="card-header">
                                        <h4 class="owl-item-title"><i class="fas fa-user-cog"></i> Account Information</h4>
                                    </div>
                                    <div class="card-body owl-card-body">
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
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-outline card-primary signup-owl-item">
                                    <div class="card-header">
                                        <h4 class="owl-item-title"><i class="fas fa-user-lock"></i> Security Information</h4>
                                    </div>
                                    <div class="card-body owl-card-body">
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
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-outline card-primary signup-owl-item">
                                    <div class="card-header">
                                        <h4 class="owl-item-title"><i class="fas fa-user-tag"></i> Business Information</h4>
                                    </div>
                                    <div class="card-body owl-card-body">
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
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input custom-control-input-primary" type="checkbox" id="AccountTerms">
                                                    <label for="AccountTerms" class="custom-control-label">I agree to the <a href="#">terms & conditions</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-button-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-secondary btn-back d-none" id="backBtn">Back</button>
                                    <button type="button" class="btn btn-primary btn-next" id="nextBtn">Next</button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="googleV3Captcha" name="gcaptcha">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js_link')
<script src="{{ asset(config('onex.asset_path') . 'master-assets/block-ui/jquery.blockUI.js') }}"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeqJCkgAAAAAMv1ggnn9fyG0yAFm9S1TPt3FcVQ"></script>
<script src="{{ asset(config('onex.asset_path') . 'master-assets/pace-progress/pace.min.js') }}"></script>
@endpush

@push('page_js')
<script>
$(function() {
    $('.owl-init-block-ui').block({ 
        message: '<h5>Please wait...</h5>',
        overlayCSS: { backgroundColor: 'none' }, 
        css: { 
            border: 'none', 
            padding: '10px', 
            backgroundColor: '#000',
            'border-radius' : '10px', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff' 
        } 
    });
    setTimeout(function() { 
        $('.owl-init-block-ui').unblock().hide();
        $('#owlContainer').css('visibility', 'visible');
    }, 3000);
    setV3Captcha();
    function setV3Captcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeqJCkgAAAAAMv1ggnn9fyG0yAFm9S1TPt3FcVQ', {action: 'submit'}).then(function(token) {
                console.log(token);
                document.getElementById('googleV3Captcha').value = token;
            });
        });
    }
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:1,
        autoplay:false,
        margin: 10,
        nav: false,
        loop: false,
        dots: false,
        //autoHeight:true,
        responsiveClass:true
    });
    $('body').on('click', '.btn-back', function() {
        owl.trigger('prev.owl.carousel');
    });
    $('body').on('click', '.btn-next', function() {
        owl.trigger('next.owl.carousel');
    });

    $('.owl-carousel').on('changed.owl.carousel', function(e) {
        var _totalItems = e.item.count;
        var _currentItemIndex = e.item.index;
        if (_currentItemIndex >= 1) {
            $('#backBtn').removeClass('d-none');
        } else {
            $('#backBtn').addClass('d-none');
        }
        if (_currentItemIndex >= _totalItems - 1) {
            $('#nextBtn').removeClass('btn-next').addClass('btn-submit').text('Create Account');
        } else {
            $('#nextBtn').removeClass('btn-submit').addClass('btn-next').text('Next');
        } 
    });
});
</script>
@endpush
