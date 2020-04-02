<?php


class Solution
{
    function invertTree1($root) {
        if ($root == null) return $root;
        list ($root->left, $root->right) = [$this->invertTree1($root->right), $this->invertTree1($root->left)];
        return $root;
    }

    function invertTree2($root) {
        if ($root == null) return $root;
        $left = $root->left;
        $right = $root->right;

        $root->left = $this->invertTree2($right);
        $root->right = $this->invertTree2($left);
        return $root;
    }
}