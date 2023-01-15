<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

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
        $langName = 'English';
        if ($lang != '') {
            $langName = $this->getLanguageName($lang);
        }
        Session::put('locale', $lang);
        return redirect()
            ->back()
            ->with('toastMessageType', 'success')
            ->with('toastMessage', 'Language switch to ' . $langName)
            ->with('toastMessageTitle', 'Done!');
    }

    public function getLanguageName($langCode)
    {
        if ($langCode == 'en') {
            $languageName = 'English';
        } elseif ($langCode == 'ben') {
            $languageName = 'Bengali';
        } elseif ($langCode == 'hin') {
            $languageName = 'Hindi';
        } else {
            $languageName = 'English';
        }
        return $languageName;
    }
}
