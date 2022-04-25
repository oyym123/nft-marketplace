<?php

namespace App\Http\Controllers;

use App\Http\components\WebController;
use RenokiCo\LaravelWeb3\Web3Facade as Web3;
use Web3\Namespaces\Eth;
use Web3\Namespaces\Net;
use Web3\ValueObjects\Transaction;
use Web3\ValueObjects\Wei;

class Web3Controller extends WebController
{
    public Net $net;
    public Eth $eth;

    public function __construct()
    {
        $this->eth = Web3::connection('http2')->eth();
        $this->net = Web3::connection('http2')->net();
    }

    public function index()
    {
        //测试 0xBc40709f26CEedbFD77E1F599f6f46c52d814555
//        $res3 = $this->eth->getTransactionByHash("0x85e5e148b9f3b65f69ebdb027d35ad845e6219b9846f5fdc22f7edae74b55e22");
//        $res3 = $this->eth->getBalance("0xBc40709f26CEedbFD77E1F599f6f46c52d814555")->value() / 10 ** 18;

        $from = '0xBc40709f26CEedbFD77E1F599f6f46c52d814555';
        $to = '0x58eaA451283D460448F1F663445911dB9451Df61';
//        $transaction = new Transaction($from, $to, ['value' => ((10 ** 18) * 1)]);
        $res3 = $this->eth->getTransactionByHash("0xf5e527f7107348e65d64368a9601b9c2e8d7112fa3d2ade6271f493e34602d7b");
        dd($res3);
    }

}
