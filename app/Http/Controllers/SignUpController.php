<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Services\Signup\ValidationRulesService as SignupValidationService;
use App\Services\Signup\BusinessLogicService as SignupBusinessLogicService;
use Helper;
use Lang;
use Log;

class SignUpController extends Controller
{
    protected $signupValidationRules;
    protected $signupBusinessLogic;
    
    public function __construct()
    {
        $this->defaultSignupViewLayout = '1';
        $this->signupValidationRules = new SignupValidationService();
        $this->signupBusinessLogic = new SignupBusinessLogicService();
    }

    public function index(Request $request)
    {
        $dataBag = [];
        $signupView = 'signup-layout-';
        $layoutNo = $this->defaultSignupViewLayout;
        if ($request->has('layout') && !empty($request->get('layout'))) {
            $layoutNo = trim($request->get('layout'));
        }
        $dataBag['layout_no'] = $layoutNo;
        $viewLayout = $signupView . $layoutNo;
        if (View::exists('sign-inup.' . $viewLayout)) {
            return view('sign-inup.' . $viewLayout, $dataBag);
        }
        return view('sign-inup.signup-layout-1', $dataBag);
    }

    public function emailChecking(Request $request)
    {
        $validation = $this->signupValidationRules->emailFieldValidation($request);
        if (!empty($validation)) {
            return "false";
        }
        $isEmailExist = $this->signupBusinessLogic->isUserEmailExist($request);
        if ($isEmailExist) {
            return "false";
        }
        return "true";
    }

    public function signup(Request $request)
    {
        $dataBag = [];
        $validation = $this->signupValidationRules->signupValidation($request);
        if (!empty($validation)) {
            $dataBag['validation_errors'] = $validation;
            $getValidationErrors = $validation['error_details'];
            if ($request->ajax()) {
                $response = Helper::constructResponse($dataBag, 'Please proceed with valid input data and try again.', 'VALIDATION_ERROR', 203);
                return response()->json($response);
            }
            $inputs = $request->except(['password', 'password_confirmation']);
            return back()
                ->withErrors($getValidationErrors, 'signupErrorBag')
                ->withInput($inputs)
                ->with('toastMessageType', 'error')
                ->with('toastMessage', Lang::get('error.validation.sub_title.proceed_valid_input'))
                ->with('toastMessageTitle', Lang::get('error.validation.count.title', array('validation_count' => count($getValidationErrors))));
        }
        dd($request->all());
        return '';
    }

    public function signupPartial(Request $request)
    {
        $dataBag = [];

        if (!$this->emailChecking($request)) {
            $response = Helper::constructResponse($dataBag, 'Signup partial email is already an user or subscriber.', 'SIGNUP_PARTIAL_USER', 201);
            return response()->json($response);
        }

        $isSaved = $this->signupBusinessLogic->signupPartialSave($request);
        if ($isSaved) {
            $response = Helper::constructResponse($dataBag, 'Signup partials records saved successfully.', 'SIGNUP_PARTIAL_SAVED', 200);
            return response()->json($response);
        }
        $response = Helper::constructResponse($dataBag, 'Something went worng during signup partial records save.', 'SIGNUP_PARTIAL_ERROR', 400);
        return response()->json($response);
    }
}
