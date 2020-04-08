<?php

class Solution {
	function maxSumSubArray($nums) {
		$arr = [$nums[0]];
		$count = count($nums);
		for ($i = 1; $i < $count; $i++) {
			$arr[$i] = max($arr[$i - 1] + $nums[$i], $nums[$i]);
		}

		return max($arr);
	}

	/**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $dp[0] = $nums[0];
        $max = $nums[0];
        for ($i = 1;$i < count($nums);$i++) {
            if ($dp[$i - 1] < 0) {
                $dp[$i] = $nums[$i];
            } else {
                $dp[$i] = $nums[$i] + $dp[$i - 1];
            }
            if ($dp[$i] > $max) $max = $dp[$i];
        }
        return $max;
    }
}