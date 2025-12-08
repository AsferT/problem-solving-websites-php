<?php
namespace Leetcode\Group0001_1000\Solution0015_3sum;

/**
 * Problem: 15
 * Title: 3Sum
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum(array $nums): array
    {
        sort($nums);
        $count = count($nums);
        $result = [];
        for ($i = 0; $i < $count; $i++) {
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }
            $left = $i + 1;
            $right = $count - 1;
            while ($left < $right) {
                $total = $nums[$i] + $nums[$left] + $nums[$right];
                if ($total > 0) {
                    $right--;
                } elseif ($total < 0) {
                    $left++;
                } else {
                    $result[] = [$nums[$i], $nums[$left], $nums[$right]];
                    $left++;
                    while (isset($nums[$left], $nums[$left-1]) && $nums[$left] === $nums[$left - 1]) {
                        $left++;
                    }
                }
            }
        }

        return $result;
    }
}