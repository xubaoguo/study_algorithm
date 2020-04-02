<?php

class Solution {
	function merge($l1, $l2) {
		$preHead = new ListNode(null);
		$cur = $preHead;
		while ($l1 != null && $l2 != null) {
			if ($l1->val <= $l2->val) {
				$cur->next = $l1;
				$l1 = $l1->next;
			} else {
				$cur->next = $l2;
				$l2 = $l2->next;
			}
			$cur = $cur->next;
		}

		$cur->next = $l1 == null ? $l2 : $l1;
		return $preHead->next;
	}

	function mergeTwoLists($l1, $l2) {
	    // 递归解法
	    // 递归函数的含义：返回当前两个链表合并之后的头节点(每一层都返回排序好的链表头)
	    if ($l1 === null) {
	        return $l2;
	    }

	    if ($l2 === null) {
	        return $l1;
	    }

	    if ($l1->val < $l2->val) {
	        $l1->next = $this->mergeTwoLists($l1->next, $l2);
	        return $l1;
	    } else {
	        $l2->next = $this->mergeTwoLists($l1, $l2->next);
	        return $l2;
	    }
	}
}