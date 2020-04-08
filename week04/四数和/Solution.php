<?php

class Solution {
	 /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        sort($nums);
        $total = count($nums);
        $ret = [];
        if ($total < 4) return $ret;

        for ($i = 0; $i < $total - 3; $i++) {
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) continue;
            $min1 = $nums[$i] + $nums[$i + 1] + $nums[$i + 2] + $nums[$i + 3];
            if ($min1 > $target) break;
            $max1 = $nums[$i] + $nums[$total - 1] + $nums[$total - 2] + $nums[$total - 3];
            if ($max1 < $target) continue;
            for ($j = $i + 1; $j < $total - 2; $j++) {
                if ($j > $i + 1 && $nums[$j] == $nums[$j - 1]) continue;
                $min = $nums[$i] + $nums[$j] + $nums[$j + 1] + $nums[$j + 2];
                if ($min > $target) continue;
                $max = $nums[$i] + $nums[$j] + $nums[$total - 1] + $nums[$total - 2];
                if ($max < $target) continue;

                $left = $j + 1;
                $right = $total - 1;
                while ($left < $right) {
                    $sum = $nums[$i] + $nums[$j] + $nums[$left] + $nums[$right];
                    if ($sum == $target) {
                        $ret[] = [$nums[$i],$nums[$j],$nums[$left],$nums[$right]];
                        while ($left < $right && $nums[$left] == $nums[$left + 1]) $left++;
                        while ($left < $right && $nums[$right] == $nums[$right - 1]) $right--;
                        $left++;
                        $right--;
                    } elseif($sum > $target) {
                        $right--;
                    } elseif($sum < $target) {
                        $left++;
                    }
                }//-end while
            }// end for
        }//end for
        return $ret;
    }
}