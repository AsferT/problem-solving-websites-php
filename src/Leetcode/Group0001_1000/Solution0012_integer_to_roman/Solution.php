<?php
namespace Leetcode\Group0001_1000\Solution0012_integer_to_roman;

/**
 * Problem: 12
 * Title: Integer to Roman
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman(int $num): string
    {
        $map = [
            1000 => 'M',
            900  => 'CM',
            500  => 'D',
            400  => 'CD',
            100  => 'C',
            90   => 'XC',
            50   => 'L',
            40   => 'XL',
            10   => 'X',
            9    => 'IX',
            5    => 'V',
            4    => 'IV',
            1    => 'I',
        ];

        $result = '';

        foreach ($map as $value => $roman) {
            while ($num >= $value) {
                $result .= $roman;
                $num -= $value;
            }
        }

        return $result;
    }
}
