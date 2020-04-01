<?php

/**
 * 面试题29. 顺时针打印矩阵
 * https://leetcode-cn.com/problems/shun-shi-zhen-da-yin-ju-zhen-lcof/
 * Class Solution
 * 回形打印二维数组
 */
class Solution {
    function printOrder($matrix) {
        $n = 1;
        $i = 0;
        $countCol = count($matrix[0]);
        $countRow = count($matrix);
        $num = $countCol * $countRow;
        $res = [];
        while ($i < $num) {
            $row = $col = $n - 1;
            for ($p = $col; $p <= $countCol - $n; $p++) {
                $res[] = $matrix[$row][$p];
                $i++;
                if ($i >= $num) break;
            }
            for ($p = $row + 1; $p <= $countRow - $n; $p++) {
                $res[] = $matrix[$p][$countCol - $n];
                $i++;
                if ($i >= $num) break;
            }

            for ($p = $countCol - $n - 1; $p >= $n - 1; $p--) {
                $res[] = $matrix[$countRow - $n][$p];
                $i++;
                if ($i >= $num) break;
            }

            for ($p = $countRow - $n - 1; $p > $row; $p--) {
                $res[] = $matrix[$p][$col];
                $i++;
                if ($i >= $num) break;
            }
            $n++;
        }
        return $res;
    }
}

echo json_encode((new Solution())->printOrder([[1,2,3,4],[5,6,7,8],[9,10,11,12]])) . PHP_EOL;