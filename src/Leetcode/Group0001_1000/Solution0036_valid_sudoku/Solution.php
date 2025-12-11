<?php
namespace Leetcode\Group0001_1000\Solution0036_valid_sudoku;

/**
 * Problem: 36
 * Title: Valid Sudoku
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku(array $board): bool
    {
        $result = true;
        // Row and Column Checks
        for ($i = 0; $i < 9; $i++) {
            $row = [];
            $column = [];
            for ($j = 0; $j < 9; $j++) {
                if ($board[$i][$j] !== '.') {
                    $row[] = $board[$i][$j];
                }
                if ($board[$j][$i] !== '.') {
                    $column[] = $board[$j][$i];
                }
            }
            $rowCount = count($row);
            $columnCount = count($column);
            $rowUniqueCount = count(array_unique($row));
            $columnUniqueCount = count(array_unique($column));
            if ($rowUniqueCount !== $rowCount || $columnUniqueCount !== $columnCount) {
                $result = false;
            }
        }
        // Grids Check
        $grids = [
            1 => ['iMin' => 0, 'iMax' => 2, 'jMin' => 0, 'jMax' => 2],
            2 => ['iMin' => 3, 'iMax' => 5, 'jMin' => 0, 'jMax' => 2],
            3 => ['iMin' => 6, 'iMax' => 8, 'jMin' => 0, 'jMax' => 2],
            4 => ['iMin' => 0, 'iMax' => 2, 'jMin' => 3, 'jMax' => 5],
            5 => ['iMin' => 3, 'iMax' => 5, 'jMin' => 3, 'jMax' => 5],
            6 => ['iMin' => 6, 'iMax' => 8, 'jMin' => 3, 'jMax' => 5],
            7 => ['iMin' => 0, 'iMax' => 2, 'jMin' => 6, 'jMax' => 8],
            8 => ['iMin' => 3, 'iMax' => 5, 'jMin' => 6, 'jMax' => 8],
            9 => ['iMin' => 6, 'iMax' => 8, 'jMin' => 6, 'jMax' => 8],
        ];
        if ($result) {
            $grid = [];
            foreach($grids as $gridNumber => $gridDetails) {
                for($i = $gridDetails['iMin']; $i <= $gridDetails['iMax']; $i++) {
                    for($j = $gridDetails['jMin']; $j <= $gridDetails['jMax']; $j++) {
                        if ($board[$i][$j] !== '.') {
                            $grid[$gridNumber][] = $board[$i][$j];
                        }
                    }
                }
                $gridCount = count($grid[$gridNumber] ?? []);
                $gridUniqueCount = count(array_unique($grid[$gridNumber] ?? []));
                if ($gridUniqueCount !== $gridCount) {
                    $result = false;
                }
            }
        }
        return $result;
    }
}

