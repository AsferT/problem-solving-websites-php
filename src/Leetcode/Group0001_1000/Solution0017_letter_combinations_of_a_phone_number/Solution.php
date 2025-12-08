<?php
namespace Leetcode\Group0001_1000\Solution0017_letter_combinations_of_a_phone_number;

/**
 * Problem: 17
 * Title: Letter Combinations of a Phone Number
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations(string $digits): array
    {
        $map = [
            2 => ['a', 'b', 'c'],
            3 => ['d', 'e', 'f'],
            4 => ['g', 'h', 'i'],
            5 => ['j', 'k', 'l'],
            6 => ['m', 'n', 'o'],
            7 => ['p', 'q', 'r', 's'],
            8 => ['t', 'u', 'v'],
            9 => ['w', 'x', 'y', 'z'],
        ];
        if ($digits === '') {
            return [];
        }
        $count = strlen($digits);
        if ($count === 1) {
            return $map[$digits];
        }
        $result = $map[$digits[0]];
        for ($i = 1; $i < $count; $i++) {
            $inner = [];
            foreach ($map[$digits[$i]] as $char) {
                foreach ($result as $char2) {
                    $inner[] = $char2 . $char;
                }
            }
            $result = $inner;
        }
        return $result;
    }
}
