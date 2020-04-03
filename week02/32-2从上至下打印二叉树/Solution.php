<?php

class Solution {
	/**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        //层序遍历
        $res = $arr = [];//模拟队列
        if ($root == null) return $res;
        array_push($arr, $root);//将根节点放入队列头部
        while ($count = count($arr)) {
           $tmp = [];
           for ($i = 0;$i < $count;$i++) {
                $node = array_shift($arr);//先入先出
                $tmp[] = $node->val;
                if ($node->left !=null) array_push($arr, $node->left);
                if ($node->right !=null) array_push($arr, $node->right);
           }
           array_push($res, $tmp);
        }
        return $res;
    }

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder2($root) {
        $res = [];
        if (empty($root)) return $res;
        $queue = new SplQueue();
        $queue->enqueue([0 => $root]);
        while (!$queue->isEmpty()) {
            $data = $queue->dequeue();
            foreach ($data as $k => $node) {
                $res[$k][] = $node->val;
                if ($node->left != null) $queue->enqueue([$k + 1 => $node->left]);
                if ($node->right != null) $queue->enqueue([$k + 1 => $node->right]);
            }
        }
        return $res;
    }
}