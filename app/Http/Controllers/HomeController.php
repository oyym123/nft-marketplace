<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;

class HomeController extends WebController
{
    public function index()
    {
        $data = file_get_contents('./items.json');
        $data = json_decode($data,true);
        return view('web.home.index', $data);
    }
}
