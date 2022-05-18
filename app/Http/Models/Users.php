<?php

namespace App\Http\Models;

use Illuminate\Support\Facades\DB;
use Web3\Exceptions\ErrorException;
use Web3\Exceptions\TransporterException;

class Users extends Base
{
    use \Encore\Admin\Traits\DefaultDatetimeFormat;

    protected $table = 'users';

    /**
     * 可以被批量赋值的属性.
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'address',
        'avatar',
        'password',
        'created_at',
        'updated_at',
    ];

    /**
     * 创建一个新用户
     * @param $params
     * @return array
     * @throws ErrorException
     * @throws TransporterException
     */
    public function create($params)
    {
        $where = ['address' => $params['address']];

        $data = [
            'address' => $params['address'] ?: '',
            'password' => '123456',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $exist = DB::table('users')->where($where)->select(['address'])->first();

        if (empty($exist)) {
            $data['name'] = rand(1, 2000) . '号用户';
            $data['avatar'] = str_pad(rand(1, 100), 4, "0", STR_PAD_LEFT) . '.jpg';
        }

        if (isset($params['avatar'])) {
            $data['avatar'] = $params['avatar'];
        }

        if (isset($params['name'])) {
            $data['name'] = $params['name'];
        }

        $data['balance'] = (new Web3Model())->getBalance($params['address']);

        DB::table('users')->updateOrInsert($where, $data);
        $userIdent = DB::table('users')->where(['address' => $params['address']])->select(['name', 'avatar', 'address'])->first();
        $info = [
            'name' => $userIdent->name,
            'avatar' => env('APP_URL') . '/avatar/' . $userIdent->avatar,
            'address' => $userIdent->address,
        ];
        return [1, $info];
    }

    /**
     * 获取商户的nft列表信息
     */
    public function getList($address, $owner)
    {
        $info = $this->getInfo($address);
        if (empty($info)) {
            return [-1, '没有该用户'];
        }

        $nftInfo = Nft::query()->select(['id', 'status'])
            ->whereIn('status', [Nft::STATUS_FOR_SALE, Nft::STATUS_STOP_SELLING])
            ->get();

        $createdIds = $onSaleIds = [];
        foreach ($nftInfo as $value) {
            if ($value->status == Nft::STATUS_STOP_SELLING) {
                $createdIds[] = $value->id;        //获取该用户创建且未在售的nft
            } else {
                $onSaleIds[] = $value->id;         //获取该用户在售的nft
            }
        }

        //获取该商户喜欢的nft
        $info['collect_ids'] = (new Collect())->getList($address);
        $info['created_ids'] = $createdIds;
        $info['on_sale_ids'] = $onSaleIds;
        $info['is_follow'] = Follow::isFollow($address,$address);
        return [1, $info];
    }

    public static function userIdent($address)
    {
        return self::query()->where([
            'address' => $address,
            'status' => self::STATUS_ENABLE,
        ])->select('id')->first();
    }

    /**
     * 获取商户头像
     * @param $address
     * @return mixed|string|null
     */
    public function getInfo($address)
    {
        $info = DB::table('users')
            ->where(['address' => $address])
            ->select(['avatar', 'name', 'fans_num'])
            ->first();
        if (!empty($info)) {
            return [
                'avatar' => env('APP_URL') . '/avatar/' . $info->avatar,
                'name' => $info->name,
                'fans_num' => $info->fans_num,
            ];
        }
        return [];
    }
}
