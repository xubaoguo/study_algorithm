class Solution:
	def maxSlidingWindow(self, nums: List[int], k: int) -> List[int]:
		deque = [];result = []
		for i in range(0, len(nums)):
			if deque && deque[0] <= nums[i]:
				deque.pop()
			deque.append(i)
			while deque[0] < i - k + 1:
				deque.pop(0)
			if i >= k + 1:
				result.append(nums[deque[0]])
		return result