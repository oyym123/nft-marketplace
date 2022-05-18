<?php

namespace App\Http\components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public $enableCsrfValidation = false;
    public $request;
    public $limit = 20;
    public $pages = 0;
    public $userId = 0;
    public $userIdent = 0;
    public $token = 0;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $request->pages && $this->pages = $request->pages;
        $request->limit && $this->limit = $request->limit;
        $this->offset = $this->pages * $this->limit;
        if ($this->limit > 100) {
            $this->limit = 100;
        }
    }

    public function showMsg($res)
    {
        if (isset($res[0]) && isset($res[1]) && $res[0] > 0) {
            $data = [
                'status' => 1,
                'data' => $res[1]
            ];
        } else {
            $data = [
                'status' => 0,
                'data' => $res[1] ?? ''
            ];
        }
        exit(json_encode($data));
    }
}


