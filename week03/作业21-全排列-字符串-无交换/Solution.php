<?php

class Solution {
	function quanpailie($str) {
		$arr = str_split($str);
		sort($arr);
		$res = [];
		$this->backtrack($arr, '', [], $res);
		return $res;
	}

	function backtrack($arr, $str, $arrUsed, &$res) {
		if (strlen($str) == count($arr)) {
			$res[] = $str;
			return;
		}

		for ($i = 0; $i < count($arr); ++$i) {
			$ch = $arr[$i];
			if (isset($arrUsed[$i])) continue;
			if (!isset($arrUsed[$i - 1]) && isset($arr[$i - 1]) && $arr[$i] == $arr[$i - 1]) continue;
			$tmp = $str;
			$str .= $ch;
			$arrUsed[$i] = 1;
			$this->backtrack($arr, $str, $arrUsed, $res);
			unset($arrUsed[$i]);
			$str = $tmp;
		}
	}
}

echo json_encode((new Solution())->quanpailie("aac")) . PHP_EOL;