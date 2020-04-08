<?php

class Solution {
	function reverseWord($s) {
		$len = strlen($s);
		$tmp = ''; $arr = [];
		for ($i = 0; $i < $len; $i++) {
			if ($s[$i] == ' ') {
				if (!empty($tmp)) {
					$arr[] = $tmp;
					$tmp = '';
				}
			} else $tmp .= $s[$i];
		}
		if (!empty($tmp)) $arr[] = $tmp;
		$str = '';
		while (count($arr) > 1) {
			$str .= array_pop($arr);
			$str .= ' ';
		}
		$str .= array_pop($arr);
		return $str;
	}
}

echo (new Solution())->reverseWord('the sky is blue') . PHP_EOL;