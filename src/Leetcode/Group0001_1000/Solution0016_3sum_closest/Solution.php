<?php
namespace Leetcode\Group0001_1000\Solution0016_3sum_closest;

/**
 * Problem: 16
 * Title: 3Sum Closest
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest(array $nums, int $target): int
    {
        sort($nums);
        $count = count($nums);
        if ($count < 3) {
            return array_sum($nums);
        }
        $closest = $nums[0] + $nums[1] + $nums[2];
        if ($target < $closest) {
            return $closest;
        }
        if ($target > ($nums[$count - 1] + $nums[$count - 2] + $nums[$count - 3])) {
            return $nums[$count - 1] + $nums[$count - 2] + $nums[$count - 3];
        }
        for ($i = 0; $i < $count; $i++) {
            $left = $i + 1;
            $right = $count - 1;
            while ($left < $right) {
                $total = $nums[$i] + $nums[$left] + $nums[$right];
                if (abs($target - $total) < abs($closest - $target)) {
                    $closest = $total;
                }
                if ($total > $target) {
                    $right--;
                } elseif ($total < $target) {
                    $left++;
                } else {
                    break;
                }
            }
        }
        return $closest;
    }
}
