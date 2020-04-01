<?php

class Solution {
	function subsets($nums) {
		$res = [];
		$this->sub($nums, [],  0, $res);
		return $res;
	}

	function sub($nums, $list, $start, &$res) {
		$res[] = $list;
		for ($i = $start; $i < count($nums); ++$i) {
			$list[] = $nums[$i];
			$this->sub($nums, $list, $i + 1, $res);
			array_pop($list);
		}
	}
}
echo json_encode((new Solution())->subsets([1, 2, 3])) . PHP_EOL;