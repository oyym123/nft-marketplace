<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Collect extends Model
{
    protected $table = 'collect';
    const STATUS_COLLECT_YES = 10;   //已收藏
    const STATUS_COLLECT_NO = 20;    //未收藏

    public static function getStatus($key = 'all')
    {
        $data = [
            self::STATUS_COLLECT_YES => '已收藏',
            self::STATUS_COLLECT_NO => '未收藏',
        ];
        return $key === 'all' ? $data : ($data[$key] ?? '');
    }

    protected $fillable = [
        'nft_id',
        'address',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * 获取用户的收藏
     * @param $address
     * @param int $status
     */
    public function getList($address, $status = self::STATUS_COLLECT_YES)
    {
        $info = self::query()->select(['nft_id'])->where([
            'status' => $status,
            'address' => $address
        ])->get()->toArray();
        if (!empty($info)) {
            return array_column($info, 'nft_id');
        }
        return [];
    }

    public function create($request)
    {
        //校验是否存在该nft_id
        if (!Nft::nftIdent($request['nft_id'])) {
            return [-1, '没有该NFT'];
        }

        //校验是否存在该用户
        if (!Users::userIdent($request['address'])) {
            return [-1, '没有该用户'];
        }

        $data = [
            'nft_id' => $request['nft_id'],
            'address' => $request['address'],
            'status' => $request['status'] == self::STATUS_COLLECT_YES ? self::STATUS_COLLECT_YES : self::STATUS_COLLECT_NO,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        self::query()->updateOrInsert([
            'address' => $request['address'],
            'nft_id' => $request['nft_id'],
        ], $data);
        return [1, 'success'];
    }
}
