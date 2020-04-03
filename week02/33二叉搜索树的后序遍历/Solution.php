<?php
class Solution {
	/**
     * @param Integer[] $postorder
     * @return Boolean
     */
    function verifyPostorder($postorder) {
        return $this->helper($postorder, 0, count($postorder) - 1);
    }

    function helper($postorder, $start, $end) {
        if ($start >= $end) return true;

        //左子树（都小于根节点）
        for ($i = $start; $i < $end; $i++) {
            if ($postorder[$i] > $postorder[$end]) break;
        }

        //右子树（都大于根节点）如果出现小于根节点的，肯定错误
        for ($j = $i; $j < $end; $j++){
            if ($postorder[$j] < $postorder[$end]) return false;
        }

        //左右子树验证
        return $this->helper($postorder, $start, $i - 1) && $this->helper($postorder, $i, $end - 1);
    }
}