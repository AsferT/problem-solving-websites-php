<?php
namespace Leetcode\Group0001_1000\Solution0009_palindrome_number;

/**
 * Problem: 9
 * Title: Palindrome Number
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        return ((string)$x === strrev((string)$x));
    }
}

