@extends('sign_in_up.layouts.layout')

@section('page_title', '| Create Account')

@push('page_css_link')
<link rel="stylesheet" href="{{ asset(config('onex.asset_path') . 'css/signup-steps.min.css') }}">
@endpush

@section('page_content')
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-default btn-circle">1</a>
                <p><small></small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small></small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small></small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small></small></p>
            </div>
        </div>
    </div>

    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>ONEX</b>CRM</a>
        </div>
        <div class="card-body">
            <p class="signinup-box-msg">Create an Account</p>
            <form action="../../index.html" method="post" autocomplete="off">
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
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Next</button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <div class="text-center"><a href="login.html" class="text-center">I already have an Account</a></div>
        </div>
    </div>
@endsection