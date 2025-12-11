<?php
namespace Leetcode\Group0001_1000\Solution0032_longest_valid_parentheses;

/**
 * Problem: 32
 * Title: Longest Valid Parentheses
 * Difficulty: hard
 */
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses(string $s): int
    {
        $maxResult = 0;
        $stack = [-1];
        $count = strlen($s);
        if ($count < 2) {
            return $maxResult;
        }
        for ($i = 0; $i < $count; $i++) {
            if ($s[$i] === '(') {
                $stack[] = $i;
            } else {
                array_pop($stack);
                if ($stack) {
                    $maxResult = max($maxResult, ($i - end($stack)));
                } else {
                    $stack[] = $i;
                }
            }
        }
        return $maxResult;
    }
}
