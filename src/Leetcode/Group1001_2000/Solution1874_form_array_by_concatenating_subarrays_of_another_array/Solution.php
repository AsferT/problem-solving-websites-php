<?php
namespace Leetcode\Group1001_2000\Solution1874_form_array_by_concatenating_subarrays_of_another_array;

/**
 * Problem: 1874
 * Title: Form Array by Concatenating Subarrays of Another Array
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    function minProductSum(array $nums1, array $nums2): int
    {
        sort($nums1);
        rsort($nums2);
        $count = count($nums1);
        $sum = 0;
        for ($i = 0; $i < $count; $i++) {
            $sum += $nums1[$i] * $nums2[$i];
        }
        return $sum;
    }
}
