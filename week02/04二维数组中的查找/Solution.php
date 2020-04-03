<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function findNumberIn2DArray($matrix, $target) {
        $count = count($matrix);
        if (!$count) return false;

        for ($i = 0; $i < $count; $i++) {
            if ($this->binarySearch($matrix[$i], $target)) return true;
        }
        return false;
    }

    function binarySearch($arr, $target) {
        $l = 0;
        $r = count($arr) - 1;
        while ($l  <= $r) {
            $mid = floor(($r + $l) / 2);
            if ($arr[$mid] == $target) {
                return true;
            } else if ($arr[$mid] > $target) {
                $r = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }

        return false;
    }
}