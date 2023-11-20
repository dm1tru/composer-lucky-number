<?php

declare(strict_types=1);

namespace DimAl\LuckyNumber;

class LuckyNumberChecker
{
    public function isLuckyNumber(int $num)
    {
        $exists_nums = [$num];
        while ($num != 1) {
            $res_num = 0;
            while ($num > 0) {
                $digit = $num % 10;
                $res_num += pow($digit, 2);
                $num = floor($num / 10);
            }

            if (in_array($res_num, $exists_nums)) {
                return false;
            }
            array_push($exists_nums, $res_num);
            $num = $res_num;
        }

        return true;
    }
}
