<?php

namespace App\H5\Controllers;

use App\H5\components\WebController;

class HomeController extends WebController
{
    public function successView()
    {
        return view('api.home.success');
    }

    public function index()
    {

        $data = [
            'banner' => [
                [
                    'id' => 1,
                    'title' => '新手指南',
                    'img' => config('qiniu.domain') . 'banner-zhinan.jpg',
                    'function' => 'html',
                    'params' => [
                        'key' => 'url',
                        'type' => 'String',
                        'value' => '/pages/zhiNan/zhiNan?url=https://' . $_SERVER["HTTP_HOST"] . '/api/newbie-guide',
                    ],
                ],
                [
                    'id' => 3,
                    'title' => '拍品',
                    'img' => config('qiniu.domain') . 'banner-iphone.jpg',
                    'function' => 'html',
                    'params' => [
                        'key' => 'url',
                        'type' => 'String',
                        'value' => '/pages/detail_page/detail_page?period_id=47119',
                    ],
                ]
            ],
            'display_module' => [
                [
                    'id' => 0,
                    'title' => '手机专区',
                    'img' => config('qiniu.domain') . 'tuiguang2.png',
                    'url' => '/h5/product/phone-zone-view',
                ],
                [
                    'id' => 1,
                    'title' => '充值',
                    'img' => config('qiniu.domain') . 'chongzhi2018.png',
                    'url' => '/h5/pay/recharge-center',
                ],
                [

                    'id' => 2,
                    'title' => '限时秒杀',
                    'img' => config('qiniu.domain') . 'shiyuanzuanqv2018.png',
                    'url' => '/h5/product/ten-zone-view',
                ], [

                    'id' => 3,
                    'title' => '晒单',
                    'img' => config('qiniu.domain') . 'shaidan2018.png',
                    'url' => '/h5/evaluate/lists',

                ],
                [
                    'id' => 4,
                    'title' => '常见问题',
                    'img' => config('qiniu.domain') . 'changjianwenti2018.png',
                    'url' => 'https://' . $_SERVER["HTTP_HOST"] . '/api/common-problems',
                ]
            ]
        ];
        return view('h5.home.index', $data);
    }
}
