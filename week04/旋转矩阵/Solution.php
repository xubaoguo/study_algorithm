<?php

class Solution {
	function rotateMatrix(&$matrix) {
		$size = count($matrix);
		for ($i = 0; $i < $size; $i++) {
			for ($j = 0; $j < $size - $i - 1; $j++) {
				$swap = $matrix[$i][$j];
				$matrix[$i][$j] = $matrix[$size - $j - 1][$size - $i - 1];
				$matrix[$size - $j - 1][$size - $i - 1] = $swap;
			}
		}

		for ($i = 0; $i < $size / 2; $i++) {
			for ($j = 0 ; $j < $size; $j++) {
				$swap = $matrix[$i][$j];
				$matrix[$i][$j] = $matrix[$size - $i - 1][$j];
				$matrix[$size - $i - 1][$j] = $swap;
			}
		}
	}
}