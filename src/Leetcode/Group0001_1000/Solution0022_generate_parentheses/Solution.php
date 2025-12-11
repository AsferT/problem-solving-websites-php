<?php
namespace Leetcode\Group0001_1000\Solution0022_generate_parentheses;

/**
 * Problem: 22
 * Title: Generate Parentheses
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis(int $n): array
    {
        $result = [];
        $this->testCall($n, $n, '', $result);
        return $result;
    }

    private function testCall(int $openBrackets, int $closedBrackets, string $current, array &$result): void
    {
        // End Recursion when both Open Brackets and Closed Brackets Inputed are 0
        if (0 === $openBrackets && 0 === $closedBrackets) {
            $result[] = $current;
            return;
        }

        // Lets do Open Brackets First
        if ($openBrackets > 0) {
            $this->testCall($openBrackets - 1, $closedBrackets, $current . '(', $result);
        }

        // Closed Brackets to close the opened brackets
        if ($closedBrackets > $openBrackets) {
            $this->testCall($openBrackets, $closedBrackets - 1, $current . ')', $result);
        }
    }
}
