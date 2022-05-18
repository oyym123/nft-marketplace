<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;
use App\Http\Models\Users;

class UserController extends WebController
{

    public function create()
    {
        $this->showMsg((new Users())->create($this->request));
    }

    public function index($follow, $owner)
    {
        $this->showMsg((new Users())->getList($follow, $owner));
    }


}
