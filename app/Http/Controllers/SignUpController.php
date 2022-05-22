<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    
    public function __construct()
    {
        $this->defaultSignupViewLayout = 'signup-layout-2-20';
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
            } elseif ($getLayout == 13) {
                $viewLayout = 'signup-layout-2-10';
            } elseif ($getLayout == 14) {
                $viewLayout = 'signup-layout-2-11';
            } elseif ($getLayout == 15) {
                $viewLayout = 'signup-layout-2-12';
            } elseif ($getLayout == 16) {
                $viewLayout = 'signup-layout-2-13';
            } elseif ($getLayout == 17) {
                $viewLayout = 'signup-layout-1-4';
            } elseif ($getLayout == 18) {
                $viewLayout = 'signup-layout-2-14';
            } elseif ($getLayout == 19) {
                $viewLayout = 'signup-layout-2-15';
            } elseif ($getLayout == 20) {
                $viewLayout = 'signup-layout-2-16';
            } elseif ($getLayout == 21) {
                $viewLayout = 'signup-layout-2-17';
            } elseif ($getLayout == 22) {
                $viewLayout = 'signup-layout-2-18';
            } elseif ($getLayout == 23) {
                $viewLayout = 'signup-layout-2-19';
            } elseif ($getLayout == 24) {
                $viewLayout = 'signup-layout-2-20';
            } elseif ($getLayout == 25) {
                $viewLayout = 'signup-layout-2-21';
            } else {
                $viewLayout = $this->defaultSignupViewLayout;
            }
        }
        return view('sign_in_up.' . $viewLayout, $dataBag);
    }
}
