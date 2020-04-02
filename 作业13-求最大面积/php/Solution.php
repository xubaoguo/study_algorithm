<?php

class Solution {
	function maxArea($nums) {
		$maxArea = 0; $left = 0; $right = count($nums) - 1;
		while ($left < $right) {
			$maxArea = max($maxArea, min($nums[$left], $nums[$right]) * ($right - $left));
			if ($nums[$left] > $nums[$right]) {
				$right--;
			} else {
				$left++;
			}
		}
		return $maxArea;
	}
}