<?php
namespace Leetcode\Group0001_1000\Solution0007_reverse_integer;

/**
 * Problem: 7
 * Title: Reverse Integer
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $y = ($x < 0) ? -(int)strrev((string)$x) : (int)strrev((string)$x);
        return ($y < -2147483648 || $y > 2147483647) ? 0 : $y;
    }
}
