<?php

class Solution {
	function reverseArray($nums) {
		$start = 0;
		$end = count($nums) - 1;
		while ($start < $end) {
			$tmp = $nums[$start];
			$nums[$start] = $nums[$end];
			$nums[$end] = $tmp;
			$start++;
			$end--;
		}
		return $nums;
	}
}

echo json_encode((new Solution())->reverseArray([1, 2, 3, 4, 5])) . PHP_EOL;