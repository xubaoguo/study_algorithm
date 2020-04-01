<?php


class Solution
{
    function postOrderTreeIteration($root) {
        if (empty($root)) return [];
        $outStack = [];
        $stack = [$root];
        $output = [];
        while (count($stack)) {
            $node = array_pop($stack);
            $outStack[] = $node;
            if ($node->left) $stack[] = $node->left;
            if ($node->right) $stack[] = $node->right;
        }

        while ($outStack) {
            $node = array_pop($outStack);
            $output[] = $node;
        }
        return $output;
    }

    function postOrderTreeRecur($root) {
        $res = [];
        $this->level($root, $res);
        return $res;
    }

    function level($node, &$res) {
        if ($node == null) return $res;
        $this->level($node->left, $res);
        $this->level($node->right, $res);
        $res[] = $node->val;
    }

}