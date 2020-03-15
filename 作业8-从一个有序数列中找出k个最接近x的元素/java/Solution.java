public class Solution {
	public static List<Integer> findClosestElements(int[] nums, int k, int x) {
		int size = nums.length;
		int left = 0;
		int right = size - 1;
		int removeLeft = size - k;
		while (removeLeft > 0) {
			if (x - nums[left] <= nums[right] - x) {
				right--;
			} else {
				left++;
			}
			removeLeft--;
		}
		List<Integer> ret = new ArrayList<>();
		for (int i = left; i < left + k; i++) {
			ret.add(nums[i])
		}
		return ret;
	}
}