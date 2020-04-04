<?php

class Solution {
	function trap($height) {
		$len = count($height);
		$sum = 0;
		$left = 1;
		$right = $len - 2;
		$maxLeft = 0;
		$maxRight = 0;
		for ($i = 1; $len - 1; $i++) {
			if ($height[$left - 1] > $height[$right + 1]) {
				$maxRight = max($maxRight, $height[$right + 1]);
				$min = $maxRight;
				if ($min > $height[$right]) $sum += ($min - $height[$right]);
				$right--;
			} else {
				$maxLeft = max($maxLeft, $height[$left - 1]);
				$min = $maxLeft;
				if ($min > $height[$left]) $sum += ($min - $height[$left]);
				$left++;
			}
		}
	}
}