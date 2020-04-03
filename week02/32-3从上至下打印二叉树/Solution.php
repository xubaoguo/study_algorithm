<?php

class Solution {

	/**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $res = [];
        if (empty($root)) return $res;
        $queue = new SplQueue();
        $queue->enqueue([1 => $root]);
        while(!$queue->isEmpty()) {
            $data = $queue->dequeue();
            foreach ($data as $k=>$node) {
                $res[$k][] = $node->val;
                if ($node->left != null) $queue->enqueue([$k + 1 => $node->left]);
                if($node->right != null) $queue->enqueue([$k + 1 => $node->right]);
            }
        }

        //最后反转一下
        foreach ($res as $k => $v) {
            if ($k % 2 == 0) {
                $res[$k] = array_reverse($res[$k]);
            }
        }
        return $res;
    }

	/**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrderRecur($root) {
        $res = [];
        $this->helper($root, 0, $res);
        return $res;
    }

    function helper($root, $level, &$res) {
        if ($root ==null) return ;
        if ($level == count($res)) $res[$level] = [];
        if ($level % 2) {
        	array_unshift($res[$level], $root->val);
        } else {
        	array_push($res[$level], $root->val);
        }
        $this->helper($root->left, $level + 1, $res);
        $this->helper($root->right, $level + 1, $res);
    }
}