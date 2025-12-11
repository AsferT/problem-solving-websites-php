<?php
namespace Leetcode\Group3001_4000\Solution3136_valid_word;

/**
 * Problem: 3136
 * Title: Valid Word
 * Difficulty: easy
 */
class Solution
{
    /**
     * @param String $word
     * @return Boolean
     */
    function isValid($word)
    {
        $vowels = 'aeiouAEIOU';
        $consonant = 'bcdfghjklmpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
        $result = true;
        if (strlen($word) <= 2) {
            $result = false;
        }
        if (!ctype_alnum($word)) {
            $result = false;
        }
        if (strpbrk($word, $vowels) === false) {
            $result = false;
        }
        if (strpbrk($word, $consonant) === false) {
            $result = false;
        }
        return $result;
    }
}
