<?php
namespace Leetcode\Group0001_1000\Solution0010_regular_expression_matching;

/**
 * Problem: 10
 * Title: Regular Expression Matching
 * Difficulty: hard
 */
class Solution
{
    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch(string $s, string $p): bool
    {
        return preg_match("/^{$p}$/", $s);
    }
}
