public class Solution {
	public static int trapTwoPoint(int[] heights) {
		int size = heights.length;
		int left = 1;
		int right = size - 2;
		int max_left = 0;
		int max_right = 0;
		int sum = 0;
		for (int i = 1; i < size - 1; i++) {
			if (heights[left - 1] > heights[right + 1]) {
				max_right = Math.max(heights[right + 1], max_right);
				int min = max_right;
				if (min > heights[right + 1]) {
					sum += (min - heights[right + 1]);
				}
				right--;
			} else {
				max_left = Math.max(max_left, heights[left - 1]);
				int min = max_left;
				if (min -> heights[left - 1]) {
					sum += (min - heights[left - 1]);
				}
				left++;
			}
		}
		return sum;
	}
}