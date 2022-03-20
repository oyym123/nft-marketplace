<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;

class UserController extends WebController
{
    public function index()
    {
        $data = file_get_contents('./items.json');
        $data = json_decode($data, true);
        return view('web.user.index', $data);
    }

    public function detail()
    {
        $data = [];
        return view('web.user.detail', $data);
    }
}
