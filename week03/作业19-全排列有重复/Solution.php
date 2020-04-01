<?php

/**
 *47. 全排列 II

给定一个可包含重复数字的序列，返回所有不重复的全排列。

示例:

输入: [1,1,2]
输出:
[
  [1,1,2],
  [1,2,1],
  [2,1,1]
]

 */
class Solution {
	function permute($nums) {
		$res = [];
		$this->backtrack($nums, 0, [], $res, []);
		return $res;
	}

	function backtrack($nums, $depth, $list, &$res, $used) {
		if ($depth == count($nums)) {
			$res[] = $list;
			return;
		}

		for ($i = 0; $i < count($nums); $i++) {
			if (isset($used[$i]) && $used[$i] == 1) continue;
			if ($i > 0 && $nums[$i] == $nums[$i - 1] && !$used[$i - 1]) continue;
			$used[$i] = 1;
			$list[] = $nums[$i];
			$this->backtrack($nums, $depth + 1, $list, $res, $used);
			array_pop($list);
			$used[$i] = 0;
		}
	}
}
echo json_encode((new Solution())->permute([1, 1, 2])) . PHP_EOL;