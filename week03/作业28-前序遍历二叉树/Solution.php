<?php

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value) {
        $this->val = $value;
    }
}
class Solution
{
    /**
     * @param TreeNode $root
     * @return array
     */
    function preOrderTree1(TreeNode $root) {
        if ($root == null) return [];
        $stack = [$root];
        $output = [];
        while (count($stack)) {
            $node = array_pop($stack);
            $output[] = $node->val;
            if ($node->right) $stack[] = $node->right;
            if ($node->left) $stack[] = $node->left;
        }
        return $output;
    }

    function preOrderTree2($root) {
        $res = [];
        $this->level($root, $res);
        return $res;
    }

    function level($root, &$res) {
        if ($root == null) return $res;
        $res[] = $root->val;
        $this->level($root->left, $res);
        $this->level($root->right, $res);
    }
}

echo json_encode((new Solution())->preOrderTree1([1,null,2,3])) .PHP_EOL;