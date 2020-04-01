<?php

class Solution {
	function subsetsDup($nums) {
		$arrUsed = array_fill(0, count($nums), false);
		$res = [];
		$this->sub($nums, [], 0, $arrUsed, $res);
		$res[] = [];
		return $res;
	}

	function sub($nums, $list, $start, $arrUsed, &$res) {
		if (count($list) == count($nums)) return;
		for ($i = $start; $i < count($nums); ++$i) {
			if ($i > 0 && $nums[$i] == $nums[$i - 1] && !$arrUsed[$i - 1]) continue;
			$list[] = $nums[$i];
			$res[] = $list;
			$arrUsed[$i] = true;
			$this->sub($nums, $list, $i + 1, $arrUsed, $res);
			$arrUsed[$i] = false;
			array_pop($list);
		}
	}
}

echo json_encode((new Solution())->subsetsDup([1, 2, 3])) . PHP_EOL;