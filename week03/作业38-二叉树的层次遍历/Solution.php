<?php


class Solution
{
    function level1($root) {
        $res = $arr = [];
        if ($root == null) return $res;
        array_push($arr, $root);
        $level = 0;
        while ($count = count($arr)) {
            for ($i = $count; $i < count($arr); $i++) {
                $node = array_shift($arr);
                $res[$level][] = $node->val;
                if ($node->left != null) array_push($arr, $node->left);
                if ($node->right != null) array_push($arr, $node->right);
            }
            $level++;
        }
        return $res;
    }

    function level2($root) {
        $res = [];
        $arr = new SplQueue();
        if ($root == null) return $res;
        $arr->enqueue($root);
        $level = 0;
        while ($count = $arr->count()) {
            for ($i = $count; $i > 0; $i--) {
                $node = $arr->dequeue();
                $res[$level][] = $node->val;
                if ($node->left != null) $arr->enqueue($node->left);
                if ($node->right != null) $arr->enqueue($node->right);
            }
            $level++;
        }
        return $res;
    }

    function level3($root) {
        $res = [];
        $this->recur($root, 0, $res);
        return $res;
    }

    function recur($root, $level, &$res) {
        if ($root == null) return $res;
        $res[$level++][] = $root->val;
        if ($root->left != null) $this->recur($root->left, $level, $res);
        if ($root->right != null) $this->recur($root->right, $level, $res);
    }
}