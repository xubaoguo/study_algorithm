<?php


class Solution
{
    /**
     * 回溯法1
     * @param $digits
     * @return array
     */
    function combineLetter($digits) {
        $keys = [
          '2' => ['a', 'b', 'c'],
          '3' => ['d', 'e', 'f'],
          '4' => ['g', 'h', 'i'],
          '5' => ['j', 'k', 'l'],
          '6' => ['m', 'n', 'o'],
          '7' => ['q', 'p', 'r', 's'],
          '8' => ['t', 'u', 'v'],
          '9' => ['w', 'x', 'y', 'z'],
        ];
        $res = [];
        $this->backtrack('', $digits, $keys, $res);
        return $res;
    }

    function backtrack($str, $next_digits, $keys, &$res) {
        if (empty($next_digits)) $res[] = $str;
        else {
            foreach ($keys[$next_digits[0]] as $key) {
                $this->backtrack($str . $key, substr($next_digits, 1), $keys, $res);
            }
        }
    }

    /**
     * 回溯法2
     * @param $digits
     * @return array
     */
    function combineLetter2($digits) {
        $map = ["", "", "abc", "def", "ghi", "jkl", "mno", "qprs", "tuv", "wxyz"];
        $res = [];
        if (strlen($digits) == 0) return $res;
        $this->backtrack2($digits, $map, [], 0, $res);
        return $res;
    }

    function backtrack2($digits, $map, $path, $start, &$res) {
        if (strlen($digits) == count($path)) {
            $res[] = implode("", $path);
            return;
        }

        for ($i = $start; $i < strlen($digits); $i++) {
            $chars = $map[substr($digits, $i, 1)];
            if (empty($chars)) continue;
            for ($j = 0; $j < strlen($chars); $j++) {
                $char = substr($chars, $j, 1);
                $path[] = $char;
                $this->backtrack2($digits, $map, $path, $i + 1, $res);
                array_pop($path);
            }
        }
    }

    /**
     * 电话键盘字母组合(array_shift模拟一个队列)
     * @param $digits
     * @return array
     */
    function combineLetter3($digits) {
        $map = ["", "", "abc", "def", "ghi", "jkl", "mno", "qprs", "tuv", "wxyz"];
        $res = [];
        $digitsCount = strlen($digits);
        if ($digitsCount == 0) return $res;
        $res = [''];
        for ($i = 0; $i < $digitsCount; $i++) {
            $cur_digit = $digits[$i];
            while (strlen($res[0]) == $i) {
                $head = array_shift($res);
                $chars = $map[$cur_digit];
                for  ($j = 0; $j < strlen($chars); $j++) {
                    $res[] = $head . $chars[$j];
                }
            }
        }
        return $res;
    }

    function combineLetter4($digits) {
        $map = ['', '', 'abc', 'def', 'ghi', 'jkl', 'mno', 'pqrs', 'tuv', 'wxyz'];
        $digitCount = strlen($digits);
        if ($digitCount == 0) return [];

        $digits = str_split($digits, 1);// 不要用回溯了，这就是个队列
        $queue = str_split($map[reset($digits)]);
        if ($digitCount == 1) return $queue;
        for ($i = 1; $i < $digitCount; ++$i) {
            $chars = str_split($map[$digits[$i]], 1);
            if (count($chars) == 0) continue;
            // 队列不为空，且队列内的元素长度小于当前遍历层数
            while (strlen(reset($queue)) < $i + 1) {
                $one = array_shift($queue);
                foreach ($chars as $char) {
                    $queue[] = $one . $char;
                }
            }
        }
        return $queue;
    }
}

echo json_encode((new Solution())->combineLetter("23")) . PHP_EOL;
echo json_encode((new Solution())->combineLetter2("23")) . PHP_EOL;
echo json_encode((new Solution())->combineLetter3("23")) . PHP_EOL;
echo json_encode((new Solution())->combineLetter4("23")) . PHP_EOL;