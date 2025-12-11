<?php
namespace Leetcode\Group0001_1000\Solution0027_remove_element;

/**
 * Problem: 27
 * Title: Remove Element
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(array &$nums, int $val): int
    {
        $nums = array_filter($nums, fn($n) => $n !== $val);
        return count($nums);
    }
}
