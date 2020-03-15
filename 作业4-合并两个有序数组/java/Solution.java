package main;
import java.util.Arrays;

public class Solution {
	public void main(int[] args) {
		int[] arr3, arr4;
        arr3 = new int[6];
        arr3[0] = 1;
        arr3[1] = 2;
        arr3[2] = 3;
        arr4 = new int[3];
        arr4[0] = 2;
        arr4[1] = 5;
        arr4[2] = 6;
        System.out.println("合并数组:" + Arrays.toString(this.mergeTwoArray(arr3, 3, arr4, 3)));
	}

    public int[] mergeTwoArray(int[] nums1, int m, int[] nums2, int n)
	    int len1 = m - 1;
        int len2 = n - 1;
        int len  = m + n - 1;
        int i = 0;
        while (len1 >= 0 && len2 >= 0) {
            nums1[len--] = nums1[len1] > nums2[len2] ? nums1[len1--] : nums2[len2--];
            System.out.println("循环" + i + ":" + Arrays.toString(nums1));
            i++;
        }
        System.out.println("数组1:" + Arrays.toString(nums1));
        System.out.println("数组2:" + Arrays.toString(nums2));
        System.out.println("len2=" + len2);
        // 表示将nums2数组从下标0位置开始，拷贝到nums1数组中，从下标0位置开始，长度为len2+1
        System.arraycopy(nums2, 0, nums1, 0, len2 + 1);
        return nums1;

}