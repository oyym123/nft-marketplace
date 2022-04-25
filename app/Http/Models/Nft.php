<?php

namespace App\Http\Models;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nft extends Model
{
    use DefaultDatetimeFormat;

    protected $fillable = [
        'name',
        'address',
        'creator_address',
        'owner_address',
        'contract_address',
        'tag_ids',
        'media_id',
        'media_type',
        'price',
        'status',
        'desc',
        'trans_hash',
        'start_time',
        'end_time',
        'auction_end',
        'min_price',
        'created_at',
        'updated_at'
    ];

    const STATUS_STOP_SELLING = 10; //停售
    const STATUS_FOR_SALE = 20;     //出售
    const STATUS_SOLD = 30;         //已出售

    const TYPE_FIXED_PRICE = 10;    //固定价格
    const TYPE_TIMED_AUCTION = 20;  //限时竞价
    const TYPE_AUCTION = 30;        //公开竞拍

    /**
     * 获取状态
     * @param string $key
     * @return string|string[]
     */
    public static function getStatus($key = 'all')
    {
        $data = [
            self::STATUS_STOP_SELLING => '<strong style="color: blueviolet">停售</strong>',
            self::STATUS_FOR_SALE => '<strong style="color: green">正在出售</strong>',
            self::STATUS_SOLD => '<strong style="color: red">已出售</strong>',
        ];
        return $key === 'all' ? $data : ($data[$key] ?: '');
    }


    /**
     * 创建一个新nft
     * @param $request
     * @return array
     */
    public function create($request)
    {
        list($code, $mediaId, $mediaType) = (new Media())->create($request);
        if ($code < 0) {
            return [-1, $mediaId];
        }

        if ($request['type'] == self::TYPE_TIMED_AUCTION && $request['auction_end'] < time() + 3600) {
            return [-1, '竞拍结束时间必须大于当前时间60分钟'];
        }

        $data = [
            'id' => $request['tokenId'],
            'media_id' => $mediaId,
            'media_type' => $mediaType,
            'name' => $request['name'] ?? '',
            'desc' => $request['description'] ?? '',
            'price' => $request['price'] ?? 0,
            'min_price' => $request['min_price'] ?? 0,
            'auction_end' => $request['auction_end'] ?? 0,
            'type' => $request['type'] ?? 0,
            'creator_address' => $request['account'] ?? '',
            'owner_address' => $request['account'] ?? '',
            'contract_address' => $request['contract_address'] ?? '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($request['type'] == self::TYPE_TIMED_AUCTION) {    //将结束时间写入
            $data['end_time'] = date('Y-m-d H:i:s', $request['auction_end']);
        }

        DB::table('nfts')->insert($data);
        return [1, ['message' => env("APP_URL") . '/nft/' . $request['tokenId']]];
    }

    public function detail($id)
    {
        $info = DB::table('nfts')->find($id);
        $data = [];
        $mediaModel = new Media();
        $userModel = new Users();
        if (!empty($info)) {
            $ownerInfo = $userModel->getInfo($info->owner_address);
            $creatorInfo = $userModel->getInfo($info->creator_address);
            $data = [
                'name' => $info->name,
                'price' => $info->price,
                'image' => $mediaModel->getUri($info->media_id),
                'description' => $info->desc,
                'min_price' => $info->min_price,
                'auction_end' => $info->auction_end,
                'owner_name' => $ownerInfo ? $ownerInfo['name'] : '',
                'owner_avatar' => $ownerInfo ? $ownerInfo['avatar'] : '',
                'creator_name' => $creatorInfo ? $creatorInfo['name'] : '',
                'creator_avatar' => $creatorInfo ? $creatorInfo['avatar'] : '',
            ];
        }
        return [1, $data];
    }

    public function updateInfo($request)
    {
        //判断是否存在
        $info = self::query()->find($request['id']);
        if (empty($info)) {
            return [-1, '没有该NFT'];
        }

        if (empty(self::getStatus($request['status']))) {
            return [-1, '不存在该状态'];
        }

        if (isset($request['trans_hash'])) {
            $price = $request['status'] == self::STATUS_SOLD ? $info->price : 0;
            $ownerAddress = (new Web3Model())->getBuyerAddress($request['trans_hash'], $price);

            if (!empty($ownerAddress)) {
                $data = [
                    'status' => $request['status'],
                    'owner_address' => $ownerAddress,
                    'trans_hash' => $request['trans_hash'],
                    'updated_at' => date('Y-m-d H:i:s'),
                ];

                if ($request['status'] == self::STATUS_FOR_SALE) { //写入上架时间
                    $data['start_time'] = date('Y-m-d H:i:s');
                }

                if ($request['status'] == self::STATUS_SOLD) { //写入结束时间
                    $data['end_time'] = date('Y-m-d H:i:s');
                }

                DB::table('nfts')->where(['id' => $info->id])->update($data);
            }
            return [1, 'success'];
        } else {
            return [1, '没有交易hash'];
        }
    }

    public static function nftIdent($id)
    {
        return self::query()->where([
            'id' => $id,
        ])->select('id')->first();
    }


    public function Media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

}
