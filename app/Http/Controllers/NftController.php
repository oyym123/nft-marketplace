<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;
use App\Http\Models\Nft;

class NftController extends WebController
{
    public function detail($id)
    {
        $this->showMsg((new Nft())->detail($id));
    }

    public function create()
    {
        $this->showMsg((new Nft())->create($this->request));
    }

    public function forSale()
    {
        $this->request['status'] = Nft::STATUS_FOR_SALE;
        $this->showMsg((new Nft())->updateInfo($this->request));
    }

    public function buy()
    {
        $this->request['status'] = Nft::STATUS_SOLD;
        $this->showMsg((new Nft())->updateInfo($this->request));
    }
}
