<?php


class Solution
{
    function levelOrderNaryTree($root) {
        if ($root == null) return [];
        $res = [];
        $queue = new SplQueue();
        $queue->enqueue($root);
        while (!$queue->isEmpty()) {
            $len = $queue->count();
            $tmp = [];
            for ($i = 0; $i < $len; $i++) {
                $node = $queue->dequeue();
                $tmp[] = $node->val;
                foreach ($node->children as $child) {
                    $queue->enqueue($child);
                }
            }
            $res[] = $tmp;
        }
        return $res;
    }
}