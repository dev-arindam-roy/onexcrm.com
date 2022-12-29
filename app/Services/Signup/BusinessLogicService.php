<?php

namespace App\Services\Signup;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SignupPartial;
use Helper;
use Log;

class BusinessLogicService
{
    public function __construct()
    {
        
    }
    
    /**
     * isUserEmailExist
     * checking user email exist or not
     * @param  object $requestData
     * @return boolean
     */
    public function isUserEmailExist(Request $requestData)
    {
        $requestData = $requestData->all();
        $email = $requestData['email_id'];
        return User::where('email', $email)->exists();
        //return User::where('email', $email)->where('user_status', '!=', 0)->exists();
    }

    public function signupPartialSave(Request $requestData)
    {
        $requestData = $requestData->all();
        
        $signupPartial = new SignupPartial();
        
        $isPartialExist = SignupPartial::where('email', $requestData['email'])->first();
        if (!empty($isPartialExist)) {
            $signupPartial = SignupPartial::find($isPartialExist->id);
        }
        
        $signupPartial->salutation = $requestData['salutation'] ?? NULL;
        $signupPartial->first_name = $requestData['first_name'];
        $signupPartial->middle_name = $requestData['middle_name'] ?? NULL;
        $signupPartial->last_name = $requestData['last_name'] ?? NULL;
        $signupPartial->email = $requestData['email'];
        $signupPartial->mobile_number = $requestData['mobile_number'] ?? NULL;
        $signupPartial->gender = $requestData['gender'] ?? NULL;
        $signupPartial->business_name = $requestData['business_name'] ?? NULL;
        $signupPartial->layout_no = $requestData['layout'] ?? NULL;
        $signupPartial->url_str = $requestData['url_qstr'] ?? NULL;
        $signupPartial->url_hash = $requestData['url_hash'] ?? NULL;
        $signupPartial->url_full = $requestData['url_full'] ?? NULL;
        $signupPartial->url_refer = $requestData['url_refer'] ?? NULL;

        if ($signupPartial->save()) {
            return true;
        }
        return false;
    }
}
