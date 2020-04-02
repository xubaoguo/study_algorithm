<?php


class Solution
{
    private $inorder;
    private $preorder;
    private $preindex = 0;
    private $inmp;

    function buildTree($inoder, $preorder) {
        $this->inorder = $inoder;
        $this->preorder = $preorder;
        $this->inmp = array_flip($inoder);
        return $this->helper(0, count($inoder) - 1);
    }

    function helper($instart, $inend) {
        if ($instart > $inend) return null;
        $nodeval = $this->preorder[$this->preindex];
        $inindex = $this->inmp[$nodeval];
        $node = new TreeNode($nodeval);
        $this->preindex++;

        $node->left = $this->helper($instart, $inindex - 1);
        $node->right = $this->helper($inindex + 1, $inend);
        return $node;

    }

}