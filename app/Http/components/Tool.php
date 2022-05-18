<?php


namespace App\Http\components;

class Tool
{
    /**
     * 只保留字符串首尾字符，隐藏中间用*代替（两个字符时只显示第一个）
     * @param  [string] $user_name 字符串
     * @param  [int] $head      左侧保留位数
     * @param  [int] $foot      右侧保留位数
     * @return string 格式化后的姓名
     */
    public static function substrCut($user_name, $head, $foot, $middle = 0)
    {
        $res = '';
        $strlen = mb_strlen($user_name, 'utf-8');
        $firstStr = mb_substr($user_name, 0, $head, 'utf-8');
        $lastStr = mb_substr($user_name, -$foot, $foot, 'utf-8');
        if ($strlen == 2) {
            $res = $firstStr . str_repeat('*', mb_strlen($user_name, 'utf-8') - 1);
        } elseif ($strlen > 2) {
            if ($middle == 0) {
                $middle = $strlen - ($head + $foot);
            }
            $res = $firstStr . str_repeat("*", $middle) . $lastStr;
        }
        return $res;
    }
}
