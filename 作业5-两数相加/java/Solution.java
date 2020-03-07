package main;
import java.util.Arrays;

public class Solution {
	public void main(int[] args) {

	}

	/**
	 * 暴力循环解法 时间复杂度O(n^2)
	 * @param  nums   [description]
	 * @param  target [description]
	 * @return        [description]
	 */
	public int[] twoSumDirect(int[] nums, int target) {
		int[] res = new int[2];
		for (int i = 0; i < nums.length - 1; i++) {
			for (int j = 1; j < nums.length ; j++ ) {
				if (nums[i] + nums[j] == target) {
					res[0] = i;
					res[1] = j;
					return res;
				}
			}
		}
	}

	/**
	 * hash法 中间数组保存结果 然后in 操作
	 *
	 * @param  nums   [description]
	 * @param  target [description]
	 * @return        [description]
	 */
	public int[] twoSumHash(int[] nums, int target) {
		int[] res = new int[2];
		Map<Integer, Integer> map = new HashMap<Integer, Integer>();
		for (int i = 0; i < nums.length; i++) {
			if  (map.containsKey(target - nums[i])) {
				res[1] = i;
				res[0] = map.get(target - nums[i]);
				return res;
			}
			map.put(nums[i], i);
		}
	}
}