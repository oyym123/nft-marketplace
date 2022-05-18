<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;
use App\Http\Models\Collect;

class CollectController extends WebController
{
    public function create()
    {
        $this->showMsg((new Collect())->create($this->request));
    }
}
