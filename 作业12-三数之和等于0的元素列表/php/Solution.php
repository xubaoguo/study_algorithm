<?php

class Solution {
	function threeSum($nums) {
		$res = [];
		$len = count($nums);
		sort($nums);
		for ($k = 0; $k < $len - 1; $k++) {
			if ($nums[$k] > 0) break;
			if ($k > 0 && $nums[$k] == $nums[$k - 1]) continue;

			$low = $k + 1;
			$high = $len - 1;
			while ($low < $high) {
				$sum = $nums[$k] + $nums[$low] + $nums[$high];
				if ($sum == 0) {
					$res[] = [$nums[$k], $nums[$low], $nums[$high]];
					while ($low < $high && $nums[$low] == $nums[++$low]);
					while ($low < $high && $nums[$high] == $nums[--$high]);
				} else if ($sum > 0) {
					while ($low < $high && $nums[$high] == $nums[--$high]);
				} else {
					while ($low < $high && $nums[$low] == $nums[++$low]);
				}
			}
		}
		return $res;
	}
}