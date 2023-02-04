<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use Session;
use Lang;
use App;

trait UtilityTrait
{
    public static function constructResponse($response = [], $message = '', $messageType = 'success', $status = 200, $type = 'success')
    {
        $responseArray = [];
        $responseArray['status'] = $status;
        $responseArray['type'] = $type;
        $responseArray['body']['message'] = $message;
        $responseArray['body']['type'] = $messageType;
        $responseArray['body']['content'] = $response;
        return $responseArray;
    }

    public static function checkInputValidation($formData, $rules, $messages)
    {
        $errorDetails = [];
        $validation = Validator::make($formData, $rules, $messages);
        if ($validation->fails()) {
            $errorMessages = [];
            $validationErrors = $validation->errors();
            $validationErrorsArr = $validation->errors()->toArray();
            $errorDetails['error_details'] = $validationErrors;
            foreach($validationErrorsArr as $errors) {
                foreach($errors as $errMsgs) {
                    array_push($errorMessages, $errMsgs);
                }
            }
            $errorDetails['error_messages'] = $errorMessages;
        }
        return $errorDetails;
    }

    public static function setLocalization()
    {
        if(session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        } else {
            session()->put('locale', App::getLocale());
        }
    }

    public static function localizationJsMessages()
    {
        return json_encode(Lang::get('jsmessages'), JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
}