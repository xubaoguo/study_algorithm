package main;
import java.util.Arrays;

public class Solution {
	public void main(int[] args) {
		int[] arr;
		arr = new int[7];
		arr[0] = 1;
		arr[1] = 2;
		arr[2] = 3;
		arr[3] = 4;
		arr[4] = 5;
		arr[5] = 6;
		arr[6] = 7;
		System.out.println("原数组是:" + Arrays.toString(arr));
		System.out.println("旋转后数组是:" + Arrays.toString(this.rotateArray(arr, 3)));
	}

	/**
	 * https://leetcode-cn.com/problems/rotate-array/
	 * @param  str [description]
	 * @param  k   [description]
	 * @return     [description]
	 */
	public int[] rotateArray(int[] str, int k) {
		int temp, previous;
		for (int i = 0; i < k ; i++ ) {
			previous = str[str.length - 1];
			for (int j =  0; j < str.length ; j++) {
				temp = str[j];
				str[j] = previous;
				previous = temp;
			}
		}
		return str;
	}
}