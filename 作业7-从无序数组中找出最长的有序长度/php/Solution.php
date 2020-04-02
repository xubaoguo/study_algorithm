<?php

class Solution {
	function findMaxLength($nums) {
		$max = 0; $ans = 0;
		for ($i = 0; $i < count($nums);$i++) {
			if ($i > 0; $nums[$i - 1] > $nums[$i]) {
				$ans = $i;
			}
			$max = max($max, $i - $ans + 1);
		}
		return $max;
	}
}