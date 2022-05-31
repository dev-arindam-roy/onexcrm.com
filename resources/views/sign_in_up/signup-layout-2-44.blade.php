@extends('sign_in_up.layouts.layout-2')

@section('page_title', '| Create Account')

@push('page_css')
<style type="text/css">
.body-bgcolor {
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );
}
.signup-box {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset !important;
}
.carousel-inner {
    height: 150px;
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout244">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 p-0 mt-3 mb-2">
                <div class="card card-outline card-primary signup-box">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <a href="{{ route('signup.businessAccount') }}" class="h1"><b>ONEX</b>CRM</a>
                            </div>
                            <div class="col-md-6">
                                <p class="signinup-box-msg text-primary">Create an Account</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="socialRegistrationBox">
                            <div class="row">
                                <div class="col-md-12 text-center justify-content-center">
                                    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="500">
                                        <!-- The slideshow -->
                                        <div class="carousel-inner text-primary">
                                            <div class="carousel-item active">
                                                <h1><strong>Hey!</strong> Hello...</h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1>Welcome to <br/> <strong>Cloud Business</strong></h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1>Welcome to <br/> <strong>ONEX-CRM</strong></h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1><strong>Are you reay?</strong></h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1><strong>Let's Start...</strong></h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1>Create Your <br/><strong>Business</strong> Account</h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1>It's <strong>FREE</strong></h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1>Unlimited <br/><strong>Storage</strong></h1>
                                            </div>
                                            <div class="carousel-item">
                                                <h1>Unlimited <br/><strong>Users Account</strong></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 offset-md-3">
                                    <a href="#" class="btn btn-block btn-primary">
                                        <i class="fab fa-facebook mr-2"></i>
                                        Sign up using Facebook
                                    </a>
                                    <a href="#" class="btn btn-block btn-danger">
                                        <i class="fab fa-google-plus mr-2"></i>
                                        Sign up using Google+
                                    </a>
                                    <p class="text-center mt-3 mb-3"><b>- OR -</b></p>
                                    <button class="btn btn-block btn-success" id="emailRegistrationBtn">
                                        <i class="far fa-envelope mr-2"></i> 
                                        Sign up using Email
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="timelineFormBox" style="display: none;">
                            <form action="" method="post" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="signup-timeline-heading">Lets Start</h4>
                                        <ul class="simple-timeline">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-lb" for="AccountFullName">Your Name: <em>*</em></label>
                                                            <div class="input-group">
                                                                <input type="text" id="AccountFullName" class="form-control" placeholder="Full Name" autocomplete="off" autofocus>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-user"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
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
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
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
                                            </li>
                                            <li>
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
                                                </div>
                                            </li>
                                            <li>
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
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="signup-timeline-submit-btn">
                                            <button type="submit" class="btn btn-block btn-primary">Create My Business Account</button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="googleV3Captcha" name="gcaptcha">
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center mt-3"><a href="" class="text-center">I already have an Account, Lets SignIn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_js_link')
<script src="https://www.google.com/recaptcha/api.js?render=6LeqJCkgAAAAAMv1ggnn9fyG0yAFm9S1TPt3FcVQ"></script>
@endpush

@push('page_js')
<script>
$(function() {
    setV3Captcha();
    function setV3Captcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeqJCkgAAAAAMv1ggnn9fyG0yAFm9S1TPt3FcVQ', {action: 'submit'}).then(function(token) {
                console.log(token);
                document.getElementById('googleV3Captcha').value = token;
            });
        });
    }
    $('#emailRegistrationBtn').on('click', function () {
        $('#socialRegistrationBox').fadeOut(300, function () {
            $('#timelineFormBox').fadeIn();
        });
    });
});
</script>
@endpush
