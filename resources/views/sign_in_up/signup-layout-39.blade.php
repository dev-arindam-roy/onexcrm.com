@extends('sign_in_up.layouts.layout')

@section('page_title', '| Create Account')

@push('page_css')
<style type="text/css">
.body-bgcolor {
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(234,249,249,0.67) 0.1%, rgba(239,249,251,0.63) 90.1% );
}
.signup-box {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset !important;
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout39">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-6 col-lg-6 p-0 mt-5 mb-2">
                <div class="card card-outline card-primary signup-box">
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
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div id="demo" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                    </ul>
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset(config('onex.asset_path') . 'master-assets/images/slider-1.jpg') }}" class="img-fluid img-thumbnail">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset(config('onex.asset_path') . 'master-assets/images/slider-2.jpg') }}" class="img-fluid img-thumbnail">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset(config('onex.asset_path') . 'master-assets/images/slider-3.jpg') }}" class="img-fluid img-thumbnail">
                                        </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="" method="post" autocomplete="off">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label class="form-lb" for="AccountEmailId" style="color: #007bff;">Email-Id: <em>*</em></label>
                                                <div class="input-group">
                                                <input type="email" id="AccountEmailId" class="form-control" placeholder="Email-Id" autocomplete="off" style="border-color: #007bff;">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="background-color: #007bff; border-color: #007bff; color: #fff;">
                                                    <span class="fas fa-envelope"></span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label class="form-lb" for="AccountPassword" style="color: #007bff;">Password: <em>*</em></label>
                                                <div class="input-group">
                                                <input type="password" id="AccountPassword" class="form-control" placeholder="Password" autocomplete="off" style="border-color: #007bff;">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="background-color: #007bff; border-color: #007bff; color: #fff;">
                                                    <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-block btn-primary">Create My Business Account</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center mt-2"><a href="" class="text-center">I already have an Account, Lets SignIn</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
