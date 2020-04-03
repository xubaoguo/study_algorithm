<?php

class Solution {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function deleteNode($head, $val) {
        $curr = $head;
        if ($head->val == $val){
            return $head->next;
        }
        while ($curr != null && $curr->next !=null){
            if ($curr->next->val == $val) {
                $curr->next = $curr->next->next;
            } else {
                $curr = $curr->next;
            }
        }

        return $head;
    }

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function deleteNode2($head, $val) {
        $dummyHead = new ListNode(null);
        $dummyHead->next = $head;
        $temp = $dummyHead;
        while ($dummyHead->next) {
            if ($dummyHead->next->val === $val) {
                $dummyHead->next = $dummyHead->next->next;
                break;
            }
            $dummyHead = $dummyHead->next;
        }
        return $temp->next;
    }

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function deleteNode($head, $val) {
        $raw = $head;
        $pre = null;
        while ($head != null) {
            if ($head->val == $val) {
                if ($pre != null) {
                    $pre->next = $head->next;
                } else {
                    $raw = $head->next;
                }
                break;
            }
            $pre = $head;
            $head = $head->next;
        }

        return $raw;
    }
}