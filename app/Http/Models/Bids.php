<?php

namespace App\Http\Models;
class Bids extends Base
{
    protected $table = 'bids';

    protected $fillable = [
        'nft_id',
        'bid_price',
        'bidder_address',
        'bid_time',
        'created_at',
    ];

    /**
     * 获取竞拍列表
     * @param $nftId
     * @return array
     */
    public function index($nftId)
    {
        $bids = self::query()
            ->select(['id', 'nft_id', 'bid_price', 'bidder_address', 'bid_time'])
            ->where(['nft_id' => $nftId])
            ->orderBy('id','desc')
            ->get();

        $data = [];
        foreach ($bids as $bid) {
            $data[] = [
                'id' => $bid->id,
                'avatar' => env('APP_URL') . '/avatar/' . $bid->User->avatar,
                'name' => $bid->User->name,
                'bid_price' => $bid->bid_price,
                'bidder_address' => $bid->bidder_address,
                'bid_time' => $bid->bid_time,
            ];
        }
        return [1, $data];
    }

    /**
     * 竞拍信息记录
     * @param $params
     * @return array
     */
    public function create($params)
    {
        //判断是否存在
        $nft = Nft::query()->find($params['nft_id']);
        if (empty($nft)) {
            return [-1, '没有该NFT'];
        }

        //用户校验
        if (empty((new Users())->getInfo($params['bidder_address']))) {
            return [-1, '没有该用户'];
        }

        //交易hash 校验
        if (!isset($params['trans_hash'])) {
            return [-1, '没有交易hash'];
        }

        //可能区块有延时 这里可以做成异步处理
        $ownerAddress = (new Web3Model())->getBuyerAddress($params['trans_hash'], $params['bid_price']);
        if (!empty($ownerAddress) && $ownerAddress == strtolower($params['bidder_address'])) {
            //校验交易hash是否重复
            $transHash = self::query()->where(['trans_hash' => $params['trans_hash']])->first();
            if (!empty($transHash)) {
                return [-1, '已存在该交易'];
            }

            $data = [
                'nft_id' => $params['nft_id'],
                'bidder_address' => $ownerAddress,
                'bid_price' => $params['bid_price'],
                'trans_hash' => $params['trans_hash'],
                'bid_time' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s')
            ];

            if (self::query()->insert($data)) {
                return [1, '新增成功'];
            }
            return [-1, '新增失败'];
        } else {
            return [-1, '错误交易hash'];
        }

    }

    public function Nft()
    {
        return $this->belongsTo(Nft::class, 'nft_id');
    }

    public function User()
    {
        return $this->belongsTo(Users::class, 'bidder_address', 'address');
    }

}

