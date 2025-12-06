<?php
namespace Leetcode\Group0001_1000\Solution0006_zigzag_conversion;

/**
 * Problem: 6
 * Title: Zigzag Conversion
 * Difficulty: medium
 */
class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert(string $s, int $numRows): string
    {
        $stringLen = strlen($s);

        if (1 === $numRows || $stringLen <= $numRows) {
            return $s;
        }

        $row = 0;
        $stringArr = [];
        $upDir = false;
        $numRowsIndex = $numRows - 1;

        for ($i = 0; $i < $stringLen; $i++) {
            // Store Letter Position
            $stringArr[$row] .= $s[$i];

            // Row and Col Control
            if (!$upDir && $row < $numRowsIndex) {
                $row++;
            } elseif ($upDir && $row > 0) {
                $row--;
            } elseif (!$upDir && $row === $numRowsIndex) {
                $upDir = true;
                $row--;
            } elseif ($upDir && $row === 0) {
                $upDir = false;
                $row++;
            }
        }

        return implode('', $stringArr);
    }
}
