public class Solution {
	public static int maxArea(int[] nums) {
		int maxArea = 0,left = 0, right = nums.length - 1;
		while (left < right) {
			maxArea = Math.max(maxArea, Math.min(nums[left], nums[right])  * (right - left));
			if (nums[left] > nums[right]) {
				right--;
			} else {
				left++;
			}
		}

		return maxArea;
	}
}