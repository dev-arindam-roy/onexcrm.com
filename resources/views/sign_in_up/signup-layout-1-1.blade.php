@extends('sign_in_up.layouts.layout-1')

@section('page_title', '| Create Account')

@section('page_content')
    <div class="container-fluid" id="signupLayout11">
        <div class="row justify-content-center mt-3">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 p-0 mt-3 mb-2">
                <div class="card card-outline card-primary">
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
                        <form action="" method="post" autocomplete="off">
                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
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

                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
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

                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
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

                            <div class="row">
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

                        <div class="text-center mt-2"><a href="" class="text-center">I already have an Account, Lets SignIn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection