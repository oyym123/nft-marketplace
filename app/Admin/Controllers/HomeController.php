<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Nft;
use App\Http\Models\Users;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('仪表板')
            ->description('NFT Admin')
//            ->row(Dashboard::title())
            ->row(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $today = [date('Y-m-d'), date("Y-m-d", strtotime("+1 day"))];
                    $infoBox1 = new InfoBox('今日新增会员', 'users',
                        'green', '/admin/users?created_at[start]=' . $today[0] . '&created_at[end]=' . $today[1], Users::query()
                            ->whereBetween('created_at', $today)->count('id'));
                    $column->append($infoBox1);
                });

                $row->column(4, function (Column $column) {
                    $today = [date('Y-m-d'), date("Y-m-d", strtotime("+1 day"))];
                    $infoBox1 = new InfoBox('今日新增NFT', 'ntfs',
                        'green', '/admin/nft?created_at[start]=' . $today[0] . '&created_at[end]=' . $today[1], Nft::query()
                            ->whereBetween('created_at', $today)->count('id'));
                    $column->append($infoBox1);
                });

                $row->column(4, function (Column $column) {
                    $today = [date('Y-m-d'), date("Y-m-d", strtotime("+1 day"))];
                    $infoBox1 = new InfoBox('今日已售出NFT总数', 'ntfs',
                        'green', '/admin/nft?created_at[start]=' . $today[0] . '&created_at[end]=' . $today[1], Nft::query()
                            ->where(['status' => Nft::STATUS_SOLD])
                            ->whereBetween('created_at', $today)
                            ->count('id'));
                    $column->append($infoBox1);
                });
            })->row(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $infoBox1 = new InfoBox('会员总数', 'users', 'green', '/admin/users', Users::query()->count('id'));
                    $column->append($infoBox1);
                });

                $row->column(4, function (Column $column) {
                    $infoBox1 = new InfoBox('NFT总数', 'users', 'yellow', '/admin/nft', Nft::query()->count('id'));
                    $column->append($infoBox1);
                });

                $row->column(4, function (Column $column) {
                    $infoBox1 = new InfoBox('已售出NFT总数', 'users', 'blue', '/admin/nft', Nft::query()->where(['status' => Nft::STATUS_SOLD])->count('id'));
                    $column->append($infoBox1);
                });
            });
    }
}
