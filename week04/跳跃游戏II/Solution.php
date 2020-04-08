<?php

class Solution {
	function jumpMinNumber($nums) {
		$max_pos = 0; $end = 0; $count = 0;
		for ($i = 0; $i < count($nums) - 1; $i++) {
			$max_pos = max($max_pos, $nums[$i] + $i);
			if ($end == $i) {
				$end = $max_pos;
				$count++;
			}
		}
		return $count;
	}
}