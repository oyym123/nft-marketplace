<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;

class FileController extends WebController
{
    function img($fileName)
    {
        $path = storage_path() . '/app/public/img/' . $fileName;
        return response()->file($path);
    }

    function music($fileName)
    {
        $path = storage_path() . '/app/public/music/' . $fileName;
        return response()->file($path);
    }

    function video($fileName)
    {
        $path = storage_path() . '/app/public/video/' . $fileName;
        return response()->file($path);
    }

    function avatar($fileName)
    {
        $path = storage_path() . '/app/public/avatar/' . $fileName;
        return response()->file($path);
    }

}
