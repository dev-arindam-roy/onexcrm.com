<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Lang;
use App;

class LocalizationController extends Controller
{
    public function __construct()
    {
        $this->validLocalization = ['en', 'ben', 'hin'];
    }

    public function index(Request $request, $lang = 'en')
    {
        if (!in_array($lang, $this->validLocalization)) {
            abort(404);
        }
        Session::put('locale', $lang);
        App::setLocale(session()->get('locale'));
        return redirect()
            ->back()
            ->with('toastMessageType', 'success')
            ->with('toastMessage', Lang::get('jsmessages.switched_language', array('language_name' => trans('label.lang_text'))))
            ->with('toastMessageTitle', Lang::get('jsmessages.done'));
    }
}
