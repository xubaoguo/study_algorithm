<?php

/**
 *
 */
class Solution
{

	function __construct()
	{
		# code...
	}

	function rotateArray(&$arr, $k) {
		$temp = 0;
		$previous = 0;
		$total = count($arr);
		for ($i=0; $i < $k; $i++) {
			$previous = $arr[$total - 1];
			for ($j=0; $j < $total; $j++) {
				$temp = $arr[$j];
				$arr[$j] = $previous;
				$previous = $temp;
			}
		}
		return $arr;
	}
}

$arr = [1, 2, 3, 4, 5, 6, 7];
(new Solution())->rotateArray($arr, 3);
print_r($arr);