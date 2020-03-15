public class Solution {

	public static List<List<Integer>> threeSum(int[] nums) {
		Arrays.sort(nums);
		List<List<Integer>> ret = new ArrayList<>();
		for (int k = 0; k < nums.length - 2; k++) {
			if (nums[k] > 0) break;
			if (k > 0 && nums[k - 1] == nums[k]) continue;
			int low = k + 1, high = nums.length - 1;

			while (low < high) {
				int sum = nums[k] + nums[low] + nums[high];
				if (sum > 0) {
					while(low < high && nums[high] == nums[--high]);
				} else if (sum < 0) {
					while(low < high && nums[low] == nums[++low]);
				} else {
					ret.add(new ArrayList<Integer>(Arrays.asList(nums[k], nums[low], nums[high])));
					while(low < high && nums[low] == nums[++low]);
					while(low < high && nums[high] == nums[--high]);
				}
			}

			return ret;
		}
	}
}