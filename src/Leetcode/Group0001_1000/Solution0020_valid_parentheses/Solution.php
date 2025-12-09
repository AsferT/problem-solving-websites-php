<?php
namespace Leetcode\Group0001_1000\Solution0020_valid_parentheses;

/**
 * Problem: 20
 * Title: Valid Parentheses
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s): bool
    {
        $count = strlen($s);
        if ($count % 2 !== 0) {
            return false;
        }
        $stack = [];
        $pairs = ['(' => ')', '[' => ']', '{' => '}'];
        for ($i = 0; $i < $count; $i++) {
            if (array_key_exists($s[$i], $pairs)) {
                $stack[] = $pairs[$s[$i]];
            } elseif (array_pop($stack) !== $s[$i]) {
                return false;
            }
        }
        return empty($stack);
    }
}
