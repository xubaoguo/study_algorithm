<?php

class Solution {
	function exchange($nums) {
		$i = 0;
		$j = count($nums) - 1;
		while ($i < $j) {
			if ($nums[$i] % 2 != 0) {
				$i++;
				continue;
			}
			if ($nums[$j] % 2 == 0) {
				$j--;
				continue;
			}
			$tmp = $nums[$j];
			$nums[$j] = $nums[$i];
			$nums[$i] = $tmp;
		}
		return $nums;
	}
}