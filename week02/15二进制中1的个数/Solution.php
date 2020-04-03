<?php

class Solution{
    function hammingWeight($n) {
        $res = 0;
        while ($n != 0) {
            $res += $n & 1;
            $n >>= 1;
        }
        return $res;
    }

    function countOne($n) {
    	$res = 0;
    	while ($n != 0) {
    		$res++;
    		$n &= $n - 1;
    	}
    	return $res;
    }
}