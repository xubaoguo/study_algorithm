<?php


class Solution
{
    function upDownPrintTree($root) {
        $res = $arr = [];
        if ($root == null) return $res;
        array_push($arr, $root);
        while ($count = count($arr)) {
            for ($i = 0; $i < $count; $i++) {
                $node = array_shift($arr);
                if ($node != null) $res[] = $node->val;
                if ($node->left != null) array_push($arr, $node->left);
                if ($node->right != null) array_push($arr, $node->right);
            }
        }
        return $res;
    }

    function upDownPrintTreeQueue($root) {
        $res = [];
        $queue = new SplQueue();
        $queue->enqueue($root);
        while (!$queue->isEmpty()) {
            $node = $queue->dequeue();
            array_push($res, $node->val);
            if ($node->left != null) $queue->enqueue($node->left);
            if ($node->right != null) $queue->enqueue($node->right);
        }
        return $res;
    }
}