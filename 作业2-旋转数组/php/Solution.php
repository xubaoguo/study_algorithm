<?php

/**
 *
 */
class Solution
{

	function __construct()
	{
		# code...
	}

	/**
	 * 这种方法超时 不推荐
	 * @param  [type] &$arr [description]
	 * @param  [type] $k    [description]
	 * @return [type]       [description]
	 */
	function rotateArray(&$arr, $k) {
		$temp = 0;
		$previous = 0;
		$total = count($arr);
		for ($i = 0; $i < $k; $i++) {
			$previous = $arr[$total - 1];
			for ($j = 0; $j < $total; $j++) {
				$temp = $arr[$j];
				$arr[$j] = $previous;
				$previous = $temp;
			}
		}
		return $arr;
	}

	//第一种暴力：翻转K次
    function rotate1(&$nums, $k) {
        $len = count($nums);
        for ($i = 0; $i < $k; $i++) {
            for ($j = 0; $j < $len; $j++) {
                $pre = $nums[$len - 1];
                $nums[$len - 1] = $nums[$j];
                $nums[$j] = $pre;
            }
        }
        return $nums;
    }

    //第二种：新数组
    function rotate2(&$nums, $k) {
        $arr = [];
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            $arr[($i + $k) % $len] = $nums[$i];
        }
        ksort($arr);
        $nums = $arr;
        return $nums;
    }

    //第三种：使用环状替换
    function rotate(&$nums, $k){
        $length = count($nums);
        $k = $k % $length;
        $count = 0;
        for($start = 0; $count < $length; $start ++){
            $current = $start;
            $prev = $nums[$start];//1

            do {
                $next = ($current + $k) % $length;//3  6  1  4  7  3由到1了
                $temp = $nums[$next];//4  7  2   5   8
                //把当前坐标数字移动到下一个正确坐标
                $nums[$next] = $prev; //1移动到4  4移动到7   7移动到2  2到5  5到8
                //把下一个坐标的值给当前
                $prev = $temp;//4给prev  7给prev  2给 prev   5给prev   8给prev
                //把下一个坐标给当前坐标
                $current = $next; //当前位置 3 当前位置6  1  4  7
                $count++;// 1 2 3  4  5

            } while($start != $current);// 0 不等于 3 为真 进入第二次
        }
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7];
echo json_encode((new Solution())->rotateArray($arr, 3)) . PHP_EOL;