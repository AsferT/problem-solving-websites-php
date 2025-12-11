<?php
namespace Leetcode\Group0001_1000\Solution0028_find_the_index_of_the_first_occurrence_in_a_string;

/**
 * Problem: 28
 * Title: Find the Index of the First Occurrence in a String
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr(string $haystack, string $needle): int
    {
        return !str_contains($haystack, $needle) ? -1 : strpos($haystack, $needle);
    }
}
