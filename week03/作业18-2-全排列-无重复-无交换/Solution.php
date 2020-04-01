<?php

/**
 * https://leetcode-cn.com/problems/permutations/
 * 给定一个 没有重复 数字的序列，返回其所有可能的全排列。

示例:

输入: [1,2,3]
输出:
[
  [1,2,3],
  [1,3,2],
  [2,1,3],
  [2,3,1],
  [3,1,2],
  [3,2,1]
]
 */
class Solution {
	function permute($nums) {
		$count = count($nums);
		if ($count == 0) return [];
		$res = [];
		$this->dfs($nums, 0, [], $res);
		return $res;
	}

	function dfs($nums, $depth, $list, &$res) {
		if ($depth == count($nums)) {
			$res[] = $list;
			return;
		}

		for ($i = 0; $i < count($nums); $i++) {
			if (in_array($nums[$i], $list)) continue;
			$list[] = $nums[$i];
			$this->dfs($nums, $depth + 1, $list, $res);
			array_pop($list);
		}
	}
}
echo json_encode((new Solution())->permute([1, 2, 3])) . PHP_EOL;