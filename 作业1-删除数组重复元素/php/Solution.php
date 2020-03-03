<?php

class Solution {
	function removeRepeatValue(array $num) {
        $total = count($num);
        if ($total == 0) {
            return 0;
        }

        if ($total == 1) {
            return 1;
        }
        $i = 0;
        $res = [];
        for ($j = 1; $j < $total - 1; $j++) {
            if ($num[$i] != $num[$j]) {
                $i++;
                $res[$i] = $num[$j];
                $num[$i] = $num[$j];
            }
        }
        //打印数组
        return $i + 1;
    }
}

/**
 * Test code:
 * $return = (new Solution())->removeRepeatValue([0,0,1,1,1,2,2,3,3,4]);
var_dump($return);
 */