<?php

class Solution {
    private $newHead;
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $this->newHead = new ListNode(0);
        $temp = $this->newHead;
        $this->dfs($head);
        return $temp->next;
    }

    function dfs($head) {
        if (empty($head)) return;
        $this->dfs($head->next);
        $head->next = null;
        $this->newHead->next = $head;
        $this->newHead = $this->newHead->next;
    }


    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList2($head) {
        $pre = new ListNode($head->val);
        $cur = $head->next;

        while ($cur != null) {
            $tmp = new ListNode($cur->val);
            $tmp->next = $pre;
            $pre = $tmp;

            $cur = $cur->next;
        }
        return $pre;
    }
}