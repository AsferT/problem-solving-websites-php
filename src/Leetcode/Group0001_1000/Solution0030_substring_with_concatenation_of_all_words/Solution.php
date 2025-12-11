<?php
namespace Leetcode\Group0001_1000\Solution0030_substring_with_concatenation_of_all_words;

/**
 * Problem: 30
 * Title: Substring with Concatenation of All Words
 * Difficulty: hard
 */
class Solution
{
    /**
     * @param String $s
     * @param String[] $words
     * @return Integer[]
     */
    function findSubstring(string $s, array $words): array
    {
        $count = count($words);
        $sLen = strlen($s);
        sort($words);
        $wordsLen = strLen($words[0]);
        $searchLen = $wordsLen * $count;
        $maxSearch = $sLen - $searchLen;
        $result = [];
        for ($i = 0; $i <= $maxSearch; $i++) {
            $sArr = str_split(substr($s, $i, $searchLen), $wordsLen);
            if (count($sArr) < 4999) {
                sort($sArr);
            }
            if ($count === count($sArr) && empty(array_diff_assoc($sArr, $words))) {
                $result[] = $i;
            }
        }
        return $result;
    }
}

