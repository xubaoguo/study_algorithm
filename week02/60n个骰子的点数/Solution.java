class Solution {
    public double[] twoSum(int n) {
        int [][]dp = new int[n + 1][6 * n + 1];
        //边界条件
        for (int s = 1;s <= 6;s++) dp[1][s] = 1;
        for (int i = 2;i <= n;i++) {
            for (int s = i;s <= 6 * i;s++) {
                //求dp[i][s]
                for (int d = 1;d <= 6;d++) {
                    if (s - d < i - 1) break;//为0了
                    dp[i][s] += dp[i - 1][s - d];
                }
            }
        }
        double total = Math.pow((double)6, (double)n);
        double[] ans = new double[5 * n + 1];
        for (int i = n;i <= 6 * n;i++) {
            ans[i - n] = ((double)  dp[n][i])/total;
        }
        return ans;
    }

    public double[] twoSum2(int n) {
        if (n == 0)
            return new double[0];
        double[] dp = new double[6 * n + 1];
        double[] ans = new double[5 * n + 1];
        double all = Math.pow(6, n);
        for (int i = 1;i <= 6;i++) {
            dp[i] = 1;
            ans[i - 1] = 1.0 / 6;
        }
        for (int i = 2;i <= n;i++) {
            for (int j = 6 * n;j >= 1;j--) {
                int temp = 0;
                for (int k = 1;k <= 6;k++) {
                    temp += (j >= k) ? dp[j - k] : 0;
                }
                dp[j] = temp;
                if (i == n && j >= n) {
                    ans[j - i] = dp[j] / all;
                }
            }
        }
        return ans;
    }

    public double[] twoSum3(int n) {
        int[][] dp=new int[n+1][6*n+1];
        double[] ans=new double[5*n+1];
        double all=Math.pow(6,n);
        for(int i=1;i<=6;i++)
            dp[1][i]=1;
        for(int i=1;i<=n;i++){
            for(int j=i;j<=6*n;j++){
                for(int k=1;k<=6;k++){
                    dp[i][j]+=j>=k?dp[i-1][j-k]:0;
                    if(i==n)
                        ans[j-i]=dp[i][j]/all;
                }
            }
        }
        return ans;
    }
}