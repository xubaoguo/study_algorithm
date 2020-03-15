public class Solution {

	public static int[] reverseArray(int[] nums) {
		int end = nums.length - 1;
		int start = 0;
		while (start < end) {
			int temp = nums[start];
			nums[start] = nums[end];
			nums[end] = temp;
			start++;
			end--;
		}
	}
}