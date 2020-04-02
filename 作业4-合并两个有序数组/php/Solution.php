<?php

class Solution {
	function mergeTwoArray($nums1, $m, $nums2, $n) {
		$len = $m + $n;
		$len1 = $m - 1;
		$len2 = $n - 1;
	}
	/**
	 *
$nums1 最小的元素值 大于$nums最大的元素值
i=0, j=3copy=[4,5,6,7,0,0,0]
1 nums1=[1,2,3,7,0,0,0]
nums2=[1,2,3]
2 nums1=[1,2,3,4,5,6,7,0,0,0]
3 nums1=[1,2,3,4,5,6,7,0,0,0]
[1,2,3,4,5,6,7]

$nums1 最大的元素值 小于$nums最小的元素值
i=4, j=0copy=[1,2,3,4,0,0,0]
1 nums1=[1,2,3,4,0,0,0]
nums2=[5,6,7]
2 nums1=[1,2,3,4,0,0,0]
3 nums1=[1,2,3,4,5,6,7]
[1,2,3,4,5,6,7]


     * 合并两个有序数组
     * @param $nums1
     * @param $m
     * @param $nums2
     * @param $n
     * @return array
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $i = $j = $p = 0;
        $nums1_copy = $nums1;
        while ($i < $m && $j < $n) {
            $nums1[$p++] = $nums1_copy[$i] < $nums2[$j] ? $nums1_copy[$i ++] : $nums2[$j ++];
        }
        //echo "i={$i}, j={$j}" . "copy=" . json_encode($nums1_copy) . PHP_EOL;
        //echo "1 nums1=" . json_encode($nums1) . PHP_EOL;
        //echo "nums2=" . json_encode($nums2) . PHP_EOL;
        if ($i < $m) {
            array_splice($nums1, $i + $j, $m - $i, array_slice($nums1_copy, $i));
        }
		//echo "2 nums1=" . json_encode($nums1) . PHP_EOL;
        if ($j < $n) {
            array_splice($nums1, $i + $j, $n - $j, array_slice($nums2, $j));
        }
		//echo "3 nums1=" . json_encode($nums1) . PHP_EOL;
        $nums1 = array_slice($nums1, 0, $m + $n);

        return $nums1;
    }
}
// $nums1 = [4, 5, 6, 7, 0, 0, 0];
// $nums2 = [1, 2, 3];
// $nums1 = [1, 2, 3, 4, 0, 0, 0];
// $nums2 = [5, 6, 7];
$nums1 = [1, 2, 3, 8, 0, 0, 0];
$nums2 = [4, 5, 9];
echo json_encode((new Solution())->merge($nums1, 4, $nums2, 3)) . PHP_EOL;