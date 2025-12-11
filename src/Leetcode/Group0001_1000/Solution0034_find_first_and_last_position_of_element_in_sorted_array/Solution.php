<?php
namespace Leetcode\Group0001_1000\Solution0034_find_first_and_last_position_of_element_in_sorted_array;

/**
 * Problem: 34
 * Title: Find First and Last Position of Element in Sorted Array
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target)
    {
        $first = array_search($target, $nums);
        if ($first === false) {
            return [-1,-1];
        }
        $numsRev = array_reverse($nums);
        $count = count($nums);
        $last = $count - array_search($target, $numsRev) - 1;
        return [$first, $last];
    }
}
