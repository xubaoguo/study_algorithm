<?php


class Solution
{
    function isValidBST($root) {
        return $this->checkBST($root, null, null);
    }

    function checkBST($root, $lower, $upper) {
        if ($root == null) return true;
        $val = $root->val;
        if ($lower != null && $val <= $lower) return false;
        if ($upper != null && $val >= $upper) return false;
        if (!$this->checkBST($root->left, $lower, $val)) return false;
        if (!$this->checkBST($root->right, $val, $upper)) return false;
        return true;
    }
}