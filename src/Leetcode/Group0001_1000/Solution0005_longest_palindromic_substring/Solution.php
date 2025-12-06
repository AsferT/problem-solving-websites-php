<?php
namespace Leetcode\Group0001_1000\Solution0005_longest_palindromic_substring;

/**
 * Problem: 5
 * Title: Longest Palindromic Substring
 * Difficulty: medium
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome(string $s): string
    {
        $n = strlen($s);
        if ($n < 2) {
            return $s;
        }

        $bestStart = 0;
        $bestLen = 1;

        for ($i = 0; $i < $n; $i++) {
            if ($n - $i <= $bestLen / 2) {
                break;
            }

            // Odd length palindrome
            $left = $i;
            $right = $i;
            while ($left >= 0 && $right < $n && $s[$left] === $s[$right]) {
                $len = $right - $left + 1;
                if ($len > $bestLen) {
                    $bestLen = $len;
                    $bestStart = $left;
                }
                $left--;
                $right++;
            }

            // Even length palindrome
            $left = $i;
            $right = $i + 1;
            while ($left >= 0 && $right < $n && $s[$left] === $s[$right]) {
                $len = $right - $left + 1;
                if ($len > $bestLen) {
                    $bestLen = $len;
                    $bestStart = $left;
                }
                $left--;
                $right++;
            }
        }

        return substr($s, $bestStart, $bestLen);
    }
}

