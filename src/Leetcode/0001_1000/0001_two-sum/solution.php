<?php
namespace Leetcode\Stubs;

/**
 * Problem: 1
 * Title: Two Sum
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        // Use a hash map to store numbers and their indices
        $numMap = [];
        foreach ($nums as $i => $num) {
            // Find the required number to reach the target
            $complement = $target - $num;
            if (isset($numMap[$complement])) {
                // Return indices of the complement and current number
                return [$numMap[$complement], $i];
            }
            // Store the number with its index
            $numMap[$num] = $i;
        }
        return [];
    }
}
