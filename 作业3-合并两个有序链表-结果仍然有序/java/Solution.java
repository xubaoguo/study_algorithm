class ListNode {
     int val;
     ListNode next;
     ListNode(int x) { val = x; }
}

public class Solution {
	public void main(int[] args) {

	}

	/**
	 * https://leetcode-cn.com/problems/merge-two-sorted-lists/
	 * @param  list1 [description]
	 * @param  list2 [description]
	 * @return       [description]
	 */
	public ListNode mergeTwoListIteration(ListNode list1, ListNode list2) {
		ListNode preHead = new ListNode(-1);

		ListNode prev = preHead;
		while (list1 != null && list2 != null) {
			if (list1.val < list2.val) {
				prev.next = list1;
				list1 = list1.next;
			} else {
				prev.next = list2;
				list2 = list2.next;
			}
			prev = prev.next;
		}

		preHead.next = list1 == null ? list2 : list1;
		return preHead.next;
	}

	public ListNode mergeTwoListRecursion(ListNode list1, ListNode list2) {
		if (list1 == null) {
			return list2;
		} else if (list2 == null) {
			return list1;
		} else (list1.val  < list2.val) {
			list1.next = mergeTwoListRecursion(list1.next, list2);
			return list1;
		} else {
			list2.next = mergeTwoListRecursion(list1, list2.next);
			return list2;
		}
	}
}