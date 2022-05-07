<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $dataBag = [];
        return view('sign_in_up.signup-layout-1-1', $dataBag);
    }
}
