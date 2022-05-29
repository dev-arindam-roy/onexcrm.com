<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SignUpController extends Controller
{
    
    public function __construct()
    {
        $this->defaultSignupViewLayout = 'signup-layout-2-37';
    }

    public function index(Request $request)
    {
        $dataBag = [];
        $viewLayout = $this->defaultSignupViewLayout;
        if ($request->has('layout') && !empty($request->get('layout'))) {
            $signupView = 'signup-layout-' . trim($request->get('layout'));
            if (View::exists('sign_in_up.' . $signupView)) {
                $viewLayout = $signupView;
            }
        }
        return view('sign_in_up.' . $viewLayout, $dataBag);
    }
}
