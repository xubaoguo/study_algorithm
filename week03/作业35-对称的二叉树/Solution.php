<?php


class Solution
{
    function isSymmetric($root) {
        if ($root == null) return true;
        return $this->isSym($root->left, $root->right);
    }

    function isSym($left, $right) {
        if ($left == null && $right == null) return true;
        if ($left == null || $right == null) return false;
        return ($left->val == $right->val)
            && $this->isSym($left->left, $right->right)
            && $this->isSym($right->left, $left->right);
    }
}