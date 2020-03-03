package main.common.arr;

import java.util.Arrays;

public class RemoveRepeat {
    public static void main(String[] args) {
        Solution ss = new Solution();
        int[] arr;
        arr = new int[10];   // 开辟一个长度为3的数组
        arr[0] = 0; // 数组第1个元素
        arr[1] = 0; // 数组第2个元素
        arr[2] = 1; // 数组第3个元素
        arr[3] = 1; // 数组第4个元素
        arr[4] = 1; // 数组第5个元素
        arr[5] = 2; // 数组第6个元素
        arr[6] = 2; // 数组第7个元素
        arr[7] = 3; // 数组第8个元素
        arr[8] = 3; // 数组第9个元素
        arr[9] = 4; // 数组第10个元素
        System.out.println("原数组是:" + Arrays.toString(arr));
        System.out.println(ss.removeDuplicates(arr));
    }
}

class Solution {

    /**
     * 原地不动删除数组重复元素，不可以copy一份数组
     * 双指针法
     * @param nums
     * @return
     */
    public int removeDuplicates(int[] nums) {
        if (nums.length == 0) return 0;
        int i = 0;
        //int[] after = new int[10];
        for (int j = 1; j < nums.length; j++) {
            if (nums[j] != nums[i]) {
                i++;
                //after[i] = nums[j];
                nums[i] = nums[j];
            }
        }
        //System.out.println(Arrays.toString(after));
        return i + 1;
    }
}