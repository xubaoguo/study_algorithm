package main

func countDigitOne(n int) int {
	if n == 0 {
		return 0
	}
	k := 10
	left := 0
	right := 0
	midlle := 0
	ans := 0
	for {
		left = n / k
		right = n % (k / 10)
		midlle = (n % k) / (k / 10)
		ans += left * (k / 10)

		if midlle > 1 {
			ans += 1 * (k / 10)
		} else if midlle == 1 {
			ans += 1 * (right + 1)
		}
		if left == 0 {
			return ans
		}
		k = k * 10
	}
}

func countDigitOne(n int) int {
	count, pow := 0, 1
	for n >= pow {
		count += n / (pow * 10) * pow
		if incr := n%(pow*10) - pow + 1; incr > pow {
			count += pow
		} else if incr > 0 {
			count += incr
		}
		pow *= 10
	}
	return count
}
