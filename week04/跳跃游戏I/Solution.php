<?php

class Solution {
	function canJump($nums) {
		$lastPos = count($nums) - 1;
		for ($i = count($nums) - 1; $i >= 0; $i--) {
			if ($i + $nums[$i] >= $lastPos) {
				$lastPos = $i;
			}
		}
		return $lastPos == 0;
	}

	function canJump2($nums) {
		if (count($nums) > 1 && $nums[0] == 0) return false;
		for ($i = count($nums) - 2; $i >= 0; $i--) {
			if ($i > 0 && $nums[$i] == 0) {
				$ans = false;
				for ($j = $i - 1; $j >= 0; $j--) {
					if ($nums[$j] > $i - $j) $ans = true;
				}
				if ($ans == false) return false;
			}
		}
		return true;
	}
}