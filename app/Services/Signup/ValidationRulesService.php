<?php

namespace App\Services\Signup;

use Illuminate\Http\Request;
use App\Rules\DisposableEmail;
use Validator;
use Helper;
use Lang;
use Log;

class ValidationRulesService
{
    public function __construct()
    {
        
    }

    public function signupValidationMessages()
    {
        $messages = [
            'salutation.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.salutation'))), 'field_length' => 10]),
            'salutation.regex' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.salutation'))]),
            'first_name.required' => Lang::get('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.first_name'))]),
            'first_name.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.first_name'))), 'field_length' => 2]),
            'first_name.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.first_name'))), 'field_length' => 30]),
            'first_name.regex' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.first_name'))]),
            'middle_name.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.middle_name'))), 'field_length' => 2]),
            'middle_name.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.middle_name'))), 'field_length' => 10]),
            'middle_name.regex' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.middle_name'))]),
            'last_name.required' => Lang::get('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.last_name'))]),
            'last_name.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.last_name'))), 'field_length' => 2]),
            'last_name.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.last_name'))), 'field_length' => 30]),
            'last_name.regex' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.last_name'))]),
            'email_id.required' => Lang::get('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.email_id'))]),
            'email_id.email' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.email_id'))]),
            'email_id.unique' => Lang::get('validation.form.email.exist'),
            'mobile_number.required' => Lang::get('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.mobile_number'))]),
            'mobile_number.numeric' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.mobile_number'))]),
            'mobile_number.regex' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.mobile_number'))]),
            'mobile_number.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.mobile_number'))), 'field_length' => 10]),
            'mobile_number.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.mobile_number'))), 'field_length' => 12]),
            'password.required' => Lang::get('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.password'))]),
            'password.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.password'))), 'field_length' => 8]),
            'password.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.password'))), 'field_length' => 20]),
            'password.confirmed' => Lang::get('validation.form.confirm_password.notmatch'),
            'password_confirmation.required' => Lang::get('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.confirm_password'))]),
            'password_confirmation.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.confirm_password'))), 'field_length' => 8]),
            'password_confirmation.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.confirm_password'))), 'field_length' => 20]),
            'gender.in' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.gender'))]),
            'username.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.username'))), 'field_length' => 6]),
            'username.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.username'))), 'field_length' => 60]),
            'username.regex' => Lang::get('validation.form.field.valid', ['field_name' => strtolower(trans('label.form.field.username'))]),
            'business_name.required' => Lang::get('validation.form.field.required', ['field_name' => strtolower(trans('label.form.field.business_name'))]),
            'business_name.min' => Lang::get('validation.form.field.server_side.min_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.business_name'))), 'field_length' => 2]),
            'business_name.max' => Lang::get('validation.form.field.server_side.max_length', ['field_name' => ucfirst(strtolower(trans('label.form.field.business_name'))), 'field_length' => 60]),
            'signup_terms.required' => Lang::get('validation.form.field.checkbox.required', ['field_name' => strtolower(trans('label.terms_and_conditions'))]),
        ];
        return $messages;
    }

    public function emailFieldValidation(Request $requestData)
    {
        $rules = [
            'email_id' => ['bail', 'required', 'email']
        ];
        return Helper::checkInputValidation($requestData->all(), $rules, $this->signupValidationMessages());
    }

    public function signupValidation(Request $requestData)
    {
        $rules = [
            'salutation' => ['bail', 'nullable', 'regex:/^[a-zA-Z]{2,10}$/'],
            'first_name' => ['bail', 'required', 'min:2', 'regex:/^[a-zA-Z]{2,30}$/'],
            'middle_name' => ['bail', 'nullable', 'min:2', 'regex:/^[a-zA-Z]{2,10}$/'],
            'last_name' => ['bail', 'required', 'min:2', 'regex:/^[a-zA-Z]{2,30}$/'],
            'username ' => ['bail', 'nullable', 'min:6', 'regex:/^[a-zA-Z0-9]{6,20}$/'],
            'email_id' => ['bail', 'required', 'email', new DisposableEmail(Lang::get('validation.form.email.not_accept')), 'unique:users,email'],
            'mobile_number' => ['bail', 'required', 'numeric', 'min:10', 'regex:/^[0-9]{10,12}$/'],
            'password' => ['bail', 'required', 'min:8', 'max:20', 'confirmed'],
            'password_confirmation' => ['bail', 'required', 'min:8', 'max:20'],
            'gender' => ['bail', 'nullable', 'in:male,female,other'],
            'business_name' => ['bail', 'required', 'min:2', 'max:60'],
            'signup_terms' => ['bail', 'required'],
        ];
        return Helper::checkInputValidation($requestData->all(), $rules, $this->signupValidationMessages());
    }
}
