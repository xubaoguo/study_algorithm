<?php

function findMax($nums, $k) {
	$window = [];$len = count($nums);$res = [];
	for ($i = 0; $i < $len; $i++) {
		if (isset($window[0]) && $i > $k + $window[0]) array_shift($window);
		while ($window && $nums[end($window)] <= $nums[$i]) {
			array_pop($window);
		}
		$window[] = $i;
		if ($i > $k - 1) {
			$res[] = $nums[$window[0]];
		}
	}
	return $res;
}

echo implode(",", findMax([1,3,-1,-3,5,3,6,7], 3)) . PHP_EOL;