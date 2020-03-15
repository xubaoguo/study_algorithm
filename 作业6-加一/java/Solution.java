public class Solution {
	public static void main(int[] args) {

	}

	/**
	 * https://leetcode-cn.com/problems/plus-one/
	 * @param  digits [description]
	 * @return        [description]
	 */
	public static int[] plusOne(int[] digits) {
		int len = digits.length;
		for (int i = len - 1; i >= 0; i--) {
			digits[i]++;
			digits[i] %= 10;
			if (digits[i] != 0) {
				return digits;
			}
		}
		digits = new int[len + 1];
		digits[0] = 1;
		return digits;
	}
}