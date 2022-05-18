<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;
use App\Http\Models\Follow;

class FollowController extends WebController
{
    public function create()
    {
        $this->showMsg((new Follow())->create($this->request));
    }

}
