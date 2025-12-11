<?php
namespace Leetcode\Group0001_1000\Solution0035_search_insert_position;

/**
 * Problem: 35
 * Title: Search Insert Position
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert(array $nums, int $target): int
    {
        $result = array_search($target, $nums);
        if (false !== $result) {
            return $result;
        }
        $count = count($nums);
        if (end($nums) < $target) {
            return $count;
        }
        for ($i = 0; $i < $count; $i++) {
            if ($nums[$i] > $target) {
                return $i;
            }
        }
    }
}
