<?php


class Solution
{
    function kthLargest($root, $k) {
        $res = [];
        $this->helper($root, $res);
        return $res[$k - 1];
    }

    function helper($root, &$res) {
        if ($root == null) return $res;
        $this->helper($root->right, $res);
        array_push($res, $root->val);
        $this->helper($root->left, $res);
    }
}