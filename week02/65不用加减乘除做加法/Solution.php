<?php

class Solution {
	function add($a, $b) {
		while ($a != 0) {
			$temp = $a ^ $b;
			$a = ($a & $b) << 1;
			$b = $tmp;
		}
		return $b;
	}
}