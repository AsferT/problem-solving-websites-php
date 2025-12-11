<?php
namespace Leetcode\Group0001_1000\Solution0003_longest_substring_without_repeating_characters;

/**
 * Problem: 3
 * Title: Longest Substring Without Repeating Characters
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring(string $s): int
    {
        $sLen = strlen($s);
        $start = 0;
        $length = 0;
        for ($i = 0; $i < $sLen; $i++) {
            $char = $s[$i];
            if (isset($arr[$char]) && $arr[$char] >= $start) {
                $start = $arr[$char] + 1;
            } elseif($i - $start === $length) {
                $length++;
            }
            $arr[$char] = $i;
        }
        return $length;
    }
}
