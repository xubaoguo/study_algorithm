<?php

class Solution {
	public $arr1 = [];
    public $arr2 = [];
    /**
     * initialize your data structure here.
     */
    function __construct() {

    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->arr1[] = $x;
        if (empty($this->arr2)) {
            $this->arr2[] = $x;
        } elseif ($this->arr2[count($this->arr2) - 1] >= $x) {
            $this->arr2[] = $x;
        }
    }

    /**
     * @return NULL
     */
    function pop() {
        $x = array_pop($this->arr1);
        if ($x == $this->min()) {
            array_pop($this->arr2);
        }
    }

    /**
     * @return Integer
     */
    function top() {
        return $this->arr1[count($this->arr1) - 1];
    }

    /**
     * @return Integer
     */
    function min() {
        return $this->arr2[count($this->arr2) - 1];
    }
}