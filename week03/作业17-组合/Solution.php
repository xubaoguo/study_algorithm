<?php

/**
 *给定两个整数n和k, 返回1....n中所有可能的k个组合
 */
class Solution{
	function combine($n, $k) {
		if ($n <= 0 || $k <= 0 || $k > $n) return [];
		$res = [];
		$this->level($n, $k, [], 1, $res);
		return $res;
	}

	function level($n, $k, $list, $start, &$res) {
		if ($k == count($list)) {
			$res[] = $list;
			return;
		}

		for ($i = $start; $n - $i + 1 >= $k - count($list); $i++) {
			$list[] = $i;
			$this->level($n, $k, $list, $i + 1, $res);
			array_pop($list);
		}
	}
}

echo json_encode((new Solution())->combine(5, 3)) . PHP_EOL;