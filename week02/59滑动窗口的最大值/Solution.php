<?php

class Solution {
	function maxSlidingWidow($nums, $k) {
		$count = count($nums);
		if ($count <= 1) return $nums;
		$queue = [];
		$res = [];
		for ($i = 0; $i < $count; $i++) {
			while (!empty($queue) && $nums[end($queue)] <= $nums[$i]) {
				array_pop($queue);
			}
			$queue[] = $i;
			if ($queue[0] < $i + 1 - $k) {
				array_shift($queue);
			}
			if ($i + 1 >= $k) {
				$res[] = $nums[$queue[0]];
			}
		}
		return $res;
	}
}

echo json_encode((new Solution())->maxSlidingWidow([1,3,-1,-3,5,3,6,7], 3)) . PHP_EOL;