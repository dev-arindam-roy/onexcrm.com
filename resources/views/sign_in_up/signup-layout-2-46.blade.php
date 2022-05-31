@extends('sign_in_up.layouts.layout-2')

@section('page_title', '| Create Account')

@push('page_css_link')
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
@endpush

@push('page_css')
<style type="text/css">
.body-bgcolor {
    background-image: radial-gradient( circle 827px at 47.3% 48%,  rgba(255,255,255,1) 0%, rgba(138,192,216,1) 90% );
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout246">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 p-0 mt-3 mb-2">
                <div class="text-center">
                    <p><a href="{{ route('signup.businessAccount') }}" class="h1"><b>ONEX</b>CRM</a></p>
                    <h1 class="oswald-create-account-title">Create Your Business Account</h1>
                </div>
                <hr/>
                <form action="" method="post" autocomplete="off">
                    <div class="timeline timeline-black">
                        <div class="time-label">
                            <span class="bg-primary">Personal Information</span>
                        </div>
                        <div>
                            <i class="fas fa-user bg-primary"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Your First Name: <em>*</em></h3>
                                <div class="timeline-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                            <input type="text" name="" class="form-control" placeholder="Enter First Name" required autocomplete="off" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-user bg-primary"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Your Last Name: <em>*</em></h3>
                                <div class="timeline-body">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                        <input type="text" name="" class="form-control" placeholder="Enter Last Name" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="time-label">
                            <span class="bg-primary">Account Information</span>
                        </div>
                        <div>
                            <i class="fas fa-envelope bg-primary"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Email Address: <em>*</em></h3>
                                <div class="timeline-body">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                        <input type="email" name="" class="form-control" placeholder="Enter Email-Id" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-mobile-alt bg-primary"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Mobile Number: <em>*</em></h3>
                                <div class="timeline-body">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-mobile-alt" style="margin-right: 4px;"></span>
                                            </div>
                                        </div>
                                        <input type="text" name="" class="form-control" placeholder="Enter Mobile Number" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="time-label">
                            <span class="bg-primary">Security Information</span>
                        </div>
                        <div>
                            <i class="fas fa-lock bg-primary"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Password: <em>*</em></h3>
                                <div class="timeline-body">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        <input type="password" name="" class="form-control" placeholder="Enter Account Password" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-lock bg-primary"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header">Confirm Password: <em>*</em></h3>
                                <div class="timeline-body">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        <input type="password" name="" class="form-control" placeholder="Enter Confirm Password" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="signup-default-timeline-sub-btn">
                            <button type="submit" class="btn btn-block btn-primary">Create My Business Account</button>
                        </div>
                    </div>
                    <input type="hidden" id="googleV3Captcha" name="gcaptcha">
                </form>
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
});
</script>
@endpush
