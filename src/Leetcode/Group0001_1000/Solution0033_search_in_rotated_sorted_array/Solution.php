<?php
namespace Leetcode\Group0001_1000\Solution0033_search_in_rotated_sorted_array;

/**
 * Problem: 33
 * Title: Search in Rotated Sorted Array
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search(array $nums, int $target): int
    {
        $result = array_search($target, $nums);
        return $result === false ? -1 : $result;
    }
}
