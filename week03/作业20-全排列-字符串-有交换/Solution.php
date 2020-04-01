<?php

class Solution {
	function quanpailie($str) {
		$res = [];
		$arr = str_split($str);
		$this->perm($arr, 0, count($arr) - 1, $res);
		return $res;
	}

	function perm(&$arr, $k, $n, &$res) {
		if ($k == $n) {
			$res[] = implode('', $arr);
			return;
		}

		for ($i = $k; $i <= $n; $i++) {
			$this->swap($arr[$k], $arr[$i]);
			$this->perm($arr, $k + 1, $n, $res);
			$this->swap($arr[$k], $arr[$i]);
		}
	}

	function swap(&$a, &$b) {
		$c = $a;
		$a = $b;
		$b = $c;
	}
}

echo json_encode((new Solution())->quanpailie("abc")) . PHP_EOL;