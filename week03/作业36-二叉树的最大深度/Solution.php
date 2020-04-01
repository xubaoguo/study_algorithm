<?php


class Solution
{
    function maxDepthRecur($root) {
        if ($root == null) return 0;
        if ($root->left == null) return $this->maxDepthRecur($root->right) + 1;
        if ($root->right == null) return $this->maxDepthRecur($root->left) + 1;
        return max($this->maxDepthRecur($root->left), $this->maxDepthRecur($root->right)) + 1;
    }

    function maxDepthIteration($root) {
        if ($root == null) return 0;
        if ($root->left == null && $root->right == null) return 1;
        $max = 0; $arr = [];
        array_push($arr, $root);
        while ($count = count($arr)) {
            $max++;
            for ($i = $count; $i > 0; $i--) {
                $node = array_shift($arr);
                if ($node->left == null && $node->right == null) continue;
                if ($node->left != null) array_push($arr, $node->left);
                if ($node->right != null) array_push($arr, $node->right);
            }
        }
        return $max;
    }
}