<?php

class Solution {
	function maxValue($matrix) {
		$col = count($matrix[0]);
		$row = count($matrix);
		$dp[0][0] = $matrix[0][0];
		for ($i = 1; $i < $row; $i++) {
			$dp[$i][0] = $dp[$i - 1][0] + $matrix[$i][0];
		}

		for ($j = 1; $j < $col; $j++) {
			$dp[0][$j] = $dp[0][$j - 1] + $matrix[0][$j];
		}

		for ($i = 1; $i < $row; $i++) {
			for ($j = 1; $j < $col; $j++) {
				$dp[$i][$j] = max($dp[$i - 1][0], $dp[0][$j - 1]) + $matrix[$i][$j];
			}
		}
		return $dp[$row - 1][$col - 1];
	}
}