<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function cuttingRope($n) {
        if ($n <= 3) return $n - 1;
        $a = floor($n / 3); $b = $n % 3;
        if ($b == 0) return (int) pow(3, $a);
        if ($b == 1) return (int) pow(3, $a - 1) * 4;
        return (int) pow(3, $a) * 2;
    }

    /**
     * 剪绳子 暴力解法
     * @param $n
     * @return mixed
     */
    function cuttingRopeTwo($n) {
        $map = [];
        for ($i = 2; $i < $n + 1; $i++) {
            for ($j = 1; $j < $i; $j++) {
                $map[$i] = max($map[$i], $map[$j] * ($i - $j), $j * ($i - $j));
            }
        }
        return $map[$n];
    }
}