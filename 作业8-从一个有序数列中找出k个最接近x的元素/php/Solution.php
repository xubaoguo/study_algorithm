<?php

class Solution{
	function findClosestElement($nums, $k, $x) {
		$size = count($nums);
		$left = 0;
		$right = $size - 1;
		$removeLeft = $size - $k;
		while ($removeLeft > 0) {
			if ($x - $nums[$left] > $nums[$right] - $x) {
				$left++;
			} else {
				$right--;
			}
			$removeLeft--;
		}
		$map = [];
		for ($i = $left; $i < $left + $k; $i++) {
			$map[] = $nums[$i];
		}
		return $map;
	}
}

echo json_encode((new Solution())->findClosestElement([1,2,3,4,5], 4, 3)) . PHP_EOL;