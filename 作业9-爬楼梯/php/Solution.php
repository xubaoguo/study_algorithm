<?php

class Solution{
	function climStaris($n) {
		$res = 0;
		$f1 = 1; $f2 = 2;
		if ($n == 1) return $f1;
		if ($n == 2) return $f2;
		for ($i = 3; $i <= $n; $i++) {
			$res = $f1 + $f2;
			$f1 = $f2;
			$f2 = $res;
		}
		return $f2;
	}
}