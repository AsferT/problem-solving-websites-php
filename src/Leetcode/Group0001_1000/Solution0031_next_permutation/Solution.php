<?php
namespace Leetcode\Group0001_1000\Solution0031_next_permutation;

/**
 * Problem: 31
 * Title: Next Permutation
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function nextPermutation(array &$nums): void
    {
        $count = count($nums);
        if ($count < 2) {
            return;
        }
        $i = $count - 2;
        while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) {
            $i--;
        }
        if ($i >= 0) {
            $j = $count - 1;
            while ($nums[$j] <= $nums[$i]) {
                $j--;
            }
            [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];
        }
        $left = $i + 1;
        $right = $count - 1;
        while ($left < $right) {
            [$nums[$left], $nums[$right]] = [$nums[$right], $nums[$left]];
            $left++;
            $right--;
        }
    }
}
