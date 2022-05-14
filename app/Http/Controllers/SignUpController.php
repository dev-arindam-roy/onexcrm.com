<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    
    public function __construct()
    {
        $this->defaultSignupViewLayout = 'signup-layout-2-8';
    }

    public function index(Request $request)
    {
        $dataBag = [];
        $viewLayout = $this->defaultSignupViewLayout;
        if ($request->has('layout') && !empty($request->get('layout'))) {
            $getLayout = trim($request->get('layout'));
            if ($getLayout == 1) {
                $viewLayout = 'signup-layout-1-1';
            } elseif ($getLayout == 2) {
                $viewLayout = 'signup-layout-1-2';
            } elseif ($getLayout == 3) {
                $viewLayout = 'signup-layout-1-3';
            } elseif ($getLayout == 4) {
                $viewLayout = 'signup-layout-2-1';
            } elseif ($getLayout == 5) {
                $viewLayout = 'signup-layout-2-2';
            } elseif ($getLayout == 6) {
                $viewLayout = 'signup-layout-2-3';
            } elseif ($getLayout == 7) {
                $viewLayout = 'signup-layout-2-4';
            } elseif ($getLayout == 8) {
                $viewLayout = 'signup-layout-2-5';
            } elseif ($getLayout == 9) {
                $viewLayout = 'signup-layout-2-6';
            } elseif ($getLayout == 10) {
                $viewLayout = 'signup-layout-2-7';
            } elseif ($getLayout == 11) {
                $viewLayout = 'signup-layout-2-8';
            } elseif ($getLayout == 12) {
                $viewLayout = 'signup-layout-2-9';
            } else {
                $viewLayout = $this->defaultSignupViewLayout;
            }
        }
        return view('sign_in_up.' . $viewLayout, $dataBag);
    }
}
