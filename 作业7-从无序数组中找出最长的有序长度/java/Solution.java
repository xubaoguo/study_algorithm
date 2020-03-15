
public class Solution {
	public static int findMaxLength(int[] nums) {
		int max = 0, ans = 0;
		for (int i = 0; i < nums.length; i++) {
			if (i > 0 && nums[i - 1] > nums[i]) {
				ans = i;
			}

			max = Math.max(max, i - ans + 1);
		}
		return max;
	}
}