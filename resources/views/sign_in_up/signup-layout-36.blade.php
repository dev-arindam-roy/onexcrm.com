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
    <div class="container-fluid" id="signupLayout36">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-6 col-lg-6 p-0 mt-3 mb-2">
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
                        <div class="row">
                            <div class="col-md-6 text-center justify-content-center align-self-center">
                                <div id="demo" class="carousel slide" data-ride="carousel" data-interval="500">
                                    <!-- The slideshow -->
                                    <div class="carousel-inner text-primary text-carousel-inner-fix-height">
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
                                            <h1>Create <strong>Business</strong> Account</h1>
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
                            <div class="col-md-6">
                                <form action="" method="post" autocomplete="off">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label class="form-lb" for="AccountName" style="color: #007bff;">Your Name: <em>*</em></label>
                                                <div class="input-group">
                                                <input type="text" id="AccountName" class="form-control" placeholder="Your Name" autocomplete="off" style="border-color: #007bff;">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="background-color: #007bff; border-color: #007bff; color: #fff;">
                                                    <span class="fas fa-user"></span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                            <div class="form-group mb-3">
                                                <label class="form-lb" for="AccountBrand" style="color: #007bff;">Organization/Brand Name: <em>*</em></label>
                                                <div class="input-group">
                                                <input type="text" id="AccountBrand" class="form-control" placeholder="Organization Name" autocomplete="off" style="border-color: #007bff;">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" style="background-color: #007bff; border-color: #007bff; color: #fff;">
                                                    <span class="fas fa-building"></span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mt-3">
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