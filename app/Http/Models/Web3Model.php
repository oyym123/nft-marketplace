<?php


namespace App\Http\Models;

use League\Flysystem\Config;
use RenokiCo\LaravelWeb3\Web3Facade as Web3;
use Web3\Exceptions\ErrorException;
use Web3\Exceptions\TransporterException;
use Web3\Namespaces\Eth;
use Web3\Namespaces\Net;
use Web3\ValueObjects\Wei;


class Web3Model extends Base
{
    public Net $net;
    public Eth $eth;

    public function __construct()
    {
        $this->eth = Web3::connection('http2')->eth();
        $this->net = Web3::connection('http2')->net();
    }

    /**
     * 获取用户资金
     * @param $address
     * @return string
     * @throws ErrorException
     * @throws TransporterException
     */
    public function getBalance($address)
    {
        return (new Wei($this->eth->getBalance($address)))->toEth();
    }

    /**
     * 获取购买者地址用于记录
     */
    public function getBuyerAddress($transHash, $price)
    {
        $info = $this->eth->getTransactionByHash($transHash);
        if ($info['to'] == strtolower(env("CONTRACT_ADDRESS")) && $price == $info['value']) {
            return $info['from'];
        }
        return '';
    }

}
