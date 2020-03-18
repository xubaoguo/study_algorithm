<?php

function groupAnagrams($strs) {
	$arr = [];
	foreach ($strs as $str) {
		$word_lst = str_split($str);
		sort($word_lst);
		$tmp_key = implode("", $word_lst);
		$arr[$tmp_key][] = $str;
	}
	return array_values($arr);
}