<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;
use App\Http\Models\Bids;
use App\Http\Models\Follow;

class BidsController extends WebController
{
    public function index($nftId)
    {
        $this->showMsg((new Bids())->index($nftId));
    }

    public function create()
    {
        $this->showMsg((new Bids())->create($this->request));
    }
}
