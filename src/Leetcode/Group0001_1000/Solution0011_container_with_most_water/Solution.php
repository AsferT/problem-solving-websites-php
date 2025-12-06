<?php
namespace Leetcode\Group0001_1000\Solution0011_container_with_most_water;

/**
 * Problem: 11
 * Title: Container With Most Water
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea(array $height): int
    {
        $a = 0;
        $l = 0;
        $r = count($height) - 1;
        while ($l < $r) {
            if ($height[$l] < $height[$r]) {
                $a = max($a, $height[$l] * ($r - $l));
                $l++;
            } else {
                $a = max($a, $height[$r] * ($r - $l));
                $r--;
            }
        }
        return $a;
    }
}
