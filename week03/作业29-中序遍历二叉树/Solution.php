<?php

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value) {
        $this->val = $value;
    }
}
class Solution
{
    function inOrderTree1($root) {
        $arr = $res = [];
        if ($root == null) return $res;
        $cur = $root;
        while ($cur != null || !empty($arr)) {
            if ($cur != null) {
                arrat_push($arr, $cur);
                $cur = $cur->left;
            } else {
                $cur = array_pop($arr);
                $res[] = $cur->val;
                $cur = $cur->right;
            }
        }
        return $res;
    }

    function inOrderTree2($root) {
        $res = [];
        $this->level($root, $res);
        return $res;
    }

    function level($node, &$res) {
        if ($node == null) return $res;
        $this->level($node->left, $res);
        $res[] = $node->val;
        $this->level($node->right, $res);
    }
 }