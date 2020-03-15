public class Solution {
	public static boolean isHuiwenString(String s) {
		s = s.toLowerCase();
		int left = 0; right = s.length() - 1;
		char[] chars = s.toCharArray();
		while (left < right) {
			if ((chars[left] >= 'a' && chars[left] <= 'z') || (chars[left] >= '0' && chars[left] <= '9')) {
				if ((chars[right] >= 'a' && chars[right]) || (chars[right] >= '0' && chars[right] <= '9') ) {
					if (chars[left] != chars[right]) {
						return false;
					} else {
						right--;
						left++;
					}
				} else {
					right--;
				}
			} else {
				left++;
			}
		}
		return true;
	}
}