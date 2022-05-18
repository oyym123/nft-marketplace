<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Media extends Model
{
    use \Encore\Admin\Traits\DefaultDatetimeFormat;
    const TYPE_IMAGE = 10;
    const TYPE_MUSIC = 20;
    const TYPE_VIDEO = 30;

    public static function getCode($key = 'all')
    {
        $data = [
            self::TYPE_IMAGE => 'img',
            self::TYPE_MUSIC => 'music',
            self::TYPE_VIDEO => 'video',
        ];
        return $key === 'all' ? $data : $data[$key];
    }

    public static function getType($key = 'all')
    {
        $data = [
            self::TYPE_IMAGE => '图片',
            self::TYPE_MUSIC => '音乐',
            self::TYPE_VIDEO => '视频',
        ];
        return $key === 'all' ? $data : $data[$key];
    }

    /**
     * 可以被批量赋值的属性.
     * @var array
     */
    protected  $fillable = [
        'type',
        'name',
        'uri',
        'created_at',
        'updated_at'
    ];

    /**
     * 创建一个新资源
     * @request $request
     * @param $request
     * @return array
     */
    public function create($request)
    {
        list($code, $msg, $type) = $this->uploadFile($request);
        if ($code > 0) {
            $data = [
                'name' => $request['name'] ?? '',
                'type' => $type,
                'uri' => $msg,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            if ($id = DB::table('media')->insertGetId($data)) {
                return [1, $id, $type];
            }
        }
        return [-1, $msg, $type];
    }

    /**
     * 上传
     * @param $request
     * @return array
     */
    public function uploadFile($request)
    {
        $uri = '';
        $file = $request->file('file');
        $mime = $file->getMimeType();

        $allowImg = ['image/jpeg', 'image/gif', 'image/png'];
        $allowMusic = ['audio/mpeg', 'image/gif'];
        $allowVideo = ['video/webm', 'video/mp4', 'application/octet-stream'];
        $type = 0;
        if (in_array($mime, $allowImg)) {
            $type = self::TYPE_IMAGE;
            $uri = $this->uploadImg($request);
        }

        if (in_array($mime, $allowMusic)) {
            $type = self::TYPE_MUSIC;
            $uri = $this->uploadMusic($request);
        }

        if (in_array($mime, $allowVideo)) {
            $type = self::TYPE_VIDEO;
            $uri = $this->uploadVideo($request);
        }

        if (!empty($uri)) {
            return [1, $uri, $type];
        }

        return [-1, '不允许' . $file->getMimeType() . '类型', $type];
    }

    /**
     * 图片上传
     * @param $request
     * @return string
     */
    public function uploadImg($request)
    {
        return $request->file('file')->store('/public/img');
    }

    /**
     * 音乐上传
     * @param $request
     * @return string
     */
    public function uploadMusic($request)
    {
        return $request->file('file')->store('/public/music');
    }

    /**
     * 视频上传
     * @param $request
     * @return string
     */
    public function uploadVideo($request)
    {
        return $request->file('file')->store('/public/video');
    }

    public function getUri($mediaId)
    {
        $data = DB::table('media')->find($mediaId, ['uri', 'type']);
        if (!empty($data)) {
            $uri = str_replace('public/' . self::getCode($data->type) . '/', '', $data->uri);
            return env('APP_URL') . '/' . self::getCode($data->type) . '/' . $uri;
        }
        return '';
    }

}
