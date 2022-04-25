<?php

namespace App\Http\Models;

class Follow extends Base
{
    protected $table = 'follow';
    const STATUS_FOLLOW_YES = 10;   //已关注
    const STATUS_FOLLOW_NO = 20;    //未关注

    protected $fillable = [
        'follow_address',
        'owner_address',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * 判断是否被关注
     */
    public static function isFollow($followAddress, $ownerAddress)
    {
        $info = self::query()->where([
            'follow_address' => $followAddress,
            'owner_address' => $ownerAddress,
            'status' => self::STATUS_FOLLOW_YES
        ])->first();
        return $info ? 1 : 0;
    }

    public function create($request)
    {
        //校验是否存在该被关注用户
        if (!Users::userIdent($request['follow_address'])) {
            return [-1, '没有该用户'];
        }

        //校验是否存在该用户
        if (!Users::userIdent($request['owner_address'])) {
            return [-1, '没有该用户'];
        }

        //关注者不能是自己
        if ($request['owner_address'] == $request['follow_address']) {
            return [-1, '不能自己关注自己'];
        }

        $data = [
            'owner_address' => $request['owner_address'],
            'follow_address' => $request['follow_address'],
            'status' => $request['status'] == self::STATUS_FOLLOW_YES ? self::STATUS_FOLLOW_YES : self::STATUS_FOLLOW_NO,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        //记录关注
        self::query()->updateOrInsert([
            'owner_address' => $request['owner_address'],
            'follow_address' => $request['follow_address'],
        ], $data);

        //获取粉丝数量
        $fansNum = Follow::query()->where([
            'follow_address' => $request['follow_address'],
            'status' => self::STATUS_FOLLOW_YES
        ])->count();

        //刷新粉丝数量
        Users::query()->where(['address' => $request['follow_address']])->update(['fans_num' => $fansNum]);

        //记录活动 TODO

        return [1, 'success'];
    }

}
