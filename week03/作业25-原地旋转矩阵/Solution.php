<?php

/**
 * Class Solution
面试题 01.07. 旋转矩阵

给定一幅由N × N矩阵表示的图像，其中每个像素的大小为4字节，编写一种方法，将图像旋转90度。

不占用额外内存空间能否做到？



示例 1:

给定 matrix =
[
[1,2,3],
[4,5,6],
[7,8,9]
],

原地旋转输入矩阵，使其变为:
[
[7,4,1],
[8,5,2],
[9,6,3]
]

 */
class Solution
{
    function rotateArray($matrix) {
        $size = count($matrix);
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i - 1; $j++) {
                $swap = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$size - $j - 1][$size - $i - 1];
                $matrix[$size - $j - 1][$size - $i - 1] = $swap;
            }
        }

        for ($i = 0; $i < $size / 2; $i++) {
            for ($j = 0; $j < $size; $j ++) {
                $swap = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$size - $i - 1][$j];
                $matrix[$size - $i - 1][$j] = $swap;
            }
        }
        return $matrix;
    }
}
$matrix = [
[1,2,3],
[4,5,6],
[7,8,9]];
echo json_encode((new Solution())->rotateArray($matrix)) . PHP_EOL;