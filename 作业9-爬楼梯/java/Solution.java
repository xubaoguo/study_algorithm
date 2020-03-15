public class Solution {
	public climbStairsIter(int n) {
		int result = 0;
		int step1 = 1;
		int step2 = 2;
		if (n == 1) {
			return step1;
		}
		if (n == 2) {
			return step2;
		}

		for (int i = 3; i < n; i++) {
			reslut = step1 + step2;
			step1 = step2;
			step2 = reslut;
		}
		return result;
	}
}