<?php

namespace App\Services\Signup;

use Illuminate\Http\Request;
use Validator;
use Helper;
use Log;

class ValidationRulesService
{
    public function __construct()
    {
        $this->messages = [
            'salutation.max' => 'Salutation contains maxlength 10.',
            'salutation.regex' => 'Please enter a valid salutation.',
            'first_name.required' => 'Please enter first name.',
            'first_name.min' => 'First name contains minlength 2.',
            'first_name.max' => 'First name contains maxlength 30.',
            'first_name.regex' => 'Please enter valid first name.',
            'middle_name.min' => 'Middle name contains minlength 2.',
            'middle_name.max' => 'Middle name contains maxlength 10.',
            'middle_name.regex' => 'Please enter valid middle name.',
            'last_name.required' => 'Please enter last name.',
            'last_name.min' => 'Last name contains minlength 2.',
            'last_name.max' => 'Last name contains maxlength 30.',
            'last_name.regex' => 'Please enter valid last name.',
            'email_id.required' => 'Please enter email-id.',
            'email_id.email' => 'Please enter valid email-id.',
            'email_id.unique' => 'This email address already exist.',
            'mobile_number.required' => 'Please enter mobile number',
            'mobile_number.numeric' => 'Please enter valid mobile number',
            'mobile_number.regex' => 'Please enter valid mobile number',
            'mobile_number.min' => 'Mobile number contains minlength 10.',
            'mobile_number.max' => 'Mobile number contains maxlength 12.',
            'password.required' => 'Please enter password.',
            'password.min' => 'Password contains minlength 8.',
            'password.max' => 'Password contains maxlength 20.',
            'password.confirmed' => 'Password not match with confirm password.',
            'password_confirmation.required' => 'Please enter confirm password.',
            'password_confirmation.min' => 'Confirm password contains minlength 8.',
            'password_confirmation.max' => 'Confirm password contains maxlength 20.',
            'gender.in' => 'Gender must be equal with - male,female,other.',
            'username.min' => 'Password contains minlength 6.',
            'username.max' => 'Password contains maxlength 20.',
            'username.regex' => 'Please enter valid username.',
            'business_name.required' => 'Please enter your business or brand name.',
            'business_name.min' => 'Password contains minlength 2.',
            'business_name.max' => 'Password contains maxlength 60.',
            'signup_terms.required' => 'Please check the terms & conditions.',
        ];
    }

    public function emailFieldValidation(Request $requestData)
    {
        $rules = [
            'email_id' => ['bail', 'required', 'email']
        ];
        return Helper::checkInputValidation($requestData->all(), $rules, $this->messages);
    }

    public function signupValidation(Request $requestData)
    {
        $rules = [
            'salutation' => ['bail', 'nullable', 'regex:/^[a-zA-Z]{2,10}$/'],
            'first_name' => ['bail', 'required', 'min:2', 'regex:/^[a-zA-Z]{2,30}$/'],
            'middle_name' => ['bail', 'nullable', 'min:2', 'regex:/^[a-zA-Z]{2,10}$/'],
            'last_name' => ['bail', 'required', 'min:2', 'regex:/^[a-zA-Z]{2,30}$/'],
            'username ' => ['bail', 'nullable', 'min:6', 'regex:/^[a-zA-Z0-9]{6,20}$/'],
            'email_id' => ['bail', 'required', 'email', 'unique:users,email'],
            'mobile_number' => ['bail', 'required', 'numeric', 'min:10', 'regex:/^[0-9]{10,12}$/'],
            'password' => ['bail', 'required', 'min:8', 'max:20', 'confirmed'],
            'password_confirmation' => ['bail', 'required', 'min:8', 'max:20'],
            'gender' => ['bail', 'nullable', 'in:male,female,other'],
            'business_name' => ['bail', 'required', 'min:2', 'max:60'],
            'signup_terms' => ['bail', 'required'],
        ];
        return Helper::checkInputValidation($requestData->all(), $rules, $this->messages);
    }
}
