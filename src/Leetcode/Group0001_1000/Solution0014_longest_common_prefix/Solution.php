<?php
namespace Leetcode\Group0001_1000\Solution0014_longest_common_prefix;

/**
 * Problem: 14
 * Title: Longest Common Prefix
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix(array $strs): string
    {
        $initialString = $strs[0];
        $initialStringLen = strlen($initialString);
        $result = '';
        for ($i = 0; $i < $initialStringLen; $i++) {
            $stringCheck = $result . $initialString[$i];
            $check = true;
            foreach ($strs as $word) {
                if (!str_starts_with($word, $stringCheck)) {
                    $check = false;
                }
            }
            if (!$check) {
                return $result;
            }
            $result = $stringCheck;
        }
        return $result;
    }
}
