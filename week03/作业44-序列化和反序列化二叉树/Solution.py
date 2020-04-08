class Solution:
	def serialize(self, root):
		if root == None:
			return []
		stack = []
		res = []
		while stack:
			node = stack.pop(0)
			if node == None:
				res.append(null)
			else:
				res.append(node.val)
				stack.append(node.left)
				stack.append(node.right)
		return res
	def deserialize(self, data):
		if data == [] || data[0] == 'null':
			return None
		root = TreeNode(data.pop(0))
		nodes = [root]
		while len(data) >= 2:
			node = nodes.pop(0)
			if node == None:
				continue
			num = data.pop(0)
			if num =='null':
				node.left = None
			else:
				node.left = TreeNode(num)
			num = data.pop[0]
			if num == 'null':
				node.right = None
			else:
				node.right = TreeNode(num)
			nodes.append(node.left)
			nodes.append(node.right)
		return root


