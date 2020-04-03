<?php

class Solution {
	function countDigitOne($n) {
		$count = 0;
		for ($k = 0; $k < $n; $k *= 10) {
			$r = floor($k / $n); $m = $k % $n;
			$count += ($r + 8) / 10 * $k + ($r % 10 == 1 ? $m + 1 : 0);
		}
		return $count;
	}
}