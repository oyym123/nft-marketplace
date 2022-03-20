<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;

class ItemController extends WebController
{
    public function index()
    {
        $data = file_get_contents('./items.json');
        $data = json_decode($data, true);
        return view('web.item.index', $data);
    }

    public function detail()
    {
        $data = [];
        return view('web.item.detail', $data);
    }

    public function mint()
    {
        $data = [];
        return view('web.item.mint', $data);
    }

    public function mintSubmit()
    {
        $data = [];
    }
}
