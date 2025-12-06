<?php
namespace Leetcode\Group0001_1000\Solution0004_median_of_two_sorted_arrays;

/**
 * Problem: 4
 * Title: Median of Two Sorted Arrays
 * Difficulty: hard
 */
class Solution
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $numsTotal = array_merge($nums1, $nums2);
        sort($numsTotal);
        $count = count($numsTotal);

        if ($count % 2 == 0) {
            $index = ($count/2);
            $median = ($numsTotal[$index] + $numsTotal[$index-1])/2;
        } else {
            $index = (($count+1)/2)-1;
            $median = $numsTotal[$index];
        }
        return $median;
    }
}
