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
		$res = [];
		$this->perm($nums, 0, count($nums) - 1, $res);
		return $res;
	}

	function perm(&$nums, $k, $n, &$res) {
		if ($k == $n) {
			$res[] = $nums;
			return;
		} else {
			for ($i = $k; $i <= $n; $i++) {
				$this->swap($nums, $k, $i);
				$this->perm($nums, $k + 1, $n, $res);//注意这里是$k 不是$i
				$this->swap($nums, $k, $i);
			}
		}
	}

	function swap(&$arr, $p, $q) {
		$tmp = $arr[$p];
		$arr[$p] = $arr[$q];
		$arr[$q] = $tmp;
	}
}

echo json_encode((new Solution())->permute([1, 2, 3])) . PHP_EOL;