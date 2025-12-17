<?php
namespace Leetcode\Group0001_1000\Solution0070_climbing_stairs;

/**
 * Problem: 70
 * Title: Climbing Stairs
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        // Sounds like the Fibonacci problem
        if ($n <= 2) {
            return $n;
        }
        $prev1 = 1;
        $prev2 = 2;
        for ($i = 3; $i <= $n; $i++) {
            $current = $prev1 + $prev2;
            $prev1 = $prev2;
            $prev2 = $current;
        }
        return $prev2;
    }
}