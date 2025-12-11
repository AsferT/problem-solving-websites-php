<?php
namespace Leetcode\Group0001_1000\Solution0029_divide_two_integers;

/**
 * Problem: 29
 * Title: Divide Two Integers
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide(int $dividend, int $divisor): int
    {
        $result = intval($dividend/$divisor);
        $max = pow(2,31);
        return ($result >= $max) ? $max - 1 : $result;
    }
}
