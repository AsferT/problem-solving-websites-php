<?php
namespace Leetcode\Group0001_1000\Solution0058_length_of_last_word;

/**
 * Problem: 58
 * Title: Length of Last Word
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord(string $s): int
    {
        $words = str_word_count($s, 1);
        $lastWordIndex = count($words) - 1;
        return strlen($words[$lastWordIndex]);
    }
}
