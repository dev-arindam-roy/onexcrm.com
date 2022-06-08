@extends('sign_in_up.layouts.layout')

@section('page_title', '| Create Account')

@push('page_css')
<style type="text/css">
html, body {
    background-image: radial-gradient( circle 321px at 8.3% 75.7%,  rgba(209,247,241,1) 0%, rgba(249,213,213,1) 81% );
}
.signup-box {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset !important;
}
</style>
@endpush

@section('page_content')
    <div class="container-fluid" id="signupLayout40">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-6 col-lg-6 p-0 mt-3 mb-2">
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
                            <div class="col-md-6 justify-content-center align-self-center">
                                <ul class="feature-ul">
                                    ONEX - Features
                                    <li><i class="far fa-arrow-alt-circle-right"></i> HR & Payroll</li>
                                    <li><i class="far fa-arrow-alt-circle-right"></i> Sales & Marketing</li>
                                    <li><i class="far fa-arrow-alt-circle-right"></i> Lead Managemet</li>
                                    <li><i class="far fa-arrow-alt-circle-right"></i> Sales & Invoice</li>
                                    <li><i class="far fa-arrow-alt-circle-right"></i> Stock & Products</li>
                                    <li><i class="far fa-arrow-alt-circle-right"></i> Bills & Accounting</li>
                                    <li><i class="far fa-arrow-alt-circle-right"></i> eCommerce & Shopping</li>
                                    <li><i class="far fa-arrow-alt-circle-right"></i> Customers & Payments</li>
                                </ul>
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
