<?php

class Solution {

    /**
     * 递归
     * @param ListNode $head
     * @return Integer[]
     */
    function reversePrint($head) {
        $res = [];
        $this->helper($head, $res);
        return $res;
    }

    function helper($head, &$res) {
        if (!$head) return;
        $this->helper($head->next, $res);
        array_push($res, $head->val);
    }

    /**
     *
     2、辅助栈
        遍历链表，将链表中元素push到栈中，利用栈先进后出的方式，实现链表的反转。
     * @param ListNode $head
     * @return Integer[]
     */
    function reversePrintStack($head) {
        $stack = new SplStack();
        $res = [];
        while ($head) {
            $stack->push($head->val);
            $head = $head->next;
        }

        while (!$stack->isEmpty()) {
            array_push($res, $stack->pop());
        }
        return $res;
    }
}