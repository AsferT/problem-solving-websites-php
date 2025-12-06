<?php
namespace Leetcode\Group0001_1000\Solution0008_string_to_integer_atoi;

/**
 * Problem: 8
 * Title: String to Integer (atoi)
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi(string $s): int
    {
        $s = ltrim($s);
        $l = strlen($s);
        for ($i = 0; $i < $l; $i++) {
            if (($s[$i] >= 'A' && $s[$i] <= 'Z') || ($s[$i] >= 'a' && $s[$i] <= 'z')) {
                $s = substr($s, 0, $i);
                break;
            }
        }
        $s = (int)$s;
        if ($s >= 2147483647) {
            return 2147483647;
        }
        if ($s <= -2147483648) {
            return -2147483648;
        }
        return $s;
    }
}
