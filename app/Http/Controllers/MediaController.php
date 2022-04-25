<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;
use App\Http\Models\Media;

class MediaController extends WebController
{
    public function create()
    {
        (new Media())->create($this->request);
    }
}
