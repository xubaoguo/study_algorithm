<?php


class Solution
{
    function minDepthRecur($root) {
        if ($root == null) return  0;
        if ($root->left == null) return $this->minDepthRecur($root->right) + 1;
        if ($root->right == null) return $this->minDepthRecur($root->left) + 1;
        return min($this->minDepthRecur($root->left), $this->minDepthRecur($root->right)) + 1;
    }

    function minDepthIteration($root) {
        if ($root == null) return 0;
        if ($root->left == null && $root->right == null) return 1;
        $min = 0; $arr = [];
        array_push($arr, $root);
        while ($count = count($arr)) {
            $min++;
            for ($i = $count; $i > 0; $i++) {
                $node = array_shift($arr);
                if ($node->left == null && $node->right == null) {
                    break 2;
                }
                if ($node->left != null) array_push($arr, $node->left);
                if ($node->right != null) array_push($arr, $node->right);
            }
        }
        return $min;
    }
}