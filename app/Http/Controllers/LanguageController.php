<?php

namespace App\Http\Controllers;


class LanguageController extends Controller
{
    public function setLocale($lange)
    {
        if (array_key_exists($lange, config('app.locales'))) {
            session(['applocale' => $lange]);
        }
        return back()->withInput();
    }
}
