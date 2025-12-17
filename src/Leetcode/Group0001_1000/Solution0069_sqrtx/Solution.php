<?php
namespace Leetcode\Group0001_1000\Solution0069_sqrtx;

/**
 * Problem: 69
 * Title: Sqrt(x)
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt(int $x): int
    {
        if ($x < 2) {
            return $x;
        }
        $result = intdiv($x, 2);
        // Without timing out, $r * $r > $x. Obscure way of doing it.
        while ($result > intdiv($x, $result)) {
            $result = intdiv($result + intdiv($x, $result), 2);
        }
        return $result;
    }
}
