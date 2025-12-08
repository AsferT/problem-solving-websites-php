<?php
namespace Leetcode\Group0001_1000\Solution0013_roman_to_integer;

/**
 * Problem: 13
 * Title: Roman to Integer
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt(string $s): int
    {
        $map = [
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1,
        ];
        $result = 0;
        foreach ($map as $roman => $value) {
            $romanLen = strlen($roman);
            while (str_starts_with($s, $roman)) {
                $result += $value;
                $s = substr($s, $romanLen);
            }
        }
        return $result;
    }
}
