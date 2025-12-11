<?php
namespace Leetcode\Group0001_1000\Solution0026_remove_duplicates_from_sorted_array;

/**
 * Problem: 26
 * Title: Remove Duplicates from Sorted Array
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(array &$nums): int
    {
        $hash = [];
        $count = 0;
        foreach ($nums as $num) {
            $hash[$num] = $count;
            $count++;
        }
        $nums = array_flip($hash);
        return count($nums);
    }
}
